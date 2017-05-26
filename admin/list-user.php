<?php
	require_once '../inc/lib.php';
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM user WHERE id={$id}";
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
									<th>Name</th>
									<th>Email</th>
									<th>Info</th>
									<th>Password</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
									<?php 
										$sql="SELECT * FROM user";
										$rs=mysqli_query($conn,$sql);
										while ($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)) {
									?>
								<tr>
									<td> <?php echo $row["id"]; ?> </td>
									<td> <?php echo $row["name"]; ?> </td>
									<td> <?php echo $row["email"]; ?> </td>
									<td> <?php echo $row["info"]; ?> </td>
									<td> <?php echo $row["password"]; ?> </td>
									<td>
										<a href="edit-user.php?id=<?php echo $row['id']; ?>">
										<button type="button" class="btn btn-primary" >  Sửa </button>
										</a>
										<form method="POST">
										
											<input type="hidden" name="delete" value="<?php echo $row["id"];  ?>">
											<button type="submit" onclick="return confirm('bạn có chắc chắn muốn xóa không??')"> Xóa</button>
										</form>
									</td>
								</tr>

								<?php } ?> 
								
							</tbody>
						</table>
					</div>
				</div> <!-- .row -->

		</div> <!-- .container -text -->

<?php require_once("template/footer.php"); ?>