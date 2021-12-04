@if (session('msgAddSuccess'))
    <div class="alert alert-success">
        <p>{{ session('msgAddSuccess') }}</p>
    </div>
@endif
@if (session('msgUpdateSuccess'))
    <div class="alert alert-success">
        <p>{{ session('msgUpdateSuccess') }}</p>
    </div>
@endif
@if (session('msgDeleteSuccess'))
    <div class="alert alert-success">
        <p>{{ session('msgDeleteSuccess') }}</p>
    </div>
@endif
@if (session('msgDeleteFail'))
    <div class="alert alert-dark">
        <p>{{ session('msgDeleteFail') }}</p>
    </div>
@endif