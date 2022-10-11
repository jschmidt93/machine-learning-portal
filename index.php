<!DOCTYPE html>
<html lang="en" style="background-color: #1c1c1c">

<head>

  <link href="./styles.css" rel="stylesheet" type="text/css" media="all" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/81c2c05f29.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#grid').on("click", function() {
        $('.home-resource-row').removeClass('list-view').addClass('grid-view');
      });

      $('#list').on("click", function() {
        $('.home-resource-row').removeClass('grid-view').addClass('list-view');
      });
    });
  </script>
  <title>Machine Learning Portal</title>
  <style>
    * {
      box-sizing: border-box;
    }

    [class*="col-"] {
      float: left;
      padding: 15px;
    }

    .col-1 {
      width: 8.33%;
    }

    .col-2 {
      width: 16.66%;
    }

    .col-3 {
      width: 25%;
    }

    .col-4 {
      width: 33.33%;
    }

    .col-5 {
      width: 41.66%;
    }

    .col-6 {
      width: 50%;
    }

    .col-7 {
      width: 58.33%;
    }

    .col-8 {
      width: 66.66%;
    }

    .col-9 {
      width: 75%;
    }

    .col-10 {
      width: 83.33%;
    }

    .col-11 {
      width: 91.66%;
    }

    .col-12 {
      width: 100%;
    }

    .resource-container {
      display: block;
      width: 90%;
    }

    .home-resource-row {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #D9D9D9;
      min-height: 150px;
      width: 100%;
      margin: 20px;
      padding: 20px;
      border-radius: 20px;

    }

    .home-resource-row:hover {
      /* justify-content: center;
      align-items: center; */
      background-color: #bfbdbd;
      /* min-height: 200px;
      width: 100%;
      margin: 20px;
      padding: 20px;
      border-radius: 20px; */

    }


    .home-resource-topic {
      text-align: center;
      text-transform: uppercase;
      font-size: 25px;
    }

    .home-resource-description {
      color: #5b5c5b;
    }

    .home-resource-media-preview {
      color: #5b5c5b;
      text-align: center;
    }

    .list-view {
      display: flex;
      width: 100%;
    }

    .grid-view {
      display: inline-grid;
      width: 20%;
    }

    @media only screen and (max-width: 768px) {
      [class*="col-"] {
        width: 100%;
      }

      .home-resource-description {
        text-align: center;
      }

      .home-resource-row {
        display: inline-block;
        width: 100%;
      }
    }
  </style>
</head>
<div>
  <div class="home-container">
    <header data-role="Header" class="home-header">
      <img alt="image" src="https://i.postimg.cc/Pf3ndv6Q/PortalML.png" loading="eager" class="home-image" />
      <a href="index.php" target="_blank" rel="noreferrer noopener" class="home-link">
        Home
      </a>
      <a href="about.php" target="_blank" rel="noreferrer noopener" class="home-link1">
        <span class="home-text">About</span>
        <br />
      </a>
      <a href="get-help.php" target="_blank" rel="noreferrer noopener" class="home-link2">
        Get Help
      </a>
      <div class="home-icon-group">
        <div data-type="BurgerMenu" class="home-burger-menu">
          <svg viewBox="0 0 1024 1024" class="home-icon">
            <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
          </svg>
        </div>
        <form id="form" role="search">
          <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
          <button class="search-button"><svg viewBox="0 0 1024 1024">
              <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
            </svg></button>
        </form>
      </div>
      <!-- <form method="post" action="">
        <select name = "viewOption" class="home-select" onchange="this.form.submit()">
          <option value="List View" selected>List View</option>
          <option value="Grid View">Grid View</option>
        </select>
      </form> -->
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
    <span>
      <button id="list">List</button>
      <button id="grid">Grid</button>
    </span>

    <?php
require_once "connection.php";
$resource_id = "";
$resource_topic = "";
$resource_description = "";
$resource_type = "";
$resource_keywords = "";
$resource_links = "";
$resource_user = "";

$view_option = $_POST["viewOption"];

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// establist connection with database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//set charset to utf-8
$conn->set_charset("utf8");
//create sql
$sql = "SELECT * FROM resources ORDER BY RAND()";
$result = $conn->query($sql);
echo '<ul class= "resource-container">';
while ($row = mysqli_fetch_assoc($result)) {
    $resource_id = $row["id"];
    $resource_topic = $row["topics"];
    $resource_description = $row["Description"];
    $resource_type = $row["Type"];
    $resource_keywords = $row["keywords"];
    $resource_links = $row["Links"];
    $resource_user = $row["userID"];
    echo '
        <li class="home-resource-row">
          <div class="home-resource-topic col-3">
          ' . $resource_topic . '
          </div>
          <div class="home-resource-description col-6">
          ' . $resource_description . '
          </div>
          <div class ="home-resource-media-preview col-3">
          ' . $resource_type . '
          </div>
        </li>
      ';
}
echo '</ul>'
?>
  </div>

</html>