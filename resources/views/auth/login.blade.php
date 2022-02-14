@include('header')
<main class="main_login">
                <div class="main_login_background">
                </div>
                <div class="main_login_field">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="cont-91">
                                <input class="field" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Логин или Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="cont-91">
                                <input class="field" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="request_form_btn">
                                <input type="submit" value="Вход">
                            </div>
                            <div class="cont-91_1">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <p>Запомнить пароль?</p>
                                <p>Еще не <a href="register">зарегестрированы?</a></p>
                            </div>
                            <div class="fog_pass">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Забыли пароль?
                                    </a>
                                @endif
                            </div>
                    </form>
                </div>
</main>
@include('footer')
