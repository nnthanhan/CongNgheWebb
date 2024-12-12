<?php include './functions.php';
$flowers = getFlowers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các loại hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
        margin-bottom: 60px;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    header a:hover {
        text-decoration: underline;
    }

    nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    nav li {
        margin: 0 15px;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
    }

    nav a:hover {
        color: #00aaff;
    }

    .flower_container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 20px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
    }

    .flower_item {
        flex: 1 0 calc(33.33% - 20px); 
        max-width: calc(33.33% - 20px);
        min-height: 300px;
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .flower_item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .flower_item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }

    .flower_item h2 {
        font-size: 20px;
        color: #333;
        margin-top: 15px;
    }

    .flower_item p {
        font-size: 16px;
        color: #666;
        padding: 10px;
        height: 80px;
        overflow: hidden;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
        font-size: 36px;
        color: #333;
    }

    footer {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 10px;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }

    footer a {
        color: #fff;
        text-decoration: none;
    }

    footer a:hover {
        color: #00aaff;
    }
</style>

<body>
    <header>
        <nav class="logo">
            <a href="./admin.php">Administraction</a>
        </nav>
        <nav>
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="./index.php">User</a></li>
                <li><a href="#">Thể loại</a></li>
                <li><a href="#">Tác giả</a></li>
                <li><a href="#">Bài Viết</a></li>
            </ul>
        </nav>
    </header>

    <h1>Danh sách các loại hoa</h1>

    <div class="flower_container">
        <?php foreach ($flowers as $flower): ?>
            <div class="flower_item">
                <h2 class="card-title"><?php echo htmlspecialchars($flower['name']); ?></h2>
                <img class="card-img-top" src="<?php echo htmlspecialchars($flower['image']); ?>" alt="<?php echo htmlspecialchars($flower['name']); ?>">
                <p class="card-text"><?php echo htmlspecialchars($flower['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>&copy; 2024 Quản lý hoa | Nguyễn Văn Dũng - Đại học Thủy Lợi </p>
    </footer>
</body>

</html>
