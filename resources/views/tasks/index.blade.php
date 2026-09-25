<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
    @vite(['resources/css/app.css'])
</head>

<body>

<div class="dashboard">

    <div class="top-bar">
        <div>
            <p class="welcome-text">PERSONAL TASK MANAGER</p>
            <h1>My Tasks</h1>
        </div>

        <a href="{{ route('tasks.create') }}" class="add-button">
            + Add Task
        </a>
    </div>

    <div class="summary-grid">

        <div class="summary-card">
            <span>Total Tasks</span>
            <strong>{{ $tasks->count() }}</strong>
        </div>

        <div class="summary-card">
            <span>Pending</span>
            <strong>{{ $tasks->where('status', 'Pending')->count() }}</strong>
        </div>

        <div class="summary-card">
            <span>Completed</span>
            <strong>{{ $tasks->where('status', 'Completed')->count() }}</strong>
        </div>

    </div>

    <div class="section-header">
        <h2>My Task List</h2>
    </div>

    @if ($tasks->count() > 0)

        <div class="task-grid">

            @foreach ($tasks as $task)

                <div class="task-card">

                    <div class="task-title-row">
                        <h3>{{ $task->task_name }}</h3>

                        @if ($task->status == 'Pending')
                            <span class="status-badge pending">
                                Pending
                            </span>
                        @else
                            <span class="status-badge completed">
                                Completed
                            </span>
                        @endif
                    </div>

                    @if ($task->description)
                        <p class="description">
                            {{ $task->description }}
                        </p>
                    @else
                        <p class="description no-description">
                            No description
                        </p>
                    @endif

                    <div class="task-info">
                        Due: {{ $task->due_date ?? 'No due date' }}
                    </div>

                    <div class="task-actions">

                        @if ($task->status == 'Pending')

                            <form action="{{ route('tasks.updateStatus', $task->id) }}"
                                  method="POST">
                                @csrf
                                @method('PUT')

                                <button type="submit"
                                        name="status"
                                        value="Completed"
                                        class="action-button complete-button">
                                    Complete
                                </button>
                            </form>

                        @else

                            <form action="{{ route('tasks.updateStatus', $task->id) }}"
                                  method="POST">
                                @csrf
                                @method('PUT')

                                <button type="submit"
                                        name="status"
                                        value="Pending"
                                        class="action-button pending-button">
                                    Mark Pending
                                </button>
                            </form>

                        @endif

                        <a href="{{ route('tasks.edit', $task->id) }}"
                           class="action-button edit-button">
                            Edit
                        </a>

                        <form action="{{ route('tasks.destroy', $task->id) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="action-button delete-button">
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty-state">
            <h3>No tasks yet</h3>
            <p>Create your first task to get started.</p>

            <a href="{{ route('tasks.create') }}" class="add-button">
                + Add Task
            </a>
        </div>

    @endif

</div>

</body>
</html>