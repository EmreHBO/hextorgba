<?php include 'CalculatorController.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 50px">
		    <form method="post">
                <label>Hex Değeri Giriniz:</label>
		        <input name="hex" type="text" class="form-control inputField" />
                <label>Alpha Değeri Giriniz:</label>
                <input name="alpha" type="text" class="form-control inputField" />
		        <input name="submit" type="submit" value="Convert To Rgba" class="btn btn-primary" />
                <label>Çıktı:</label>
                <label><?php echo $output ?></label>
		    </form>
		</div>
	</body>
</html>
