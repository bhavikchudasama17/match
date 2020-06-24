@extends('layouts.app')

@section('content')
<div class="w3ls-list">
		<div class="container">
		<h2> Profile Details</h2>
		<div class="col-md-9 profiles-list-agileits">
			<div class="single_w3_profile">
				<div class="agileits_profile_image">
				<img src="{{ URL::to('/') }}/images/{{ $data1->image }}" alt="profile image">
				</div>
				<div class="w3layouts_details">
					<h4>Profile name : {{$data2->name}}</h4>
					<span>@if (\Carbon\Carbon::parse($data2->lastseen)->toDateString() === date('Y-m-d'))
						Today
						{{ \Carbon\Carbon::parse($data2->last_seen)->diffForHumans() }}
					@elseif (\Carbon\Carbon::parse($data2->lastseen)->toDateString() === date('Y-m-d', strtotime('-1 day')))
						Yesterday
					@else
						{{$data2->lastseen}}
					@endif</span>
					<p>{{$data1->age}},{{$data1->height}} , {{$data2->religion}}, {{$data1->nature}}, {{$data5->pgdegree}}/{{$data5->ugdegree}},{{$data5->annualincome}},{{$data5->occupation}}.</p>

					<form method="post" action="{{ route('block.store' )}}" >
                                   @csrf

                                   <input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
                                   <input type="hidden" class="textbox" name="bid"value="{{$data2->id}}">
								   <button type="submit" class="btn btn-danger"style="float:left">Block Profile</button>
                               </form>
							   <div class="modal " id="rep" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          		<div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Report Issue</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form action="{{ route('report.store' )}}" method="post" >

                    @csrf
					<input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
					<input type="hidden" class="textbox" name="rid"value="{{ $data2->id }}">
					<br>
                    
					<label >Issue</label>

                    <input type="textarea" name="issue" class="form-control input-lg" />

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger" >Report</button>
				  </form>
                </div>
               
              </div>
            </div>
          </div>
		 </div>
				<a href="#rep" type="button" class="btn btn-danger" style="float:right"data-toggle="modal" >Report User</a></h2>
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
	
		<div class="col-md-3 w3ls-aside">
			<h3>Search by Profile Name:</h3>
			<form action="#" method="get"> 
				<input class="text" type="text" name="profile_id" placeholder="Enter Profile Name" required="">
				<input type="submit" value="Search">
				<div class="clearfix"></div>
			</form>
			<div class="view_profile">
        	<h3>Similar Profiles</h3>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p1.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p2.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p3.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p4.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p5.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p6.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p7.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p8.jpg" class="img-responsive" alt="">
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h6>ID : 2458741</h6>
        	   	  <p>29 Yrs, 5Ft 5in Christian
				  MBA/PGDM,
				  Rs 10 - 15 lac Mark...</p>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
       </div>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- Modal -->
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form id="signin" action="#" method="post">
								<label>User Name </label>
								<input type="text" name="User Name" placeholder="Username" required="">
								<label>Password</label>
								<input type="password" name="Password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									<input type="checkbox" id="brand" name="checkbox" value="">
									<span> Remember me ?</span> 
									<a href="#">Forgot password ?</a>
								</div>
								<div class="clearfix"> </div>
								<input type="submit" name="submit" value="Login">
								<div class="clearfix"> </div>
								<div class="social-icons">
									<ul>  
										<li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li> 
										<li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>  
									</ul> 
									<div class="clearfix"> </div>
								</div>	
							</form>
						</div>
					  </div>
					</div>

				  </div>
				</div>
				<!-- //Modal -->
	</div>
	@include('assets.footer')
    @endsection