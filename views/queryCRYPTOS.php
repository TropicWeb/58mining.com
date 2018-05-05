
<!DOCTYPE html>
<html>
<head>
	<title>CRYPTOSSSSSSS</title>
</head>
<body>
	<?php foreach ($infoCrypto as $crypto): ?>
		<p>
			<?php echo "CRYPTOCURRENCY: " . $crypto->data->symbol . " - " . $crypto->data->name;?>
		</p>
		<p>
			<?php echo $crypto->data->symbol . " - USD: " . $crypto->data->quotes->USD->price;?>
		</p>
		<p>
			<?php echo "Percent change 1 hour: " . $crypto->data->quotes->USD->percent_change_1h;?><br>
			<?php echo "Percent change 24 hours: " . $crypto->data->quotes->USD->percent_change_24h;?><br>
			<?php echo "Percent change 7 days: " . $crypto->data->quotes->USD->percent_change_7d;?><br>
		</p>

	<?php endforeach?>

	<a href="calc">Calculator</a>
	<a href="vs">Versus</a>
</body>
</html>