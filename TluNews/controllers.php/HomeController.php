<?php
require_once __DIR__ . '/../models/Category.php';

class HomeController
{
    public function handleAjaxSearch()
    {
        if (isset($_GET['category'])) {  // Changed from POST to GET
            $this->searchByCategory($_GET['category']);
        }
    }

    private function searchByCategory($categoryId)
    {
        try {
            $categoryModel = new Category();
            $news = $categoryModel->getNewsByCategory($categoryId);
            require_once __DIR__ . '/../views/home/search_results.php';
        } catch (\PDOException $e) {
            echo '<div class="alert alert-danger">Lỗi kết nối cơ sở dữ liệu</div>';
        }
    }
    private $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }
    public function index()
    {
        $news = $this->newsModel->getAllNews();
        header('Location: /2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/home/index.php');
    }
    public function detail()
    {
        $id = $_GET['id'];
        $new = $this->newsModel->getNewsById($id);
        require_once __DIR__ . '/../views/news/detail.php';
    }
}