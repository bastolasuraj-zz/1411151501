<?php
    function checkUserName($username="Hello"){
        $regex="/^[a-zA-Z0-9]*$/";
        if (!preg_match($regex,$username)){
            return "only alpha-numeric";
        }else{
            return "HAHAHA";
        }
    }
    
    function insertQuery (){
        
    }
    
    function selectQuery ($what="*",$table="users",$criteria=""){
        global $dbconnect;
        $sql = "SELECT ".$what;
        $sql.= " FROM ".$table;
        if(!empty($criteria)){
            $sql.= " WHERE ".$criteria;
        }
        $query = mysqli_query($dbconnect,$sql);
        if(!$query){
            die("NOT ACCEPTED");
        }
    }

    function updateQuery (){
        
    }
    
    function deleteQuery ($table="",$criteria=""){
        global $dbconnect;
        $sql = "DELETE FROM ".$table;
        $sql.= " WHERE ".$criteria;
    }
?>
