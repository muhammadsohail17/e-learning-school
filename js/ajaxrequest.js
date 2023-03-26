// function addStd(){
//     var std_name = $("#stdregname").val();
//     var std_email = $("#stdregemail").val();
//     var std_password = $("#stdregpassword").val();


//     $.ajax({
//         url:"student/addstudent.php",
//         method:"POST",
//         dataType:"json",
//         data:{
//             std_name:std_name,
//             std_email:std_email,
//             std_password:std_password,
//         },
//         success:function(data){
//             console.log(data);
//             if(data == "Ok") {
//                 $('#successMsg').html("<span>Registration successfull.!</span>");
//             } else if (data == "Failed") {
//                 $("#successMsg").html("<span>Unable to Register</span>");
//             }
//         },
//         error: function(XMLHttpRequest, textStatus, errorThrown) {
//             console.log("An error occurred. Status:", textStatus, "Error thrown:", errorThrown);
//           }
//     })
// }

function addStd() {
    let std_name = $("#stdregname").val();
    let std_email = $("#stdregemail").val();
    let std_password = $("#stdregpassword").val();
  
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
  
        if (data === "Ok") {
          $("#successMsg").html("<span>Registration successful!</span>")
        } else if (data === "Failed") {
          $("#successMsg").html("<span>Unable to Register</span>")
        } else {
          $("#successMsg").html("<span>Unknown response</span>")
        }
      },
      error: function(textStatus, errorThrown) {
        console.log("An error occurred. Status:", textStatus, "Error thrown:", errorThrown);
      }
    

    });
  }