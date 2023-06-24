<?php
$a = 0;
$b = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="task-1.css">
	<title>Task 1</title>
</head>

<body>
	<table>
		<tr>
			<td>A</td>
			<td>B</td>
			<td>!A</td>
			<td>A || B</td>
			<td>A && B</td>
			<td>A xor B</td>
		</tr>
		<?php
			$a = 0;
			$b = 0;
		?>
		<tr>
			<td><?php echo $a; ?></td>
			<td><?php echo $b; ?></td>
			<td><?php echo !$a; ?></td>
			<td><?php echo $a || $b; ?></td>
			<td><?php echo $a && $b; ?></td>
			<td><?php echo $a xor $b; ?></td>
		</tr>
		<?php
			$a = 0;
			$b = 1;
		?>
		<tr>
			<td><?php echo $a; ?></td>
			<td><?php echo $b; ?></td>
			<td><?php echo !$a; ?></td>
			<td><?php echo $a || $b; ?></td>
			<td><?php echo $a && $b; ?></td>
			<td><?php echo $a xor $b; ?></td>
		</tr>
		<?php
			$a = 1;
			$b = 0;
		?>
		<tr>
			<td><?php echo $a; ?></td>
			<td><?php echo $b; ?></td>
			<td><?php echo !$a; ?></td>
			<td><?php echo $a || $b; ?></td>
			<td><?php echo $a && $b; ?></td>
			<td><?php echo $a xor $b; ?></td>
		</tr>
		<?php
			$a = 1;
			$b = 1;
		?>
		<tr>
			<td><?php echo $a; ?></td>
			<td><?php echo $b; ?></td>
			<td><?php echo !$a; ?></td>
			<td><?php echo $a || $b; ?></td>
			<td><?php echo $a && $b; ?></td>
			<td><?php echo $a xor $b; ?></td>
		</tr>
	</table>
</body>

</html>