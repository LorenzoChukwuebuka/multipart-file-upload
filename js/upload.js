    $('#uploadfile').submit(function(e){
        e.preventDefault();//prevent form submit

        let mode;
        if($('#mode').prop('checked') == true){
            mode = 0;
        } else if($('#mode').prop('checked') == false){
            mode = 1;
        }    
        
        let fileToUpload = $('input[name="fileToUpload"]')[0].files[0];
        let userId = $('#userId').val();
        
        //Cr8 formDat coz of tranfering file to server
        let fData = new FormData();

        fData.append('mode',mode);
        fData.append('fileToUpload',fileToUpload);
        fData.append('userId',userId);    
        fData.append('fileUpload', true);

        //MAKE AJAX CALL TO SUBMIT FORMWITH FILE
        $.ajax({
            type:'POST',
            url:'../server/processupload.php',
            data: fData,
            processData: false,
            contentType: false,
            success: function (res){              
             if(res == 2){
                 M.toast({html:'Please make sure that your file is either jpg,png,mp3 and mp4'});
             }else if(res == 3){
                 M.toast({html:'File already exists'});
             } else if(res == 200){
                 M.toast({html:'File uploaded Successfully'});
             }
               
            },error:function(){
                M.toast({html:'Server error'});
            },timeout:3500
        });



    });