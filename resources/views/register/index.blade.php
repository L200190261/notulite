@extends('layouts.login')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/register" method="POST">
          @csrf
          <div class="form-floating">
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
            <label for="email">Email Address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" required>
            <label for="password">password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            
          </div>

          <div class="form-floating">
            <select class="form-select @error('role') is-invalid @enderror" id="floatingSelect" aria-label="Pilih Role" name="role" id="role" required>
              <option selected>Role</option>
              <option value="Administrator">Administrator</option>
              <option value="ASN">ASN</option>
              <option value="NON ASN">NON ASN</option>
            </select>
            <label for="role">Pilih role</label>
            @error('role')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Now</a></small>
    </main>
    
  </div>
</div>


@endsection