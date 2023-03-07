$(document).ready(function(){
    $('#registerform').validate({
        rules: {
            full_name : {
                required : true,
                lettersonly:true
            },
            email: {
                required: true,
                email: true
            },
            mobile_number : {
                required: true,
                number:true,
                minlength : 10,
                maxlength: 10,
            },
            password: {
                required: true,
                minlength : 8,
                maxlength: 16,
                password: true
            },
            confirm_password: {
                required: true,
                minlength: 8,
                maxlength: 16,
                equalTo: "#password",
                password:true
            }
        },
        submitHandler: function(form) {
            // form.preventDefault();
            // form.submit();
           
            $.ajax({
                url : 'auth/register',
                method : 'POST',
                data : $(form).serialize(),
                dataType : 'json',
                beforeSend : function(){
                    $('#registersubmitbtn').attr('disabled','disabled');
                },
                success : function(data){
                   
                    if(data.success == 'error' && data.error == true){
                        $('#success_message').html("<span class='error'>"+data.message+'</span>');
                        if(data.name_error != ''){
                            $('#name_error').html("<span class='error'>"+data.name_error+"</span>");
                        }else{
                            $('#name_error').html('');
                        }
                        if(data.email_error != ''){
                            $('#email_error').html("<span class='error'>"+data.email_error+"</span>");
                        }else{
                            $('#email_error').html('');
                        }
                        if(data.mobile_number_error != ''){
                            $('#mobile_number_error').html("<span class='error'>"+data.mobile_number_error+"</span>");
                        }else{
                            $('#mobile_number_error').html('');
                        }
                        if(data.password_error != ''){
                            $('#password_error').html("<span class='error'>"+data.password_error+"</span>");
                        }else{
                            $('#password_error').html('');
                        }
                        if(data.confirm_password_error != ''){
                            $('#confirm_password_error').html("<span class='error'>"+data.confirm_password_error+"</span>");
                        }else{
                            $('#confirm_password_error').html('');
                        }
                    }else if(data.success == 'success' && data.error == false){
                        $('#success_message').html(data.message);
                        $('#name_error').html('');
                        $('#email_error').html('');
                        $('#mobile_number_error').html('');
                        $('#password_error').html('');
                        $('#confirm_password_error').html('');
                        form.reset()
                        alert(data.message);
                    }
                    $('#registersubmitbtn').attr('disabled',false);

                }

            })
        }
    })


    $('#loginform').validate({
        rules: {
           
            email: {
                required: true,
                email: true
            },
          
            password: {
                required: true,
                minlength : 8,
                maxlength: 16,
                password: true
            },
           
        },
        submitHandler: function(form) {
            // form.preventDefault();
            // form.submit();
   
            $.ajax({
                url : 'auth/login',
                method : 'POST',
                data : $(form).serialize(),
                dataType : 'json',
                beforeSend : function(){
                    $('#loginsubmitbtn').attr('disabled','disabled');
                },
                success : function(data){
                
                //   console.log(data)
                    if(data.success == 'error' && data.error == true){
                        $('#success_message').html("<span class='error'>"+data.message+"</span>");
                        if(data.email_error != ''){
                            $('#email_error').html("<span class='error'>"+data.email_error+"</span>");
                        }else{
                            $('#email_error').html('');
                        }
                       
                        if(data.password_error != ''){
                            $('#password_error').html("<span class='error'>"+data.password_error+"</span>");
                        }else{
                            $('#password_error').html('');
                        }
                       
                    }else if(data.success == 'success' && data.error == false){
                        $('#success_message').html(data.message);
                       
                        $('#email_error').html('');
                        $('#mobile_number_error').html('');
                        $('#password_error').html('');
                        form.reset()
                        alert(data.message);
                        location.href = "myaccount";
                    }
                    $('#loginsubmitbtn').attr('disabled',false);

                }

            })
        }
    })
})