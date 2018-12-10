(function ($) {
  Drupal.behaviors.SiteHeaderSearchToggle = {
    attach: function (context, settings) {
      $('.search-toggle a').click(function(event){
      	event.preventDefault();
      	$('.site-search').slideToggle(320);
      });
    }
  };
})(jQuery);
