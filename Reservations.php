<!DOCTYPE html>
<html>
<head>
	<title>Book An Event - Restaurant Website </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Menu.css">
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css">	
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css">		ss
	<![endif]-->
</head>
<body>
	<div id="header"> <!-- start of header -->
		<span class="signboard"></span>
		<ul id="infos">
			<li class="home"> 
				<a href="HomePage.php">HOME</a> 
			</li>
			
		</ul>
		<a href="index.php" id="logo"></a>
			<ul id="navigation">
		<li><a href="Appetizer.php"><span>Snacks</span></a></li>
			<li class="Menu.php"><a href="Menu.php"><span>Main Course</span></a></li>
			<li><a href="Dessert.php"><span>Desserts</span></a></li>
			<li><a href="Drinks.php"><span>Drinks</span></a></li>
		</ul><!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Book an Event</span></h2>
		<div id="booking">
			<form action="ReservationsInfo.php" method="post">
				<table>
					<tbody>
						<tr>
							<td colspan="2"><span>Your Name</span><input type="text" class="name" name="name" ></td>
							<td><span>Your Email</span><input type="text" name="email"></td>
						</tr>
						<tr>
							<td><span>Date</span><input type="text" name="date"></td>
							<td><span>No. of people</span><input type="text"  class="number" name="peopleNo"></td>
							<td>
								<span>Room Preference</span>
								<label for="outdoor"><input type="radio" class="radio" id="outdoor" name="preference">Outdoor</label>
								<label for="indoor"><input type="radio" class="radio" id="indoor" name="preference">Indoor</label>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<span>Is this a special occasion? Please tell us here?</span>
								<textarea name="special"></textarea>
								<input type="submit" value="Submit" class="button">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
	
		</div>
	</div> <!-- end of contents -->
	<div id="footer"> <!-- start of footer -->
		<ul class="advertise">
			<li class="delivery">
				<h2>Hungry? We Deliver</h2>
				<a href="menu.php">Download our Menu</a>
			</li>
			<li class="event">
				<h2>Party! Party!</h2>
				<p>Celebrate your</p>
				<p>Special Events with Us</p>
			</li>
			<li class="connect">
				<h2>Let's Keep in Touch</h2>
				<a class="fb" title="Facebook"></a> 
				<a s title="Twitter"></a>
			</li>
		</ul>
		<div>
			<ul class="navigation">
				<li><a href="Menu.php">Home</a></li>
				<li><a href="Reservations.php">Book an event</a></li>
				<li><a href="Aboutus.php">About</a></li>
				<li class="last selected"><a href="contact.php">Contact</a></li>
			</ul>
			<span>&copy; Copyright 2018. All Rights Reserved.</span>
		</div>
	</div> <!-- end of footer -->
</body>
</html>