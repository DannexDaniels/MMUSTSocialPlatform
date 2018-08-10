<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/9/18
 * Time: 6:22 AM
 */

class People extends CI_Controller
{
    function profile($user){
        $data['profile'] = $this->peopleModel->getUser($user);
        $data['posts'] = $this->peopleModel->getMyPosts($data['profile']['userno']);
        $data['page'] = 'profile-page';

        $this->load->view('template/headfile');
        $this->load->view('template/nav_bar',$data);
        $this->load->view('profile',$data);
        $this->load->view('template/footfile');
    }
}