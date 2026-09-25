<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>

    @vite(['resources/css/app.css'])
</head>

<body>

<div class="container">

    <div class="form-card">

        <h1>Edit Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Task Name</label>
            <input type="text"
                   name="task_name"
                   value="{{ $task->task_name }}"
                   required>

            <label>Description</label>
            <textarea name="description">{{ $task->description }}</textarea>

            <label>Due Date</label>
            <input type="date"
                   name="due_date"
                   value="{{ $task->due_date }}">

            <div class="form-actions">

                <button type="submit" class="button save-button">
                    Update Task
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