@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit General info</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('gen.update', $data->id) }}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
				<div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">Date Of Birth:</label>
					<input type="date" value="{{$data->DOB}}" name="DOB" required="">
				</div>
				<div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">Religion</label>
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
				<div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                            <div class="col-md-6">
                            <input type="contact" name="mobile" value="{{$data->mobile}}" maxlength="14" required />
                            </div>
                        </div>       
                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
