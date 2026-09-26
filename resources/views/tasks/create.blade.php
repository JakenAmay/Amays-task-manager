<!DOCTYPE html>

<html>
<head>
    <title>Add Task</title>

```
<style>
    body {
        font-family: Arial;
        width: 80%;
        margin: 30px auto;
    }

    h1 {
        text-align: center;
    }

    .form-box {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 20px auto;
    width: 60%;
}

    input, textarea, select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
    }

    button {
        padding: 10px 15px;
        background: #222;
        color: white;
        border: none;
        cursor: pointer;
    }

    .back {
        display: inline-block;
        margin-top: 15px;
        color: #222;
    }
</style>
```

</head>

<body>

```
<h1>My Task Manager</h1>

<div class="form-box">

    <h2>Add New Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label>Task Name:</label>
        <input type="text" name="task_name" required>

        <br><br>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <br><br>

        <label>Status:</label>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select>

        <br><br>

        <label>Due Date:</label>
        <input type="date" name="due_date">

        <br><br>

        <button type="submit">Add Task</button>

    </form>

    <a class="back" href="{{ route('tasks.index') }}">Back to Tasks</a>

</div>
```

</body>
</html>
