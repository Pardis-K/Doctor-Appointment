@extends('layout.doctor')

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
    Visit
@endsection
@section('content')
<form action="{{ route('Visit') }}" method="post">
<fieldset style="position: absolute; right: 300px; top:200px; width: 350px; border-radius = 10px;border-color:black;">
@csrf
<span class="form-group">
    <label for="sel3">   پزشک :</label><br/>
      <select class="form-control" id="sel3" name="name">
      @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }} </option> 
      @endforeach
      </select>    
</span><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ثبت   </button>
</span>
<br/>
</fieldset>
</form> 