
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Koffie House </title>
    <link rel="icon" type = "pic"href="../pic/icon.ico">
  </head>
  <body>
    
      
    
    <?php  
      include 'nav-bar.php';
      if (isset($_SESSION["username"])) {
         header("Location:./welcome");
      }
    ?>
    <div align="center">
      <img src="../pic/logo.png">
    </div>
    <div class="container">
       <div class="row">
         <div class="col-sm-3">
            
         </div>
         <div class="col-sm-6">
          
            <form method="post" action="/check-login.php">
             <div class="form-group">
              <i class="fa fa-user"></i>
               <label for="username">Username </label>
               <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Username" required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
             </div>
             <div class="form-group">
                <i class="fa fa-lock"></i>
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
             </div>
             <div class="col-sm-12 " align="center">
          <button type = "btn" class="btn btn-primary btn-lg" style="width:30%" ><i class="fa fa-sign-in"></i> Log in</button>
             </div>
             
           </form>
         </div>
       </div>
    </div>
    

    <table width="600">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

<tr>
<td width="20%">Select file</td>
<td width="80%"><input type="file" name="file" id="file" /></td>
</tr>

<tr>
<td>Submit</td>
<td><input type="submit" name="submit" /></td>
</tr>

<?php

  if ( isset($_POST["submit"]) ) {

   if ( isset($_FILES["file"])) {

            //if there was an error uploading the file
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

        }
        else {
                 //Print file details
             echo "Upload: " . $_FILES["file"]["name"] . "<br />";
             echo "Type: " . $_FILES["file"]["type"] . "<br />";
             echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
             echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

                 //if file already exists
             if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
             }
             else {
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
            $storagename = "uploaded_file.txt";
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
            }
        }
     } else {
             echo "No file selected <br />";
     }
}
if ( isset($storagename) && $file = fopen( "upload/" . $storagename , r ) ) {

    echo "File opened.<br />";

    $firstline = fgets ($file, 4096 );
        //Gets the number of fields, in CSV-files the names of the fields are mostly given in the first line
    $num = strlen($firstline) - strlen(str_replace(";", "", $firstline));

        //save the different fields of the firstline in an array called fields
    $fields = array();
    $fields = explode( ";", $firstline, ($num+1) );

    $line = array();
    $i = 0;

        //CSV: one line is one record and the cells/fields are seperated by ";"
        //so $dsatz is an two dimensional array saving the records like this: $dsatz[number of record][number of cell]
    while ( $line[$i] = fgets ($file, 4096) ) {

        $dsatz[$i] = array();
        $dsatz[$i] = explode( ";", $line[$i], ($num+1) );

        $i++;
    }

        echo "<table>";
        echo "<tr>";
    for ( $k = 0; $k != ($num+1); $k++ ) {
        echo "<td>" . $fields[$k] . "</td>";
    }
        echo "</tr>";

    foreach ($dsatz as $key => $number) {
                //new table row for every record
        echo "<tr>";
        foreach ($number as $k => $content) {
                        //new table cell for every field of the record
            echo "<td>" . $content . "</td>";
        }
    }

    echo "</table>";
}
?>


</form>
</table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
        $('[data-rel=popover]').popover({
          html: true,
          trigger: "hover"
        });
    });
    </script>


    <!-- <script src="../snowball.js"></script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


