<?php
session_start();
include './functions.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $image = '';

    if (empty($name) || empty($description)) {
        $_SESSION['error'] = "Vui lòng nhập đầy đủ thông tin!";
        header("Location: add.php");
        exit();
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = 'images/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = basename($_FILES['image']['name']);
        $imagePath = $uploadDir . $fileName;

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['image']['type'], $allowedTypes)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $image = $imagePath;
            } else {
                $_SESSION['error'] = "Không thể tải lên hình ảnh.";
                header("Location: add.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Chỉ chấp nhận file ảnh định dạng JPG, PNG, GIF.";
            header("Location: add.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Vui lòng chọn một hình ảnh hợp lệ.";
        header("Location: add.php");
        exit();
    }

    addFlower($name, $description, $image);
    $_SESSION['success'] = "Thêm hoa thành công!";
    header("Location: admin.php");
    exit();
}

$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
unset($_SESSION['error'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Hoa Mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Thêm Hoa Mới</h2>

        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <form action="add.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Tên hoa:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả:</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Chọn ảnh hoa:</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Thêm Hoa</button>
        </form>
    </div>
</body>
</html>
