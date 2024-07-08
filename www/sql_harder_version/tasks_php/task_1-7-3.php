<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>1.7</title>
</head>
<body>
	<p><?php 
			$num=12345;
			$rev_num=0;

			while($num>1)
			{
				$ost = $num % 10;
				$rev_num = ($rev_num * 10) + $ost;
				$num = $num / 10;
			}
			
			echo $rev_num;
		?></p>
</body>
</html>