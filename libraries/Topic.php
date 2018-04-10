<?php

class Topic{

    //initialize DB Variable
    private $db;

    /*
     *  Constructor
     */

    public function __construct()
    {
        $this->db = new Database();
    }

    /*
     * Get All Topics
     */
    public function getAll_Topics(){
        $this->db->query("SELECT topics.*,users.username,users.avatar, category.name
                            FROM topics
                            INNER JOIN users
                                ON topics.user_id = users.id
                            INNER JOIN category
                                ON topics.category_id = category.id
                            ORDER BY create_date DESC"
        );

        //Assign Result Set
        $results = $this->db->resultset();

        return $results;
    }
    /*
   * Get All Topics
   */
    public function getTotalCategories(){
        $this->db->query("SELECT * from category");

        //Assign Result Set
        $results = $this->db->resultset();

        return $this->db->rowCount();
    }
    /*
   * Get All Topics
   */
    public function getTotalTopics(){
        $this->db->query("SELECT * from topics");

        //Assign Result Set
        $results = $this->db->resultset();

        return $this->db->rowCount();
    }

    function getAll_Topics_by_category_id($id){

        $this->db->query("SELECT topics.*,users.username,users.avatar, category.name
                            FROM topics
                            INNER JOIN users
                                ON topics.user_id = users.id
                            INNER JOIN category
                                ON topics.category_id = category.id where category_id = :id ORDER BY create_date DESC");
        $this->db->bind(":id",$id);
        //Assign Result Set
        $results = $this->db->resultset();

        return $results;
    }
    function getAll_Topics_by_user_id($id){

        $this->db->query("SELECT topics.*,users.username,users.avatar, category.name
                            FROM topics
                            INNER JOIN users
                                ON topics.user_id = users.id
                            INNER JOIN category
                                ON topics.category_id = category.id where user_id = :id ORDER BY create_date DESC");
        $this->db->bind(":id",$id);
        //Assign Result Set
        $results = $this->db->resultset();

        return $results;
    }
    function getAll_TopicsReplies_by_user_id($id){

        $this->db->query("SELECT topics.*,users.username,users.avatar, category.name, replies.*
                            FROM topics
                            INNER JOIN users
                                ON topics.user_id = users.id
                            INNER JOIN category
                                ON topics.category_id = category.id 
                                INNER JOIN replies
                                ON topics.id = replies.topic_id
                                where user_id = :id ORDER BY replies.create_date DESC");
        $this->db->bind(":id",$id);
        //Assign Result Set
        $results = $this->db->resultset();

        return $results;
    }
    function get_Topics_by_id($id){

        $this->db->query("SELECT users.username,users.avatar, replies.*
                            FROM replies
                            INNER JOIN users
                                ON replies.user_id = users.id
                            INNER JOIN topics 
                                ON topics.id = replies.topic_id 
                                where replies.topic_id = :id 
                                ORDER BY replies.create_date ASC");
        $this->db->bind(":id",$id);
        //Assign Result Set
        $results = $this->db->resultset();

        return $results;
    }
    function get_Topic_by_id($id){

        $this->db->query("SELECT topics.*,users.username,users.avatar, category.name
                            FROM topics
                            INNER JOIN users
                                ON topics.user_id = users.id
                            INNER JOIN category
                                ON topics.category_id = category.id where topics.id = :id ");
        $this->db->bind(":id",$id);
        //Assign Result Set
        $results = $this->db->single();

        return $results;
    }

}