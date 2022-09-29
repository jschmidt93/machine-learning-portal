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
<select class="home-select">
  <option value="List View" selected>List View</option>
  <option value="Grid View">Grid View</option>
</select>
        </div>
        <a href="login.php">
        <button type="button" class="home-button button" class="login-button">Login</button></a>
        <a href="admin.php">
          <button type="button" class="admin-button">Admin</button>
        </a>
        <div data-type="MobileMenu" class="home-mobile-menu">
          <nav class="home-nav">
            <div class="home-container1">
              <img
                alt="image"
                src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                class="home-image1"
              />
              <div data-type="CloseMobileMenu" class="home-close-mobile-menu">
                <svg viewBox="0 0 1024 1024" class="home-icon06">
                  <path
                    d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                  ></path>
                </svg>
              </div>
            </div>
          </nav>
          <div>
            <svg viewBox="0 0 950.8571428571428 1024" class="home-icon08">
              <path
                d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
              ></path></svg>
            <svg viewBox="0 0 877.7142857142857 1024" class="home-icon10">
              <path
                d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
              ></path></svg>
            <svg viewBox="0 0 602.2582857142856 1024" class="home-icon12">
              <path
                d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
              ></path>
            </svg>
          </div>
        </div>
      </header>
      <div class="home-learning">
        <div class="home-container2">
          <learningPostCard2>
            <div
              class="learning-post-card2-learning-post-card learning-post-card2-root-class-name3"
            >
              <img
                alt="image"
                src="https://imageio.forbes.com/specials-images/dam/imageserve/966248982/960x0.jpg?format=jpg&width=960"
                image_src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1000"
                class="learning-post-card2-image"
              />
              <div class="learning-post-card2-container">
                <div class="learning-post-card2-container1">
                  <span class="learning-post-card2-text"><span>BEGINNER</span></span>
                  <span class="learning-post-card2-text1">
                    <span>Last Updated</span>
                  </span>
                </div>
                <h1 class="learning-post-card2-text2">
                  <span>An Introduction To Machine Learning.</span>
                </h1>
                <span class="learning-post-card2-text3">
                  <span>
                    This is where the brief description of what you can expert to
                    take away from this learning node when you've completed all of
                    the material.
                  </span>
                </span>
                <div class="learning-post-card2-container2">
                  <div class="learning-post-card2-profile">
                    <span class="learning-post-card2-text4">
                      <span>Creator's Username</span>
                    </span>
                  </div>
                  <span class="learning-post-card2-text5">
                    Go To Learning Node -&gt;
                  </span>
                </div>
              </div>
            </div>
          </learningPostCard2>
        </div>
        <div class="home-container3">
          <learningPostCard2>
            <div
              class="learning-post-card2-learning-post-card learning-post-card2-root-class-name"
            >
              <img
                alt="image"
                src="https://vestorlyblog.com/wp-content/uploads/2019/08/machine-learning-ecommerce-blog-1-1.jpg"
                image_src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1000"
                class="learning-post-card2-image"
              />
              <div class="learning-post-card2-container">
                <div class="learning-post-card2-container1">
                  <span class="learning-post-card2-text">
                    <span>INTERMEDIATE</span>
                  </span>
                  <span class="learning-post-card2-text1">
                    <span>Last Updated</span>
                  </span>
                </div>
                <h1 class="learning-post-card2-text2">
                  <span>How Machine Learning Is Benefitting You.</span>
                </h1>
                <span class="learning-post-card2-text3">
                  <span>
                    This is where the brief description of what you can expert to
                    take away from this learning node when you've completed all of
                    the material.
                  </span>
                </span>
                <div class="learning-post-card2-container2">
                  <div class="learning-post-card2-profile">
                    <span class="learning-post-card2-text4">
                      <span>Creator's Username</span>
                    </span>
                  </div>
                  <span class="learning-post-card2-text5">
                    Go To Learning Node -&gt;
                  </span>
                </div>
              </div>
            </div>
          </learningPostCard2>
        </div>
        <learningPostCard2>
          <div
            class="learning-post-card2-learning-post-card learning-post-card2-root-class-name2"
          >
            <img
              alt="image"
              src="https://www.springboard.com/blog/wp-content/uploads/2019/05/ai-vs.-machine-learning-vs.-deep-learning-whats-the-difference1.png"
              image_src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1000"
              class="learning-post-card2-image"
            />
            <div class="learning-post-card2-container">
              <div class="learning-post-card2-container1">
                <span class="learning-post-card2-text"><span>EXPERT</span></span>
                <span class="learning-post-card2-text1">
                  <span>Last Updated</span>
                </span>
              </div>
              <h1 class="learning-post-card2-text2">
                <span>The Machine Learning Theory</span>
              </h1>
              <span class="learning-post-card2-text3">
                <span>
                  This is where the brief description of what you can expert to
                  take away from this learning node when you've completed all of
                  the material.
                </span>
              </span>
              <div class="learning-post-card2-container2">
                <div class="learning-post-card2-profile">
                  <span class="learning-post-card2-text4">
                    <span>Creator's Username</span>
                  </span>
                </div>
                <span class="learning-post-card2-text5">
                  Go To Learning Node -&gt;
                </span>
              </div>
            </div>
          </div>
        </learningPostCard2>
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