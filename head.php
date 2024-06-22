<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .header {
      overflow: hidden;
  background-color: #ff0000;
  width: 100%;
  padding: 10px 0;
  color: white;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2); 
    }

    .header a {
      float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
  transition: background-color 0.3s, color 0.3s;
    }

    .header a.logo {
  padding: 0;
}

.header img.logo {
  height: 50px;
  vertical-align: middle;
}

    /* .header a.logo {
      font-size: 5px;
      font-weight: bold;
      color: #FF0404;
    } */

    .header a:hover {
  background-color: #fa4343; /* Darker shade of red */
  color: #fff; /* White text on hover */
  border-radius: 55px;
}

    .header-right {
      float: right;
    }

    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }
      .header-right {
        float: none;
        margin-top: 10px;
      }
    }

    .act {
      background: linear-gradient(to right, #fd746c, #ff9068);
      color: white;
      border-radius: 30px;
    }

    .logo img {
      height: 50px; 
      width: auto;
    }

    /* .logo2 img {
      height: 70px; 
      width: auto; 
    } */

  

  </style>
</head>
<body>
  <div class="header">
    <a href="home.php" class="logo <?php echo ($active == 'home') ? 'logo2' : ''; ?>">
      <img src="image/LOGO.png" alt="Blood Bank & Donation Logo">
    </a>
    <div class="header-right">
      <a href="about_us.php" class="<?php echo ($active == 'about') ? 'act' : ''; ?>">About Us</a>
     
      <a href="donate_blood.php" class="<?php echo ($active == 'donate') ? 'act' : ''; ?>">Become A Donor</a>
      <a href="need_blood.php" class="<?php echo ($active == 'need') ? 'act' : ''; ?>">Need Blood</a>
      <a href="blog.php" class="<?php echo ($active == 'blog') ? 'act' : ''; ?>">Blogs</a>
      <a href="Fund.php" class="<?php echo ($active == 'Fund') ? 'act' : ''; ?>">Fund Donate</a>
      <a href="contact_us.php" class="<?php echo ($active == 'contact') ? 'act' : ''; ?>">Contact Us</a>
    </div>
  </div>
</body>
</html>
