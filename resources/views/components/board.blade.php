<div class="col-md-3 mb-4">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            {{ $board->name }}
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#board_{{ $board->id }}">
                +
            </button>
        </div>
        <div class="d-flex justify-content-center p-3 pb-0">
            <form class="collapse" id="board_{{ $board->id }}" action="{{ route('task.add', $board->id) }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" class="form-control mb-3">
                <textarea name="description" cols="30" rows="1" placeholder="Description" class="form-control mb-3"></textarea>
                <input type="submit" value="Create task" class="btn btn-outline-primary w-100">
            </form>
        </div>

        @foreach ($tasks as $task)
            @if($board->id == $task->board_id)
                @include('components.task')
            @endif
        @endforeach

        <div class="d-flex flex-row-reverse align-items-center m-3">
            <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" data-bs-target="#board_remove_{{ $board->id }}"></button>
        </div>
        <div class="d-flex justify-content-center">
            <form class="collapse w-75" id="board_remove_{{ $board->id }}" action="{{ route('board.remove', $board->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete this board" class="btn btn-outline-danger w-100 mb-3">
            </form>
        </div>

    </div>
</div>
