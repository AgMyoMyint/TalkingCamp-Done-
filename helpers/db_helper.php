<?php

function replyCount($topic_id){
    $db = new Database();
    $db->query("SELECT * FROM replies WHERE topic_id=:topic_id");
    $db->bind(':topic_id',$topic_id);

    $results = $db->resultset();
    return $db->rowCount();

}

function getCategories(){
    $db = new Database();
    $db->query("SELECT * from category");

    //Assign Result Set
    $results = $db->resultset();

    return $results;
}

 function getTotalTopicsCount(){
    $db = new Database();
    $db->query("SELECT * from topics");

    //Assign Result Set
    $results =$db->resultset();

    return $db->rowCount();
}
/*
* Get All Topics
*/
 function getTotalCategories(){
     $db = new Database();
     $db->query("SELECT * from category");

    //Assign Result Set
    $results = $db->resultset();

    return $db->rowCount();
}

 function getTotalTopics_count($id){
     $db = new Database();
     $db->query("SELECT * from topics where category_id = :id");
     $db->bind(":id",$id);
    //Assign Result Set
    $results = $db->resultset();

    return $db->rowCount();
}

function userPostCount($id){
    $db = new Database();
    $db->query("SELECT * from topics where user_id = :id");
    $db->bind(":id",$id);
    //Assign Result Set
    $results = $db->resultset();
    $topic_count = $db->rowCount();

    $db->query("SELECT * from replies where user_id = :id");
    $db->bind(":id",$id);
    //Assign Result Set
    $results = $db->resultset();
    $replies_count = $db->rowCount();

    return ($topic_count+$replies_count);
}
