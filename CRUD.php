<?php
 include 'IUsers.php';
 if(isset($_GET["btn"]))
 {
    if($_GET["btn"] == "allUsers")
    {
        $obj = new IUser;
    
    echo json_encode($obj->getAllUsers());
    }
    
  }
  elseif(isset($_POST["btnAdd"]))
  {
    if($_POST["btnAdd"] == "addUser")
    {
        $f_name = htmlspecialchars($_POST['firstName']);
        $l_name = htmlspecialchars($_POST['lastName']);
        $u_name = htmlspecialchars($_POST['userName']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $obj1 = new IUser;

        if($obj1->getUser($u_name) == true || $obj1->getUser($email) == true)
        {//avoiding duplicate by checking the email or the username if it already exists on the DB
            echo "exists";
        }
        else
        {
            $obj1->createUser($f_name,$l_name, $email, $u_name, $password);
            echo "OK";
        }
    }
  }
  elseif(isset($_POST["btnDel"]))
  {
    if($_POST["btnDel"] == "del")
    {
        $user_id = htmlspecialchars($_POST['userId']);

        $obj1 = new IUser;

        $obj1->deleteUser($user_id);
        echo "OK";
    }
   
  }
  elseif(isset($_POST["btnUpdate"]))
  {
    if($_POST["btnUpdate"] == "updateUser")
    {
        $f_name = htmlspecialchars($_POST['firstName']);
        $l_name = htmlspecialchars($_POST['lastName']);
        $u_name = htmlspecialchars($_POST['userName']);
        $email = htmlspecialchars($_POST['email']);
        $userId = htmlspecialchars($_POST['userId']);

        $obj1 = new IUser;
       //update needed a validation of duplicate for email and user name just like you create
        $obj1->updateUser($f_name,$l_name, $email, $u_name, $userId);
        echo "OK";
        
    }
  }
 

    
