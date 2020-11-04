$(document).ready(function(){ 

$('#registerform').submit(function(e){
  e.preventDefault();
 

   
   let fName = $('input[name="first_name"]').val();
   let lName = $('input[name="last_name"]').val();
   let Pass = $('input[name="password"]').val();
   let Pass1 = $('input[name="confirmPass"]').val(); 

    if(fName != "" && lName != "" && Pass != "" && Pass == Pass1){
     
      $.ajax({ 
        type: 'POST',
        url: '../server/processUser.php',
        data: {first_name: fName, last_name: lName, password:Pass, submitReg:true},
        success: function(data){
          if(data == 1){
            M.toast({html:'Successfull loggged created an account. Pleas click <a href="login.php"> Here </a> to login '});
      
          }
        
        }, error: function(){ 
          //network error 
          M.toast({html:'server not found'});
        },timeout:3500


      });
    }else{
      M.toast({html:'Make sure all inputs are properly filled and password matches'});
    } 
   
}); 

/*   **************************************************************************************  */
});