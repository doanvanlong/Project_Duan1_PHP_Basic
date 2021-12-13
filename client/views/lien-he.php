<div class="row">
    <div class="col">
        <h3 class=" text-uppercase">Liên hệ</h3>

        <div class="box-lien-he bg-white">
            <div class="row p-3">
                <div class="col-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8025459042856!2d108.16776031411872!3d16.07573298887691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e72e66f5%3A0x46619a0e2d55370a!2zMTM3IE5ndXnhu4VuIFRo4buLIFRo4bqtcCwgVGhhbmggS2jDqiBUw6J5LCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1634444256534!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-6 font-size-primary">
                    <p>
                        Mọi thắc mắc hoặc góp ý, quý khách vui lòng liên hệ trực tiếp với bộ phận chăm sóc khách hàng của chúng tôi bằng cách điền đầy đủ thông tin vào form bên dưới
                    </p>
                    <form id="lien_he" method="post">

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Họ Tên *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ho_ten_kh_lh" id="tenkh" placeholder="">
                                <small class="error_ho_ten_lh text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_kh_lh" id="emailkh" placeholder="">
                                <small class="error_email_lh text-danger"></small>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="noidung_lh" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 col-form-label">
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn primary submit-lien-he" style="color:white;font-size:1.4rem">Gửi liên hệ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                        <div id="toast"></div>

    </div>
</div>

<script>
    $('[name*="email_kh_lh"]').keyup(function(e) {
        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var email = $('[name*="email_kh_lh"]').val();
        if (email_regex.test(email)) {
            $(".error_email_lh").text("");
        } else {
            $(".error_email_lh").text("Vui lòng nhập đúng định dạng email");
        }
    });
    $('[name*="ho_ten_kh_lh"]').focus(function() {
        $('.error_ho_ten_lh').text('');
    })
    $('[name*="email_kh_lh"]').focus(function() {
        $('.error_email_lh').text('');
    })
    $('#lien_he').submit(function(e) {
        e.preventDefault();
        if ($('[name*="ho_ten_kh_lh"]').val() == "" || $('[name*="email_kh_lh"]').val() == "") {
            if ($('[name*="ho_ten_kh_lh"]').val() == "") {
                $('.error_ho_ten_lh').text('Họ tên không được rỗng');
            } else {
                $('.error_ho_ten_lh').text('');
            }
            if ($('[name*="email_kh_lh"]').val() == "") {
                $('.error_email_lh').text('Email không được rỗng');
            } else {
                $('.error_email_lh').text('');
            }
        } else {

        }
        $.ajax({
            url: 'xu-ly/lien-he/lien-he.php',
            type: 'post',
            data: $(this).serializeArray(),
            success: function(data) {
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
                            const autoRemoveId = setTimeout(function() {
                                //trả lại id settimeout
                                main.removeChild(toast);
                            }, duration + 1000); //2 animation = 4s , settime khi end 1 animation thi clear
                            //remove khi click
                            toast.onclick = function(e) {
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
                        msg: "Phản hồi của bạn đã được gửi!",
                        type: "success",
                        duration: 5000,
                        link: "#",
                    });
                    $('#lien_he')[0].reset();
                }
            }
        })
    })
</script>