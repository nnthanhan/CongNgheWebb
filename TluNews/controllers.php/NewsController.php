
<?php
require_once(__DIR__ . '/../models/News.php');
class NewsController
{
    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }

    // Method to handle adding news
    public function addNews()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $created_at = date('Y-m-d H:i:s');
            // Handle image upload
            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = '/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/assets/images/';
                $imagePath = $uploadDir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
                $image = $imagePath;
            }

            // Use model to add news
            $this->newsModel->addNews($title, $content, $image, $category, $created_at);

            header('Location: /2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/dashboard.php');
        }
    }
    // Method to handle editing news
    public function editNews()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $created_at = date('Y-m-d H:i:s');
            // Handle image upload
            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = '/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/assets/images/';
                $imagePath = $uploadDir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
                $image = $imagePath;
            }

            $this->newsModel->editNews($id, $title, $content, $image, $category);

            header('Location: /2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/dashboard.php');
            exit();
        }

        // If GET request, show the edit form with the existing data
    }
    // Method to handle deleting news
    public function deleteNews()
    {
        $id = $_POST['id'];

        $this->newsModel->deleteNews($id);

        // Redirect to news list after deleting
        header('Location: /2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/dashboard.php');
        exit();
    }
}
