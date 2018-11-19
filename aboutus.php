<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>

				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->

			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">

								The <a href="https://www.nsbm.lk/">NSBM</a>
								  library offers its students a location of quiet for contemplation and study. It is the core resource centre of the institute which is geared to cater information, curriculum & research needs of its students and staff members. Complete with a useful and an ever-expanding collection of textbooks, manuals, periodicals, academic journals and CDs, the primary goal of the library is to support the learning culture that pervades throughout this Institute. The NSBM library contains a range of books & manuals to classics on philosophy, management and research methodology. It also consists of academic journals and periodicals of interest. And to stimulate aesthetic sense of students, NSBM library offers a good collection of Sinhala and English fiction.<br>
								NSBM library offers a wide range of services to its users. So, NSBM library will be an aid to achieve students, undergraduates and all the users to achieve their goals.

							</div>

						</div>

					</div>
					<!-- end content -->

					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
