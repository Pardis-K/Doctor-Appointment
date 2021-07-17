@extends('layout.patient')

@section('links')
<style>
table {
    position:absolute;
    top:450px;
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
  position:absolute;
  top:80px;
  right:350px;
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
@endsection
    
@section('page_title')
    Reserve
@endsection
@section('content')
<form action="{{ route('FReserve') }}" method="post">
<fieldset style="position: absolute; right: 400px; top:250px; width: 400px; border-radius = 10px;border-color:black;">
@csrf

<span class="form-group">
    <label for="sel3">  پزشک :</label><br/><br/>
      <select class="form-control" id="sel3" name="group_id">
      @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }} </option> 
        @endforeach
      </select>    
</span><br/>

<div class="form-group">
  <label for="visitdate">زمان ویزیت بیمار:</label>
  <input type="datetime-local" id="visitdate" name="visitdate" >
</div><br/>

<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit">جدول زمان بندی پزشکان </button>
</div>
<br/><br/>
</fieldset>
</form> 
@endsection