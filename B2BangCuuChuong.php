<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Bảng Cửu Chương</title>
<style>
div.tablecontainer {
  overflow-x: auto;
}

table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
   border: 1px solid #ddd;
   padding: 8px;
   text-align: left;
}
</style>
</head>
<body>
	<h2>Bảng Cửu Chương 1-10</h2>
<div class="tablecontainer">
  <table>
	<tr>
		<?php for($i=1; $i<=10; $i++): ?>
			<th>Bảng <?php echo $i; ?></th>
		<?php endfor;?>
	</tr>
	<?php for($j=1; $j<=10; $j++): ?>
		<tr>
			<?php for($i=1; $i<=10; $i++): ?>
				<td><?php echo "$i x $j = ".($i*$j);?></td>
			<?php endfor;?>
		</tr>
	<?php endfor;?>
</table>
</div>
</body>
</html>

