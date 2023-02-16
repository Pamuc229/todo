<!DOCTYPE html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Регистрация</title>
  <link rel="stylesheet" href="model.css">
</head>
<body>
  <h1 class = "h11"> Заполните форму для регистрации! </h1>
  <article>
    <form class = "form1" action="" method="POST">
      @csrf
      <div class="text-field">
        <label class="text-field__label" for="login">Введите Login</label>
        <input class="text-field__input" type="text" name="login" id="login" placeholder="Login" value="">
        @error('login')
        <div class="alert">{{ $message }} </div>
        @enderror
      </div>
      <div class="text-field">
        <label class="text-field__label" for="password">Придумайте пароль</label>
        <input class="text-field__input" type="password" name="password" id="password" placeholder="Пароль" value="">
        @error('password')
        <div class="alert">{{ $message }} </div>
        @enderror
      </div>
      <button type="submit"> Завершить </button>
    </form>
  </article>
</body>
</html>