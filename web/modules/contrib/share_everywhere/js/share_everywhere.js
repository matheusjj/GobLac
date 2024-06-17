(function ($, Drupal, once) {

  'use strict';

  Drupal.behaviors.shareEverywhere = {
    attach: function (context, settings) {
      $(once('se-activate', '.se-trigger img', context))
        .click(function (e) {
        var links = $(this).parent().parent().find('.se-links');
        $(links).toggleClass('se-active');
        $(links).toggleClass('se-inactive');
        e.stopPropagation();
      });
      $(once('se-deactivate', '.se-trigger img', context))
        .click(function () {
        $('.se-links.se-active').addClass('se-inactive');
        $('.se-links.se-active').removeClass('se-active');
      });
      $(once('se-link-copy', '.se-link.copy', context))
        .click(function () {
        var url = window.location.href;

        if (window.clipboardData && window.clipboardData.setData) {
          // IE specific to prevent textarea being shown while dialog is visible.
          return clipboardData.setData("Text", url);
        }
        else if (document.queryCommandSupported && document.queryCommandSupported('copy')) {
          var textarea = document.createElement('textarea');
          textarea.textContent = url;
          textarea.style.position = 'fixed';

          document.body.appendChild(textarea);

          textarea.focus();
          textarea.select();
          try {
            return document.execCommand('copy');
          }
          catch (ex) {
            return false;
          }
          finally {
            document.body.removeChild(textarea);
          }
        }
      });
    }
  };

})(jQuery, Drupal, once);
