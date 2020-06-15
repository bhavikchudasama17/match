@extends('layouts.app')


@section('content')
@foreach($data1 as $row)
<h4>{{$row->message}}</h4>
@endforeach	   
@include('assets.footer')
                               @endsection