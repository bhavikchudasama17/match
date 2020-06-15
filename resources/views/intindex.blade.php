@extends('layouts.app')

@section('content')
<div class="w3layouts_featured-profiles">
				<div class="container">
				<div class="modal " id="schmeet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          		<div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Schedule meeting</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form action="{{ route('meetreq.store' )}}" method="post" >

                    @csrf
					<input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
					<label >With</label>
					<select name="rid">
					@foreach($data as $row1)
					<option class="option" value=" {{ $row1->id }}">{{ $row1->name }}.</option>
					@endforeach
					</select>
					<br>
                    <label >Date</label>

                    <input type="date" name="date" class="form-control input-lg" />
					<label >time</label>

                    <input type="time" name="time" class="form-control input-lg" />
					<label >place</label>

                    <input type="textarea" name="place" class="form-control input-lg" />

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" >Schedule</button>
				  </form>
                </div>
               
              </div>
            </div>
		  </div>
		  <div class="modal " id="match" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          		<div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Match</h5>

                    
                  </div>
                  <div class="modal-body">
                  <form action="{{ route('matchreq.store' )}}" method="post" >

                    @csrf
					<input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}" >{{Auth::user()->name}}
					
					<label >💍</label>
					
					<select name="mid">
					@foreach($data as $row1)
					<option class="option" value=" {{ $row1->id }}">{{ $row1->name }}.</option>
					@endforeach
					</select>
					<br>
                    <br>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" >Request for 💍</button>
				  </form>
                </div>
               
              </div>
            </div>
          </div>
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Interested Profiles <a href="#schmeet" type="button" class="btn btn-primary" style="float:right"data-toggle="modal" >Request meeting</a>
					<br>
					<a href="#match" type="button" class="btn btn-primary" style="float:right"data-toggle="modal" >Request for 💍</a>
						
			</h2>
					
							<ul id="flexiselDemo3">
								<li>
								@foreach($data as $row)
									<div class="col-md-3 biseller-column">
										<a href="{{ route('prof.show', $row->id) }}">
											<div class="profile-image">
												<img src="{{ URL::to('/') }}/images/{{ $row->image }}"  height="300" width="200">
												<div class="agile-overlay">
												<h4>Profile name: {{$row->name}}</h4>
													<ul>
														<li class="nbs-flexisel-item"><span>Age / Height</span>: {{$row->age}} / {{$row->height}}</li>
														<li class="nbs-flexisel-item"><span>Caste</span>: Ipsum</li>
														<li class="nbs-flexisel-item"><span>Religion</span>: {{$row->religion}}</li>
														<li class="nbs-flexisel-item"><span>Profession</span>: {{$row->occupation}}</li>
														<li class="nbs-flexisel-item"><span>Profile Created By</span>: {{$row->for}}</li>
														<li class="nbs-flexisel-item"><span>Location</span>: {{$row->stay}}</li>
													</ul>
												</div>
											</div>
										</a>
				
										 

                                        <form action="{{ route('int.destroy', $row->id) }}" method="post">
				                            @csrf 
				                            @method('DELETE') 
				                        <button type="submit" class="btn btn-danger">No more interested</button> 
 			                            </form>
									</div>
									@endforeach
									
									</li>
							</ul>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			@include('assets.footer')
									@endsection