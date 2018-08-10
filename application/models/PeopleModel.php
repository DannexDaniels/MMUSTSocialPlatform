<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/8/18
 * Time: 5:05 PM
 */

class PeopleModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertUser($data){
        //inserting data into the table user
        $this->db->insert('users',$data);
    }

    function insertStudent($data){
        //inserting data into the table user
        $this->db->insert('student',$data);
    }

    function insertLecturer($data){
        //inserting data into the table user
        $this->db->insert('lecturer',$data);
    }

    function getUser($data){
        $sql = "SELECT * FROM `all_students` WHERE userno = $data OR email = $data OR phone = $data";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function getMyPosts($data){
        $query = $this->db->get_where('posts',array('posted_by' => $data));
        return $query->result_array();
    }

    function getUserId($data){
        $query = $this->db->get_where('users',array('phone' => $data));
        return $query->row()->userno;
    }

}