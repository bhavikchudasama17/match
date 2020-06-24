@extends('layouts.app')

@section('content')
<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Messages</h2>
							<ul id="flexiselDemo3">
								<li>
								@foreach($data as $row)
									<div>
										<a href="{{ route('prof.show', $row->id) }}">
											<div class="profile-image">
												<img src="{{ URL::to('/') }}/images/{{ $row->image }}"  height="50" width="50">
												
												<h4>{{$row->name}}</h4>
                                                </div>
										</a>
                                        <a href="{{ route('msg.show', $row->id) }}">see all messages</a>
                                        <form method="post" action="{{ route('msg.store' )}}" >
                                   @csrf

                                   <input type="hidden" class="textbox" name="sid"value="{{ Auth::user()->id }}">
                                   <input type="hidden" class="textbox" name="rid"value="{{$row->id}}">
                                   <input type="hidden" class="textbox" name="iid"value="{{$row->ide}}">
								   <textarea name="message">Message:</textarea>
								   <button type="submit" class="btn btn-success">Send Message</button>
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