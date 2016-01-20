if(typeof Drupal != 'undefined') {
  (function($) {
    Drupal.behaviors.vleermuiskasten = {
      attach: function(context, settings) {
        $(document).on('submit', '#search', function() {
          window.location.href = "http://vleermuizen.beta.swigledev.nl/search/node/" + $('#search input[name="search"]').val();
          return false;
        });
      }
    };
  })(jQuery);
};

if(typeof $ != 'undefined') {
  $(document).on('submit', '#search', function() {
    window.location.href = "http://vleermuizen.beta.swigledev.nl/search/node/" + $('#search input[name="search"]').val();
    return false;
  });
}
