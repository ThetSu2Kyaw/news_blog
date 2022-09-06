<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Venom</title>
	<style>
		.bg-black-alt{
			background-color: #191919;
		}
	</style>
</head>
<body class="font-serif bg-black-alt flex flex-col items-center text-white justify-between h-screen">
    <x-admin-navbar/>
    {{$slot}}
    <x-admin-footer/>

</body>
</html>