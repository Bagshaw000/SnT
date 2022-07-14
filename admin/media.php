<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
//Getting neccessary files
// require_once("../controllers/user_controller.php");
// require_once("../controllers/book_controller.php");
 require_once("../settings/core.php");
 session_start();
 echo $_SESSION["aid"];

//Enforcing admin only success
if (!(check_admin_login())) {
	header("Location: signup/index.php");
}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Media :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
	<!-- side nav css file -->

	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> Akenkan<span class="dashboard_text">Design dashboard</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="index.php">
									<i class="fa fa-dashboard"></i> <span>Dashboard</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-laptop"></i>
									<span>Books</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="grids.php"><i class="fa fa-angle-right"></i> View books</a></li>
									<li><a href="media.php"><i class="fa fa-angle-right"></i> Add book</a></li>
								</ul>
							</li>

							<li class="treeview">
								<a href="#">
									<i class="fa fa-edit"></i> <span>Purchase</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="forms.php"><i class="fa fa-angle-right"></i> Orders</a></li>

								</ul>
							</li>

							<li class="treeview">
								<a href="#">
									<i class="fa fa-envelope"></i> <span>Feedback</span>
									<i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
								<ul class="treeview-menu">
									<li><a href="inbox.php"><i class="fa fa-angle-right"></i> Reviews</a></li>
									<li><a href="compose.php"><i class="fa fa-angle-right"></i> Issues </a></li>
								</ul>
							</li>

						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">

				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->

				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z" />
							</svg>
						</label>
					</form>
				</div>
				<!--//end-search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
										
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
								<?php echo "<li> <a href='#' onclick='onsignout()' ><i class='fa fa-sign-out'></i> Logout</a> </li>"; ?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="media">
					<h2 class="title1">Upload a book</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<!-- Button trigger modal -->

						<form action='' enctype='multipart/form-data'>
							<div class="mb-3">
								<label for="title" class="form-label">Book title</label>
								<input type="text" class="form-control" id="title" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="id" class="form-label">ISBN number</label>
								<input type="text" class="form-control" id="id" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="description" class="form-label">Book description</label>
								<textarea class="form-control" id="description" rows="3"></textarea>
							</div>
							<div class="mb-3">
								<label for="price" class="form-label">Book price</label>
								<input type="number" class="form-control" id="price" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="publish_date" class="form-label">Date Published</label>
								<input type="date" class="form-control" id="publish_date" aria-describedby="emailHelp">
							</div>
							<select class="form-select" aria-label="Default select example" id="status">
								<option value="published" selected>Published</option>
								<option value="draft">Draft</option>
								<option value="deleted">Deleted</option>
							</select>
							<div class="mb-3">
								<label for="formFile" class="form-label">Book image</label>
								<input class="form-control" type="file" accept="image/*" id="image">
							</div>

							<div id="b-drop">
								<?php
								$authors = get_all_authors_ctrl();
								$genres = get_all_genres_ctrl();
								$publishers = get_all_publishers_ctrl();

								// ======================================Author drop down
								echo "<select class='form-select' aria-label='Default select example' id='author'>";
								foreach ($authors as $item) {
									$id = $item["author_id"];
									$name = $item["author_name"];
									echo "<option value='$id'>$name</option>";
								}
								echo "</select>";
								// ======================================Genre drop down
								echo "<div id='space1'></div>";
								echo "<select class='form-select' aria-label='Default select example' id='genre'>";
								foreach ($genres as $item) {
									$name = $item["genre_name"];
									echo "<option value='$name'>$name</option>";
								}
								echo "</select>";
								// ======================================Publisher drop down
								echo "<div id='b-drop'>";
								echo "<select class='form-select' aria-label='Default select example' id='publisher'>";
								foreach ($publishers as $item) {
									$id = $item["publisher_id"];
									$name = $item["publisher_name"];
									echo "<option value='$id'>$name</option>";
								}
								echo "</select>";
								echo "</div>";
								?>
								<!-- <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Date Added</label>
								<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div> -->

							</div>



							<script src="../js/upload_book.js">
							</script>
							<?php
							if (isset($_GET["id"])) {
								//edit function
								$function = "onBookEdit";
							} else {
								$function = "upload_image";
								// $function = "onBookUpload";
								// Add function

							}
							echo "<button type='submit' class='btn btn-primary' onclick='$function()'>Submit</button>";
							?>

						</form>


					</div>
					<h2 class="title1">Add Author</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<!-- Button trigger modal -->

						<form>
							<div class="mb-3">
								<label for="author_name" class="form-label">Author name</label>
								<input type="text" class="form-control" id="author_name" aria-describedby="emailHelp">
								<div id="author_help" class="form-text">Enter the authors name</div>
							</div>

							<button type="submit" onclick="onAuthorCreate()" class="btn btn-primary">Submit</button>
						</form>


					</div>
					<h2 class="title1">Add Genre</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<!-- Button trigger modal -->

						<form>
							<div class="mb-3">
								<label for="genre_name" class="form-label">Genre</label>
								<input type="text" class="form-control" id="genre_name" aria-describedby="emailHelp">
								<div id="genre_help" class="form-text">Enter the genre name</div>
							</div>

							<button type="submit" onclick="onGenreCreate()" class="btn btn-primary">Submit</button>
						</form>


					</div>

					<h2 class="title1">Add Publisher</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<!-- Button trigger modal -->

						<form>
							<div class="mb-3">
								<label for="publisher_name" class="form-label">Publisher name</label>
								<input type="text" class="form-control" id="publisher_name" aria-describedby="emailHelp">
								<div id="publisher_help" class="form-text">Pls enter the Publisher's name</div>
							</div>

							<?php
							if (isset($_GET["id"])) {
							} else {
							}
							?>
							<button type="submit" onclick="onPublisherCreate()" class="btn btn-primary">Submit</button>
						</form>


					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
	<!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};

		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>

	<script>
		var query = new URLSearchParams(window.location.search);
		if (query.has("id")) {
			const g = new XMLHttpRequest();
			g.open("POST", "/akenkan/actions/book_processor.php");
			g.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			g.onreadystatechange = function() {
				if (g.readyState == XMLHttpRequest.DONE) {
					var json = JSON.parse(g.response)["genre_name"];
					var select = document.getElementById("genre");
					if (select.value != json){
						select.value = json;
					}
				}
			}
			g.send("action=get_genre&id=" + query.get("id"));


			const xhttp = new XMLHttpRequest();
			xhttp.open("POST", "/akenkan/actions/book_processor.php");
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == XMLHttpRequest.DONE) {
					var json = JSON.parse(xhttp.response);

					document.getElementById("id").value = json["book_id"];
					document.getElementById("title").value = json["title"];
					document.getElementById("description").value = json["description"];
					document.getElementById("publish_date").value = json["publish_date"].split(" ")[0];
					document.getElementById("status").value = json["book_status"];
					document.getElementById("author").value = json["author_id"];
					document.getElementById("publisher").value = json["publisher_id"];
					document.getElementById("price").value = json["price"];




				}
			}
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("action=get_book&id=" + query.get("id"));

		}
	</script>
</body>

</html>