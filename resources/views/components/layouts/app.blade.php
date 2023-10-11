<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aprendiendo - {{ $title ?? ''}}</title>
</head>
<body>
    <x-layouts.navigation/>

    {{$slot}}
</body>
</html>