<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Venom</title>
</head>
<body class="font-serif p-0 m-0">
    <x-navbar/>
    {{$slot}}
    <x-footer/>
    <script src="/js/app.js"></script>
</body>
</html>