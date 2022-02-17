<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attandance Monitoring - Bukit Asam</title>
	<link rel="icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/styles/index.css" />
	<link rel="stylesheet" href="assets/styles/responsive.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="manifest" href="manifest.webmanifest"></link>
	<script defer src="assets/scripts/script.js"></script>

</head>
<body id="summary">
	<nav>
		<ul>
			<li><img class="nav_icon" src="assets/images/logoptba.png" alt="logo_ptba"></li>
		</ul>
	</nav>
	<header>
	<div class="jumbotron">
		<div class="headertext">
			<h1>Help You Managing <span style="background: var(--red); color: white; padding: 5px 15px;">Attendance Data. </span> </h1>
			<p>We serve all information of employee attendance data, make it easier to be organized. </p>	
			<a href="#choose_date" class="btnblue">Start Now <i class="fa fa-angle-right" style="margin-inline-start: 10px;"></i></a>
		</div>
		<figure>
			<img src="assets/images/homeillus.svg" alt="illustration">
		</figure>
	</div>
	</header>
	<section id="choose_date">
		<div class="wrapper">
			<div>
				<h2> <i class="fa fa-calendar-alt"></i> Select Data Periode</h2>
				<div class="nav-data">
					<form action="pages/summary.php" method="get" target="_blank">
						<label for="date1">Start Date</label>
						<input type="date" name="date1" id="date1">
						<label for="date1">End Date</label>
						<input type="date" name="date2" id="date2">
						<label for="shift">Shift</label>
						<select id="shift" name="shift">
							<option value="1">Shift 1</option>
							<option value="2">Shift 2</option>
							<option value="All">All Shift</option>
						</select>
						<input type="submit" id="submit" name="submit" value="Show Data">
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<section>
		  <div class='corpInfo'>
			<figure>
				<img src="assets/images/logoptba.png" alt="ptba.png">
			</figure>
			<p><i class='fa fa-map-marker-alt'></i>Jl. Parigi No.1, Tanjung Enim, Sumatera Selatan</p>
			<p><i class='fa fa-envelope'></i>corsec@ptba.co.id</p>
			<p><i class='fa fa-phone'></i>(+62) 734 451 096</p>
			<p><i class='fa fa-globe'></i><a href='https://www.ptba.co.id' style="color: inherit">https://www.ptba.co.id</a></p>
      	  </div>
		</section>
		<section>
			<a href="https://storyset.com/digital" style="color: var(--grey)">Digital illustrations by Storyset</a>
		</section>
	</footer>
	<div style="background: rgb(38, 77, 112); color: white; text-align: center; padding: 20px;">
		Copyright &copy; 2022. PT. Bukit Asam Tbk.
	</div>
</body>
</html>