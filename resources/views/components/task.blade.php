<div class="card-body">
    <div class="col-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">{{ $task->name }}
                <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" data-bs-target="#task_{{ $task->id }}"></button>
            </div>
            <div class="card-body">
                <pre>{{ $task->description }}</pre>
                <form class="collapse" id="task_{{ $task->id }}" action="{{ route('task.remove', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Remove" class="btn btn-outline-danger w-100">
                </form>
            </div>
        </div>
    </div>
</div>
