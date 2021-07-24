<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	@yield('links')
    <link href="{{url('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    
    <title>
    @yield('page_title')
    </title>
    <style>
   .header{
    color: whitesmoke;
    height: 80px;
    background-color: cadetblue;
}
.header  p{
    color: whitesmoke;
    font-family:  Tahoma;
    font-size: 20px;
    text-align: center;
    
}
.list{
     list-style-type: none;
     padding: 0;
     margin: 0;
     margin-top: 2px;
     overflow: hidden;
     background-color: darkslategrey;
     border-radius:10px ;
     z-index: 0;
 }
 li{
     float: right;
 }
 li a {
     color: white;
     display: inline-block;
     text-align: right;
     padding: 10px;
     text-decoration: none; 
     font-size:16px;
     font-family:'Times New Roman', Times, serif;
 }
 li a:hover{
     background-color: tomato;
 }
</style>

<div class='header'>
  <p> سایت نوبت دهی آنلاین پزشکی </p>
</div>
<ul class="list" id="M">  
  <li><a href="/">صفحه اصلی </a></li>
  <li>      
    <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('login') }}">ورود</a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('Groupdoc') }}">گروه پزشکی</a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('Patient') }}">بیماری</a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('DoctorTimes') }}">حضور پزشک</a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('Reservee') }}">ویزیت بیمار</a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('Fvisit') }}">پنل کاربری</a>
  </li>
  <li>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
     <a href="route('logout')"  onclick="event.preventDefault();this.closest('form').submit();">
          {{ __('خروج') }}
      </a>
  </form>
  </li>
</ul>
  @yield('content')

  @yield('footer')
    <script src="{{url('bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
