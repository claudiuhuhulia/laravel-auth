@if (session('message'))
    <div class="my-3 container alert alert-{{ session('type') ?? 'info' }} alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
