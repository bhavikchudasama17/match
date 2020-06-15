@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit family details</div>

                <div class="card-body">

                    
<form method="post" action="{{ route('family.update', $data->id) }}">

@csrf
@method('PATCH')

                        
                <div class="form-group row">
                            <label for="mother" class="col-md-4 col-form-label text-md-right">Mother</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="mother" value="{{$data->mother}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="father" class="col-md-4 col-form-label text-md-right">Father</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="father" value="{{$data->father}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="brother" class="col-md-4 col-form-label text-md-right">Brother</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="brother" value="{{$data->brother}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sister" class="col-md-4 col-form-label text-md-right">Sister</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="sister" value="{{$data->sister}}" required >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="familyincome" class="col-md-4 col-form-label text-md-right">family income</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="familyincome" value="{{$data->familyincome}}" required >

                                
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