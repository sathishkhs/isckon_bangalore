$(document).ready(function(){
    $('#loginform').validate({
        rules: {
           
            title: {
                required: true,
            },
          
            short_desc: {
                required: true,
            },
            campaign_desc: {
                required: true,
            },
            summary: {
                required: true,
            },
            campaign_category: {
                required: true,
            },
            goal_amount: {
                required: true,
            },
            start_date: {
                required: true,
            },
           
        },
        submitHandler: function(form) {
            // form.preventDefault();
            form.submit();
   
            // $.ajax({
            //     url : 'auth/login',
            //     method : 'POST',
            //     data : $(form).serialize(),
            //     dataType : 'json',
            //     beforeSend : function(){
            //         $('#loginsubmitbtn').attr('disabled','disabled');
            //     },
            //     success : function(data){
                
            //     //   console.log(data)
            //         if(data.success == 'error' && data.error == true){
            //             $('#success_message').html("<span class='error'>"+data.message+"</span>");
            //             if(data.email_error != ''){
            //                 $('#email_error').html("<span class='error'>"+data.email_error+"</span>");
            //             }else{
            //                 $('#email_error').html('');
            //             }
                       
            //             if(data.password_error != ''){
            //                 $('#password_error').html("<span class='error'>"+data.password_error+"</span>");
            //             }else{
            //                 $('#password_error').html('');
            //             }
                       
            //         }else if(data.success == 'success' && data.error == false){
            //             $('#success_message').html(data.message);
                       
            //             $('#email_error').html('');
            //             $('#mobile_number_error').html('');
            //             $('#password_error').html('');
            //             form.reset()
            //             alert(data.message);
            //             location.href = "myaccount";
            //         }
            //         $('#loginsubmitbtn').attr('disabled',false);

            //     }

            // })
        }
    })
})