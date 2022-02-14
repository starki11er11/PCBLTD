@include('header')
<main class="main_reg">
  <div class="main_reg_background">
  </div>
  <div class="main_reg_field">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="cont-91">
                                <input id="name" class="field" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Придумайте логин" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="cont-91">
                                <input id="email" class="field" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ваш Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="cont-91">
                                <input id="password" class="field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Придумайте пароль" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="cont-91">
                                <input id="password-confirm" class="field" type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль" required autocomplete="new-password">
                            </div>
                            <p class="main_reg_field_licenser">Я ознакомлен и принимаю <br> правила <a href="#">Лицензионного соглашения</a><span><input type="checkbox" required></span></p>
                            <div class="request_form_btn">
                                <input type="submit" value="Регистрация">
                            </div>
                            <p>Имеется учётная запись? <a href="login">Войти</a></p>
                    </form>
                </div>
</main>
@include('footer')