<?php
/**
 * Created by PhpStorm.
 * User: Dannex Daniels
 * Date: 8/4/18
 * Time: 6:19 AM
 */

class Authentication extends CI_Controller
{
    public function signUpStud()
    {
        $config['upload_path']          = './uploads/profilepics';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 300;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('picture'))
        {
            $error = array('error' => $this->upload->display_errors());

            echo '<script>alert("'.print_r($error).'")</script>';
        }
        else
        {
            $datas = array('upload_data' => $this->upload->data());

            $data = array(
                'fname' => $this->input->post('firstname'),
                'lname' => $this->input->post('lastname'),
                'userno' => $this->input->post('regno'),
                'gender' => $this->input->post('gender'),
                'dob' => $this->input->post('dob'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'user_type' => 'Student',
                'fname' => $this->input->post('firstname'),
                'yoj' => $this->input->post('jod'),
                'department' => $this->input->post('department'),
                'picture' => $datas['upload_data']['file_name']
            );

            $stud = array(
                'userno' => $this->input->post('regno'),
                'nick_name' => $this->input->post('nickname'),
            );

            $this->peopleModel->insertUser($data);

            $newbie = array(
                'user' => $this->input->post('regno'),
                'newbie' => TRUE
            );
            $this->session->set_userdata($newbie);

            redirect(base_url('login'));
        }

    }

    public function signIn(){
        $user = $this->input->post('user');
        $pass = $this->input->post('password');

        if ($this->authenticationModel->getPasswordEmail($user) != null){
            //print_r("entered is Email");
            $password = $this->authenticationModel->getPasswordEmail($user);
        }else if ($this->authenticationModel->getPasswordPhone($user) != null){
            //print_r("entered is Phone");
            $password = $this->authenticationModel->getPasswordPhone($user);
        }else if ($this->authenticationModel->getPasswordNumber($user) != null){
            //print_r("entered is Reg or Work Number");
            $password = $this->authenticationModel->getPasswordNumber($user);
        }else{
            echo "<Script>alert('User Does not exist');</Script>";

        }

        if (isset($password)){
            if ($password === $pass){
                $data = $this->peopleModel->getUser($user);
                $this->session->set_userdata($data);
                redirect(base_url('home'));
            }else{
                echo "<Script>alert('Password is incorrect');</Script>";
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function logout(){
        session_destroy();

        //loading the login form
        $this->load->view('template/signup_head');
        $this->load->view('login');
        $this->load->view('template/signup_foot');
    }
}