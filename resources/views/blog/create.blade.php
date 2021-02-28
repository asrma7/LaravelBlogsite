<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .error {
            color: red;
            font-size: .8em;
        }
    </style>
    <title>Create Blog</title>
</head>
<body>
<form action="/create" method="POST">
    @csrf
    Title: <input type="text" name="title" value="{{ old('title') }}"><br>
    <span class="error">@error('title'){{ $message }}@enderror</span><br>
    Author: <input type="text" name="author" value="{{ old('author') }}"><br>
    <span class="error">@error('author'){{ $message }}@enderror</span><br>
    Description: <textarea name="description">{{ old('description') }}</textarea><br>
    <span class="error">@error('description'){{ $message }}@enderror</span><br>
    <input type="submit" value="Create">

</form>
</body>
</html>

