<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Docoment</title>
</head>
<body>
N <input type="text" name="" id="n">
<input type="button" value="ok" onclick="printN()">

<script>
	function printN()
	{
		var n = document.getElementById("n").value;
		for (let i = 1; i <= 10; i++)
		{
			document.write(i*n "</br>");
		}

	}
</script>
</body>
</html>