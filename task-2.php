<?php
$rows = array(true, false, 1, 0, -1, "1", null, "php");
$columns = array(true, false, 1, 0, -1, "1", null, "php");

$rawValues = array("true", "false", "1", "0", "-1", "1", "null", "php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="task-2.css">
	<title>Task 2</title>
</head>

<body>
	<table>
		<caption>Гибкое сравнение в PHP</caption>
		<tr>
			<td>&nbsp;</td>
			<?php for ($i = 0; $i < count($columns); $i++): ?>
				<td><?php echo $rawValues[$i]; ?></td>
			<?php endfor; ?>
		</tr>

		<?php for ($i = 0; $i < count($rows); $i++) : ?>
			<tr>
				<td>
					<?php echo $rawValues[$i]; ?>
				</td>
				<?php for ($j = 0; $j < count($columns); $j++) : ?>
					<!-- Тут гибкое сравнение, оператор == -->
					<td><?php echo $rows[$i] == $columns[$j] ? 'true' : 'false'; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>

	<div class="spacer"></div>

	<table>
		<caption>Жёсткое сравнение в PHP</caption>
		<tr>
			<td>&nbsp;</td>
			<?php for ($i = 0; $i < count($columns); $i++): ?>
				<td><?php echo $rawValues[$i]; ?></td>
			<?php endfor; ?>
		</tr>

		<?php for ($i = 0; $i < count($rows); $i++) : ?>
			<tr>
				<td>
					<?php echo $rawValues[$i]; ?>
				</td>
				<?php for ($j = 0; $j < count($columns); $j++) : ?>
					<!-- Тут жёсткое сравнение, оператор === -->
					<td><?php echo $rows[$i] === $columns[$j] ? 'true' : 'false'; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>

</html>