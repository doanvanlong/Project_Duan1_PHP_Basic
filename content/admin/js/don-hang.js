// function myFunction() {
//     var r = confirm("Press a button!");
//     if (r == true) {
//         console.log('OKKKK');
//     } else {
//         console.log("KO1");
//     }
// }
$("#confirm").click(function() {
    var valueConfirm = $(this).val();
    var id = $(this).data("id_hoa_don");
    var alertConfirm = confirm("Xác nhận đơn hàng này?");
    if (alertConfirm == true) {
        $("#order").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/don-hang/order.php",
                data: { xac_nhan: valueConfirm, id_hoa_don: id },
                dataType: "text",
                success: function(data) {
                    if (data == 1) {
                        toast({
                            title: "Thành công",
                            msg: "Xác nhận đơn hàng thành công!",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        setTimeout(location.reload.bind(location), 1000);
                    } else {
                        toast({
                            title: "Thất bại",
                            msg: "Xác nhận đơn hàng thất bại !",
                            type: "error",
                            duration: 5000,
                            link: "#",
                        });
                    }
                }
            });
        });
    }
});

$("#cancelled").click(function() {
    var cancelled = $(this).val();
    var id = $(this).data("id_hoa_don");
    var alertCancelled = confirm("Xác nhận huỷ đơn hàng này?");
    if (alertCancelled == true) {
        $("#order").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/don-hang/order.php",
                data: { huy_don: cancelled, id_hoa_don: id },
                dataType: "text",
                success: function(data) {
                    if (data == 1) {
                        toast({
                            title: "Thành công",
                            msg: "Huỷ đơn hàng thành công!",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        setTimeout(location.reload.bind(location), 1000);
                    } else {
                        toast({
                            title: "Thất bại",
                            msg: "Huỷ đơn hàng thất bại !",
                            type: "error",
                            duration: 5000,
                            link: "#",
                        });
                    }
                }
            });
        });
    }
});
$("#delivery-confirmation").click(function() {
    var valueConfirmDelivery = $(this).val();
    var id = $(this).data("id_hoa_don");
    var payment_status = $('[name*="payment-status"]').data("payment_status");
    var alertDelivery = confirm("Xác nhận đã giao hàng cho đơn hàng này?");
    if (alertDelivery == true) {
        $("#order-delivery").submit(function(e) {
            e.preventDefault();
            var date = $('[name*="date"]').data("date_now");
            $.ajax({
                type: "POST",
                url: "../admin/xu-ly/don-hang/order.php",
                data: {
                    payment_status: payment_status,
                    dateConfirm: date,
                    id_hoa_don: id,
                    valueDelivery: valueConfirmDelivery
                },
                dataType: "text",
                success: function(data) {
                    if (data == 1) {
                        toast({
                            title: "Thành công",
                            msg: "Xác nhận đã giao đơn hàng thành công!",
                            type: "success",
                            duration: 5000,
                            link: "#",
                        });
                        setTimeout(location.reload.bind(location), 1000);
                    } else {
                        toast({
                            title: "Thất bại",
                            msg: "Xác nhận đã giao đơn hàng thất bại !",
                            type: "error",
                            duration: 5000,
                            link: "#",
                        });
                    }
                }
            });
        });
    }
});