
<?php  

session_start();


if (!isset($_SESSION["username"])) {
  ?>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">POS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      <form class="navbar-inline my-2 my-lg-0">
        <a href="../register" class="btn bg-success text-white my-2 my-sm-0"><b>Register</b></a>
        <a href="../" class="btn btn-outline-primary my-2 my-sm-0"><b>Login</b></a>
      </form>
    </div>
  </nav>
  
<?php }
else if ( $_SESSION["role"] == 'Student' ){
  ?>

  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../welcome"><i class="fa fa-home fa-lg"></i> Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="../welcome/?page=1"><i class="fa fa-file-text-o fa-lg"></i> Book List</a> </li>
        <li class="nav-item"> <a class="nav-link" href="../welcome/?page=2"><i class="fa fa-shopping-cart fa-lg"></i> Book Lend</a> </li>
        <li class="nav-item"> <a class="nav-link" href="../welcome/?page=3"><i class="fa fa-shopping-cart fa-lg"></i> Lend History</a> </li>
        
      </ul>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      <form class="navbar-inline my-2 my-lg-0">
        <a href="../logout.php" class="btn btn-danger"><i class="fa fa-sign-out"></i><b> Log out </b></a>
      </form>
    </div>
  </nav>


<?php }
  else if ( $_SESSION["role"] == 'Admin' ){
  ?>

  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../welcome"><i class="fa fa-home fa-lg"></i> Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        
      </ul>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      <form class="navbar-inline my-2 my-lg-0">
        <a href="../logout.php" class="btn btn-danger"><i class="fa fa-sign-out"></i><b> Log out </b></a>
      </form>
    </div>
  </nav>


<?php }
?>
