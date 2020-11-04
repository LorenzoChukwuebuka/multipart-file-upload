<!DOCTYPE <!DOCTYPE html>
 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/materialize.css">
        <link rel="stylesheet" href="../fonts/material-icons.css">

         
    </head>
    <body> 
 
 
    
     <div class="container">

    <h3> Sign Up </h3>
      
        
  <div class="row">
    <form id="registerform" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div> 
        </div>

        <div class="row">
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div> 

      <div class="row">
        <div class="input-field col s6">
          <input  type="password"  name="confirmPass" class="validate">
          <label for="password">Confirm Password</label>
        </div>
      </div> 

      <button class="waves-effect waves-light btn" type="submit" name="submitreg" id="submit"><i class="material-icons left">send</i> Submit </button>

      <a class="waves-effect waves-light btn" href="../index.php"><i class="material-icons left">arrow_back</i> back</a>
      
      
    </form>
  </div>
        

  </div>
        
 
    </body>
</html>

<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/user.js"></script>


<script>
M.AutoInit();

</script>

