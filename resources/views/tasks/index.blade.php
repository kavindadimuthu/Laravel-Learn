<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>
    <h1>Task Manager</h1>
    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Task Title" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
                <a href="/tasks/{{ $task->id }}/edit">Edit</a>
                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
