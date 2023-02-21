<div class="col-md-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">Create board
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#createBoard">+</button>
        </div>
        <div class="d-flex justify-content-center">
            <form class="collapse input-group" id="createBoard" action="{{ route('board.add') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" class="form-control m-3 me-0 rounded-start">
                <input type="submit" value="Create" class="btn btn-outline-primary m-3 ms-0">
            </form>
        </div>
    </div>
</div>
