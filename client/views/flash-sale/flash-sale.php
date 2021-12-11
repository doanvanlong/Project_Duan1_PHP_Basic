<div class="row">
    <div class="col-12">
        <img style="width:100%" src="<?= $CONTENT_CLIENT_URL ?>/img/bn-dmdienthoai-3-10-xtsmart_1.jpg" alt="">
    </div>

</div>
<div class="row">
    <div class="col-12">
        <div class="heading_sp_flash_sale my-3">
            <img style="width:200px;" src="<?= $CONTENT_CLIENT_URL ?>/img/fs.gif" alt="">
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-12">
        <div class="bg-white load_sp_fl" style="" box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 5px;>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            function load_sp_flash_sale(page) {
                $.ajax({
                    url: 'xu-ly/flash-sale/load-flash-sale.php',
                    data: {
                        page: page
                    },
                    type: 'GET',
                    success: function(data) {
                        $('.load_sp_fl').html(data);
                    }
                })
            }
            load_sp_flash_sale();
            $('.page-item').click(function() {
                var page = $(this).data("page_fl");
                load_sp_flash_sale(page);

            })

        })
    </script>