<?php
    include 'includes/header.php';
    // include 'DBConn.php';
     //include 'users.php';
    //include 'IUsers.php';
?>
<div class="container-fluid">
<?php
    if(isset($_GET["signUp"]))
    {
        if($_GET["signUp"] == "success")
        {
            echo "<p class='alert-success'>congratulations you've been signed up succesfully</p>";
        }
        else{
            echo "<p class='alert-danger'>sorry there is an account with such username or email</p>";
        }
    }
    if(isset($_GET["Update"]))
    {
        if($_GET["Update"] == "success")
        {
            echo "<p class='alert-success'>congratulations your profile updated succesfully</p>";
        }
        else{
            echo "<p class='alert-danger'>sorry there is an account with such username or email</p>";
        }
    }
?>
<table class="users-table table table-sm w-80 table-striped">
    <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </thead>    
    <tbody>
    </tbody>  
</table>

<button hidden id="btngetAllUsers" onclick="getAllTheUsers()"></button> 
</div>
<script>
    //alertify.success('Ready!');
   document.getElementById("btngetAllUsers").click();
</script>
<?php
    include 'includes/footer.php';
?>