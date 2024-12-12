<?php
include './functions.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $flower = getFlowerById($id);
    
    if (!$flower) {
        header("Location: admin.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    if (updateFlower($id, $name, $description, $image)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Có lỗi khi cập nhật thông tin hoa.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Sửa thông tin hoa</h2>
        <form action="edit.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Tên hoa:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($flower['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả:</label>
                <input type="text" id="description" name="description" class="form-control" value="<?php echo htmlspecialchars($flower['description']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Ảnh:</label>
                <input type="text" id="image" name="image" class="form-control" value="<?php echo htmlspecialchars($flower['image']); ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </form>
    </div>
</body>
</html>
