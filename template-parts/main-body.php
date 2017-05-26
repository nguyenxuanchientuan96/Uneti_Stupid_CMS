<?php
	$sql="SELECT * FROM posts";
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
	
 ?>

					<div class="col-md-9" style="overflow: hidden;">
						<div class="title">
							<div class="col-md-12">
								<img src="img/anh2.JPG" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-12">
									<h3>  <a href="single.php?id=<?php echo $row["id"]; ?>"> <?php echo $row["title"]; ?> </a> </h3>

									<p> <?php echo $row["excerpt"]; ?></p>

							</div>
						</div>	
					</div>

<?php } ?>