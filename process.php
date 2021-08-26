<?php 
    if(isset($_GET['hint'])){
        $name = $_GET['hint'];
        
        try{
            $db = new PDO('mysql:host=127.0.0.1;dbname=instagram;charset=utf8mb4', 'root', 'iamaprogrammer');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo $e->getMessage();
        }

        $query = $db->prepare("SELECT username FROM users WHERE username LIKE :name");
        $query->execute(array(":name" => "%$name%"));
        while($row = $query->fetch(PDO::FETCH_OBJ)){
            echo $row->username;
        }

    }
?>