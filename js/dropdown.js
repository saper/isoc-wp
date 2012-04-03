jQuery(document).ready(function(){
      jQuery('#block-system-main-menu li').hover(function(){ jQuery(this).addClass('hover') }, function(){jQuery(this).removeClass('hover')});
      jQuery('#block-system-main-menu a').focus(function(){ jQuery(this).parents('li').addClass('hover'); });
      jQuery('#block-system-main-menu a').blur(function(){ jQuery(this).parents('li').removeClass('hover'); });
});

