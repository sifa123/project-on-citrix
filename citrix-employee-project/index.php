<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(photo-1606857521015-7f9fcf423740.jpg);
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 18px;
  color: red;
  text-align: center;
  padding: 14px 26px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
  margin-right: 30px;
}

.dropdown .dropbtn {
  font-size: 18px;  
  border: none;
  outline: none;
  color: red;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: olive;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}





.neon {
  color: #fff;
  text-shadow:
    0 0 5px #fff,
    0 0 10px #fff,
    0 0 20px #fff,
    0 0 40px #0ff,
    0 0 80px #0ff,
    0 0 90px #0ff,
    0 0 100px #0ff,
    0 0 150px #0ff;
}




:root {
  font-size: calc(1vw + 1vh + 1.5vmin);
}

html, body {
  height: 100%;
  margin: 0;
}

.container {
  margin: 0 auto;
}



h3 {
  font-weight: 400;
  text-align: center;
  color: black;
  text-transform: uppercase;
}
</style>
</head>
<body>

<div class="navbar">
  <b><a href="index.php" style="font-size: 28px;">CITRIX</a></b>
  <div class="dropdown">
    <button class="dropbtn"><b>Sectors</b> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sectorlogin.php">Web Development</a>
       <a href="sectorlogin.php">Graphics</a>
      <a href="sectorlogin.php">Marketing</a>
      <a href="sectorlogin.php">R & D</a>
    </div>
  </div> 
</div>

<br><br><br><br><br><br>
<div class="container">
  <h3 class="neon">Your Office work will be easily done!!</h3>
</div>

</body>
</html>
