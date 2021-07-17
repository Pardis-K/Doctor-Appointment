<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
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
</style>

<div class='header'>
  <p> سایت نوبت دهی آنلاین پزشکی </p>
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Links -->
<ul class="navbar-nav">
   <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ورود</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('User') }}">کاربران </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Groupdoc') }}">گروه پزشکی</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Patient') }}">بیماری</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('DoctorTimes') }}">حضور پزشک</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('DoctorTimes') }}">ویزیت بیمار</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Reserve') }}"> رزرو نوبت</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">خروج</a>
    </li>
  </ul>
</nav>
  @yield('content')

  @yield('footer')
    <script src="{{url('bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
