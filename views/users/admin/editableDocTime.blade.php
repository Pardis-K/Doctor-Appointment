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
    Time
@endsection
@section('content')
<form action="{{ route('editTime',$time->id ) }}" method="get">
<fieldset style="position: absolute; right: 300px; top:230px; width: 350px; border-radius = 10px;border-color:black;">
@csrf
  <br/>
  <div class="form-group">
  <label for="visitdate">زمان ویزیت بیمار:</label>
  <input value="{{$time->time}}" type="datetime-local" id="visitdate" name="visitdate">
  </div><br/>
  <div class="form-group">
    <label for="count"> تعداد بیماران قابل ویزیت  :</label>
    <input value="{{$time->max_patient}}" type="number" class="form-control" id="count" name="count">
  </div><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ثبت   </button>
</span>
<br/>
</fieldset>
</form> 
@endsection