import * as $ from "jquery";
import "bootstrap/dist/js/bootstrap.bundle";
import "jquery-validation";

window.jQuery = $;
window.$ = $;

$(function () {
  $("#login-form").validate({
    rules: {
      nama: {
        required: true,
      },
      email: {
        required: true,
        email: true,
        remote: '/auth/emailchecker'
      },
      phone: {
        required: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
      confirm: {
        required: true,
        equalTo: "#password",
      },
    },
    messages: {
      nama: {
        required: "Nama Lengkap Tidak Boleh Kosong",
      },
      email: {
        required: "Email Tidak Boleh Kosong",
        email: "Email tidak valid",
        remote: 'Email Telah Digunakan'
      },
      phone: {
        required: "Nomor Telpon Tidak Boleh Kosong",
      },
      password: {
        required: "Password Tidak Boleh Kosong",
        minlength: "Password Harus berjumlah 5 karakter",
      },
      confirm: {
        required: "Konfirmasi Password Tidak Boleh Kosong",
        equalTo: "Mohon isi password yang sama",
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
