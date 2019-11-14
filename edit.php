<?php
    include 'includes/header.php';
    include 'IUsers.php';
    $obj = new IUser;

    $user = $obj->getTheUser($_GET["userId"]);
    
?>
<div class="col-sm-4 mx-auto">
    <div class="myform-create">
        <form id="myUserFormUpdate"> 
            <div class="form-group">
                <label class="control-label" for="ufirstName">First name</label>
                <input name="firstName" id="ufirstName" value="<?php echo $user['first_name'] ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="ulastName">Last name</label>
                <input name="lastName" id="ulastName" value="<?php echo $user['surname'] ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="uemail">Email</label>
                <input name="email" id="uemail" value="<?php echo $user['email'] ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="uuserName">User name</label>
                <input name="username" id="uuserName" value="<?php echo $user['username'] ?>" class="form-control"/>
            </div>
            <input id="userIdHolder" value="<?php echo $user['id'] ?>" hidden />
            <button id="submitform" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
<?php
    include 'includes/footer.php';
?>