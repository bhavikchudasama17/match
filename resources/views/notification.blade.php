@extends('layouts.app')

@section('content')
<div class="profile_w3layouts_details"><div class="agileits_aboutme">
                            <h4>notifications</h4> 
                            @foreach($data1 as $row1)
                            <h5><a href="{{ route('rreq.index') }}">{{$row1->name}} </a>requested you on {{$row1->updated_at}} (click on name to view all new recieved requests)</h5>
                            @endforeach 
							
                            @foreach($data as $row)
                            <h5><a href="{{ route('prof.show', $row->id) }}">{{$row->name}}</a> is new intrested profile of you since {{$row->updated_at}}(click on name to visit profile)</h5>
                            @endforeach
                            @foreach($data2 as $row2)
                            <h5> Meeting confirmed with <a href="{{ route('meet.index')}}">{{$row2->name}}</a> which is to be held at date {{$row2->date}} and time {{$row2->time}} (click on name to view meetings)</h5>
                            @endforeach 
                            @foreach($data3 as $row3)
                            <h5> Congratulations finally you are 💍 with <a href="{{ route('match.index') }}">{{$row3->name}}</a> since {{$row3->updated_at}} (click on name to view 💍 status)</h5>
                            @endforeach 
                            </div></div>
                            @include('assets.footer')
                        @endsection