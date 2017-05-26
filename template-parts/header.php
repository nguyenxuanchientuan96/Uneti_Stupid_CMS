<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="img/logo.png" class="img-responsive" alt="Image">
						</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Trang chủ</a></li>
							<?php 
								require_once("inc/lib.php");
								$sql = "SELECT * FROM category";
								$rs = mysqli_query($conn, $sql);
								while( $row = mysqli_fetch_array($rs, MYSQLI_ASSOC) ):
							?>
								<li><a href="template-parts/category.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"];?></a></li>

				<?php endwhile;?>
							<li><a href="admin">Quản trị viên</a></li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
						
						</form>
						<ul class="nav navbar-nav navbar-right">
							
							<li>
								<a href="#">
								<button type="button" class="btn btn-info">Login</button> </a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
		