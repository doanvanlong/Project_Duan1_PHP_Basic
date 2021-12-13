<?php
$Tong_DM = count($main_category_statistics);
$Tong_DM_Con = count($subcategory_statistics);
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(bieu_do);
    google.charts.setOnLoadCallback(bieu_do2);

    function bieu_do() {
        var data = google.visualization.arrayToDataTable([
            ['Thống kê', 'Sản phẩm theo danh mục chính'],
            <?php
            $i = 1;
            foreach ($main_category_statistics as $list_main_category_statistics) {
                extract($list_main_category_statistics);
                if ($i == $Tong_DM) {
                    $dauphay = "";
                } else {
                    $dauphay = ",";
                }
                //Load dữ liệu để hiển thị lên biểu đồ
                echo "['" . $Ten_Danh_Muc . "', " . $San_Pham . "]" . $dauphay;
                $i += 1;
            }
            ?>
        ]);

        var options = {
            title: 'Thống Kê Danh Mục Chính',
            pieHole: 0.3,
            is3D: true,
            legend: 'left',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }

    function bieu_do2() {
        var data = google.visualization.arrayToDataTable([
            ['Thống kê', 'Sản phẩm theo danh mục con'],
            <?php
            $i = 1;
            foreach ($subcategory_statistics as $list_subcategory_statistics) {
                extract($list_subcategory_statistics);
                if ($i == $Tong_DM_Con) {
                    $dauphay = "";
                } else {
                    $dauphay = ",";
                }
                //Load dữ liệu để hiển thị lên biểu đồ
                echo "['" . $Ten_Danh_Muc_Con . "', " . $So_Luong_San_Pham . "]" . $dauphay;
                $i += 1;
            }
            ?>
        ]);

        var options = {
            title: 'Thống Kê Danh Mục Con',
            // pieHole: 0.1,
            is3D: true,
            legend: 'left',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
    }
</script>

<div class="row">
    <div class="col-6">
        <div id="donutchart" style="height: 22em;"></div>
    </div>
    <div class="col-6">
        <div id="donutchart2" style="height: 22em;"></div>
    </div>
    <div class="col-12" style="margin-top:1em;">
        <h3 class="alert bg-secondary text-light">Thống kê sản phẩm theo loại: </h3>
        <?php
        if (!empty($list_statistics)) {
            echo '<table class="table table-hover">
            <thead>
                <tr style="text-align:left;">
                    <th style="padding-left: 5em;">#</th>
                    <th>Mã danh mục con</th>
                    <th>Tên loại</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
            </thead>';
            $i = 1;
            foreach ($list_statistics as $list_statistics) {
                extract($list_statistics);
                $giaCaoNhat = number_format($giaCaoNhat);
                $giaThapNhat = number_format($giaThapNhat);
                $giaTrungBinh = number_format($giaTrungBinh);
                echo '<tbody>
                <tr style="text-align:left;">
                    <td style="padding-left: 5em;">'.$i.'</td>
                    <td>'.$ID.'</td>
                    <td>'.$Ten_Danh_Muc_Con.'</td>
                    <td>'.$So_Luong_San_Pham.'</td>
                    <td style="color:red;">'.$giaCaoNhat.' VNĐ</td>
                    <td style="color:red;">'.$giaThapNhat.' VNĐ</td>
                    <td style="color:red;">'.$giaTrungBinh.' VNĐ</td>
                </tr>
            </tbody>';
            $i ++;
            }
        } else {
            echo '
            <hr>
            <div style="text-align: center;">
                <img src="' . $CONTENT_ADMIN_URL . '/img/nodata.png" alt="No data">
                <h4 style="padding: 1em 1em;">Không có dữ liệu để hiển thị!</h4>
            </div>
            <hr>';
        }
        ?>


        </table>
    </div>

</div>
<!-- <style>
    .bold-red
</style> -->