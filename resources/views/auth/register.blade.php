@include('template.header')    
    
<form action="/reg" class="container bg-dark align-items-center p-4" method="POST" >
      @csrf

      <h2 class="text-white">Register</h2>

      @if (session('success'))
        <div class="alert alert-success" role="alert">
          {{session('success')}}
        </div>
      @endif

      @if ($errors->has('username'))
        <div class="alert alert-danger">{{ $errors->first('username') }}</div>
      @endif

      <div class="mb-3">
        <label class="form-label text-white">UserName</label>
        <input type="text" class="form-control" name="username" >
      </div>

      @if ($errors->has('email'))
        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
      @endif

      <div class="mb-3">
        <label class="form-label text-white">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      
      @if ($errors->has('password'))
          <div class="alert alert-danger">{{ $errors->first('password') }}</div>
      @endif

      <div class="mb-3">
        <label class="form-label text-white">Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      @if ($errors->has('password_confirmation_input'))
        <div class="alert alert-danger">{{ $errors->first('password_confirmation_input') }}</div>
      @endif

      <div class="mb-3">
        <label class="form-label text-white">Password Cofimation</label>
        <input type="password" class="form-control" name="password_confirmation_input">
      </div>
      
      <button type="submit" class="btn btn-primary">Register</button>
    </form>


@include('template.footer')