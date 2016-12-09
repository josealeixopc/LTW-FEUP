<?php

    function userExists($dbh, $username, $email){
        $res_name = getUserByName($dbh, $username);
        $res_email = getUserByEmail($dbh, $email);

        if($res_name == NULL && $res_email == NULL){
            return false;
        }
        else{
            return true;
        }
    }
    
    function getAllUsers($dbh){
        $stmt = $dbh->prepare('SELECT * FROM User');
        $stmt->execute(); 
        return $stmt->fetchall();
    }

    function getUserByName($dbh, $name){
        $stmt = $dbh->prepare('SELECT User.user_name FROM User WHERE User.user_name = ?');
        $stmt->execute(array($name)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

    function getUserByEmail($dbh, $email){
        $stmt = $dbh->prepare('SELECT User.user_name FROM User WHERE User.email = ?');
        $stmt->execute(array($email)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

    function getOwnersOfRestaurant($dbh, $restaurant_name){
        $stmt = $dbh->prepare('SELECT User.user_name
                               FROM User
                               INNER JOIN Owner
                               ON Owner.owner_id = User.user_id
                               INNER JOIN Restaurant_Owners
                               ON Restaurant_Owners.owner_id = Owner.owner_id
                               INNER JOIN Restaurant
                               ON Restaurant.restaurant_id = Restaurant_Owners.restaurant_id
                               WHERE Restaurant.restaurant_name = ?');
        $stmt->execute(array($restaurant_name));
        return $stmt->fetchall();
    }
    

?>