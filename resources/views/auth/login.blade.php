@extends('layouts.app')

@section('content')
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>¡Hola! Comencemos:)</h4>
                <h6 class="font-weight-light">Inicia sesión para continuar.</h6>
                <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email"  class="form-control form-control-lg" id="email" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Iniciar sesión</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="resources/vendors/js/vendor.bundle.base.js"></script>
    <script src="resources/js/off-canvas.js"></script>
    <script src="resources/js/hoverable-collapse.js"></script>
    <script src="resources/js/misc.js"></script>
@endsection
