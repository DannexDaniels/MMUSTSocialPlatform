<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/5/18
 * Time: 9:13 AM
 */

class AuthenticationModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getPasswordEmail($email){
        $query = $this->db->get_where('users',array('email' => $email));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function getPasswordPhone($phone){
        $query = $this->db->get_where('users',array('phone' => $phone));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function getPasswordNumber($no){
        $query = $this->db->get_where('users',array('userno' => $no));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function getCourses(){
        $query = $this->db->get('programme');
        return $query->result_array();
    }
}