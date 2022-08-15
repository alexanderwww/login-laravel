@include('template.header')

    <form action="{{route('loginUser')}}" class="container bg-dark align-items-center p-4" method="POST">
      @csrf
      <h2 class="text-white">Login</h2>

      @include('auth.errores')


      {{-- @if ($errors->has('username'))
        <div class="alert alert-danger">{{ $errors->first('username') }}</div>
      @endif --}}

      <div class="mb-3">
        <label for="username" class="form-label text-white">Email o name</label>
        <input type="text" class="form-control" name="username">
      </div>

            
      {{-- @if ($errors->has('password'))
        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
      @endif --}}

      <div class="mb-3">
        <label for="password" class="form-label text-white">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>


@include('template.footer')