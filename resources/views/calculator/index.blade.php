@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ちょうどいい電卓</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="{{asset('/css/calculator.css')}}">-->
    <!--<script src="{{asset('js/calculator.js')}}" defer></script>-->
  </head>
  
<body>
  <h1 className="text-align: center;">電卓一覧</h1>
  <a href='/calculator/1'>電卓1</a>
  <a href='/calculator/2'>電卓2</a>
  <a href='/calculator/3'>電卓3</a>
  <a href='/calculator/4'>電卓4</a>
  <a href='/calculator/5'>電卓5</a>
  <a href='/calculator/6'>電卓6</a>
</body>
</html>
@endsection