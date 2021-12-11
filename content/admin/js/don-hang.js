<<<<<<< HEAD
// function myFunction() {
//     var r = confirm("Press a button!");
//     if (r == true) {
//         console.log('OKKKK');
//     } else {
//         console.log("KO1");
//     }
// }
$("#confirm").click(function() {
    $('#order').submit(function(e) {
        e.preventDefault();
        console.log('o')
    })
})

// $("#confirm").click(function() {
//     var valueConfirm = $(this).val();
//     var id = $(this).data("id_hoa_don");
//     var alertConfirm = confirm("Xác nhận đơn hàng này?");
//     if (alertConfirm == true) {
//         $("#order").submit(function(e) {
//             e.preventDefault();
//             console.log(id)
//             // $.ajax({
//             //     type: "POST",
//             //     url: "../admin/xu-ly/don-hang/order.php",
//             //     data: { xac_nhan: valueConfirm, id_hoa_don: id },
//             //     dataType: "text",
//             //     success: function(data) {
//             //         if (data == 1) {
//             //             toast({
//             //                 title: "Thành công",
//             //                 msg: "Xác nhận đơn hàng thành công!",
//             //                 type: "success",
//             //                 duration: 5000,
//             //                 link: "#",
//             //             });
//             //             setTimeout(location.reload.bind(location), 1000);
//             //         } else {
//             //             toast({
//             //                 title: "Thất bại",
//             //                 msg: "Xác nhận đơn hàng thất bại !",
//             //                 type: "error",
//             //                 duration: 5000,
//             //                 link: "#",
//             //             });
//             //         }
//             //     }
//             // });
//         });
//     }
// });

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
=======
$(".confirmOrder").click(function() {
    var ID_Confirm = $(this).data("id_hoa_don_confirm");
    $(".accept-confirm").click(function() {
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/don-hang/order.php",
            data: { Confirm_Order: ID_Confirm },
            dataType: "text",
            success: function(data) {
                if (data == 1) {
                    $(".modal_remove").hide();
                    $("body").removeClass("modal-open");
                    $("body").attr("style", "");
                    $(".fade").removeClass("modal-backdrop");
                    toast({
                        title: "Thành công",
                        msg: "Xác nhận đơn hàng thành công!",
                        type: "success",
                        duration: 5000,
                        link: "#",
                    });
                    setTimeout(location.reload.bind(location), 1500);
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
});
$(".confirmCancelled").click(function() {
    var ID_Cancelled = $(this).data("id_hoa_don_cancelled");
    $(".accept-cancelled").click(function() {
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/don-hang/order.php",
            data: { Cancelled_Order: ID_Cancelled },
            dataType: "text",
            success: function(data) {
                if (data == 1) {
                    $(".modal_remove").hide();
                    $("body").removeClass("modal-open");
                    $("body").attr("style", "");
                    $(".fade").removeClass("modal-backdrop");
                    toast({
                        title: "Thành công",
                        msg: "Huỷ đơn hàng thành công!",
                        type: "success",
                        duration: 5000,
                        link: "#",
                    });
                    setTimeout(location.reload.bind(location), 1500);
                } else {
                    toast({
                        title: "Thất bại",
                        msg: "Huỷ đơn hàng thất bại !",
                        type: "error",
                        duration: 5000,
                        link: "#",
                    });
>>>>>>> a476c713fb1bd3c94c48c64095f1e6101811774e
                }
            }
        });
    });
});
$(".confirmDelivery").click(function() {
    var ID_ConfirmDelivery = $(this).data("id_hoa_don_delivery");
    $(".accept-delivery").click(function() {
        $.ajax({
            type: "POST",
            url: "../admin/xu-ly/don-hang/order.php",
            data: { Confirm_Delivery: ID_ConfirmDelivery },
            dataType: "text",
            success: function(data) {
                if (data == 1) {
                    $(".modal_remove").hide();
                    $("body").removeClass("modal-open");
                    $("body").attr("style", "");
                    $(".fade").removeClass("modal-backdrop");
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
});