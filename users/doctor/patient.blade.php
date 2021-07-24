@extends('layouts.doctor')

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
    right:300px;
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
  right:200px;
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

<form action="{{ route('Patient') }}" method="post" class="form-inline">
<fieldset style="position: absolute; right: 300px; top:200px; width:400px; height:150px; border-radius = 10px;border-color:black;">
@csrf
  <span class="form-group">
    <label for="name">نام بیماری  :</label>
    <input type="text" class="form-control" id="name" name="name">
  </span><br/><br/><br/>
  <span class="form-group">
    <label for="sel3"> گروه پزشکی :</label>
    
      <select class="form-control" id="sel3" name="group_id">
      @foreach ($groups as $group)
        <option value="{{ $group->id }}">{{ $group->name }} </option> 
        @endforeach
      </select>    
</span>
<span>
  <button class="button" type="submit">  ثبت بیماری  </button>
</span>
<br/><br/><br/>
</fieldset>
</form> 

<table>
  <tr>
    <th> ردیف </th>
    <th> بیماری </th> 
    <th> امکانات </th> 
  </tr>
  @foreach ($patients as $patient)
    <tr>
    <td>{{ $patient->id }}</td>
    <td>{{ $patient->name }}</td>
    <td>
      <a style="text-decoration:none;" href="/Patient/{{$patient->id}}/delete "><i class="fa fa-close"></i></a>
      <a style="text-decoration:none;" href="/Patient/{{$patient->id}}/editable"><i class="fa fa-edit"></i></a>
    </td> 
    
    @endforeach
  </tr>
</table>
@endsection