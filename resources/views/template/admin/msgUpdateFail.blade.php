@if (session('msgUpdateFail'))
    <div class="alert alert-dark">
        <p>{{ session('msgUpdateFail') }}</p>
    </div>
@endif