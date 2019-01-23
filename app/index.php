<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<tittle>PHPのサンプル</title>
	</head>
	<body>
		<?php
			if  ((isset($_POST["comment"])) && (isset($_POST["name"])) ) {
				$comment = htmlspecialchars($_POST["comment"]);
				$name = htmlspecialchars($_POST["name"]);
				print("${name}のコメントは「${comment}」です。");
			} else {
		?>
				<p>名前とコメントを入力してください</p>
				<form method="POST" action="index.php">
					<input name="name" />
					<input name="comment" />
					<input type="submit" value="送信" />
				</form>
				
		<?php
			}
		?>
	</body>
</html>
