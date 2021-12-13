$(document).ready(function () {
  //   adđ cart

  var mau_sac_chinh = $('[name*="mau_sac_chinh"]:checked').val();
  var hinh_anh_chinh = $('[name*="hinh-anh-chinh"]:checked').val();
  if (hinh_anh_chinh == undefined) {
    hinh_anh_chinh = $('[name*="hinh-anh-chinh"]').val();
  }
  $(".box-items-mau").click(function () {
    mau_sac_chinh = $(this).children("input").val();
  });
  $(".box-items-mau").click(function () {
    hinh_anh_chinh = $(this)
      .children(".product-detail-select-mau-img")
      .children("input")
      .val();
  });
  var dung_luong_chinh = $('[name*="dung-luong_chinh"]:checked').val();
  $(".box-check-dung-luong").click(function () {
    dung_luong_chinh = $(this).children(".check").children("input").val();
  });
  //mua ngay
  $('[name*="mua-ngay"]').click(function () {
    $("#add-cart").submit(function (e) {
      e.preventDefault();
      var id_sp_chinh = $('[name*="id_sp_chinh"]').val();
      var ten_sp_chinh = $('[name*="ten_sp_chinh"]').val();
      var gia_sp_chinh = $('[name*="gia_sp_chinh"]').val();
      gia_sp_chinh = new Number(gia_sp_chinh);
      var url_session = $('[name*="url_session"]').val();
      $.ajax({
        url: "../client/xu-ly/cart/cart.php",
        type: "POST",
        data: {
          url_session: url_session,
          id_sp_chinh: id_sp_chinh,
          ten_sp_chinh: ten_sp_chinh,
          gia_sp_chinh: gia_sp_chinh,
          dung_luong_chinh: dung_luong_chinh,
          mau_sac_chinh: mau_sac_chinh,
          hinh_anh_chinh: hinh_anh_chinh,
        },
        success: function (data) {
          if (data == 0) {
            window.location.href = "tai-khoan/login";
          } else {
            window.location.href = "cart";
          }
        },
      });
    });
  });

  //add cart  mua deal sốc
  // kiểm tra có thêm sp vào deal sốc ko
  $(".product-detail-mua-kem-deal-main-items-add-cart").click(function () {
    if (!$(this).hasClass("active")) {
      $(".product-detail-mua-kem-deal-main-items-add-cart").removeClass(
        "active"
      );
      $(".product-detail-mua-kem-deal-main-items-add-cart")
        .children(".add-deal")
        .children("span")
        .text("Thêm vào");
      $(this).addClass("active");
      $(this).children(".add-deal").children("span").text("Đã thêm");
    }
  });
  $(".add-deal").click(function () {
    $('[name*="mua-deal"]').removeAttr("disabled");
    $('[name*="mua-deal"]').removeAttr("title");
    var gia_sp_mua_kem = $(this)
      .parent()
      .parent()
      .parent()
      .children(".col-7")
      .children()
      .children(".product-detail-mua-kem-deal-main-items-content-price")
      .children(".product-detail-mua-kem-deal-main-items-content-price-new")
      .children("input")
      .val();
    var gia_sp_mua_kem_old = $(this)
      .parent()
      .parent()
      .parent()
      .children(".col-7")
      .children()
      .children(".product-detail-mua-kem-deal-main-items-content-price")
      .children(".product-detail-mua-kem-deal-main-items-content-price-old")
      .children("input")
      .val();
    var gia_sp_chinh = $('[name*="gia_sp_chinh"]').val();
    gia_sp_chinh = new Number(gia_sp_chinh);
    gia_sp_mua_kem_old = new Number(gia_sp_mua_kem_old);
    gia_sp_mua_kem = new Number(gia_sp_mua_kem);
    var tiet_kiem_duoc = gia_sp_mua_kem_old - gia_sp_mua_kem;
    tiet_kiem_duoc = tiet_kiem_duoc.toLocaleString("vi", {
      style: "currency",
      currency: "VND",
    });
    var gia_chua_giam_deal = gia_sp_chinh + gia_sp_mua_kem_old;
    gia_chua_giam_deal = gia_chua_giam_deal.toLocaleString("vi", {
      style: "currency",
      currency: "VND",
    });
    var tong_cong_deal = gia_sp_chinh + gia_sp_mua_kem;
    $('[name*="tong_cong_deal"]').val(tong_cong_deal); //gán vào input hidden tổng tiền cart
    // gán lại tổng deal VND
    tong_cong_deal = tong_cong_deal.toLocaleString("vi", {
      style: "currency",
      currency: "VND",
    });
    $(".tong_cong_deal_vnd").text(tong_cong_deal);

    $(".gia_chua_giam_deal").text(gia_chua_giam_deal);
    $(".tiet_kiem_duoc").text(tiet_kiem_duoc);
    $('[name*="mua-deal"]').click(function (e) {
      $("#add-cart").submit(function (e) {
        e.preventDefault();
        var url_session = $('[name*="url_session"]').val();
        var ten_sp_chinh = $('[name*="ten_sp_chinh"]').val();
        var id_sp_chinh = $('[name*="id_sp_chinh"]').val();
        var id_sp_mua_kem = $('[name*="id_sp_deal"]').val();
        var gia_sp_chinh = $('[name*="gia_sp_chinh"]').val();
        var ten_sp_deal = $('[name*="ten_sp_deal"]').val();
        var hinh_anh_sp_deal = $('[name*="hinh_anh_sp_deal"]').val();
        var tong_cong_deal = $('[name*="tong_cong_deal"]').val();
        $.ajax({
          url: "../client/xu-ly/cart/cart.php",
          type: "POST",
          data: {
            url_session: url_session,
            id_sp_chinh: id_sp_chinh,
            ten_sp_chinh: ten_sp_chinh,
            gia_sp_chinh: gia_sp_chinh,
            dung_luong_chinh: dung_luong_chinh,
            mau_sac_chinh: mau_sac_chinh,
            ten_sp_deal: ten_sp_deal,
            id_sp_deal: id_sp_mua_kem,
            gia_sp_deal: gia_sp_mua_kem,
            hinh_anh_chinh: hinh_anh_chinh,
            hinh_anh_deal: hinh_anh_sp_deal,
            tong_cong_deal: tong_cong_deal,
          },
          success: function (data) {
            if (data == 0) {
              window.location.href = "tai-khoan/login";
            } else {
              window.location.href = "cart";
            }
          },
        });
      });
    });
  });
  //hàm load số lượng trong giỏ hàng index icon
  function load_count_cart_index() {
    $.post(
      "../client/xu-ly/cart/load_count_cart_index.php",
      { load_count_cart_index: "load_count_cart_index" },
      function (data) {
        $(".load_count_cart_index").html(data);
      }
    );
  }
  load_count_cart_index();
  //hàm load thông báo cart rỗng
  function cart_rong() {
    // lấy ảnh giỏ rỗng
    var home = "/duan1/client";
    var img = "/duan1/content/client/img/mascot@2x.png";
    // vì không lấy được biến bên php
    var htmls = `
    <div class="cart">
    <div class="row">
        <div class="col-12 pl-0">
            <div class="cart__inner">
                <h4 class="cart__inner-productTitle my-3 ">Giỏ hàng</h4>
            </div>
            <div class="cart__inner-product-items text-center">
                <img style="width:180px" src="${img}" alt="">
                <div class="py-3">Không có sản phẩm nào trong giỏ hàng của bạn</div>
                <a href="${home}" class="btn primary btn-cart-zero my-4">Tiếp tục mua sắm</a>
            </div>
        </div>
       </div>
     </div>
    `;
    $(".main .cartcart").html(htmls);
  }
  // //hàm load all cart
  function load_all_cart() {
    $.post(
      "../client/xu-ly/cart/load-cart.php",
      {
        load_all_cart: "load_all_cart",
      },
      function (data) {
        var list_cart = JSON.parse(data);
        var str = "";
        var length_obj = list_cart.length;
        // nếu Obj là  > 0

        if (length_obj > 0) {
          $.each(list_cart, function (i, item) {
            var gia_sp = item.gia_sp;
            gia_sp = new Number(gia_sp);
            gia_sp = gia_sp.toLocaleString("vi", {
              style: "currency",
              currency: "VND",
            });
            var dung_luong = item.dung_luong;
            if (dung_luong != "") {
              dung_luong = dung_luong + "GB";
            } else {
              dung_luong = "";
            }
            var thanh_tien = item.thanh_tien;
            thanh_tien = new Number(thanh_tien);
            thanh_tien = thanh_tien.toLocaleString("vi", {
              style: "currency",
              currency: "VND",
            });
            str += `
           <div class="cart__inner-product-items">
           <div class="row align-items-center">
               <div class="col-5">
                   <div class="cart__inner-product-items-imgName d-flex align-items-center">
                       <div class="cart__inner-product-items-img">
                           <img src="${item.hinh_anh}" alt="">
                       </div>
                       <div class="cart__inner-product-items-name ">
                        <a target="_blank" class="text-overflow" href="${item.url}">${item.ten_sp}</a>
                          <div class="cart__inner-product-items-lien_quan text-primary" style="font-size:1.3rem;">${dung_luong} ${item.mau_sac}</div>
                       </div>
                   </div>
               </div>
               <div class="col-2">
                   <div class="cart__inner-product-items-price">${gia_sp}</div>
               </div>
               <div class="col-2">
               <div class="text">
               <small class=" error_quantity text-danger "></small>
               </div>
                   <div class="cart__inner-product-items-quantity">
                       <b style="font-size:1rem;" class="text-danger"> </b>
                 <input type="hidden" name="id_sp" value="${item.id_sp}">
                       <input type="number" value="${item.so_luong}" min="1" name="so_luong_mua" class=" quantityInput" style="width:50%;">
                       <!-- <i class="fas fa-check-square" title="Cập nhật"></i> -->
                       <span class="cursor-pointer pl-2  " title="Click vào để thay đổi số lượng" name="update_quantity"><i class="fas fa-sync-alt"></i></span>
                   </div>
               </div>
               <div class="col-2">
                   <div class="cart__inner-product-items-finalPrice">
                     ${thanh_tien} </div>
               </div>
               <div class="col-1">
                   <div class="cart__inner-product-items-delete delete_one_cart" data-toggle="modal" data-target="#modal_delete_cart" data-id_sp="${item.id_sp}">
                       <div class="cursor-pointer"  title="Click để xoá sản phẩm này khỏi giỏ hàng"><i class="fas fa-trash-alt icon-delete"></i></div>
                   </div>
               </div>
           </div>
           </div>
           <!--modal hỏi có muốn xoá ko -->
          
           <!-- Modal hỏi xoá cart -->
           <div class="modal fade "  id="modal_delete_cart" tabindex="-1" role="dialog" aria-labelledby="modal_delete_cartTitle" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title  " style="font-size:1.6rem !important" id="exampleModalLongTitle">Bạn có muốn xoá sản phẩm này ?</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i class="fas fa-times"></i></span>
                   </button>
                 </div>
                <div class="container my-5">
                <div class="row  " style="">
                <button type="button" style="margin-left:20px" class="font-size col-5 py-3  btn btn-outline-primary btn-no_delete text-primary"  data-dismiss="modal" aria-label="Close" >Không</button>
                <button type="button" class="font-size col-5 offset-1 py-3  btn primary btn-accept_delete text-light" data-id_sp="${item.id_sp}">Xoá</button>
                </div>
                </div>
                
               </div>
             </div>
           </div>

        
           `;
          });
          $(".load_cart").html(str); //load ra html
          load_tong_tien_checkout();

          //update số lượng mua
          //kiểm tra có nhập số < 0 or số lượng lớn hơn trong kho
          var check = true;
          $('[name*="so_luong_mua"]').keyup(function (e) {
            var id_sp = $(this).parent().children("input[name=id_sp]").val();
            $.post(
              "../client/xu-ly/cart/keyup-quantity.php",
              { id_sp_keyup_quantity: id_sp, so_luong_mua: $(this).val() },
              function (data) {
                if (data == 1) {
                } else {
                  $('[name*="so_luong_mua"]')
                    .parent()
                    .parent()
                    .children(".text")
                    .children(".error_quantity")
                    .text("Kho không đủ  ");
                }
              }
            );
          });
          $('[name*="so_luong_mua"]').keyup(function (e) {
            if ($(this).val() < 0) {
              $(this)
                .parent()
                .parent()
                .children(".text")
                .children(".error_quantity")
                .text("Nhập số hợp lệ");
              //  disabled btn thanh toán
              $(".btnCheckout").attr("disabled", "true");
              check = false;
            } else if ($(this).val() == "") {
              $(this)
                .parent()
                .parent()
                .children(".text")
                .children(".error_quantity")
                .text("Không được rỗng");
              $(".btnCheckout").attr("disabled", "true");

              check = false;
            } else if ($(this).val() == 0) {
              $(this)
                .parent()
                .parent()
                .children(".text")
                .children(".error_quantity")
                .text("Nhập số hợp lệ");
              check = false;
              $(".btnCheckout").attr("disabled", "true");
            } else {
              $(this)
                .parent()
                .parent()
                .children(".text")
                .children(".error_quantity")
                .text("");
              check = true;
              $(".btnCheckout").removeAttr("disabled");
            }
          });

          //toast thông báo
          function toast({
            title = "",
            msg = "",
            link = "",
            type = "success",
            duration = 3000,
          }) {
            const main = document.getElementById("toast");
            if (main) {
              const toast = document.createElement("div");
              //auto remove
              const autoRemoveId = setTimeout(function () {
                //trả lại id settimeout
                main.removeChild(toast);
              }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
              //remove khi click
              toast.onclick = function (e) {
                if (e.target.closest(".toast__close")) {
                  main.removeChild(toast);
                  clearTimeout(autoRemoveId);
                }
              };
              const icons = {
                success: "fas fa-check-circle",
                error: "fas fa-exclamation-circle",
              };
              const icon = icons[type];
              const delay = (duration / 1000).toFixed(2);
              toast.classList.add("toast", `toast--${type}`);
              toast.style.animation = `slideInLeft ease 0.3s,fadeOut linear 1s ${delay}s forwards`;

              toast.innerHTML = `
     
                  <div class="toast__icon">
                  <i class="${icon}"></i>
                          </div>
                  <div class="toast__body">
                  <a href="${link}">
                      <h4 class="toast__title">${title}</h4>
                      <p class="toast__msg">${msg}</p>
                  </a>
                  </div>
                  <div class="toast__close">
                      <i class="fas fa-times"></i>
                  </div>
                  `;

              main.appendChild(toast);
            }
          }
          $('[name*="update_quantity"]').click(function () {
            if (check == true) {
              // console.log("ok");
              // update cart
              var quantity = $(this)
                .parent()
                .children("input[name=so_luong_mua]")
                .val();
              var id_sp = $(this).parent().children("input[name=id_sp]").val();

              $.post(
                "../client/xu-ly/cart/update-cart.php",
                { update_quantity: quantity, id_sp: id_sp },
                function (data) {
                  if (data == 1) {
                    load_all_cart();
                    toast({
                      title: "Thành công",
                      msg: "Cập nhật thành công!",
                      type: "success",
                      duration: 4000,
                      link: "../../",
                    });
                    load_tong_tien_checkout();
                  }
                }
              );
            } else {
              // console.log("ko");
            }
          });

          //modal hỏi xoá cart,Ok xoá
          //click để xoá sản phẩm trong cart
          $(".btn-accept_delete").click(function () {
            var id_sp = $(this).data("id_sp");
            $.post(
              "../client/xu-ly/cart/delete-cart.php",
              { id_sp_xoa_one_cart: id_sp },
              function (data) {
                if (data == 1) {
                  load_all_cart();
                  load_count_cart_index();
                  // remove all modal
                  $("#modal_delete_cart").remove();
                  $("body").removeClass("modal-open");
                  $("body").attr("style", "");
                  $(".fade").removeClass("modal-backdrop");
                  window.localStorage.removeItem(
                    "so_tien_duoc_giam_ap_ma_giam_gia"
                  );
                  window.localStorage.removeItem("id_ma_giam_gia");
                  window.localStorage.removeItem("id_kh");
                  load_tong_tien_checkout();
                }
              }
            );
          });
          //ko xoá cart
          $(".btn-no_delete").click(function () {});
        } else {
          //< 0
          cart_rong();
        }
      }
    );
  }
  load_all_cart();

  //hỏi có muốn xoá ko,ok xoá
  $(".btn-accept_delete_all_cart").click(function () {
    $.post(
      "../client/xu-ly/cart/delete-cart.php",
      { xoa_all_cart: "xoa_all_cart" },
      function (data) {
        if (data == 1) {
          cart_rong();
          load_count_cart_index();
          // remove all modal
          $("#modal_xoa_all_cart").remove();
          $("body").removeClass("modal-open");
          $("body").attr("style", "");
          $(".fade").removeClass("modal-backdrop");
          // khi xoá cart thì xoá storage ko thì User quay lại mua hang 100k vẫn đc giảm tiền
          window.localStorage.removeItem("so_tien_duoc_giam_ap_ma_giam_gia");
          window.localStorage.removeItem("id_ma_giam_gia");
          window.localStorage.removeItem("id_kh");
          load_tong_tien_checkout();
        }
      }
    );
  });

  //hàm load box address
  function load_tong_tien_checkout() {
    $.post(
      "../client/xu-ly/cart/load_tong_tien_checkout.php",
      { load_tong_tien_checkout: "load_tong_tien_checkout" },
      function (data) {
        var data = JSON.parse(data);
        if (data.so_dien_thoai != null && data.dia_chi != null) {
          var str = `
          <div class="cart__total-prices ">
          <div class="cart__total-prices-shipAddress">
              <div class="shipAddress-heading pb-2 d-flex justify-content-between">
                  <span class="shipAddress-heading1">Giao tới</span>
                  <span><a href="address">Thay đổi</a></span>
              </div>
              <div class="shipAddress-title py-2">
                  <b class="shipAddress-title-name">${data.ho_ten}</b>
                  <b class="shipAddress-title-phone">${data.so_dien_thoai}</b>
              </div>
              <p class="shipAddress-addres">${data.dia_chi}</p>
          </div>
      </div>
      <div class="cart__total-price">
          <div class="cart-total-km">
              <div class="cart-total-km-title py-2">Mã khuyến mãi</div>
              <!-- Button modal mã khuyến mãi -->
      
              <div class="cart-total-km-select d-flex " data-toggle="modal" data-target="#modal_ma_km">
                  <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20">
                      <g fill="none" fill-rule="evenodd">
                          <path fill="#0D5CB6"
                              d="M18.549 4c.757 0 1.378.73 1.445 1.662L20 5.83v1.958c-1.268.247-2.222 1.323-2.222 2.613s.954 2.366 2.222 2.613v1.958c0 .954-.58 1.737-1.32 1.822l-.131.007H1.452c-.757 0-1.379-.73-1.446-1.662l-.005-.167L0 13.013c1.268-.246 2.223-1.323 2.223-2.613S1.268 8.033 0 7.787V5.829c0-.954.58-1.737 1.32-1.822L1.452 4h17.097zM1.517 5.065l-.067.002c-.11.012-.292.247-.33.617l-.008.145-.002 1.197.09.041c1.217.591 2.051 1.772 2.128 3.128l.006.205c0 1.44-.857 2.712-2.134 3.333l-.09.04.001 1.162.004.13c.027.38.195.612.3.66l.037.008 17.031.002.067-.002c.11-.012.292-.247.331-.617l.008-.144-.001-1.2-.088-.04c-1.217-.59-2.05-1.772-2.127-3.127l-.006-.205c0-1.44.856-2.712 2.133-3.332l.088-.042.002-1.161-.004-.13c-.028-.38-.195-.612-.3-.66l-.037-.008-17.032-.002zM12.5 12c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.373-.8.834-.8zm.442-4.424c.217.208.24.531.072.765l-.072.083-5 4.8c-.244.235-.64.235-.884 0-.217-.208-.241-.531-.072-.765l.072-.083 5-4.8c.244-.235.64-.235.884 0zM7.5 7.2c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.374-.8.834-.8z" />
                      </g>
                  </svg>
                  <p class="pl-2 text-primary cursor-pointer">Chọn hoặc nhập mã khuyến mãi</p>
              </div>
          </div>
      
      
          <!-- Modal mã khuyến mãi -->
          <div class="modal fade " id="modal_ma_km" tabindex="-1" role="dialog" aria-labelledby="modal_ma_kmTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content do-du-lieu-ma-giam-gia">
                      
                  </div>
              </div>
          </div>
      </div>
      
      <div class="cart__total-price">
          <ul class="cart__total-price-items pb-5">
              <li class="cart__total-price-item d-flex justify-content-between">
                  <span class="cart__price-text">Tạm tính</span>
                  <span class="cart__price-value">${data.tong_tien.toLocaleString(
                    "vi",
                    { style: "currency", currency: "VND" }
                  )}</span>
      
              </li>
              <li class="cart__total-price-item d-flex justify-content-between">
                  <span class="cart__price-text">Giảm giá</span>
      
                  <span class="cart__price-value so_tien_giam_gia">0 đ</span>
              </li>
          </ul>
          <div class="cart-price-total d-flex justify-content-between align-items-center">
              <span class="cart__price-text">
                  Tổng cộng
              </span>
              <span class="cart__price-value tong_tien_all">
              ${data.tong_tien.toLocaleString("vi", {
                style: "currency",
                currency: "VND",
              })}
              </span>
      
      
          </div>
      
      </div>
      <a href="checkout" class="cart__total-price-btnCheckout">
      
          <button class="btn primary btnCheckout">Thanh toán</button>
      </a>
      `;
        } else {
          var str = `
          <div class="cart__total-prices">
          <div class="cart__total-prices-shipAddress">
              <div class="shipAddress-heading">Vui lòng cập nhật địa chỉ giao hàng</div>
              <a href="address" class="shipAddres-btn-link font-size"> <button  class="my-4 shipAddres-btn btn primary font-size text-light">Cập nhật</button></a>

          </div>
      </div>
         
        
            </div>
            <div class="cart__total-price">
            <div class="cart-total-km">
                <div class="cart-total-km-title py-2">Mã khuyến mãi</div>
                <!-- Button modal mã khuyến mãi -->

                <div class="cart-total-km-select d-flex " data-toggle="modal" data-target="#modal_ma_km">
                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="#0D5CB6" d="M18.549 4c.757 0 1.378.73 1.445 1.662L20 5.83v1.958c-1.268.247-2.222 1.323-2.222 2.613s.954 2.366 2.222 2.613v1.958c0 .954-.58 1.737-1.32 1.822l-.131.007H1.452c-.757 0-1.379-.73-1.446-1.662l-.005-.167L0 13.013c1.268-.246 2.223-1.323 2.223-2.613S1.268 8.033 0 7.787V5.829c0-.954.58-1.737 1.32-1.822L1.452 4h17.097zM1.517 5.065l-.067.002c-.11.012-.292.247-.33.617l-.008.145-.002 1.197.09.041c1.217.591 2.051 1.772 2.128 3.128l.006.205c0 1.44-.857 2.712-2.134 3.333l-.09.04.001 1.162.004.13c.027.38.195.612.3.66l.037.008 17.031.002.067-.002c.11-.012.292-.247.331-.617l.008-.144-.001-1.2-.088-.04c-1.217-.59-2.05-1.772-2.127-3.127l-.006-.205c0-1.44.856-2.712 2.133-3.332l.088-.042.002-1.161-.004-.13c-.028-.38-.195-.612-.3-.66l-.037-.008-17.032-.002zM12.5 12c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.373-.8.834-.8zm.442-4.424c.217.208.24.531.072.765l-.072.083-5 4.8c-.244.235-.64.235-.884 0-.217-.208-.241-.531-.072-.765l.072-.083 5-4.8c.244-.235.64-.235.884 0zM7.5 7.2c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.374-.8.834-.8z" />
                        </g>
                    </svg>
                    <p class="pl-2 text-primary cursor-pointer">Chọn hoặc nhập mã khuyến mãi</p>
                </div>
            </div>


           
          <!-- Modal mã khuyến mãi -->
          <div class="modal fade " id="modal_ma_km" tabindex="-1" role="dialog" aria-labelledby="modal_ma_kmTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content do-du-lieu-ma-giam-gia">
                      
                  </div>
              </div>
          </div>
      </div>
      
      <div class="cart__total-price">
          <ul class="cart__total-price-items pb-5">
              <li class="cart__total-price-item d-flex justify-content-between">
                  <span class="cart__price-text">Tạm tính</span>
                  <span class="cart__price-value">${data.tong_tien.toLocaleString(
                    "vi",
                    { style: "currency", currency: "VND" }
                  )}</span>
      
              </li>
              <li class="cart__total-price-item d-flex justify-content-between">
                  <span class="cart__price-text">Giảm giá</span>
      
                  <span class="cart__price-value so_tien_giam_gia">0 đ</span>
              </li>
          </ul>
          <div class="cart-price-total d-flex justify-content-between align-items-center">
              <span class="cart__price-text">
                  Tổng cộng
              </span>
              <span class="cart__price-value tong_tien_all">
              ${data.tong_tien.toLocaleString("vi", {
                style: "currency",
                currency: "VND",
              })}
              </span>
      
      
          </div>
      
      </div>
      <a href="checkout" class="cart__total-price-btnCheckout">
      
          <button disabled class="btn primary btnCheckout">Thanh toán</button>
      </a>
      `;
        }

        $(".load_tong_tien_checkout").html(str);
        function load_du_lieu_ma_giam_gia() {
          // Gửi ajax qua PHP\
          var tong_tien = data.tong_tien;
          $.post(
            "../client/xu-ly/cart/load-ma-giam-gia.php",
            { data_tong_tien: tong_tien },
            function (data) {
              $(".do-du-lieu-ma-giam-gia").html(data);
            }
          );
        }
        load_du_lieu_ma_giam_gia();

        var muc_giam_gia = window.localStorage.getItem(
          "so_tien_duoc_giam_ap_ma_giam_gia"
        );
        if (muc_giam_gia != "") {
          muc_giam_gia = new Number(muc_giam_gia);
          if (muc_giam_gia != 0) {
            $('[name*="so_luong_mua"]').attr("disabled", "true");
          }
        } else {
          $('[name*="so_luong_mua"]').removeAttr("disabled");
          muc_giam_gia = new Number(muc_giam_gia);
          muc_giam_gia = 0;
        }

        var tien_duoc_giam = 0;
        var tong = data.tong_tien;
        tong = new Number(tong);
        // nếu mà có tiền giảm giá ,lấy từ DB php đưa lại đây
        if (muc_giam_gia < 100) {
          // là %
          tien_duoc_giam = (muc_giam_gia / 100) * tong;
        } else {
          //số tiền
          tien_duoc_giam = muc_giam_gia;
        }

        var tong_tien_all = tong - tien_duoc_giam;
        tong_tien_all = new Number(tong_tien_all);
        tong_tien_all = tong_tien_all.toLocaleString("vi", {
          style: "currency",
          currency: "VND",
        });
        tien_duoc_giam = tien_duoc_giam.toLocaleString("vi", {
          style: "currency",
          currency: "VND",
        });
        $(".so_tien_giam_gia").text(tien_duoc_giam);
        $(".tong_tien_all").text(tong_tien_all);
      }
    );
  }
  load_tong_tien_checkout();

  //hàm load box address checkout

  function load_tong_tien_checkout_done() {
    $.post(
      "../client/xu-ly/cart/load_tong_tien_checkout.php",
      { load_tong_tien_checkout: "load_tong_tien_checkout" },
      function (data) {
        var data = JSON.parse(data);
        if (data.so_dien_thoai != null || data.dia_chi != null) {
          var str = `
          
          <div class="cart__total-prices ">
          <div class="cart__total-prices-shipAddress">
              <div class="shipAddress-heading pb-2 d-flex justify-content-between">
                  <span class="shipAddress-heading1">Giao tới</span>
                  <span><a href="address">Thay đổi</a></span>
              </div>
              <div class="shipAddress-title py-2">
                  <b class="shipAddress-title-name">${data.ho_ten}</b>
                  <b class="shipAddress-title-phone">${data.so_dien_thoai}</b>
              </div>
              <p class="shipAddress-addres">${data.dia_chi}</p>
          </div>
            </div>
            <div class="cart__total-price">
            <div class="cart-total-km">
                <div class="cart-total-km-title py-2">Mã khuyến mãi</div>
                <!-- Button modal mã khuyến mãi -->

                <div class="cart-total-km-select d-flex " data-toggle="modal" data-target="#modal_ma_km">
                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="#0D5CB6" d="M18.549 4c.757 0 1.378.73 1.445 1.662L20 5.83v1.958c-1.268.247-2.222 1.323-2.222 2.613s.954 2.366 2.222 2.613v1.958c0 .954-.58 1.737-1.32 1.822l-.131.007H1.452c-.757 0-1.379-.73-1.446-1.662l-.005-.167L0 13.013c1.268-.246 2.223-1.323 2.223-2.613S1.268 8.033 0 7.787V5.829c0-.954.58-1.737 1.32-1.822L1.452 4h17.097zM1.517 5.065l-.067.002c-.11.012-.292.247-.33.617l-.008.145-.002 1.197.09.041c1.217.591 2.051 1.772 2.128 3.128l.006.205c0 1.44-.857 2.712-2.134 3.333l-.09.04.001 1.162.004.13c.027.38.195.612.3.66l.037.008 17.031.002.067-.002c.11-.012.292-.247.331-.617l.008-.144-.001-1.2-.088-.04c-1.217-.59-2.05-1.772-2.127-3.127l-.006-.205c0-1.44.856-2.712 2.133-3.332l.088-.042.002-1.161-.004-.13c-.028-.38-.195-.612-.3-.66l-.037-.008-17.032-.002zM12.5 12c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.373-.8.834-.8zm.442-4.424c.217.208.24.531.072.765l-.072.083-5 4.8c-.244.235-.64.235-.884 0-.217-.208-.241-.531-.072-.765l.072-.083 5-4.8c.244-.235.64-.235.884 0zM7.5 7.2c.46 0 .833.358.833.8 0 .442-.373.8-.833.8-.46 0-.834-.358-.834-.8 0-.442.374-.8.834-.8z" />
                        </g>
                    </svg>
                    <p class="pl-2 text-primary cursor-pointer">Chọn hoặc nhập mã khuyến mãi</p>
                </div>
            </div>


            <!-- Modal mã khuyến mãi -->
            <div class="modal fade " id="modal_ma_km" tabindex="-1" role="dialog" aria-labelledby="modal_ma_kmTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content do-du-lieu-ma-giam-gia">
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cart__total-price">
            <ul class="cart__total-price-items pb-5">
                <li class="cart__total-price-item d-flex justify-content-between">
                    <span class="cart__price-text">Tạm tính</span>
                    <span class="cart__price-value">${data.tong_tien.toLocaleString(
                      "vi",
                      { style: "currency", currency: "VND" }
                    )}</span>
        
                </li>
                <li class="cart__total-price-item d-flex justify-content-between">
                    <span class="cart__price-text">Giảm giá</span>
        
                    <span class="cart__price-value so_tien_giam_gia">0 đ</span>
                </li>
            </ul>
            <div class="cart-price-total d-flex justify-content-between align-items-center">
                <span class="cart__price-text">
                    Tổng cộng
                </span>
                <span class="cart__price-value tong_tien_all">
                ${data.tong_tien.toLocaleString("vi", {
                  style: "currency",
                  currency: "VND",
                })}
                </span>
        
        
            </div>
        
        </div>
        <p href="success" id="checkout_success" class="cart__total-price-btnCheckout">
        
            <button class="btn primary btnCheckout">Thanh toán</button>
        </p>
      `;
        }
        $(".load_tong_tien_checkout-done").html(str);

        var muc_giam_gia = window.localStorage.getItem(
          "so_tien_duoc_giam_ap_ma_giam_gia"
        );
        if (muc_giam_gia != "") {
          muc_giam_gia = new Number(muc_giam_gia);
          if (muc_giam_gia != 0) {
            $('[name*="so_luong_mua"]').attr("disabled", "true");
          }
        } else {
          $('[name*="so_luong_mua"]').removeAttr("disabled");
          muc_giam_gia = new Number(muc_giam_gia);
          muc_giam_gia = 0;
        }

        var tien_duoc_giam = 0;
        var tong = data.tong_tien;
        tong = new Number(tong);
        // nếu mà có tiền giảm giá ,lấy từ DB php đưa lại đây
        if (muc_giam_gia < 100) {
          // là %
          tien_duoc_giam = (muc_giam_gia / 100) * tong;
        } else {
          //số tiền
          tien_duoc_giam = muc_giam_gia;
        }

        var tong_tien_all = tong - tien_duoc_giam;
        tong_tien_all = new Number(tong_tien_all);
        tong_tien_all = tong_tien_all.toLocaleString("vi", {
          style: "currency",
          currency: "VND",
        });
        tien_duoc_giam = tien_duoc_giam.toLocaleString("vi", {
          style: "currency",
          currency: "VND",
        });
        $(".so_tien_giam_gia").text(tien_duoc_giam);
        $(".tong_tien_all").text(tong_tien_all);
        var tong_tien_all = tong_tien_all.replace(/\D/g, "");
        var tien_duoc_giam = tien_duoc_giam.replace(/\D/g, "");
        var id_ma_giam_gia = window.localStorage.getItem("id_ma_giam_gia");

        if (id_ma_giam_gia == "") {
          id_ma_giam_gia = "";
        }
       
        $('#checkout_success .btnCheckout').attr("disabled",true);
        var id_kh_ds = window.localStorage.getItem("id_kh");
        // window.localStorage.removeItem("id_kh");
        // click vào checkout success để ADD cart vào DB
        $('[name*="checkout"]').click(function () {
        $('#checkout_success .btnCheckout').attr("disabled",false);
          var hinh_thuc_thanh_toan = $(this).val();
          $("#checkout_success").click(function (e) {
            e.preventDefault();
            if (hinh_thuc_thanh_toan == 0) {
              //offline
              $.post(
                "../client/xu-ly/cart/success.php",
                {
                  checkout_success: tien_duoc_giam,
                  hinh_thuc_thanh_toan: hinh_thuc_thanh_toan,
                  tong_tien_all: tong_tien_all,
                  id_ma_giam_gia: id_ma_giam_gia,
                  id_kh_ds: id_kh_ds,
                },
                function (data) {
                  if (data == 1) {
                    //toast thông báo
                    function toast({
                      title = "",
                      msg = "",
                      link = "",
                      type = "success",
                      duration = 3000,
                    }) {
                      const main = document.getElementById("toast");
                      if (main) {
                        const toast = document.createElement("div");
                        //auto remove
                        const autoRemoveId = setTimeout(function () {
                          //trả lại id settimeout
                          main.removeChild(toast);
                        }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
                        //remove khi click
                        toast.onclick = function (e) {
                          if (e.target.closest(".toast__close")) {
                            main.removeChild(toast);
                            clearTimeout(autoRemoveId);
                          }
                        };
                        const icons = {
                          success: "fas fa-check-circle",
                          error: "fas fa-exclamation-circle",
                        };
                        const icon = icons[type];
                        const delay = (duration / 1000).toFixed(2);
                        toast.classList.add("toast", `toast--${type}`);
                        toast.style.animation = `slideInLeft ease 0.3s,fadeOut linear 1s ${delay}s forwards`;

                        toast.innerHTML = `

                              <div class="toast__icon">
                              <i class="${icon}"></i>
                          </div>
                          <div class="toast__body">
                          <a href="${link}">
                              <h4 class="toast__title">${title}</h4>
                              <p class="toast__msg">${msg}</p>
                          </a>
                          </div>
                          <div class="toast__close">
                              <i class="fas fa-times"></i>
                          </div>
                              `;

                        main.appendChild(toast);
                      }
                    }
                    toast({
                      title: "Thành công",
                      msg: "Thanh toán thành công!",
                      type: "success",
                      duration: 5000,
                      link: "#",
                    });
                    window.localStorage.removeItem(
                      "so_tien_duoc_giam_ap_ma_giam_gia"
                    );
                    window.localStorage.removeItem("id_ma_giam_gia");
                    window.localStorage.removeItem("id_kh");
                    setTimeout(function () {
                      window.location.href = "success";
                    }, 1000);
                  }
                }
              );
            } else {
              // online
            }
          });
        });
      }
    );
  }
  load_tong_tien_checkout_done();
  // xoá,hoặc update cart thì phải gọi thèn này
});
