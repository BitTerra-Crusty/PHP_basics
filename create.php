<?php
    include 'includes/header.php';
?>
<div class="col-sm-4 mx-auto">
    <div class="myform-create">
        <form id="myUserForm"> 
            <div class="form-group">
                <label class="control-label" for="firstName">First name</label>
                <input name="firstName" id="firstName" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="lastName">Last name</label>
                <input name="lastName" id="lastName" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input name="email" id="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="userName">User name</label>
                <input name="username" id="userName" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="rePassword">retype password</label>
                <input type="password" name="rePpassword" id="rePassword" class="form-control"/>
            </div>
            <button id="submitform" class="btn btn-success">submit</button>
        </form>
    </div>
</div>
<?php
    include 'includes/footer.php';
?>