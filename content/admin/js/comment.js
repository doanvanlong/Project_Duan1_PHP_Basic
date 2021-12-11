 //Xoá bình luận sản phẩm
 $('.delete-cmt-product').click(function() {
         var id = $(this).data('id_comment_product');
         $.ajax({
             type: "POST",
             url: "../admin/xu-ly/binh-luan/delete-comment.php",
             data: { Id_Delete_Comment_Product: id },
             dataType: "text",
             success: function(data) {
                 if (data == 1) {
                     toast({
                         title: "Thành công",
                         msg: "Xoá bình luận thành công!",
                         type: "success",
                         duration: 5000,
                         link: "#",
                     });
                     setTimeout(location.reload.bind(location), 1000);
                 } else {
                     toast({
                         title: "Thất bại",
                         msg: "Xoá bình luận thất bại !",
                         type: "error",
                         duration: 5000,
                         link: "#",
                     });
                 }
             }
         });
     })
     //Xoá bình luận bài viết
 $('.delete-cmt-post').click(function() {
         var id = $(this).data('id_comment_post');
         $.ajax({
             type: "POST",
             url: "../admin/xu-ly/binh-luan/delete-comment.php",
             data: { Id_Delete_Comment_Post: id },
             dataType: "text",
             success: function(data) {
                 if (data == 1) {
                     toast({
                         title: "Thành công",
                         msg: "Xoá bình luận thành công!",
                         type: "success",
                         duration: 5000,
                         link: "#",
                     });
                     setTimeout(location.reload.bind(location), 1000);
                 } else {
                     toast({
                         title: "Thất bại",
                         msg: "Xoá bình luận thất bại !",
                         type: "error",
                         duration: 5000,
                         link: "#",
                     });
                 }
             }
         });
     })
     //Trả lời bình luận 
 $("#submit-reply").click(function() {
     $('#reply-comment').submit(function(e) {
         e.preventDefault();
         if ($('[name*="noi-dung"]').val() == "") {
             $('[name*="noi-dung"]').css("border", "2px solid #f38291");
             $("#error-noi-dung").text("Vui lòng nhập nội dung bình luận!");
         } else {
             $.ajax({
                 type: "POST",
                 url: "../admin/xu-ly/binh-luan/reply-comment.php",
                 data: new FormData(this),
                 contentType: false,
                 processData: false,
                 success: function(data) {
                     if (data == 1) {
                         toast({
                             title: "Thành công",
                             msg: "Trả lời bình luận thành công !",
                             type: "success",
                             duration: 5000,
                             link: "list-comment",
                         });
                         setTimeout(location.reload.bind(location), 1000);
                     } else {
                         toast({
                             title: "Thất bại",
                             msg: "Trả lời bình luận thất bại !",
                             type: "error",
                             duration: 5000,
                             link: "#",
                         });
                     }
                 },
             });
         }
     });
 });
 $('[name*="noi-dung"]').focus(function() {
     $(this).css("border", "0");
     $("#error-noi-dung").text("");
 });