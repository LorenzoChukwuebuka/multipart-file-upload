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
                console.log(res);
               
            }
        });



    });