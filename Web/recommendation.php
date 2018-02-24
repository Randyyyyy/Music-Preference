
<?php
$connection = mysqli_connect('localhost','root','1234','user');
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus?">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Preference Choose</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>


  <style>
	.Select{
	margin-TOP:100PX;
	margin-left:750PX;
	}

	h1{
	margin-TOP:20PX;
	margin-left:400PX;
	font-size:60PX;
	}
  </style>
 </head>

 <body>
<h1>Welcome to Music Preference!</h1>


<?php
$song_1 = mysqli_fetch_assoc(mysqli_query($connection,"Select name from user.recommend limit 1"));
$song_2 = mysqli_fetch_assoc(mysqli_query($connection,"Select name from user.recommend limit 1,1"));
$song_3 = mysqli_fetch_assoc(mysqli_query($connection,"Select name from user.recommend limit 2,1"));
$ss1 = $song_1['name'];
$ss2 = $song_2['name'];
$ss3 = $song_3['name'];
?>

<div class="Select">
<form method="post" action="re.php">

<a href="http://www.google.com/search?q=<?php echo $ss1 ?>" target="_blank"><?php echo $ss1 ?></a>
<input type="text" name="song1" value="<?php echo $ss1 ?>" hidden>

<br>
<select id="r_1" name="Rating_1">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br>
<br>
<a href="http://www.google.com/search?q=<?php echo $ss2 ?>" target="_blank"><?php echo $ss2 ?></a>
<input type="text" name="song2" value="<?php echo $ss2 ?>" hidden>
<br>
<select id="r_2" name="Rating_2">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br>
<br>
<a href="http://www.google.com/search?q=<?php echo $ss3 ?>" target="_blank"><?php echo $ss3 ?></a>
<input type="text" name="song3" value="<?php echo $ss3 ?>" hidden>
<br>
<select id="r_3" name="Rating_3">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br>
<br>
<input type="submit" value="Next" />
<br>

 </body>
</html>
