<?include_once(VIEW_TEMPLATE_HEAD)?>
<div class="alert alert-danger" role="alert" id="alert"></div>
<div  class="position-absolute top-50 start-50 translate-middle border rounded p-4 shadow-lg bg-transparent">
  <h1 class="text-center mb-3">Авторизация</h1>
    <form id="authenication-form">
        <input type="text" class="form-control" id="auth-login" name="login" placeholder="you-mail@gmail.com" />
        <label class="label-error" id="labelEmpty0">Введите email</label>

        <input type="password" class="form-control" id="auth-password" name="password" placeholder="Password">
        <label class="label-error" id="labelEmpty1">Не отвечает правилам</label>

        <div class="d-flex flex-row mt-3">
          <div class="flex-grow-1">
              <button type="button" class="btn btn-outline-primary mr-auto" id="btn-authenication-user">Войти</button>
          </div>
          <a type="button" href="/registration" class="btn btn-outline-primary">Регистрация</a>
        </div>
        <div class="row">
          <a href="#" class="text-center mt-3">Забыли пароль?</a>
        </div>
    </form>


<!--
<form class="container" style="width: 300px" id="authenication-form">
  <div class="row">
    <input type="email" class="form-control mb-3" id="inputEmail1" name="mail" placeholder="you-mail@gmail.com">
  </div>
  <div class="row" >
    <input type="password" class="form-control mb-3" id="inputPassword1" name="password" placeholder="Password">
  </div>
  <div class="d-flex flex-row">
    <div class="flex-grow-1">
      <button type="button" class="btn btn-outline-primary mr-auto" id="btn-authenication-user">Войти</button>
    </div>
    <a type="button" href="/registration" class="btn btn-outline-primary">Регистрация</a>
  </div>
  <div class="row">
    <a href="#" class="text-center mt-3">Забыли пароль?</a>
  </div>
</form>
-->
</div>

<?include_once(VIEW_TEMPLATE_FOOTER)?>
