@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit my profile</div>

                <div class="card-body">

                    
<form method="post" action="{{ route('myprof.update', $data->id) }}" enctype="multipart/form-data">

@csrf
@method('PATCH')

                        <div class="form-group row">
                            <label for="Image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                            <input type="file" name="image" value="{{$data->image}}" />
                            </div>
                            </div>
				<div class="form-group row">
                            <label for="Age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">
                            <input type="contact" name="age" maxlength="3" value="{{$data->age}}"required />
                            </div>
                        </div>   
                        <div class="form-group row">
                        <label for="maritalstatus" class="col-md-4 col-form-label text-md-right">Marital Status</label>
                        <div class="col-md-6">
					<select  name="maritalstatus" value="{{$data->maritalstatus}}"> 
						<option value="not specified">not specified</option>
						<option value="Single">Single</option>
						<option value="Divorced">Divorced</option>    
						<option value="Widowed">Widowed</option>   
						<option value="Seperated">Seperated</option>   
						   						
					</select>
                    </div>
				</div>
                <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">Height</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="height" value="{{$data->height}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Nature" class="col-md-4 col-form-label text-md-right">Nature</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="nature" value="{{$data->nature}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aboutme" class="col-md-4 col-form-label text-md-right">About me</label>

                            <div class="col-md-6">
                                <textarea class="form-control " name="about" value="{{$data->about}}" >
                                </textarea>
                                
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('assets.footer')
                            @endsection