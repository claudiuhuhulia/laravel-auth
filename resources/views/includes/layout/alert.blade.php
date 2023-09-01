@if (session('message-alert'))
    <div class="my-3 container alert alert-{{ session('alert-type') ?? 'info' }} alert-dismissible fade show"
        role="alert">
        {{ session('message-alert') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
