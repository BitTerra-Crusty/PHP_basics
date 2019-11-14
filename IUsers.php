<?php
include 'users.php';


class IUser extends User{
    
    public function __construct()
    {
        $this->firstName = "";
        $this->lastName = "";
        $this->email = "";
        $this->userName = "";
        $this->password = "";
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    public function setpassword($password)
    {
        $this->password = $password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getUserName()
    {
        $this->userName;
    }
    public function getpassword()
    {
        return $this->password;
    }

    public function createUser($firstName, $lastName, $email,$userName,$password)
    {
        $sql = "INSERT INTO users(first_name, surname, email, username, password) VALUES('$firstName', '$lastName', '$email', '$userName', '$password');";
        
        $results = $this->connection()->query($sql);
        //header("location: allUsers.php?signup=success");
    }
    public function updateUser($firstName, $lastName, $email,$userName,$userId)
    {
        $sql = "UPDATE users SET first_name = '$firstName', surname = '$lastName', email = '$email', username = '$userName' where id = '$userId';";
        $results = $this->connection()->query($sql);
    }

    public function getUser($username)
    {
        // just checking if the user exist can also return a user if i wanted to;

        $stmt = $this->connection()->prepare("SELECT * FROM users WHERE username=? OR email=?");
      
        $stmt->execute([$username,$username]);
        if($stmt->rowCount())
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function getTheUser($userId)
    {
        // just checking if the user exist can also return a user if i wanted to;

        $stmt = $this->connection()->prepare("SELECT * FROM users WHERE id=?");
      
        $stmt->execute([$userId]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        return $results;
    }
   
    public function getAllUsers()
    {
        $results = $this->connection()->query("SELECT * FROM users");
      
        while($row = $results->fetch())
        {
            $data[] = $row;
        }

        return $data;
    }
    public function deleteUser($userId)
    {
        $results = $this->connection()->prepare("DELETE FROM users WHERE id=?");
        $results->execute([$userId]);
    }
    public function __destruct()
    {
        echo "";
    }
}