@extends('layouts.app')

@section('content')
<div class="w3ls-list">
		<div class="container">
		<h2>My Profile Details</h2>
		<div class="col-md-9 profiles-list-agileits">
			<div class="single_w3_profile">
				<div class="agileits_profile_image">
				<img src="{{ URL::to('/') }}/images/{{ $data1->image }}" alt="profile image">
				</div>
				<div class="w3layouts_details">
					<h4>Profile name : {{$data2->name}}</h4>
					<span>Last Online 1 day ago.</span>
					<p>{{$data1->age}},{{$data1->height}} , {{$data2->religion}}, {{$data1->nature}}, {{$data5->pgdegree}}/{{$data5->ugdegree}},{{$data5->annualincome}},{{$data5->occupation}}.</p>
					<a href="{{ route('myprof.edit', $data1->id) }}"> Edit My Profile</a>
					<a href="{{ route('family.edit', $data4->id) }}" >Edit Family details</a>
					<a href="{{ route('education.edit', $data5->id) }}" >Edit Educational details </a>
                    <a href="{{ route('life.edit', $data3->id) }}" >Edit Lifestyle</a>
                    <a href="{{ route('desire.edit', $data6->id) }}" >Edit Desire partner details</a>
                    
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="profile_w3layouts_details">
				<div class="agileits_aboutme">
					<h4>About me</h4>
					<h5>Brief about me:</h5>
					<p>{{$data1->about}}</p>
					
					<h5>Family Details:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mother : </label>
						<div class="col-sm-9 w3_details">
							{{$data4->mother}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Father : </label>
						<div class="col-sm-9 w3_details">
						{{$data4->father}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Sister : </label>
						<div class="col-sm-9 w3_details">
						{{$data4->sister}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Brother's : </label>
						<div class="col-sm-9 w3_details">
						{{$data4->brother}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Family Income : </label>
						<div class="col-sm-9 w3_details">
						{{$data4->familyincome}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Stay : </label>
						<div class="col-sm-9 w3_details">
						{{$data4->stay}}
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<h5>Education Details:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Highest Education : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->pgdegree}}/{{$data5->ugdegree}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">UG Degree : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->ugdegree}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">School : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->school}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">PG Degree : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->pgdegree}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">PG College : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->pgcollege}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">UG College : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->ugcollege}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Occupation : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->occupation}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Annual Income : </label>
						<div class="col-sm-9 w3_details">
						{{$data5->annualincome}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<h5>Lifestyle:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Appearance : </label>
						<div class="col-sm-9 w3_details">
							{{$data3->appearance}}, {{$data3->weight}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Assets : </label>
						<div class="col-sm-9 w3_details">
						{{$data3->assets}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Habits : </label>
						<div class="col-sm-9 w3_details">
						{{$data3->habbits}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Languages Known : </label>
						<div class="col-sm-9 w3_details">
						{{$data3->languageknown}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Blood Group : </label>
						<div class="col-sm-9 w3_details">
						{{$data3->bloodgroup}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Stay : </label>
						<div class="col-sm-9 w3_details">
						{{$data3->stay}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<h5>Desired Partner:</h5>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Age : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->age}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Height : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->height}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Marital Status : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->maritalstatus}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Religion : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->religion}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Caste : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->caste}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Education : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->education}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Occupation : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->occupation}}
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Income : </label>
						<div class="col-sm-9 w3_details">
						{{$data6->income}}
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('assets.footer')
@endsection