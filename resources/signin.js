import * as $ from "jquery";
import "bootstrap/dist/js/bootstrap.bundle";
import "jquery-validation";

window.jQuery = $;
window.$ = $;

$(function () {
  $("#login-form").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      email: {
        required: "Email Tidak Boleh Kosong",
        email: "Email tidak valid",
      },
      password: {
        required: "Password Tidak Boleh Kosong",
        minlength: "Password Harus berjumlah 5 karakter",
      },
    },
    highlight: function (el) {
      $(el)
        .closest(".login-group")
        .removeClass("has-success")
        .addClass("has-error");
    },
    unhighlight: function (el) {
      $(el)
        .closest(".login-group")
        .removeClass("has-error")
        .addClass("has-success");
    },
  });
});
