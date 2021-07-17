@extends('layout.admin')

@section('links')
<style>
 body{
      background-color: LightGray;
    }
table {
position:absolute;
top:400px;
border: solid 2px rgb(150, 4, 47);
width: 795px;
margin: 0 auto;
margin-top: 30px;
}
table th{
    line-height: 50px;
    background-color: rgb(150, 4, 47);
    font-size: 16px;
    width: 800px;
    font-family: 'Times New Roman';
    text-align: center;
    color:white;
    }
table td{
    line-height: 50px;
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:black;
    }
.button {
  background-color: Tomato;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
@endsection
    
@section('page_title')
    User
@endsection
@section('content')
<form action="{{ route('editUser',$user->id ) }}" method="get">
<fieldset style="position: absolute; right: 400px; top:250px; width: 400px; border-radius = 10px;border-color:black;">
@csrf
  <div class="form-group">
    <label for="name">نام   :</label><br/><br/>
    <input value="{{$user->name}}" type="text" class="form-control" id="name" name="name">
  </div><br/>
  <div class="form-group">
    <label for="melicode">کد ملی   :</label><br/><br/>
    <input value="{{$user->melicode}}" type="text" class="form-control" id="melicode" name="melicode">
  </div><br/>
  <div class="form-group">
    <label for="username">نام کاربری   :</label><br/><br/>
    <input value="{{$user->username}}" type="text" class="form-control" id="username" name="username">
  </div><br/>
  <div class="form-group">
    <label for="password">رمزعبور   :</label><br/><br/>
    <input  type="password" class="form-control" id="password" name="password">
  </div><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ویرایش کاربر  </button>
</span>
<br/><br/>
</fieldset>
</form> 
@endsection