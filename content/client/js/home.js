$(document).ready(function () {
  $("#tab__menu-bestseller").click(function () {
    var sp_bestseller = "tab_menu_sp_bestseller=";
    $.post(
      "xu-ly/home/home.php",
      { tab_menu_sp_bestseller: sp_bestseller },
      function (data) {
        $(".owl-tab_menu_product").html(data);
      }
    );
  });
  $("#tab__menu-newadd").click(function () {
    var sp_new_add = "tab_menu_sp_new_add";
    $.post(
      "xu-ly/home/home.php",
      { tab_menu_sp_new_add: sp_new_add },
      function (data) {
        $(".owl-tab_menu_product").html(data);
      }
    );
  });
});

