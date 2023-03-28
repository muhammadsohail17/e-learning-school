$(document).ready(function() {
    //Ajax call form Already Exists email varification
    $("#stdregemail").on("focusout", function(){
        let std_email = $("#stdregemail").val();
        $.ajax({
            "url": "student/addstudent.php",
            "method": "POST",
            "dataType": "json",
            "data": {
              "operation": "email_validation",
              "std_email":std_email,
            },
            success: function(data) {
              if(data.status) {
                $("#errorMsg2").html('<small style="color:green;">'+data.message+'</small>');
                $("#signup").attr("disabled", false);
              } else {
                $("#errorMsg2").html('<small style="color:red;">'+data.message+'</small>');
                $("#signup").attr("disabled",true);
              }
            },
            error: function(textStatus, errorThrown) {
                console.log("An error occurred. Status:", textStatus, "Error thrown:", errorThrown);
              }
        })
    })
})

function addStd() {
    let email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let std_name = $("#stdregname").val();
    let std_email = $("#stdregemail").val();
    let std_password = $("#stdregpassword").val();

    //Checking form fields on form submission
    if(std_name.trim() === "") {
        $("#errorMsg1").html('<small style="color:red;">Please Enter Name</small>');
        $("#stdregname").on('focus');
        return false;
    } else if (std_email.trim() === "") {
        $("#errorMsg2").html('<small style="color:red;">Please Enter Email</small>');
        $("#stdregemail").on('focus');
        return false;
    } else if (std_email.trim() != "" && !email_regex.test(std_email)) {
        $("#errorMsg2").html('<small style="color:red;">Please Enter valid Email e.g. example@mail.com</small>');
        $("#stdregemail").on('focus');
        return false;
    } else if (std_password.trim() === "") {
        $("#errorMsg3").html('<small style="color:red;">Please Enter Password</small>');
        $("#stdregpassword").on('focus');
        return false;
    } else {
        $.ajax({
            "url": "student/addstudent.php",
            "method": "POST",
            "dataType": "json",
            "data": {
              "std_name":std_name,
              "std_email":std_email,
              "std_password":std_password
            },
            success: function(data) {
              console.log(data);
        
              if (data.status) {
                $("#successMsg").html("<span class='alert alert-success'>Registration successful</span>");
                clearStdRegField();
              } else if (data.status) {
                $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>")
              } else {
                $("#successMsg").html("<span class='alert alert-warning'>Unknown response</span>")
              }
            },
            error: function(textStatus, errorThrown) {
              console.log("An error occurred. Status:", textStatus, "Error thrown:", errorThrown);
            }
      
          });
    }
}

//Ajax call for student Login verification
function checkStdLogin() {
    // code to be executed when the element is clicked
    let stdLogEmail = $("#stdloginemail").val();
    let stdLogPassword = $("#stdloginpassword").val();
    $.ajax({
        "url": "student/addstudent.php",
            "method": "POST",
            "data": {
              "checkLogemail":"checklogmail",
              "stdLogEmail":stdLogEmail,
              "stdLogPassword":stdLogPassword
            },
            success: function (data) {
                console.log(data);
                if(data.status){
                    console.log("worked corectyl");
                    $("#loginMsg").html('<small class="alert alert-danger">'+data.message+'</small>');
                } else if (data.status) {
                    $("#loginMsg").html('<div class="spinner-border text-success" role="status">'+data.message+'</div>');
                }
            
            },
            error: function(textStatus, errorThrown) {
                console.log("An error occurred. Status:", textStatus, "Error thrown:", errorThrown);
              }
    })
}

  //Empty All Fields
  function clearStdRegField(){
    $("#stdRegForm").trigger("reset");
    $("#errorMsg1").html(" ");
    $("#errorMsg2").html(" ");
    $("#errorMsg3").html(" ");
  }