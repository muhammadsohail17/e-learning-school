function addStd(){
    var std_name = $("#stdregname").val();
    var std_email = $("#stdregemail").val();
    var std_password = $("#stdregpassword").val();

    $.ajax({
        url:"student/addstudent.php",
        method:"POST",
        data:{
            std_name,
            std_email,
            std_password,
        },
        success:function(data){
            console.log(data);
        }
    })
}