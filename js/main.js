(function ($) {
  Drupal.behaviors.SiteHeaderSearchToggle = {
    attach: function (context, settings) {
      if($("body").hasClass( "not-front" )) {
        $('.site-search').hide();
      }
        $('.search-toggle a').click(function(event){
      	event.preventDefault();
      	$('.site-search').slideToggle(320);
      });
    }
  };
})(jQuery);
