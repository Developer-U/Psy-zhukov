jQuery(document).ready(function($) {
    jQuery('.content, .sidebar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 30,
      minWidth: 992,
    });

    // jQuery('.sidebar').each(function() {
    //   console.log($(this));
    //   $(this).theiaStickySidebar({
    //       'additionalMarginTop': 200,   
    //       'top': 200,      
    //   });
  // });
});