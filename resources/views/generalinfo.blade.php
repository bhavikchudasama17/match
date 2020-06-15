@extends('layouts.app')

@section('content')
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Name : </label>
						<div class="col-sm-9 w3_details">
						{{$data->name}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Religion : </label>
						<div class="col-sm-9 w3_details">
						{{$data->religion}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Date Of Birth : </label>
						<div class="col-sm-9 w3_details">
						{{$data->DOB}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mobile : </label>
						<div class="col-sm-9 w3_details">
						{{$data->mobile}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Email : </label>
						<div class="col-sm-9 w3_details">
						{{$data->email}}
						</div>
                        <div class="clearfix"> </div>
					
                        </div>
                    <div class="w3layouts_details">
                        <a href="{{ route('gen.edit', $data->id) }}"> Edit General info</a>
						</div>
                        @include('assets.footer')
					@endsection