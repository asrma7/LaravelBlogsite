<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog Home</title>
</head>
<body>
<a href="/create">Create Blog</a><br>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th colspan="3">Options</th>
    </tr>
    @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->author }}</td>
            <td>{{ $blog->description }}</td>
            <td><a href="blog/{{ $blog->id }}">Show</a></td>
            <td><a href="edit/{{ $blog->id }}">Edit</a></td>
            <td><a href="delete/{{ $blog->id }}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>

