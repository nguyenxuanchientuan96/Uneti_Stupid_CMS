<?php 
	if( empty($_SESSION) ){
		session_start();
	} 
?>
<?php
	require_once '../inc/lib.php';
	checkLogin();
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM posts WHERE id={$id}";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			echo "Xóa thành công";
		}
		else{
			echo "Thất bại";
		}
	}
?>
<?php
	require_once("template/head.php");
	require_once("template/header.php");
?>


		<div class="container">
		
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Excerpt</th>
									<th>Content</th>
									<th>User_ID</th>
									<th>Create_date</th>
									<th>Menu</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
							<?php 
					$sql="SELECT posts.id,posts.title,posts.excerpt,posts.content,posts.user_id,posts.create_date,posts.menu,category.id as cit,category.name as cname
						FROM posts INNER JOIN category 
						WHERE posts.cat_id=category.id";
					$rs=mysqli_query($conn,$sql);
					while ($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)) :
				?>
								<tr>
									<td> <?php echo $row["id"]; ?></td>
									<td> <?php echo $row["title"]; ?></td>
									<td> <?php echo $row["excerpt"]; ?></td>
									<td> <?php echo $row["content"]; ?></td>
									<td> <?php echo $row["user_id"]; ?></td>
									<td> <?php echo $row["create_date"]; ?></td>
									
									<td> <?php echo $row["cname"]; ?></td>
									<td>
										<a href="edit-post.php?id=<?php echo $row['id']; ?>">
										<button type="button" class="btn btn-primary" >  Sửa </button>
										</a>
										<form method="POST">
										
											<input type="hidden" name="delete" value="<?php echo $row["id"];  ?>">
											<button type="submit" onclick="return confirm('bạn có chắc chắn muốn xóa không??')"> Xóa</button>
										</form>
									</td>
									
								</tr>

		<?php endwhile ?>
								
							</tbody>
						</table>
					</div>
				</div> <!-- .row -->
	
		</div> <!-- .container -text -->
	


<?php require_once("template/footer.php") ?>