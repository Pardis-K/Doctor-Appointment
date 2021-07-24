@extends('layouts.doctor')

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
  margin-right:420px;
  cursor: pointer;
  width:160px;
  height: 50px;
  border-radius:20px;
}
</style>
@endsection
    
@section('page_title')
    Visit
@endsection
@section('content')
<form action="{{ route('Visit') }}" method="post">
<fieldset style="position: absolute; right: 400px; top:250px; width: 700px; border-radius = 10px;border-color:black;">
@csrf
<br/>
<span class="form-group">
  <label for="sel3">  پزشک :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="user_id" style="width: 200px; height:35px;">
    @foreach ($users as $user)
      <option value="{{ $user->id }}">{{ $user->name }} </option> 
      @endforeach
    </select>    
</span><br/><br/>
<span class="form-group">
  <label for="sel3">  نام بیمار :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="patientuser_id" style="width: 200px; height:35px;">
    @foreach ($patientusers as $patientuser)
      <option value="{{ $patientuser->id }}">{{ $patientuser->name }} </option> 
      @endforeach
    </select>    
</span>&nbsp;&nbsp;&nbsp;&nbsp;
<span class="form-group">
  <label for="sel3">  بیماری :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="patient_id" style="width: 200px; height:35px;">
    @foreach ($patients as $patient)
      <option value="{{ $patient->id }}">{{ $patient->name }} </option> 
      @endforeach
    </select>    
</span><br/><br/>
<span class="form-group">
  <label for="sel3">  زمان ویزیت  :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="patienttime_id" style="width: 200px; height:35px;">
    @foreach ($patienttimes as $patienttime)
      <option value="{{ $patienttime->id }}">{{ $patienttime->visit_date }} </option> 
      @endforeach
    </select>    
  </span><br/><br/>
<div class="col">
  <label for="doctor_comment">توضیحات :</label><br/>
  &nbsp;&nbsp;<input type=text class="form-control"  id="doctor_comment" name="doctor_comment"  style="width: 300px; height:50px;">
</div>   
<div class="col">
  <label for="drugs">  دارو:</label><br/>
  <input type="text" class="form-control"  id="drugs" name="drugs" value="" style="width: 250px; height:45px;">
</div>

<div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit">
</div>
<br/>
</fieldset>
</form> 