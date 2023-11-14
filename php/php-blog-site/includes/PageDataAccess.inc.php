<?php



function getById($postId){
   

    $qStr = "SELECT * FROM pages WHERE id = " . $postId . " AND published IS NOT NULL";
    // echo($qStr);
    $result = mysqli_query($link, $qStr);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        // var_dump($row);
        $post['title'] = htmlentities($row["title"]);
        $post['description'] = htmlentities($row["description"]);
        $post['content'] = ($row["content"]);
        // echo($post['content']);
        return $post;
       
    }        

}