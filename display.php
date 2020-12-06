<h3 class="text-center">Records</h3>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php include_once("config.php"); 
			$select = "select * from user ORDER BY id DESC limit 5";
			$run = mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run))
			{
				?>
				<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['pass'];?></td>
				<td>
					<button type="submit" data-id="<?php echo $row['id']?>" class="btn btn-danger btn-sm deleteb"><span class="fa fa-trash"></span></button>
					
				</td>
				</tr>
				
				<?php
			}
		?>
	</tbody>
</table>
<p id="res_delete"></p>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".deleteb").click(function(e){
			e.preventDefault();
			var x = $(this).attr ("data-id");
			// alert(x);
			$.ajax
			({
				url:'delete.php?del='+x,
				dataType:'text',
				success:function(x){
					
					//$("#res_delete").text(x);
					$.ajax
					({
					
						url:'display.php',
						type:'post',
						dataType:'html',
						success:function(resd){
							$(".resultd").html(resd);
						}
					});
				}
			});
		});
	});
</script>
