<!DOCTYPE html>
<html lang="en" style="background-color: #1c1c1c">
<head>
  <link href="./styles.css" rel="stylesheet" type="text/css" media="all"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/81c2c05f29.js"></script>
  <title>Machine Learning Portal</title>
</head>
<div>
    <div class="home-container">
      <header data-role="Header" class="home-header">
        <img
          alt="image"
          src="https://i.postimg.cc/Pf3ndv6Q/PortalML.png"
          loading="eager"
          class="home-image"
        />
        <a
          href="index.php" 
          target="_blank"
          rel="noreferrer noopener"
          class="home-link"
        >
          Home
        </a>
        <a
          href="about.php"
          target="_blank"
          rel="noreferrer noopener"
          class="home-link1"
        >
          <span class="home-text">About</span>
          <br />
        </a>
        <a
          href="get-help.php"
          target="_blank"
          rel="noreferrer noopener"
          class="home-link2"
        >
          Get Help
        </a>
        <div class="home-icon-group">
          <div data-type="BurgerMenu" class="home-burger-menu">
            <svg viewBox="0 0 1024 1024" class="home-icon">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
              ></path>
            </svg>
          </div>
          <form id="form" role="search">
  <input type="search" id="query" name="q"
   placeholder="Search..."
   aria-label="Search through site content">
  <button class="search-button"><svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></button>
</form>
        </div>
        <select class="home-select">
  <option value="List View" selected>List View</option>
  <option value="Grid View">Grid View</option>
</select>
        <a href="login.php">
        <button type="button" class="home-button button" class="login-button">Login</button></a>
        <a href="admin.php">
          <button type="button" class="admin-button">Admin</button>
        </a>
      </header>
      <div class="home-learning">
        <div class="home-container2">
      </div>
    </div>
  </div>
  
  <?php

  $con = new PDO("mysql:host=localhost; dbname=portal_user_db", 'root', '');

if(isset($_POST["submit"])){
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM 'learning_nodes' WHERE subject = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth-> execute();

  if($row = $sth->fetch()){

    echo $row->subject;
    echo $row->description;

    
  }
}
?>