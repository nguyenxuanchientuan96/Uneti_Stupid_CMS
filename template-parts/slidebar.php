<?php 
	$sql="SELECT * FROM posts";
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){

 ?>

					<div class="col-md-3" style="overflow: hidden;">
						<h3 class="text-center" style="background-color: lightcyan; margin-top: 0px;padding: 5px 0px"> Tin Tức - Sự kiện </h3>
						<div class="slidebar">
	                    <h3> <a href="#"> <?php echo $row["title"]; ?> </a></h3>
	                        <h4><?php echo $row["excerpt"]; ?></h4>
	                      
	                	</div>
	                	
	                </div>

<?php } ?>