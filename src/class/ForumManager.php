<?php
    require '../vendor/autoload.php';
class ForumManager{
    private $db;
    
    function __construct($param_db){
        $this->db = $param_db;
    }
    
    function createForum($forum_name,$forum_content)
    {
         $query = "insert into forums(
                forum_name,
                forum_content,
                forum_member_id,
                ) values(
                :forumName,
                :forumContent,
                :forumMemberId
                )";
        $f_id_test = 1;
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':forumName',$forum_name);
        $stmt->bindParam(':forumContent',$forum_name);
        $stmt->bindParam(':forumMemberId',$f_id_test);

        if($stmt->execute()){
            return true;
        }else{
            throw PDOException("Error cannot add forum to db");
        }
        
    }

    function editForum($editted_forum_id,$editted_forum_name,$editted_forum_content)
    {
        $query = "update forums set forum_name=:edited_forum_name,forum_content=:edited_forum_content where forum_id=:forum_id";
 
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':forum_id',$editted_forum_id);
        $stmt->bindParam(':edited_forum_name',$editted_forum_name);
        $stmt->bindParam(':edited_forum_content',$editted_forum_content);

        if($stmt->execute()){
            return true;
        }else{
            return false;
            throw PDOException("Error cannot edit forum to db");
        }
    }
    
    function deleteForum($delete_forum_name,$delete_forum_contet)
    {
        $query = "delete from forums where forum_id=:forum_id";
 
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':forum_id',$delete_forum_name);

        if($stmt->execute()){
            return true;
        }else{
            return false;
            throw PDOException("Error cannot edit forum to db");
        }
    }

    function getForums($db,$forum_id)
    {
        
    }
    
    
}

    





?>