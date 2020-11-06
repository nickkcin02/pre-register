
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <title>Koffie House </title>
  <link rel="icon" type = "pic"href="../pic/icon.ico">
  <style>
    body {
      font-family: "Montserrat";
    }
    body p {
      font-size: 13px;
    }
    body h3 {
      font-size: 20px;
      font-weight: bold;
    }
    body h6 {
      font-size: 15px;
    }
    #Login_BG {
      position: relative;
      /*background: rgb(36,55,117);*/
      background: linear-gradient(0deg, rgba(36,55,117) 20%, rgba(18,28,59) 100%);
      /*background-image: url(img/loginbg.png);*/
      background-repeat: no-repeat;
      position:absolute;
      top:0px;
      right:0px;
      bottom:0px;
      left:0px;
    }
    #prayuthlogo {
      position: relative;
    }

    #Container_BG {
      background: rgb(255,255,255);
      border-radius: 40px;
      padding-top: 30px;
      padding-bottom: 30px;
      padding-left: 50px; 
      padding-right: 50px; 
      margin-right: 60px;
      margin-top: 140px;
      float: right;
      width: 25%;
      height: 60%;
    }   

    #Container_BG input {
      border-radius: 20px;
    }
  </style>
</head>
<body>

  <div id="Login_BG">
    <center><img src="img/loginbg.png" style="width: 100%; position: absolute; left: 0; bottom: 0;"></center>
    <img src="img/name.png" style="width: 60%; position: absolute; left: 5%; top: 27%;">
    <div class="col-sm-4" id="Container_BG">
      <center><img src="img/prayuthlg.png" align="center" id="prayuthlogo"></center>
      <center><h3 style="padding-top: 20px">Sign In</h3>
      <h6 style="font-size: 13px">Enter your ID and password</h6>
      </center>
      <form method="post" style="padding: 10px">
       <div class="form-group" >
        <label for="username" style="font-size: 12px; font-weight: bold;">Lecturer ID or Student ID</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="ID" style="border-radius: 20px">
      </div>
      <div class="form-group">
        <label for="password" style="font-size: 12px; font-weight: bold;">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
    </form>
    <div align="center">
      <button type = "btn" class="btn btn-primary btn-lg" style="width: 40%; border-radius: 20px; font-size: 12px; font-weight: bold; background-color: #233975;" id="button">SIGN IN</button>
    </div>
  </div>




  <script>


    $("button").click(function(){
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var check = 1;
      if (username == "" || username == null) {
        document.getElementById("username").style.border = "2px solid #C61038";
        check = 0;
      }
      else {
        document.getElementById("username").innerHTML = "";
      }
      if (password == "" || password == null) {
        document.getElementById("password").style.border = "2px solid #C61038";
        check = 0;
      }
      else {
        document.getElementById("password").innerHTML = "";
      }

      console.log(password)
      if (check == 1) {
        $.ajax({
          url : "check-login.php",
          type: "post",
          data :{
            username:username,
            password:password
          },
          success: function(resp){
            console.log(resp);
            var data = JSON.parse(resp)
            console.log(data);
            if(data)
            {
              if ($_SESSION['user'] == "Student")
                window.location = '../welcome/?test=5';
              if ($_SESSION['user'] == "Lecturer") 
                window.location = '../welcome/?test=5';
            }
            else
            {
              swal('Invalid','Invalid username of password','error')
            }


          }
        })
      }

    });



  </script>


  <!-- <script src="../snowball.js"></script> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>


