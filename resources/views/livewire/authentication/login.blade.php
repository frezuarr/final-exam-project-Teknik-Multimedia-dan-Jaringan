<div>
  <div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <h1 class="auth-title">Log in.</h1>
          <p class="auth-subtitle mb-5">Log in untuk melanjutkan ke dalam dashboard.</p>

          @if (session('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @error('email')
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @enderror

          @error('password')
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @enderror

          <form wire:submit.prevent="authenticate">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="email" wire:model.blur="email"
                class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Alamat Email"
                autofocus>
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>

            <div class="form-group mb-4 position-relative has-icon-left">
              <input type="{{ $input_type }}" wire:model.blur="password"
                class="form-control form-control-xl pe-5 @error('password') is-invalid @enderror"
                placeholder="Kata Sandi" />
              <span wire:click="togglePasswordVisibility" title="{{ $input_title }}"
                class="position-absolute top-50 end-0 translate-middle-y me-3 text-muted" style="cursor: pointer;">
                <i class="{{ $icon }}"></i>
              </span>

              <div class="form-control-icon">
                <i class="bi bi-lock"></i>
              </div>
            </div>

            <div class="form-check d-flex align-items-center">
              <input class="form-check-input me-2" wire:model="remember_me" type="checkbox" id="rememberMe">
              <label class="form-check-label text-gray-600" for="rememberMe">
                Ingat Saya
              </label>
            </div>

            <button class="btn btn-block btn-lg shadow-lg mt-5 btn-login-modern" type="submit" id="btnMasuk">
              <span class="btn-text">Masuk</span>
            </button>
          </form>
        </div>
      </div>

      {{-- Right Column --}}
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>

  <style>
    .form-control {
      border: 2px solid #e2e8f0;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #ff7a00;
      box-shadow: 0 0 0 0.2rem rgba(255, 122, 0, 0.15);
    }

    .form-check-input:checked {
      background-color: #ff7a00;
      border-color: #ff7a00;
    }

    .form-check-input:focus {
      border-color: #ff7a00;
      box-shadow: 0 0 0 0.25rem rgba(255, 122, 0, 0.25);
    }

    #auth-left {
      background: linear-gradient(to bottom, rgba(255,255,255,0.95), rgba(255,255,255,0.98));
      border-radius: 0;
    }

    .auth-title {
      background: linear-gradient(135deg, #ff7a00 0%, #ff4500 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Modern Slide Button Effect */
    .btn-login-modern {
      position: relative;
      background: linear-gradient(135deg, #ff7a00 0%, #ff4500 100%);
      color: white;
      border: none;
      font-weight: 600;
      font-size: 1.1rem;
      overflow: visible;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      z-index: 1;
    }

    .btn-login-modern::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.25);
      transition: left 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      z-index: -1;
    }

    .btn-login-modern:hover::before {
      left: 100%;
    }

    .btn-login-modern:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 45px rgba(255, 122, 0, 0.5);
      letter-spacing: 1px;
    }

    .btn-login-modern:active {
      transform: scale(0.98);
      box-shadow: inset 0 4px 10px rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(255, 122, 0, 0.7);
      animation: ripple-effect 0.6s ease-out;
    }

    .btn-login-modern:disabled {
      opacity: 0.6;
      cursor: not-allowed;
      transform: none;
    }

    .btn-text {
      position: relative;
      z-index: 2;
      display: inline-block;
    }

    @keyframes ripple-effect {
      0% {
        box-shadow: inset 0 4px 10px rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(255, 122, 0, 0.7);
      }
      100% {
        box-shadow: inset 0 4px 10px rgba(0, 0, 0, 0.2), 0 0 0 15px rgba(255, 122, 0, 0);
      }
    }
  </style>
</div>
