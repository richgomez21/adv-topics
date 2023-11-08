<?php

class PageDataAccess{



    // private instance variable
    private $link;



    // constructor
    function __construct($link){
        $this->link = $link;
    }



    // functions
    function getAll(){
        // making a query below
        $query1 = "SELECT * FROM pages WHERE published IS NOT NULL";
        // below, running the query
        $result = mysqli_query($this->link, $query1);
        // var_dump($result);

        // looping though all the rows and scrubbing the data below
        $allPosts = [];

        // every time the below function is called, it returns a row, looping in the while loop until all the rows are gone through
        while($row = mysqli_fetch_assoc($result)){
        // setting up an associative array
            $post = [];
            // htmlentities() scrubs out things like <> and turns them into html entity characters
            $post["id"] = htmlentities($row["id"]);
            $post["title"] = htmlentities($row["title"]);
            $post["description"] = htmlentities($row["description"]);
            $allPosts[] = $post;
        }

        return $allPosts;
    }

    function getById($postId){

        $query =   "SELECT * 
                    FROM pages
                    WHERE id = " . $postId . " AND published IS NOT NULL";

        $result = mysqli_query($this->link, $query);
    
        if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_assoc($result);
            // var_dump($row);
            $post['title'] = htmlentities($row['title']);
            $post['description'] = htmlentities($row['description']);
            $post['content'] = $row['content'];
            // echo($post['content']);
            
            return $post;
        }else{

            throw new Exception("INVALID POST ID");
        }
    }

}