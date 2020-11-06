
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
            /*background: rgb(36,55,117);*/
            background: linear-gradient(0deg, rgba(36,55,117) 20%, rgba(18,28,59) 100%);
            background-repeat: no-repeat;
            position:absolute;
            top:0px;
            right:0px;
            bottom:0px;
            left:0px;
        }   

        #Container_BG{
            background: rgb(255,255,255);
            border-radius: 40px;
            padding: 50px; 
            margin-right: 40px;
            margin-top: 200px;
            float: right;

        }   
    </style>
  </head>
  <body >
    
    
    <div id="Login_BG">

         <div class="col-sm-4" id="Container_BG">
          <center><img src="img/prayuthlg.png" align="center"></center>
            <form method="post">
             <div class="form-group" >
              <i class="fa fa-user"></i>
               <label for="username">Username </label>
               <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Username" >
               <small id="usernameHelp" class="form-text text-muted"></small>
             </div>
             <div class="form-group">
                <i class="fa fa-lock"></i>
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
               <small id="passwordHelp" class="form-text text-muted"></small>
             </div>
           </form>
            <div class="col-sm-12 " align="center">
                <button type = "btn" class="btn btn-primary btn-lg" style="width:30%" id="button"><i class="fa fa-sign-in"></i> Log in</button>
             </div>
           
         </div>
    
    </div>
    



    <script>


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


