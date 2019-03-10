<?php

class comments

{
public $user_name;
public $user_comment;
public $user_email;


public function saveComments()
{
    global $conn;

    $_dtz= new DateTimeZone('Europe/London');
    $_date_created = new DateTime('',$_dtz);

    $sql = "INSERT INTO `_user_comments` SET 
            user_name=,
            user_comment = ,
            user_email =,
            web_page_id =,
            creator_id= 1,
            date_created='".$_date_created->format('d-m-Y H:i')."'";
}


    public function saveCommentsAllPosts()
    {
        $this->saveComments(web_page_id= 1);
    }

    public function saveCommentsWelcomePost()
    {
    }

    public function saveCommentsMaryPoppins()
    {
    }

    public function saveCommentsFortnumAndMasons()
    {

    }

}