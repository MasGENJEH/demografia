"use strict";
var path = location.pathname;
var url = location.origin + path;

$("ul.sidebar-menu li a.nav-link").each(function () {
  if ($(this).attr("href") === url) {
    $(this)
      .parent()
      .addClass("active")
      .parent()
      .parent("li")
      .addClass("active");
  }
});
