<?php
// hàm kết nối csdl
function pdo_get_connection()
{
    $severname = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$severname;dbname=ltsmart;charset=utf8", $username, $password);
        // khai báo phương thức và kiểu trả về kq lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "kết nối thành công";
        return $conn;
    } catch (Exception $e) {
        echo "kết nối thất bại" . $e->getMessage();
    }
}
//hàm thực thi csdl
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// Hàm thực thi csdl,lấy đc id vừa insert
function pdo_execute2($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return  $conn->lastInsertId(); //thực thi xong và lấy đc id vừa insert
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
//hàm truy vấn nhìều dl
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
//hàm truy vấn 1 dữ liệu
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// truy vấn 1 dữ liệu và trả về 1 mảng chứa key => value, key là chỉ số index  của mảng
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return  array_values($row);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
?>