<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
