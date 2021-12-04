@if (session('msgAddFail'))
    <div class="alert alert-dark">
        <p>{{ session('msgAddFail') }}</p>
    </div>
@endif