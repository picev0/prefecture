<?php
	$pdo = new PDO(
	'mysql:dbname=mst_prefecture;host=localhost;charset=utf8',
	'root',
	'');
	$stmt = $pdo->query('SELECT * FROM mst_prefecture');
	while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {

 $ttitle[] = $row["prefecture_cd"];
 $tr[] = $row["prefecture_name"];
 $tk = $row["insert_date"];
 $tt = $row["insert_cd"];
 $tm[] = $row["update_date"];
 /*
echo<<<EOF


ヒアドキュメント内の表示部分

EOF;*/
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>
			地域マスタ一覧
		</title>
	</head>
	<body>
		地域マスタ一覧
		<br>
		<br>
		<table border=1>
			<tr>
				<td>
				<br>
				<form action="" method="POST">
					地域コード<input type="text" name="prefectureCD" value="" style="ime-mode:disabled" maxlength="2"> 地域名 <input type="text" name="prefectureName" value="" maxlength="20"> <input type="submit" name="btnSearch" value="検索">
				</form>
				<br>
				
				</td>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<table border=1>
			<tr>
				<td>地域コード</td><td colspan=4>地域名</td><td colspan=10>更新日時</td>
			</tr>
			<tr>
				<td>
					<form action="" method="POST">
						<input type="hidden" name="btnPage" value="">
						<input type="hidden" name="state" value="">
						<input type="hidden" name="queryCountResult" value="">
						<input type="hidden" name="btnPage" value="">
						<input type="hidden" name="queryCountResult" value="">
					</form>
					
					</td>
					
					<?php for($i=0;$i<47;$i++){
						echo '<tr><td>'.$ttitle[$i].'</td><td colspan=5	>'.$tr[$i].'</td><td colspan=10>'.$tm[$i].'</td></tr>';
					} ?>
					
					
					
					</td>
					
					<td>
				
					</td>
				</td>
			</tr>
		</table>
	</body>
</html>
