<!DOCTYPE html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Авторизация</title>
  <link rel="stylesheet" href="model.css">
</head>
<body>
  <h1 class = "h11"> Заполните форму для входа! </h1>
  <article>
    <form class = "form1" action="" method="POST">
      @csrf
      <div class="text-field">
        <label class="text-field__label" for="login">Email</label>
        <input class="text-field__input" type="text" name="login" id="login" placeholder="Email" value="">
        @error('login')
        <div class="alert">{{ $message }} </div>
        @enderror
      </div>
      <div class="text-field">
        <label class="text-field__label" for="password">Пароль</label>
        <input class="text-field__input" type="password" name="password" id="password" placeholder="Пароль" value="">
        @error('password')
        <div class="alert">{{ $message }} </div>
        @enderror
      </div>
      <div>У вас нету учетной записи? <a href="registration">Регистрация</a> </div>
      <button type="submit"> Войти </button>
    </form>
  </article>
</body>
</html>