<x-page-template bodyClass="">  
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('assets') }}/img/shisha-sign.jpg'); background-size: cover;"></div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header text-center">
                <img src="{{ asset('assets/img/logo-shisha.png') }}" alt="" style="max-width: 30%">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body mt-0">
                  <form role="form" method="POST" action="{{ route('login') }}" class="text-start">
                    @csrf
                    @if (Session::has('status'))
                      <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="text-sm">{{ Session::get('status') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                    <div class="input-group input-group-outline mt-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    @error('email')
                      <p class='text-danger inputerror'>{{ $message }}</p>
                    @enderror

                    <div class="input-group input-group-outline mt-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" required>
                    </div>
                    @error('password')
                      <p class='text-danger inputerror'>{{ $message }}</p>
                    @enderror

                    <div class="form-check form-switch d-flex align-items-center my-3">
                      <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                      <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2">Sign in</button>
                    </div>

                    <!-- <p class="text-sm text-center mt-3">
                      Forgot your password? Reset your password <a href="{{ route('verify') }}" class="text-primary text-gradient font-weight-bold">here</a>
                    </p> -->
                    <p class="mt-4 text-sm text-center">
                      Don't have an account? <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @push('js')
  <script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
  <script>
      $(function () {
          function checkForInput(element) {
              const $label = $(element).parent();
              if ($(element).val().length > 0) {
                  $label.addClass('is-filled');
              } else {
                  $label.removeClass('is-filled');
              }
          }

          var input = $(".input-group input");
          input.focusin(function () {
              $(this).parent().addClass("focused is-focused");
          });

          $('input').each(function () {
              checkForInput(this);
          });

          $('input').on('change keyup', function () {
              checkForInput(this);
          });

          input.focusout(function () {
              $(this).parent().removeClass("focused is-focused");
          });
      });
  </script>
  @endpush
</x-page-template>
