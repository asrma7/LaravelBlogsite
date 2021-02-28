<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Blog</title>
</head>
<body>
<h1>{{ $blog->title }}</h1>
<p>{{ $blog->description }}</p>
<i>{{ $blog->author }}</i>
</body>
</html>

