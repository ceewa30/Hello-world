<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h2>Please input your name:</h2>
<form method="post">
<input type="text" name="name" placeholder="your name" />
<input type="submit" name="Submit" />
</form>
<?php
$name = $_POST['name'];
echo "<h3>Hello $name</h3>";
?>
</body>
</html>