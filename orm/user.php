<?php

class user
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function checkUser($email, $password)
    {
        $db = $this->db;
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = filter_var($password, FILTER_SANITIZE_ENCODED);

        $sql = "SELECT * FROM nguoidung WHERE matkhau = ? AND email= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $password, $email);
        $stmt->execute();
        $query = $stmt->get_result();

        if (mysqli_num_rows($query) > 0) {
            return $query;
        } else {
            return "";
        }
    }

    public function registerUser($name, $email, $password)
    {
        $db = $this->db;
        $name = filter_var($name, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        //hash khi tạo tk
        $password = md5(filter_var($password, FILTER_SANITIZE_ENCODED));
        // $password = filter_var($password, FILTER_SANITIZE_ENCODED);

        $sql = "Select * FROM nguoidung WHERE email = '$email'";
        if (mysqli_num_rows(mysqli_query($db, $sql)) > 0) {
            return false;
        } else {
            $sql = "INSERT INTO nguoidung (username, email, matkhau) 
                    VALUES (?,?,?) ";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $password);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
}
