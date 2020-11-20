<!doctype html>
<html lang="en">
<head>
  <style>
    .Login_BG {
      /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&0+0,1+65 */
      background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 65%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 65%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */

      position:absolute;
      top:0px;
      right:0px;
      bottom:0px;
      left:0px;
    }   

    .Container_BG {
      background: rgb(255,255,255);
      border-radius:10px;
      padding: 20px; 
      margin-right: 40px;
      float: right;
    } 
    .backbtn {
      transition-duration: 0.3s;
      cursor: pointer;
    }
    .backbtn:hover {
      background-color: #D4DEFA;
    }  
  </style>
</head>

<body>
  <?php  
  include "nav-bar.php";
  ?>
  <center><img src="../img/loginbg.png" style="width: 100%; position: absolute; left: 0; top: 0;"></center>
  <div class="Login_BG" style="margin-top: 80px; padding-bottom: 100px;">
    <div class="้horizontal-container">
      <div class="col-1" style="height: 100px;">
        <button onclick="goBack()" class="btn backbtn" style="text-align: left; height: 40px; width: 110px; background-color: #ffffff; border-radius: 20px; margin-top: 40px; margin-left: 30px; border-color: #233975; border-width: 2px; font-weight: 600; color: #233975; font-size: 20px; padding: 0;">
          <div class="row" style="padding-left: 13px; padding-right: 13px;">
            <img src="img/leftarrow.png" style="height: 30px; margin-left: 10px; margin-top: 3px;">
            <p style="width: 50px; margin-left: 8px; margin-top: 3px;">Back</p>
          </div>
        </button>
      </div>
    </div>
    <div class="container" style="position: relative; padding-top: 10%;">
      <div class="col-12" style="border-radius: 50px; height: 100px; background-color: #233975; position: absolute; overflow: hidden;">
        <div id="courseID" style="display: inline-block; font-weight: 700; color: #ffffff; font-size: 80px; height: 100px; position: relative; bottom: 10px; float: left;"></div>
        <div id="courseName" style="display: inline-block; font-size: 25px; position: absolute; font-weight: 700; color: #ffffff; width: 340px; margin-top: 13px; margin-left: 10px; float: left;"></div>
        <div class="dot" id="section" style="height: 80px; width: 80px; border-radius: 50%; position: absolute; right: 10px; top: 10px; color: #ffffff; font-weight: 700; font-size: 20px; padding-top: 10px;"></div>
      </div>
      <div class="dot" style="width: 300px; height: 300px; background-color: #233975; border-radius: 50%; position: absolute; z-index: 3; left: 740px; top: 40px; padding-top: 20px;">
        <div class="dot" style="height: 260px; width: 260px; border-radius: 50%; text-align: center; margin: auto;"><img id="lecturerPic" style="border-radius: 50%; width: 100%; object-fit: cover;"></div>
      </div>
      <div style="height: 50px; width: 550px; border-radius: 25px; background-color: #1A9776; position: relative; top: 120px; padding-top: 5px;">
        <div style="height: 40px; width: 540px; border-radius: 25px; background-color: #D83737; margin: auto;">
          <!-- use .style.width to change the length of the red bar (calculate percent of the followers, put in var and assign to style.width) and put the number followers here! -->
        </div>
      </div>
      <button class="btn" style="height: 50px; width: 150px; border-radius: 25px; background-color: #F7544E; position: relative; top: 70px; left: 565px; font-weight: 700; font-size: 20px; color: #ffffff; text-align: center; padding-top: 7px;">Follow
      </button>
      <div class="row col-12" style="border-radius: 50px; height: 450px; background-color: #233975; position: absolute; top: 380px; box-shadow: 0 0 20px #868686; padding: 20px;">
        <div><h2 style="font-weight: 700; color: #ffffff; position: relative; top: 20px; left: 20px; height: 60px;">ABOUT THIS COURSE</h2></div>
        <div class="row" style="border-radius: 35px; height: 410px; width: 410px; background-color: #ffffff; position: relative; top: 0px; right: -350px; padding: 10px;">
          <div class="col-12" style="font-weight: 700; font-size: 28px; color: #233975; height: 50px;">CLASS TIME
            <div class="col-2" style="height: 3px; background-color: #233975"></div>
          </div>
          <!-- class time -->
          <div class="col-6" style="font-weight: 700; font-size: 20px; color: #233975; position: relative; top: -20px; height: 100px;">Lab - MON<br>9:00AM - 11:00AM<br>CB30510</div>
          <div class="col-6" style="font-weight: 700; font-size: 20px; color: #233975; position: relative; top: -20px; height: 100px;">Lecture - THU<br>9:00AM - 11:00AM<br>CB30510
            <div style="height: 120px; width: 2px; background-color: #233975; position: relative; top: -120px; left: -20px;"></div>
          </div>
          <!-- class time -->
          <div class="col-12" style="font-weight: 700; font-size: 28px; color: #C61038; height: 50px; position: relative; top: 0px;">EXAMINATION DATES
            <div class="col-2" style="height: 3px; background-color: #C61038"></div>
          </div>
          <div class="col-6" style="font-weight: 700; color: #C61038; position: relative; top: -10px; height: 100px;"><p style="font-size: 25px;">Midterm</p><p>October 1, 2020<br>9:00AM - 11:00AM</p></div>
          <div class="col-6" style="font-weight: 700; color: #C61038; position: relative; top: -10px; height: 100px;"><p style="font-size: 25px;">Final</p><p>December 12, 2020<br>9:00AM - 11:00AM</p>
            <div style="height: 120px; width: 2px; background-color: #C61038; position: relative; top: -120px; left: -20px;"></div>
          </div>
        </div>
        <div style="width: 580px; height: 400px; color: #ffffff; position: relative; top: -350px; left: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris suscipit ornare neque in porttitor. Fusce eu iaculis risus. Vivamus sem orci, aliquet id dui ut, vulputate auctor urna. In finibus purus at quam bibendum, ac rhoncus libero rhoncus. Morbi ornare, quam non dapibus tempor, ipsum sem porta metus, congue feugiat ipsum purus vel lectus. Cras mattis porta quam, in dignissim nisl feugiat nec. Nulla facilisi. Duis fermentum justo nec velit. </div>
        <button class="btn" style="text-align: center; height: 60px; width: 280px; background-color: #ffffff; border-radius: 30px; font-weight: 600; color: #233975; font-size: 20px; padding: 0; position: relative; left: -558px; top: -60px;">
          <p style="margin-top: 13px;">Download Syllabus</p>
        </button>
        <button class="btn" style="text-align: center; height: 60px; width: 280px; background-color: #ffffff; border-radius: 30px; font-weight: 600; color: #233975; font-size: 20px; padding: 0; position: relative; left: 320px; top: -460px;">
          <p style="margin-top: 13px;">Go to Class Forum</p>
        </button>
      </div>
      <div class="row col-12" style="height: 100px; position: relative; top: 700px;"></div>
    </div>
  </div>




  <script>
    // $(function() {
    //   while( $('#fitin div').height() > $('#fitin').height() ) {
    //     $('#fitin div').css('font-size', (parseInt($('#fitin div').css('font-size')) - 1) + "px" );
    //   }
    // });
    function goBack() {
      window.history.back();
    }
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
              if (data[0]["courseName"].length <= 15) {
                document.getElementById("courseName").style.marginTop = "30px";
                document.getElementById("courseName").innerHTML = data[0]["courseName"];
              }
              else {
                document.getElementById("courseName").innerHTML = data[0]["courseName"];
              }
              document.getElementById("lecturerPic").setAttribute('src',data[0]["lecProfile"]);
              if (data[i]['surveySection'] == 1) {
                document.getElementById("section").style.backgroundColor = "#DB7600";
              }
              else {
                document.getElementById("section").style.backgroundColor = "#000000";
              }
              document.getElementById("section").innerHTML = "<center>SEC<br>" + data[0]["section"] + "</center>";
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


