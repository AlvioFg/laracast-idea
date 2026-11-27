@props([
    'title' => 'Laracast'
])
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <style>
        .max-w-400 {
            max-width:400px;
            margin: auto;
        }

        .card {
            background: #e3e3e3; padding: 1rem; text-align: center;
        }
    </style>
</head>
<body class="bg-gray-700 p-6 max-w-xl mx-auto">


{{ $slot }}

</body>
</html>
