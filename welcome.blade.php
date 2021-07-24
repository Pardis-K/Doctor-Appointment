@extends('layouts.base_index')

@section('links')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    table {
    position:absolute;
    border:  2px;
    border-radius: 20px;
    width: 300px;
    margin: 0 auto;
    margin-top: 30px;
    right:40%;
    top:45%;
    }
table td{
    line-height: 50px;
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:black;
    background-color: rgb(12, 214, 191);

    }
    table td a:hover{
      color:black;
      font-size: 20px;
      font-weight: 200px;   

    }
    </style>
@endsection
    
@section('page_title')
    Main Page
@endsection

@section('content')
<table>
    <tr>
        <td>
            <a href="{{ route('login') }}" >ورود به سایت </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="{{ route('register') }}" >عضویت در سایت </a>
        </td>
    </tr>
</table>
@endsection
