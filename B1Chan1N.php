<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Số Chẵn 1->N</title>
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
	<h2>Số tự nhiên chẵn từ 1->N ngẫu nhiên</h2>
<?php $N=rand(1,100);
echo "<h2>N = $N</h2>";
echo "Các số chẵn từ 1 đến $N là: ";
?>
<div class="tablecontainer">
	<table>
		<tr>
			<?php
				$dem=0;
				for($i=1; $i<=$N; $i++){
					if($i%2 == 0){
						$dem++;
						echo "<td>$i</td> ";
				}
					}
?>
		</tr>
	</table>
</div>
</body>
</html>