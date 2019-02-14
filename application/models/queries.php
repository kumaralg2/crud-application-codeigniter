<?php
 class queries extends CI_Model{

     //Getting the list of posts in the database
     public function getPosts(){
        $query = $this->db->get('tbl_posts');  // Produces: SELECT * FROM mytable
        if($query -> num_rows() > 0){
            return $query-> result();
        }
     }
     //Adding a new post and stroing it to database
     public function addPost($data){
         return $this->db->insert('tbl_posts',$data);
     }
 
     //Getting a single post for the Update method
     public function getSinglePosts($id){
        $query = $this->db->get_where('tbl_posts', array('id' => $id));
        if($query -> num_rows() > 0){
            return $query-> row();
        } 
     }

     public function updatePost($data,$id){
        return $this->db->where('id',$id)
                        ->update('tbl_posts',$data);
         
     }

 }
 
?>