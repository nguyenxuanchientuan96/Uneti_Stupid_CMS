<?php
	require_once 'inc/lib.php';
	$id=$_GET["id"];
	$sql="SELECT * FROM posts where id={$id}";
	$query=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($query, MYSQLI_ASSOC);

?>
<?php
	require_once("template-parts/head.php");
	require_once("template-parts/header.php");
?>
	

<div class="container">
				<div class="row">
					<?php
						$sql="SELECT * FROM posts where id={$id}";
						$rs=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){

					?>	
					<div class="col-md-9">
						<div class="title">
							<div class="col-md-12">
								<img src="img/anh2.JPG" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-12">
									<h3>  <?php echo $row["title"]; ?> </h3>

									<p> <?php echo $row["excerpt"]; ?></p>
									<p> <?php echo $row["content"]; ?></p>
									
							</div>
						</div>	
					</div>
							<?php } ?>
					<div class="col-md-3">
						
						<h3 class="text-center" style="background-color: lightcyan; margin-top: 0px;padding: 5px 0px"> Tin Tức - Sự kiện </h3>
							<?php
							$sql="SELECT * FROM posts";
							$rs=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){

							?>	
						<div class="slidebar">
	                    <h3> <a href="single.php?id=<?php echo $row["id"]; ?>"> <?php echo $row["title"]; ?> </a></h3>
	                        <h4><?php echo $row["excerpt"]; ?></h4>
	                      
	                	</div>	
	                	<?php } ?>

					</div>

				</div>

		
		
	</div> <!-- .container-main -->
	<?php
		require_once("template-parts/footer.php")
	?>
