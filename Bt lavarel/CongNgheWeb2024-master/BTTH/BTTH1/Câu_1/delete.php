<?php
include './functions.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    if (deleteFlower($id)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Có lỗi khi xóa hoa.";
    }
} else {
    header("Location: admin.php");
    exit();
}
?>
