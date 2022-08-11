<?php
class model
{
    public $username = "";
    public $message = "";

    //general
    function db_conn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecommarce";

        try {
            $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }

    function addUser($data){

        $conn = $this->db_conn();
        $insertQuery = "INSERT into user (name, email, username,password, gender, dob)
        VALUES (:name, :email, :username, :password, :gender, :dob)";
            try{
                $stmt = $conn->prepare($insertQuery);
                $stmt->execute([
                    ':name'               =>     $data["name"],
                    ':email'          =>      $data["email"],
                    ':username'     =>    $data["username"],
                    ':password'     =>     $data["password"],
                    ':gender'     =>      $data["gender"],
                    ':dob'     =>      $data["dob"]
                ]);

            }catch(PDOException $e){
                $conn = null;
                return false;
            }
            $conn = null;

        return true;

    }

    function viewProfile($username){
        $conn = $this->db_conn();
        $selectQuery = "SELECT * FROM `user` where username = ?";
    
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$username]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;

        if(!empty($data)){
            return $data;
        }
        return "";
    }

    function getAllProduct(){
        $conn = $this->db_conn();
        $products = array();
        $selectQuery = 'SELECT * FROM `product`';
        try{
            $stmt = $conn->query($selectQuery);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;

        return $products;
    }

    function updateUser($user){
        $conn = $this->db_conn();
        $updateUser = "UPDATE user set name = ?, email = ?, gender = ?, dob=? where username = ?";
        try{
            $stmt = $conn->prepare($updateUser);
            $stmt->execute([
                $user['name'], $user['email'], $user['gender'], $user['dob'], $user['username']
            ]);
        }catch(PDOException $e){
            echo "Update ".$e->getMessage();
        }
        $conn = null;
        return "Information changed!";
       }

       function change_picture($learner){
        $conn = $this->db_conn();
        $selectQuery = "UPDATE `learner_info` SET `image`= ? WHERE `id` = ?";
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                $learner["picture"],
                $learner["id"]
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;
       }

    function getProduct($data){
        $q = '%'.$data.'%';
        $conn = $this->db_conn();
        $products = array();
        $selectQuery = "SELECT * FROM `product` WHERE `name` LIKE  :q1 OR category LIKE :q2 OR `model` LIKE :q3";
        try{
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':q1'  =>  $q,
                ':q2'  =>  $q,
                ':q3'  =>  $q,
            ]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;

        return $products;
    }

    function login($username, $password){
        $conn = $this->db_conn();
        $selectQuery = "SELECT * FROM `user` where username = ?";

        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$username]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;

        if (!empty($data)) {
            if ($data['password'] == $password) {
                return $data;
            } else {
                return null;
            }
        }

    }


}
?>