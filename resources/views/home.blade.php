@extends('layouts.app')

@section('content')

<div class="w3layouts_featured-profiles">
				<div class="container">
				<form action="sarch" method="GET">
    <input type="text" name="category" required/>
    <button type="submit">Submit</button>
</form>

				<!-- slider -->
				<div class="agile_featured-profiles">
				
					<h2>Featured Profiles</h2>
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

							   		<form method="post" action="{{ route('req.store' )}}" >
                                   @csrf

                                   <input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
                                   <input type="hidden" class="textbox" name="rid"value="{{$row->id}}">
								   <button type="submit" class="btn btn-success">Send Request</button>
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