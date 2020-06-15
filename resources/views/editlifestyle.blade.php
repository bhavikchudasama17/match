@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Lifestyle</div>

                <div class="card-body">

                    
<form method="post" action="{{ route('life.update', $data->id) }}">

@csrf
@method('PATCH')

                        
                <div class="form-group row">
                            <label for="appearance" class="col-md-4 col-form-label text-md-right">Appearance</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="appearance" value="{{$data->appearance}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="weight" value="{{$data->weight}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="assets" class="col-md-4 col-form-label text-md-right">Assets</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="assets" value="{{$data->assets}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="habbits" class="col-md-4 col-form-label text-md-right">Habits</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="habbits" value="{{$data->habbits}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="languageknown" class="col-md-4 col-form-label text-md-right">language known</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="languageknown" value="{{$data->languageknown}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bloodgroup" class="col-md-4 col-form-label text-md-right">Blood Group</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="bloodgroup" value="{{$data->bloodgroup}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stay" class="col-md-4 col-form-label text-md-right">Stay</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="stay" value="{{$data->stay}}" required >

                                
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