$(document).ready(function(){
    // login 

$('#loginform').submit(function(e){ 

    e.preventDefault();
  
    let uName = $('input[name="UserName"]').val();
    let Pass = $('input[name="password"]').val(); 
  
    if(uName != '' && Pass != ""){
  
      $.ajax({ 
        type:'POST',
        url: '../server/processLogin.php',
        data:{UserName: uName, password: Pass, submitlogin:true},
        success: function(data){
          if(data == 200){ 
            M.toast({html:'successfully logged in'});

            setInterval(function(){ 

                window.location.href="../UI/userspage.php";
             }, 1000);
           
          
          }
          else{
              M.toast({html:'Incorrect details'});
          }
        },error:function(){
            M.toast({html:'Server error'});
        },timeout:3500
  
  
      });
  
     // M.toast({html:'welcome'});
    }else{
      M.toast({html:'please fill in the details'});
    }
  
     
  
  });
  
  
  

});
