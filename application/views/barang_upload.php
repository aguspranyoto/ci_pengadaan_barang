<form method="post" action="<?php echo site_url('barang/upload_submit/'.$data_barang_single['id_barang']);?>" enctype="multipart/form-data">
	<table class="table table-striped table-responsive">
		<tr>
			<td>File</td>
			<td>
				<input class="form-control" type="file" name="cover" size="20" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input class="btn btn-primary" type="submit" name="submit" value="Upload"></td>
		</tr>
	</table>
</form>

<?php if(!empty($response)):?>
	<?php echo $response;?>
<?php endif;?>

</body>
</html>