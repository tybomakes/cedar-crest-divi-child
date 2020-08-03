(function($) {
  const $activators = $('.size-activator');
  const $facts = $('.performance-facts');
  const $images = $('.main-images');

  const handleSizeChange = function() {
    // remove active class from activators
    $activators.each(function() { 
      $(this).removeClass('active');
    });
    // activate the one clicked
    const $a = $(this);
    $a.addClass('active');
    const target = $a.attr('href').slice(1);
    // show the target facts
    $facts.each(function() {
      $(this).attr('data-size') === target
        ? $(this).removeClass('hide')
        : $(this).addClass('hide');
      });
     // show the size images
     $images.each(function() {
      $(this).attr('data-size') === target
        ? $(this).removeClass('hide')
        : $(this).addClass('hide');
    });
  };

  $activators.on('click', handleSizeChange);

})(jQuery);