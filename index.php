<?php
	require_once 'inc/lib.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>U_blog_Trang chủ</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
		<!-- link offline -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
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
							<?php 
								$sql = "SELECT * FROM category";
								$rs = mysqli_query($conn, $sql);
								while( $r = mysqli_fetch_array($rs, MYSQLI_ASSOC) ):
							?>
								<li><a href="template-parts/category.php?id=<?php echo $r["id"]; ?>"><?php echo $r["name"];?></a></li>

							<?php endwhile;?>
							<li><a href="admin/login.php">Quản trị viên</a></li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
						
						</form>
						<ul class="nav navbar-nav navbar-right">
							
							<li>
								<a href="admin/login.php">
								<button type="button" class="btn btn-info">Login</button> </a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
		
	
		<div class="container">
	
				<div class="row">
					<div class="col-md-8">
					<?php 
						$currentPage=empty($_GET["page"]) ? 1:($_GET["page"]);
						//số trang chạy từ 1 nhưng limit lấy từ 0 nên -1=0
						$startFrom=($currentPage-1) * $postPerPage; //trang bat dau
						$totalPost=get_total_posts();
						$totalPage=round($totalPost / $postPerPage);
					
						$sql="SELECT * FROM posts LIMIT $startFrom,$postPerPage";

						$rs=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){

					 	?>
					
				
						<div class="title">
							<div class="img">
								<img src="img/anh2.JPG" class="img-responsive" alt="Image">
							</div>
							<div class="text">
									<h3>  <a href="single.php?id=<?php echo $row["id"]; ?>"> <?php echo $row["title"]; ?> </a> </h3>

									<p> <?php echo $row["excerpt"]; ?></p>
							</div>
						</div>
						<?php } ?>

						
					</div>
					<div class="col-md-3" style="overflow: hidden;">
					
						<h3 class="text-center" style="background-color: lightcyan; margin-top: 0px;padding: 5px 0px"> Tin Tức - Sự kiện </h3>
								
						<div class="slidebar">

	                    <h3> <a href="single.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?> </a></h3>
	                        <h4><?php echo $row["excerpt"]; ?></h4>
	                      
	                	</div>
	                	
	                </div>
		
			</div> <!-- .container-text -->
		</div> <!-- .main -->
		<div class="container">
		<footer class="footer">
			<div class="row text-center">
			<?php 
				if($totalPage>0):?>
			<ul class="pagination">
					<?php for($i=0;$i<$totalPage;$i++): ?>

						<li><a class="<?php echo ($i+1) == $currentPage ? "active" : ""; ?>" href="index.php?page=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li>
					
					<?php endfor ?>
					
					
					
				</ul>
			<?php endif; ?>
			
				<div class="col-md-12 text-center">
					<p> Web_Club_Uneti - Team 2017 </p>
				</div>
			</div>
			
				
		</footer>
		</div>
	
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>