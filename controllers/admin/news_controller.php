<?php
require_once('controllers/admin/base_controller.php');
class NewsController extends BaseController
{
    function __construct()
    {
        $this->folder = 'news';
    }
    public function index()
    {
        $this->render('index');
    }
    public function add()
    {
        $this->render('add');
    }
    public function edit()
    {
        $this->render('edit');
    }
    public function delete()
    {
        $this->render('delete');
    }
}
?>