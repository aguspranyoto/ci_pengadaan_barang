
<?php
include_once('simple_html_dom.php');
$html = new simple_html_dom();
$html -> load_file('https://wolipop.detik.com/makeup-and-skincare/d-5862910/10-brand-kecantikan-lokal-paling-populer-2021');
$items = $html->find('div[class=pic]')

?>
<style>
			img{
				width : 200px;
				height : 200px;
			}
</style>
<table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>

			<th>Judul</th>
			<th>Gambar</th>
			<th>Link</th>
		
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($items as $post){
			$url = $post->children(0)->getAttribute('src');
			$title = $post->children(0)->getAttribute('alt');
			?>
<tr>
	<td>
	<?php echo $title; ?>
	</td>
	<td>
	<?php	echo "<img src=".$url." width='200'>"; 
		echo '</br>'; ?>
	</td>
	<td>
		 <a href="<?php echo $url ?>">Link Menuju Website Rujukan</a>  
	</td>
<?php
}
?>
</tr>


	</tbody>
</table>
</body>
</html>
