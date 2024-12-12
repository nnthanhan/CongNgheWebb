<?php
$host = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "sinhvien_db"; 

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


$sinhvien = [];


$sql = "SELECT * FROM sinhvien";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sinhvien[] = $row; 
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách tài khoản</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>username</th>
                    <th>password</th>
                    <th>lastname</th>
                    <th>firstname</th>
                    <th>city</th>
                    <th>email</th>
                    <th>course1</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kiểm tra nếu mảng sinh viên không rỗng
                if (!empty($sinhvien)) {
                    // Hiển thị từng sinh viên trong bảng
                    foreach ($sinhvien as $sv) {
                        echo "<tr>";
                        echo "<td>{$sv['username']}</td>";
                        echo "<td>{$sv['password']}</td>";
                        echo "<td>{$sv['lastname']}</td>";
                        echo "<td>{$sv['firstname']}</td>";
                        echo "<td>{$sv['city']}</td>";
                        echo "<td>{$sv['email']}</td>";
                        echo "<td>{$sv['course1']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Không có dữ liệu sinh viên.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
