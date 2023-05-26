<html>
<title>Dados do Aluno</title>
<meta charset="utf-8"> 
<body>
	<?php

		include_once 'calc.php';

		$calc = new Calc;

		$calc->setNum1($_POST['v1']);
		$calc->setNum2($_POST['v2']);

		echo "<h1>";
		$calc->div()
	?>
</body>
</html>








