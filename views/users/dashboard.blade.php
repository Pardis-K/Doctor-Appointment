@extends('layout.patient')

@section('links')

@endsection
    
@section('page_title')
    firstpage
@endsection
@section('content')
<br/><br/><br/><br/>
<a class="nav-link" href="{{ route('Visit') }}"> پزشک</a><br/>
<a class="nav-link" href="{{ route('Reserve') }}">بیمار </a><br/>
<a class="nav-link" href="{{ route('Groupdoc') }}">ادمین</a><br/>
@endsection