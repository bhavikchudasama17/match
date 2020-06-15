@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Educational details</div>

                <div class="card-body">

                    
<form method="post" action="{{ route('education.update', $data->id) }}">

@csrf
@method('PATCH')

                        
                <div class="form-group row">
                            <label for="highesteducation" class="col-md-4 col-form-label text-md-right">Highest education</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="highesteducation" value="{{$data->highesteducation}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ugdegree" class="col-md-4 col-form-label text-md-right">Ug degree</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="ugdegree" value="{{$data->ugdegree}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pgdegree" class="col-md-4 col-form-label text-md-right">Pg degree</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="pgdegree" value="{{$data->pgdegree}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">School</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="school" value="{{$data->school}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ugcollege" class="col-md-4 col-form-label text-md-right">Ug college</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="ugcollege" value="{{$data->ugcollege}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pgcollege" class="col-md-4 col-form-label text-md-right">PG college</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="pgcollege" value="{{$data->pgcollege}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="annualincome" class="col-md-4 col-form-label text-md-right">Annual income</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="annualincome" value="{{$data->annualincome}}" required >

                                
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