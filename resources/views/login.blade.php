<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <link rel="stylesheet" href="{{ asset('librerias/bootstrap5/bootstrap.min.css') }}">
    <title>Login de usuario</title>
</head>
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h2 class="login-heading mb-4 text-center">SUMINIAPP</h2>
                    <h3 class="login-heading mb-4">Ingresa al sistema</h3>
      
                    <!-- Sign In Form -->
                    <form action="{{ route('logear') }}" method="POST">
                        @csrf
                        @method('POST')
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com">
                        <label for="floatingInput">Usuario</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
      
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Entrar al sistema</button>
                      </div>
                      <br>
                      @if ($errors->any())
                          <ul class="alert alert-danger">
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      @endif
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <script src="{{ asset('librerias/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('librerias/bootstrap5/bootstrap.bundle.min.js') }}"></script>
</body>
</html>