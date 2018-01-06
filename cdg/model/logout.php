<html>
	<head>
		<title>Loja Virtual</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
	</head>
</html>
<body>
<?php
session_start();
$_SESSION['login'] = FALSE;
session_destroy();
header("Location:../model/login.php");
?>
</body>
</html>
