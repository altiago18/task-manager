<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>

    @vite(['resources/css/app.css'])
</head>

<body>

<div class="container">

    <div class="form-card">

        <h1>Add Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <label>Task Name</label>
            <input type="text"
                   name="task_name"
                   placeholder="Enter task name"
                   required>

            <label>Description</label>
            <textarea name="description"
                      placeholder="Enter task description"></textarea>

            <label>Due Date</label>
            <input type="date" name="due_date">

            <div class="form-actions">

                <button type="submit" class="button save-button">
                    Save Task
                </button>

                <a href="{{ route('tasks.index') }}"
                   class="button cancel-button">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>