jQuery(document).ready(function(){jQuery("#ced_rvmv_wmvp_total_items_display").on("change",function(){var e=jQuery(this).val();(0>=e||e>10)&&jQuery("#wmvp_error_div").show().fadeOut(5e3)}),jQuery("#ced_rvmv_wrvp_total_items_display").on("change",function(){var e=jQuery(this).val();(0>=e||e>10)&&jQuery("#wrvp_error_div").show().fadeOut(5e3)}),jQuery(".input-checkbox ").on("click",function(){var e=jQuery(this).attr("name"),r=object_custom_name.wc_return_ajaxurl,a=jQuery(this).parent().data("num"),t=jQuery(this).prop("checked");jQuery("body").addClass("loading-request"),jQuery(".loading-request").append('<div class="loading-gif"><img src="'+object_custom_name.loading_url+'assets/js/loadingAnimation.gif"></div>'),jQuery.ajax({url:r,type:"POST",data:{action:"set_rvmv_manually",checkbox_name:e,rvmv_pro_id:a,checkbox_value:t},success:function(e){jQuery("body").removeClass("loading-request"),jQuery(".loading-gif").remove()}})})});