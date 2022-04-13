<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
a
{
 font-style: times new roman;
 font-size:25;
 }
img {
    margin-left: 250px;
    margin-top: 45px;
    }
body {
  background-color:khaki;
}

h2 {
  text-align:center;
  font-size:45;
  color: maroon;
  margin-left: 40px;
}

</style>



</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">NAVIGATION BAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="E:/SL-III/Project/home.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
              <a class="nav-link" href="E:/SL-III/Project/coming.html">E-Paper <span class="sr-only">(current)</span></a>
            </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Subscribe
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost/sl-III/index.php">E-Paper</a>
            <a class="dropdown-item" href="E:/SL-III/Project/kform.html">Printed</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href ="E:/SL-III/Project/rform.html">Register</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            INDIA
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="E:/SL-III/Project/coming.html">North</a>
            <a class="dropdown-item" href="E:/SL-III/Project/coming.html">South</a>
  	        <a class="dropdown-item" href="E:/SL-III/Project/coming.html">East</a>
            <a class="dropdown-item" href="E:/SL-III/Project/coming.html">West</a>
          </div>
        </li>
  	<li class="nav-item active">
          <a class="nav-link" href="E:/SL-III/Project/coming.html">World <span class="sr-only">(current)</span></a>
        </li>
  	<li class="nav-item active">
          <a class="nav-link" href="E:/SL-III/Project/coming.html">Entertainment <span class="sr-only">(current)</span></a>
        </li>
  	<li class="nav-item active">
          <a class="nav-link" href="E:/SL-III/Project/coming.html">Technology <span class="sr-only">(current)</span></a>
        </li>
  	<li class="nav-item active">
          <a class="nav-link" href="E:/SL-III/Project/coming.html">Politics <span class="sr-only">(current)</span></a>
        </li>
  	<li class="nav-item active">
          <a class="nav-link" href="E:/SL-III/Project/coming.html">Sports <span class="sr-only">(current)</span></a>
        </li>
  	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Others
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="E:/SL-III/Project/coming.html">Rasrang</a>
            <a class="dropdown-item" href="E:/SL-III/Project/coming.html">Navrang</a>
  	  <a class="dropdown-item" href="E:/SL-III/Project/coming.html">Madhurima</a>
            <a class="dropdown-item" href="E:/SL-III/Project/coming.html">Bal Bhaskar</a>
          </div>
        </li>


  	<li class="nav-item active navbar-right">
          <a class="nav-link" href="E:/SL-III/Project/coming.html">Contact Us <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>


<?php
$addr='E:/SL-III/Project/coming.html';
echo '<a href="$addr">LINK</a>';
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<b><h2>Form for E-paper Subsription</h2></b>
<hr>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="2" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
