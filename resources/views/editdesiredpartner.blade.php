@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit desired partner</div>

                <div class="card-body">

                    
<form method="post" action="{{ route('desire.update', $data->id) }}" >

@csrf
@method('PATCH')

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
                        <label for="religion" class="col-md-4 col-form-label text-md-right">religion</label>
                        <div class="col-md-6">
					<select  name="religion" value="{{$data->religion}}"> 
						<option value="null">Select Religion</option>
						<option value="Muslim">Muslim</option>
						<option value="Hindu">Hindu</option>    
						<option value="Christian">Christian</option>   
						<option value="Sikh">Sikh</option>   
						<option value="Jain">Jain</option>   
						<option value="Buddhist">Buddhist</option>
						<option value="No Religious Belief">No Religious Belief</option>   						
					</select>
				</div>
                </div>
                        <div class="form-group row">
                            <label for="caste" class="col-md-4 col-form-label text-md-right">caste</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="caste" value="{{$data->caste}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="income" class="col-md-4 col-form-label text-md-right">Annual income</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="income" value="{{$data->income}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">Occupation</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="occupation" value="{{$data->occupation}}" required >

                                
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