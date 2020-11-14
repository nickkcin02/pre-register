
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
  <link rel="icon" href="./img/u.png">
  <title>PraYU</title>
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
    body h2 {
      font-weight: bold;
    }
    body h6 {
      font-size: 15px;
    }

    #prayuthlogo {
      position: relative;
    }


    .horizontal_container {
      display: flex;
      overflow-x: auto;
      top:0px;
      right:0px;
      bottom:0px;
      left:0px;
    }


    /* Modal Content */
    .modal-content {
      /*background-color: #C61038;*/
      margin: 25px;
      padding: 20px;
      border-radius: 0px;
      width: 300px;
      height: 300px;

    }



  </style>
</head>
<body>
  <?php  
    include "nav-bar.php";
  ?>
  <div id="containerBox" class="horizontal_container"> 
 </div>

<script>
  $.ajax({
    url : "./ajax/db_enrollableCourse.php",
    type: "post",
    data :{
      year: '<?php echo $_SESSION["year"];?>',
      faculty: '<?php echo $_SESSION["faculty"];?>',
      department: '<?php echo $_SESSION["department"];?>'
    },
    success: function(resp){
      // console.log(resp);
      var data = JSON.parse(resp)
      console.log(data);
      const bigBox = document.getElementById('containerBox');
      var prev_openCourseID = 0;
      var prev_section = 0;
      var timeElement;
      for (const i in data) {
        if (prev_openCourseID == data[i]['openCourseID'] && prev_section == data[i]['section']) {
          timeElement.innerHTML += "<br>" +data[i]['classType'] + "<br>" +data[i]['classDay'] + " " + data[i]['classStart'] + "-" +data[i]['classEnd'];
        }
        else {
          const box = document.createElement('div');
          const verticalBox = document.createElement('div');
          verticalBox.setAttribute('class','row');

          const courseID = document.createElement('div');
          courseID.setAttribute('class','col-10');
          courseID.innerHTML = data[i]['courseID'];

          const section = document.createElement('div');
          section.setAttribute('class','col-2');
          section.innerHTML = data[i]['section'];

          const courseName = document.createElement('div');
          courseName.innerHTML = data[i]['courseName'];

          const courseTime = document.createElement('div');
          timeElement = courseTime;
          courseTime.innerHTML =  data[i]['classType'] + "<br>" +data[i]['classDay'] + " " + data[i]['classStart'] + "-" +data[i]['classEnd'];

          box.setAttribute('class','modal-content');
          verticalBox.appendChild(courseID);
          verticalBox.appendChild(section);
          box.appendChild(verticalBox);
          box.appendChild(courseName);
          box.appendChild(courseTime);
          
          // box.innerHTML = data[i]['courseName'];

          // console.log(data[i]['courseName']);
          bigBox.appendChild(box);

          prev_openCourseID = data[i]['openCourseID'] ;
          prev_section = data[i]['section'] ;
        }
      }



    }
  })
</script>


  <!-- <script src="../snowball.js"></script> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>


