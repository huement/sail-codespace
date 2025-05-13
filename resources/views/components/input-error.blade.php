@props(['messages'])

@if ($messages)
    @foreach ((array) $messages as $message)
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @endforeach
@endif
