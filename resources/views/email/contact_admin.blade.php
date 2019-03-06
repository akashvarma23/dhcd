@extends('layouts.app')

@section('title')
Message from website
@endsection

@section('css')

@endsection

@section('js-head')

@endsection

@section('content')

Hello Admin,

<table style="border: 1px;">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$payload["name"]}}</td>
      <td>{{$payload["email"]}}</td>
      <td>{{$payload["subject"]}}</td>
      <td>{{$payload["message"]}}</td>
    </tr>
  </tbody>
</table>
   
@endsection

@section('js-body')

@endsection