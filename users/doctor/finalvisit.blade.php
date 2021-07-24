@extends('layouts.doctor')

@section('links')
<style>
.panel{
    display:flex;
    width:1000px;
    flex-direction:row;
    padding: 5px;
    margin: auto;
    margin-right: 5px;
 
    }
    .panel1{
    flex: 1 1 auto;
    width:600px;
    height: 300px;
    border-radius:10px;
    border:solid 5px rgb(150, 4, 47);
    padding:20px;
    margin-left: 10px;
    margin-top: 10px;
    }
    .panel1 ul{
    display: block;
    width:500px; 
    overflow: hidden;
    background-color:whitesmoke;
    border-radius:10px ;
    font-size: 18px;
    font-family:'Times New Roman';
    font-weight: 500;  
    position:absolute;
    right:5px;
    line-height:30px;
    margin-top: 20px;
    }
    .p1{
    color: darkslategrey;
    display: block;
    margin-right:10px;
    font-size: 18px;
    position:absolute;
    right:5px;
    line-height:30px;
    font-family:'Times New Roman';  
    }
    .panel2{
    flex: 1 1 auto;
    width: 500px;
    border-radius:10px;
    margin-right:50px;
    }
    .tbl{
    border: solid 2px rgb(150, 4, 47);
    width: 800px;
    margin: 0 auto;
    margin-top: 30px;
    }
    .tbl th{
    line-height: 50px;
    background-color: rgb(150, 4, 47);
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:white;
    }
    .tbl td{
    
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
    FVisit
@endsection
@section('content')
<div class="panel">
    <div class="panel1">
    @foreach ($doctors as $doctor)
         <li class="p1" style="color: black; margin-right:30px; ">نام و نام خانوادگی:</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:150px; font-family:'Times New Roman';">{{ $doctor->name }}</li><br/><br/>
         <li class="p1" style="color: black; margin-right:30px;">نام کاربری :</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:100px; font-family:'Times New Roman';">{{ $doctor->username }} </li><br/><br/>
         <li class="p1" style="color: black; margin-right:30px;">شماره تلفن :</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:100px; font-family:'Times New Roman';"> {{ $doctor->telephone }}</li><br/><br/>
         <li class="p1" style="color: black;  margin-right:30px;">ایمیل :</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:80px; font-family:'Times New Roman';">{{ $doctor->email }} </li><br/><br/>
    @endforeach
        </div>
   <div class="panel2">
<table class="tbl">
  <tr>
    <th> نام بیمار </th>
    <th>  زمان ویزیت  </th> 
    <!--th> امکانات </th--> 
  </tr>
  @foreach ($users as $user)
    <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->visit_date }}</td>
    <!--td><a style="text-decoration:none;" href="/Groupdoc//delete "><i class="fa fa-close"></i></a>
        <a style="text-decoration:none;" href="/Groupdoc//editable "><i class="fa fa-edit"></i></a></td--> 
    @endforeach
  </tr>
</table>
   </div>
</div>
@endsection