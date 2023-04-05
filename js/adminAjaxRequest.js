//Ajax call for admin Login verification
function checkAdminLogin() {
    // code to be executed when the element is clicked
    let adminLogEmail = $("#adminloginemail").val();
    let adminLogPassword = $("#adminloginpassword").val();
    $.ajax({
            "url": "Admin/admin.php",
            "method": "POST",
            "dataType": "json",
            "data": {
              "checkLogemail":"checklogmail",
              "adminLogEmail":adminLogEmail,
              "adminLogPassword":adminLogPassword
            },
            success:function(data) {
                console.log(data);
                if(data.status === 0){
                    $("#adminLoginMsg").html('<small class="alert alert-danger">'+data.message+'</small>');
                } else if(data.status === 1)  {
                    $("#adminLoginMsg").html('<small class="alert alert-success">'+data.message+'</small>');
                    setTimeout(() => {
                        window.location.href = "Admin/adminDashboard.php";
                    },1000);
                } else {
                    $("#adminLoginMsg").html('<small class="alert alert-success">'+data.message+'</small>');
                }
            },            
            error: function(textStatus, errorThrown) {
                console.log("An error occurred. Status:", textStatus, "Error thrown:", errorThrown);
              }
    });
}