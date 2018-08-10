<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/9/18
 * Time: 12:33 AM
 */

class Posts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function savePost(){
        $config['upload_path']          = './uploads/profilepics';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 300;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('picture'))
            {
                $id = $this->postsModel->countPost() + 1;

                $data = array(
                    'post_id' => 'POST'. $id,
                    'message' => $this->input->post('msg'),
                    'posted_by' => $_SESSION['userno'],
                    'posted_to' => $this->input->post('post_to'),
                    'school' => $this->input->post('school')
                );

                $this->postsModel->insertPost($data);

                redirect(base_url('home'));
            }
            else
            {
                $datas = array('upload_data' => $this->upload->data());
                $id = $this->postsModel->countPost() + 1;

                $data = array(
                    'post_id' => 'POST'. $id,
                    'message' => $this->input->post('msg'),
                    'posted_by' => $_SESSION['userno'],
                    'posted_to' => $this->input->post('post_to'),
                    'school' => $this->input->post('school'),
                    'photo' => $datas['upload_data']['file_name']
                );

                $this->postsModel->insertPost($data);

                redirect(base_url('home'));
            }
    }

    function likePost($post){
        $data = array(
            'post' => $post,
            'liked_by' => $this->peopleModel->getUserId($_SESSION['phone'])
        );

        $this->postsModel->insertLike($data);
        redirect(base_url('home'));

    }

    function disLikePost($post){
        $data = array(
            'post' => $post,
            'disliked_by' => $this->peopleModel->getUserId($_SESSION['phone'])
        );

        $this->postsModel->insertDisLike($data);
        redirect(base_url('home'));

    }

    function getLikeCount($post){
        return $this->postsModel->countLikes($post);
    }

}