/**
 * External dependencies
 */
import { AiStatusIndicator, useAiSuggestions } from '@automattic/jetpack-ai-client';
import { useAnalytics } from '@automattic/jetpack-shared-extension-utils';
import { serialize } from '@wordpress/blocks';
import { Modal, Button } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { useState } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { close } from '@wordpress/icons';
import TurndownService from 'turndown';
/**
 * Internal dependencies
 */
import {
	delimiter,
	getDelimitedContent,
	getInitialSystemPrompt,
} from '../../../../blocks/ai-assistant/lib/prompt';
import './style.scss';

// Turndown instance
const turndownService = new TurndownService();

const usePostContent = () => {
	const blocks = useSelect( select => select( 'core/block-editor' ).getBlocks(), [] );
	return blocks?.length ? turndownService.turndown( serialize( blocks ) ) : '';
};

const ModalHeader = ( { requestingState, onClose } ) => {
	return (
		<div className="ai-assistant-post-feedback__modal-header">
			<div className="ai-assistant-post-feedback__modal-title-wrapper">
				<AiStatusIndicator state={ requestingState } />
				<h1 className="ai-assistant-post-feedback__modal-title">
					{ __( 'AI Assistant', 'jetpack' ) }
				</h1>
			</div>
			<Button icon={ close } label={ __( 'Close', 'jetpack' ) } onClick={ onClose } />
		</div>
	);
};

export default function Proofread( {
	disabled = false,
	busy = false,
}: {
	disabled?: boolean;
	busy?: boolean;
} ) {
	const [ isProofreadModalVisible, setIsProofreadModalVisible ] = useState( false );
	const [ suggestion, setSuggestion ] = useState( null );
	const { tracks } = useAnalytics();

	const postId = useSelect( select => select( 'core/editor' ).getCurrentPostId(), [] );
	const postContent = usePostContent();

	const toggleProofreadModal = () => {
		setIsProofreadModalVisible( ! isProofreadModalVisible );
	};

	const handleSuggestion = ( content: string ) => {
		const text = content.split( '\n' ).map( ( line, idx ) => {
			return line?.length ? <p key={ `line-${ idx }` }>{ line }</p> : null;
		} );

		setSuggestion( text );
	};

	const handleSuggestionError = () => {
		/// TODO: Handle Error
	};

	const handleDone = () => {
		// TODO: Handle Done
	};

	const { request, requestingState } = useAiSuggestions( {
		askQuestionOptions: {
			postId,
		},
		onSuggestion: handleSuggestion,
		onDone: handleDone,
		onError: handleSuggestionError,
	} );

	const handleRequest = () => {
		const messages = [
			getInitialSystemPrompt( {
				context:
					'You are an advanced polyglot ghostwriter. Your task is to review blog content and provide reasonable actions and feedback about the content, without suggesting to rewrite it. This functionality is integrated into the Jetpack product developed by Automattic. Users interact with you through a Gutenberg sidebar. You are inside the WordPress editor',
				rules: [
					'Format your response in plain text only including line breaks',
					'Focus on feedback and do not summarize the content',
					"Be concise and direct, don't repeat the content and avoid repeating the request. Ex. 'The content delimited ...'",
					'Do not ask to assist with anything else',
					'Answer in the same language as the content',
				],
				useGutenbergSyntax: false,
				useMarkdown: false,
			} ),
		];
		messages.push( {
			role: 'user',
			content: `Provide a short feedback about the post content delimited with ${ delimiter }. If it could be improved, provide a list of actions on how to do it. ${ getDelimitedContent(
				postContent
			) }`,
		} );

		request( messages );
		toggleProofreadModal();
		tracks.recordEvent( 'jetpack_ai_get_feedback', {
			post_id: postId,
		} );
	};

	return (
		<div>
			{ isProofreadModalVisible && (
				<Modal __experimentalHideHeader>
					<div className="ai-assistant-post-feedback__modal-content">
						<ModalHeader requestingState={ requestingState } onClose={ toggleProofreadModal } />
						<hr className="ai-assistant-post-feedback__modal-divider" />
						<div className="ai-assistant-post-feedback__suggestion">{ suggestion }</div>
					</div>
				</Modal>
			) }
			<p>
				{ __(
					'Check for mistakes and verify the tone of your post before publishing.',
					'jetpack'
				) }
			</p>
			<Button
				onClick={ handleRequest }
				variant="secondary"
				disabled={ ! postContent || disabled }
				isBusy={ busy }
			>
				{ __( 'Generate feedback', 'jetpack' ) }
			</Button>
		</div>
	);
}
