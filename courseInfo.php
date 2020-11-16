
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Koffie House </title>
    <link rel="icon" type = "pic"href="../pic/icon.ico">
    <style>
        #Login_BG{
            background: rgb(9,9,121);
            background: linear-gradient(0deg, rgba(9,9,121,1) 20%, rgba(2,0,36,1) 100%, rgba(0,212,255,1) 100%);
            background-repeat: no-repeat;
            position:absolute;
            top:0px;
            right:0px;
            bottom:0px;
            left:0px;
        }   

        #Container_BG{
            background: rgb(255,255,255);
            border-radius:10px;
            padding: 20px; 
            margin-right: 40px;
            float: right;

        }   
    </style>
  </head>
  <body>
    <?php  
      include "nav-bar.php";
    ?>

    <div class="container">
      <div class="row">
        <div class="col-3" id="courseID"></div>
        <div class="col-5" id="courseName"></div>
        <div class="col-3" >
          <img id="lecturerPic">
        </div>
        <div class="col-1" id="section"></div>
      </div>
        
    </div>




    <script>
      $.ajax({
          url : "./ajax/db_courseInfo.php",
          type: "post",
          data :{
            studentID:<?php echo $_SESSION['userID']; ?>,
            openCourseID:<?php echo $_GET['openCourseID']; ?>,
            section:<?php echo $_GET['section']; ?>
          },
          success: function(resp){
              // console.log(resp);
              var data = JSON.parse(resp)
              console.log(data);

              document.getElementById("courseID").innerHTML = data[0]["courseID"];
              document.getElementById("courseName").innerHTML = data[0]["courseName"];
              document.getElementById("lecturerPic").setAttribute('src',data[0]["lecProfile"]);
              document.getElementById("section").innerHTML = data[0]["section"];
              // if(data)
              // {
              //   if ($_SESSION['user'] == "Student")
              //       window.location = '../welcome/?test=5';
              //   if ($_SESSION['user'] == "Lecturer") 
              //       window.location = '../welcome/?test=5';
              // }
              // else
              // {
              //   swal('Invalid','Invalid username of password','error')
              // }
               
              
          }
        })

    $("button").click(function(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var check = 1;
        if (username == "" || username == null) {
          document.getElementById("usernameHelp").innerHTML = "Please enter username!";
          check = 0;
        }
        else {
          document.getElementById("usernameHelp").innerHTML = "";
        }
        if (password == "" || password == null) {
          document.getElementById("passwordHelp").innerHTML = "Please enter password!";
          check = 0;
        }
        else {
          document.getElementById("passwordHelp").innerHTML = "";
        }
        
        console.log(password)
      if (check == 1) {
        
      }
      
    });



    </script>


    <!-- <script src="../snowball.js"></script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>


