jQuery.extend(wpp=wpp||{},{overview:{ready:function(){jQuery(".wpp_filter_section_title").click(function(){var parent=jQuery(this).parents(".wpp_overview_filters");jQuery(".wpp_checkbox_filter",parent).slideToggle("fast",function(){jQuery(".wpp_filter_show",parent).html("none"==jQuery(this).css("display")?wpp.strings.show:wpp.strings.hide)})}),jQuery("input.check-all","#wp-list-table").click(function(e){e.target.checked?jQuery("#the-list td.cb input:checkbox").attr("checked","checked"):jQuery("#the-list td.cb input:checkbox").removeAttr("checked")})},toggle_featured:function(){var post_id=jQuery(this).attr("id").replace("wpp_feature_","");jQuery.post(wpp.instance.ajax_url,{post_id:post_id,action:"wpp_make_featured",_wpnonce:jQuery(this).attr("nonce")},function(data){var button=jQuery("#wpp_feature_"+data.post_id);"featured"==data.status&&(jQuery(button).val(wpp.strings.featured),jQuery(button).addClass("wpp_is_featured")),"not_featured"==data.status&&(jQuery(button).val(wpp.strings.add_to_featured),jQuery(button).removeClass("wpp_is_featured"))},"json")},initialize:function(){jQuery.fn.fancybox&&"function"==typeof jQuery.fn.fancybox&&jQuery(".fancybox").fancybox({transitionIn:"elastic",transitionOut:"elastic",speedIn:600,speedOut:200,overlayShow:!1}),jQuery.fn.live&&"function"==typeof jQuery.fn.live&&jQuery(".wpp_featured_toggle").live("click",wpp.overview.toggle_featured)}}}),jQuery(document).ready(wpp.overview.ready);