<?php include("db_connect.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<LINK href="stylesheet.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="header">
			<img src="logo.jpg"/>
		</div>
		<div class="body">
			<table padding-left="5px" cellspacing="0">
			<tr><td class="blank"></td>
			
			
			<td class="tab2"><a href="home.php">home</a></td>
			<td class="tab1">profile</td>
			<td class="tab3"><a href="calendar.php">calendar</a></td>
			<td class="tab4"><a href="groups.php">groups</a></td>
			<td class="login"><font color="#ffffff">Welcome! | </font><a href="logout.php"> logout</a></td>
			</tr></table>

			<table cellspacing="0"><tr>
			<td class="content"><h2>
			<?php
			  $name = $_SESSION['username'];			  
			  echo $name;
			?>
			</h2><h4> 
			
			<table>
			<tr><td>
			<?php
			  $name = $_SESSION['username'];			 
			  $query = "select Avatar from users WHERE username = '$name'";
			  $result = mysqli_query($db, $query);
			  
			  while($row = mysqli_fetch_array($result)){
				$content = $row['Avatar'];				
				echo("<h5><img src= $content /></h5>");
			}			
			?>			
			</tr></td>
			
			<tr><td>About Me 
			<?php
			  $name = $_SESSION['username'];			 
			  $query = "select Bio from users WHERE username = '$name'";
			  $result = mysqli_query($db, $query);
			  
			  while($row = mysqli_fetch_array($result)){
				$content = $row['Bio'];				
				echo("<h5>$content</h5>");
			}			
			?>
			</td></tr>
			<tr><td>
			My Email:
		    <?php
			  $name = $_SESSION['username'];			 
			  $query = "select email from users WHERE username = '$name'";
			  $result = mysqli_query($db, $query);
			  
			  while($row = mysqli_fetch_array($result)){
				$content = $row['email'];				
				echo("<h5>$content</h5>");
			}			
			?>
			</tr></td>
			
			
			</h4></td></tr>
			
			</table
		</div>
		<a href="editprofile.php">edit profile</a>
	</body>
</html>