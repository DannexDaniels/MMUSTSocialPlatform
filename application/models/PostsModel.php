<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/18/18
 * Time: 3:54 PM
 */

class PostsModel extends CI_Model
{
    public function getPosts($category = 'All',$school = 'All'){
        $query = $this->db->get_where('posts',array('posted_to' => $category,'school' => $school));
        return $query->result_array();
    }

    public function getAllPosts($category = 'All',$school = 'All'){
        $query = $this->db->order_by('time','DESC')->get('all_posts');
        return $query->result_array();
    }

    public function countPost(){
        $query = $this->db->get('posts');
        return $query->num_rows();
    }

    function insertPost($data){
        //inserting data into the table user
        $this->db->insert('posts',$data);
    }

    function insertLike($data){
        $this->db->insert('likes',$data);
    }

    function insertDisLike($data){
        $this->db->insert('dislikes',$data);
    }

    function insertComment($data){
        $this->db->insert('comment',$data);
    }

    public function countLikes($post){
        $query = $this->db->get_where('posts',array('post' => $post));
        return $query->num_rows();
    }
}