@extends('layouts.patient')

@section('links')
<style>
table {
    position:absolute;
    top:200px;
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
<table>
  <tr>
    <th> نام پزشک </th>
    <th>  زمان ویزیت  </th> 
    <th> تعداد بیماران قابل ویزیت   </th> 
    <th> امکانات </th> 
  </tr>
  @foreach ($times as $time)
    <tr>
    <td>{{ $time->name }}</td>
    <td>{{ $time->starttime }}</td>
    <td>{{ $time->max_patient }}</td>
    <td>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/Reserve/{{$time->id}}/">اخذ نوبت</a>
    </div>
    </td>
    @endforeach
  </tr>
</table>
@endsection