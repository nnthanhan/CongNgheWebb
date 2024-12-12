<?php
include './functions.php';
$flowers = getFlowers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh sách hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
        margin-bottom: 60px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #007bff;
        color: white;
        padding: 20px;
    }

    .logo a {
        font-size: 24px;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    nav li {
        margin: 0 15px;
    }

    nav li a {
        text-decoration: none;
        color: white;
        font-size: 18px;
    }

    nav li a:hover {
        color: #007bff;
        background-color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    table {
        width: 90%;
        margin: 30px auto;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f1f1f1;
        font-size: 16px;
    }

    td img {
        height: 100px;
        width: 100px;
        border-radius: 5px;
    }

    td a {
        color: #007bff;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
    }

    td a:hover {
        background-color: #f1f1f1;
    }

    button {
        background-color: #28a745;
        border: none;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        margin-left: 20px;
    }

    button a {
        color: white;
        text-decoration: none;
    }

    button:hover {
        background-color: #218838;
    }

    .no-flowers-message {
        text-align: center;
        font-size: 18px;
        color: #888;
        margin-top: 30px;
    }

    footer {
        font-size: 18px;
        text-align: center;
        padding: 10px;
        background-color: #007bff;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    <header>
        <div class="logo">
            <a href="./admin.php">Administation</a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="./index.php">User</a></li>
                <li><a href="./index.php">Thể loại</a></li>
                <li><a href="./index.php">Tác giả</a></li>
                <li><a href="./index.php">Bài Viết</a></li>
            </ul>
        </nav>
    </header>

    <button type="button" class="btn btn-warning">
        <a href="./add.php">Thêm loại hoa</a>
    </button>

    <?php if (empty($flowers)): ?>
        <p class="no-flowers-message">Chưa có hoa nào trong danh sách. Hãy thêm một loại hoa mới.</p>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tên hoa</th>
                    <th style="width: 600px;">Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flowers as $flower): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($flower['name']); ?></td>
                        <td><?php echo htmlspecialchars($flower['description']); ?></td>
                        <td><img src="<?php echo htmlspecialchars($flower['image']); ?>" alt="<?php echo htmlspecialchars($flower['name']); ?>"></td>
                        <td>
                            <a href="edit.php?id=<?php echo $flower['id']; ?>">🖊️</a>
                            <a href="delete.php?id=<?php echo $flower['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">❌</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Quản lý hoa | Nguyễn Văn Dũng - Đại học Thủy Lợi</p>
    </footer>
</body>

</html>
