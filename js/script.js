/**
 * @file
 * Custom script: Toggle the sidebar.
 */

(function($) {

Backdrop.behaviors.shasetsuSidebarToggle = {
  attach: function(context, settings) {

    $('#skip-link').click(function() {
      $('.layout').toggleClass('sidebar-active');
    });

  }
};

})(jQuery);
