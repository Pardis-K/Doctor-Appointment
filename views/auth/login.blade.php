@extends('layout.base_index')

@section('links')

@endsection
    
@section('page_title')
    Login
@endsection

<form action="{{ route('login') }}" method="post">
<fieldset style="position: absolute; right: 500px; top: 200px; width: 500px; border-radius = 10px;border-color:black;">
@csrf
  <div class="form-group">
    <label for="username">نام کاربری  :</label><br/>
    <input type="username" class="form-control" id="username" name="username">
  </div><br/>
  <div class="form-group">
    <label for="password">رمز عبور :</label><br/>
    <input type="password" class="form-control" id="password" name="password">
  </div><br/>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit">ورود </button>
</div><br/><br/><br/>
</fieldset>
</form> 