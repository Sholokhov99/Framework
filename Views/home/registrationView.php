<?include_once(VIEW_TEMPLATE_HEAD)?>
<div  class="position-absolute top-50 start-50 translate-middle border rounded p-4 shadow-lg bg-transparent">
  <div class="alert alert-danger" role="alert" id="alert">
  </div>
  <h1 class="text-center mb-3">Регистрация</h1>
<form class="container" style="width: 300px" id="registration-form">
  <div class="row mb-3">
    <input type="text" class="form-control" placeholder="Логин" aria-label="Логин" aria-describedby="basic-addon1">
  </div>
  <div class="row mb-3" >
    <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
  </div>

  <div class="row mb-3">
    <input type="email" class="form-control" id="inputEmail1" name="mail" placeholder="Email">
  </div>
  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Имя" aria-label="Логин" aria-describedby="basic-addon1">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Фамилия" aria-label="Логин" aria-describedby="basic-addon1">
    </div>
  </div>

  <div class="d-flex flex-row">
    <div class="flex-grow-1">
      <a type="button" href="/authenication" class="btn btn-outline-primary">Назад</a>
    </div>
    <button type="button" class="btn btn-outline-primary mr-auto" id="btn-registration-user">Войти</button>
  </div>
</form>
</div>

<?include_once(VIEW_TEMPLATE_FOOTER)?>
