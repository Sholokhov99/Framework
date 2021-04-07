<?include_once(VIEW_TEMPLATE_HEAD)?>
<div  class="position-absolute top-50 start-50 translate-middle border rounded p-4 shadow-lg bg-transparent">
  <div class="alert alert-danger" role="alert" id="alert">
  </div>
  <h1 class="text-center mb-3">Регистрация</h1>
<form class="container" style="width: 300px" id="registration-form">
  <div class="row mb-3">
    <input type="text" class="form-control" placeholder="Логин" aria-label="Логин" id="inputLogin1" name="login" aria-describedby="basic-addon1">
    <label class="label-error" id="labelEmpty0">Введите email</label>
  </div>
  <div class="row mb-3" >
    <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
    <label class="label-error" id="labelEmpty1">Введите пароль</label>
  </div>

  <div class="row mb-3">
    <input type="email" class="form-control" id="inputEmail1" name="mail" placeholder="Email">
    <label class="label-error" id="labelEmpty2">Введите e-mail</label>
  </div>

  <div class="row mb-3">
    <input type="text" class="form-control" placeholder="Имя" aria-label="Имя" name="name" aria-describedby="basic-addon1">
    <label class="label-error" id="labelEmpty3">Введите имя</label>
  </div>
  <div class="row mb-3">
    <input type="text" class="form-control" placeholder="Фамилия" aria-label="Фамилия" name="first_name" aria-describedby="basic-addon1">
    <label class="label-error" id="labelEmpty4">Введите фамилию</label>
  </div>
  <div class="d-flex flex-row">
    <div class="flex-grow-1">
      <a type="button" href="/authenication" class="btn btn-outline-primary">Назад</a>
    </div>
    <button type="button" class="btn btn-outline-primary mr-auto" id="btn-registration-user">Регистрация</button>
  </div>
</form>
</div>

<?include_once(VIEW_TEMPLATE_FOOTER)?>
