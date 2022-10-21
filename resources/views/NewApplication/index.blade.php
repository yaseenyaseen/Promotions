@extends('blogs.layout')

@section('content')
    <h3>الاستمارات المطلوبة لمعاملة الترقية الجديدة</h3>

    <br>
    <div class="pull-right">
        <a class="btn btn-secondary" href="{{ route('hamshs.index') }}"> تأييد خطة بحثية </a></div>
    <div class="pull-right">
        <a class="btn btn-secondary" href="{{ route('hamshs.index2') }}"> تأييد خطة بحثية </a></div>

    <div class="pull-right">
        <br>
        <a class="btn btn-secondary" href="blogs.index"> تقديم طلب</a></div>
    <br>
    <div class="pull-right">
        <a class="btn btn-secondary" href="#">بيانات الترقية</a></div>
    <br>
    <div class="pull-right">
        <a class="btn btn-secondary" href="#">تعهد خطي بعدم الاستلال</a></div>
    <br>
    <div class="pull-right">
        <a class="btn btn-secondary" href="#">السيرة الذاتية</a></div>
    <br>
    <div class="pull-right">
        <a class="btn btn-secondary" href="#">مواقع الكترونية</a></div>
    <br>
    <div class="pull-right">
        <a class="btn btn-secondary" href="#">ملخص معاملة ترقية</a></div>
    <br>


@endsection
