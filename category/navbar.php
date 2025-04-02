<!-- <?php
// session_start();
?> -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ANSWERLY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../categories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../question.php">Ask</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../browse.php">Browse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search...</button>
      </form>
      <?php
      if (isset($_SESSION['user'])) {
        echo'<form method="post" action="server/requests.php">
              <button type="submit" name="logout" class="btn btn-outline-primary m-1">Logout</button>
            </form>';
      }else{
        echo '<a href="signup.php" class="btn btn-outline-primary m-1">Sign Up</a>
              <a href="login.php" class="btn btn-outline-primary m-1">Log In</a>';
      }
      ?>
      <!-- <a href="signup.php" class="btn btn-outline-primary m-1">Sign Up</a>
      <a href="login.php" class="btn btn-outline-primary m-1">Log In</a>
      <form method="post" action="server/requests.php">
        <button type="submit" name="logout" class="btn btn-outline-primary m-1">Logout</button>
      </form> -->
    </div>
  </div>
</nav>