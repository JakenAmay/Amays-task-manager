<!DOCTYPE html>
<html>
<head>
    <title>My Task Manager</title>

    <style>
        body {
            font-family: Arial;
            width: 80%;
            margin: 30px auto;
        }

        h1 {
            text-align: center;
        }

        .add {
            display: inline-block;
            padding: 10px;
            background: #222;
            color: white;
            text-decoration: none;
        }

        .task {
            border: 1px solid #ccc;
            padding: 15px;
            margin-top: 15px;
        }

        button {
            padding: 6px 10px;
        }
    </style>
</head>

<body>

    <h1>My Task Manager</h1>

    <a class="add" href="{{ route('tasks.create') }}">Add New Task</a>

    <h2>My Tasks</h2>

    @if ($tasks->count() > 0)

        @foreach ($tasks as $task)

            <div class="task">

                <h3>{{ $task->task_name }}</h3>

                <p>{{ $task->description }}</p>

                <p>Status: {{ $task->status }}</p>

                <p>Due Date: {{ $task->due_date }}</p>

                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>

            </div>

        @endforeach

    @else

        <p>No tasks yet.</p>

    @endif

</body>
</html>