<?php
/**
 * Created by PhpStorm.
 * User: Dannex Daniels
 * Date: 6/16/18
 * Time: 4:29 PM
 */

class Main extends CI_Controller
{
    public function index()
    {
        require_once(APPPATH.'controllers/Posts.php');

        $data['posts'] = $this->postsModel->getAllPosts();
        $data['page'] = 'index-page';

        $this->load->view('template/headfile');
        $this->load->view('template/nav_bar',$data);
        $this->load->view('home',$data);
        $this->load->view('template/footfile');
    }
}