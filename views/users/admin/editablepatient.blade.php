@extends('layout.admin')

@section('links')
<style>
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
    Patient
@endsection
@section('content')

<form action="{{ route('editPatient',$patient->id ) }}" method="get">
<fieldset style="position: absolute; right: 400px; top:250px; width: 400px; border-radius = 10px;border-color:black;">
@csrf
  <div class="form-group">
    <label for="name">نام بیماری  :</label><br/><br/>
    <input value="{{$patient->name}}" type="text" class="form-control" id="name" name="name">
  </div><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ویرایش  بیماری  </button>
</span>
<br/><br/><br/>
</fieldset>
</form>
@endsection