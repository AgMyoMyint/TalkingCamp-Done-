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