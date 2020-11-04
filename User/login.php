<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x-files</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../fonts/material-icons.css">
    <style>
html,
body,
.login-box {
  height: 100%;
}
    </style>

    
</head>
<body> 

<div class="container">

<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m6 l4 pull-l4">
    <form id="loginform">
      <div class="card-content">
        <span class="card-title">Enter credentials</span>
        <div class="row">
          <div class="input-field col s12">
            <label for="username">User name </label>
            <input type="text" class="validate" name="UserName"   />
          </div>
          <div class="input-field col s12">
            <label for="password">Password </label>
            <input type="password" class="validate" name="password"   />
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        
        <button type="submit" id="submitlogin" class="btn green waves-effect waves-light" > login </button>
        <a class="btn green waves-effect waves-light" href="register.php" value="Sign Up"> Sign Up </a>
      </div>
    </form>
  </div>
</div>
            
</div>
</div>
</body>


</html>

<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/login.js"></script>


<script>
M.AutoInit();

 

</script>