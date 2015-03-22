<?php
$birthday = $_POST['birthday'];
$youbi = date("l",strtotime($birthday));
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<title>php practice</title>
</head>
<body>
	<h1>php practice</h1>
	<p><?php echo htmlspecialchars($youbi) ?></p>	
	</form>
</body>
</html>