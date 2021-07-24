@extends('layouts.base_index')

@section('links')

@endsection
    
@section('page_title')
    Register
@endsection

@section('content')
<form method="POST" action="{{ route('register') }}">
<fieldset style="position: absolute; right: 400px; top: 200px; width: 700px; border-radius = 10px;border-color:black;">
@csrf
<div>
  <p>اطلاعات شخصی :</p>
  <hr/>
</div>
  <div class="row">
    <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
    <div class="col">
    <label for="melicode"> کد ملی :</label>
      <input type="text" class="form-control" id="melicode" placeholder="کدملی خود را وارد کنید" name="melicode" value="">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="age">  سن :</label>
      <input type="text"  id="age" class="form-control" placeholder="سن خود را وارد کنید" name="age" value="">
    </div>
    <div class="cole">
    <label for="sel1">جنسیت :</label>
      <select class="form-control" id="sel1" name="gender">
        <option value="male">مرد</option>
        <option value="female">زن</option>
      </select>
    </div>
</div><br/>
<div>
  <p>اطلاعات تکمیلی :</p>
  <hr/>
</div>
<div class="row">
       <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    <div class="col">
      <label for="telephone"> تلفن :</label>
      <input type="text" class="form-control" id="phone" placeholder="شماره تلفن  خود را وارد کنید" name="telephone" value="">
    </div>
</div>
    <div class="col">
     <label for="address">آدرس :</label>
   <textarea class="form-control" rows="5" id="comment" name="address" value=""></textarea>
</div> 
</div>
<div><br/>
  <p>اطلاعات کاربری :</p>
  <hr/>
</div>
<div class="row">
    <div class="col">
      <label for="username"> نام کاربری :</label>
      <input type="text" class="form-control" id="username" placeholder="نام کاربری خود را وارد کنید" name="username" value="">
    </div>
</div>
<div class="row">
     <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('رمز عبور')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('تکرار رمز عبور')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
</div>
  <div class="row">
    <div class="col">
    <label for="code">  کد کاربر :</label>
      <input type="text" class="form-control" id="code"  name="code" value="">
    </div>
    <div class="col">
    <label for="sel2">  نقش کاربر :</label>
      <select class="form-control" id="sel2" name="role">
        <option value="Doctor">پزشک</option>
        <option value="Patient">بیمار</option>
        <option value="Admin">ادمین</option>
      </select>
</div>
<div class="col">
    <label for="sel3"> گروه پزشکی :</label>
      <select class="form-control" id="sel3" name="group_id">
        <option value="1">پزشک نیستم</option>
        <option value="2">داخلی </option>
        <option value="3">قلب و عروق</option>        
        <option value="4"> ارتوپد</option>        
        <option value="5"> زنان و زایمان </option>        
      </select>

</div>
</div><br/><br/>
   <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('قبلا عضو شده اید ؟') }}
                </a>

                <x-button class="ml-4">
                    {{ __('ثبت نام') }}
                </x-button>
            </div>
<br/><br/><br/>
</fieldset>
</form>
@endsection