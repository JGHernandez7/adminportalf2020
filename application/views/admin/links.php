<?php
$this->load->view('admin/header');
?>

<h1>Links</h1>
<table class="table table-bordered">
	<tr>
		<th>Title</th>
		<th>Link</th>
	</tr>
	<?php
	foreach($links as $l)
	{
		?>
		<tr>
			<td><?php echo $l['title'];?></td>
			<td style="text-align:center;">
				<form>
					<a href="<?php echo $l['application']?>" style="width:100%" class="btn btn-primary">External Application</a>
				</form>
			</td>
		</tr>
		<?php
	}
	?>
</table>

<?php
$this->load->view('admin/footer');
?>