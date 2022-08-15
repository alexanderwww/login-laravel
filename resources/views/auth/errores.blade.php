
@if (isset($errors) && count($errors) >0)

    <div class="alert alert-danger">
    
        @foreach ($errors->all() as $item)
            <p class="mb-0">{{ $item }}</p>
        @endforeach
    
    </div>

@endif
