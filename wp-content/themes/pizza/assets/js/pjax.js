var TRANSITION_DURATION = 600;
var pjax = new Pjax({
    selectors: [    
      "title",
      "meta-description",      
      ".main-header",
      "#pjax-container",          
    ]
  })

  $(document).on('pjax:send', function() {
    $('.ct-preloader').removeClass('hidden');
  })
  $(document).on('pjax:success', function() {
    $('.ct-preloader').addClass('hidden');        
  });   