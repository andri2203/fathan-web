import * as jQuery from "jquery";
import "bootstrap/dist/js/bootstrap.bundle";
import "bootstrap-datepicker";
import "jquery.easing";
import "timepicker/jquery.timepicker.js"

jQuery(function () {
  jQuery(window).on("scroll load", function () {
    if (screen.width > 1024) {
      if (jQuery(".navbar").offset().top > 50) {
        jQuery(".fixed-top").addClass("top-nav-collapse");
      } else {
        jQuery(".fixed-top").removeClass("top-nav-collapse");
      }
    }
  });
  jQuery(document).ready(function () {
    jQuery("#tanggal_acara").datepicker();
  });

  jQuery(document).on("click", "a.page-scroll", function (event) {
    var anchor = jQuery(this);
    jQuery("html, body")
      .stop()
      .animate(
        {
          scrollTop: jQuery(anchor.attr("href")).offset().top,
        },
        600,
        "easeInOutExpo"
      );
    event.preventDefault();
  });

  jQuery('#date').datepicker({
    format: 'yyyy-mm-dd',
  })

  jQuery('#start, #end').timepicker()
});