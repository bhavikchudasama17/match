@extends('layouts.app')


@section('content')
<style>
body{
    background:#eee;    
}
.chat-list {
    padding: 0;
    font-size: .8rem;
}

.chat-list li {
    margin-bottom: 10px;
    overflow: auto;
    color: #ffffff;
}

.chat-list .chat-img {
    float: left;
    width: 48px;
}

.chat-list .chat-img img {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    width: 100%;
}

.chat-list .chat-message {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    background: #5a99ee;
    display: inline-block;
    padding: 10px 20px;
    position: relative;
}

.chat-list .chat-message:before {
    content: "";
    position: absolute;
    top: 15px;
    width: 0;
    height: 0;
}

.chat-list .chat-message h5 {
    margin: 0 0 5px 0;
    font-weight: 600;
    line-height: 100%;
    font-size: .9rem;
}

.chat-list .chat-message p {
    line-height: 18px;
    margin: 0;
    padding: 0;
}

.chat-list .chat-body {
    margin-left: 20px;
    float: left;
    width: 70%;
}

.chat-list .in .chat-message:before {
    left: -12px;
    border-bottom: 20px solid transparent;
    border-right: 20px solid #5a99ee;
}

.chat-list .out .chat-img {
    float: right;
}

.chat-list .out .chat-body {
    float: right;
    margin-right: 20px;
    text-align: right;
}

.chat-list .out .chat-message {
    background: #fc6d4c;
}

.chat-list .out .chat-message:before {
    right: -12px;
    border-bottom: 20px solid transparent;
    border-left: 20px solid #fc6d4c;
}

.card .card-header:first-child {
    -webkit-border-radius: 0.3rem 0.3rem 0 0;
    -moz-border-radius: 0.3rem 0.3rem 0 0;
    border-radius: 0.3rem 0.3rem 0 0;
}
.card .card-header {
    background: #17202b;
    border: 0;
    font-size: 1rem;
    padding: .65rem 1rem;
    position: relative;
    font-weight: 600;
    color: #ffffff;
}

.content{
    margin-top:40px;    
}
          
          </style>
          
        	<div class="card">
        		<div class="card-header">Chat</div>
        		<div class="card-body height3">
        			<ul class="chat-list">
                    @foreach($data1 as $row)
                       
                    @if($row->sid==Auth::user()->id)    
        				<li class="out">
        					<div class="chat-img">
        						<img alt="Avtar"  src="{{ URL::to('/') }}/images/{{ $row->image }}">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>YOU</h5>
        							<p>{{$row->message}}</p>
                                    <p>{{$row->updated_at}}</p>
                                    <form action="{{ route('msg.destroy', $row->idm) }}" method="post">
				                            @csrf 
				                            @method('DELETE') 
				                        <button type="submit" class="btn btn-danger">Delete</button> 
 			                            </form>
                            @else  
                            
                        <li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="{{ URL::to('/') }}/images/{{ $row->image }}">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>{{$row->name}}</h5>
        							<p>{{$row->message}}</p>
                                    <p>{{$row->updated_at}}</p>
        						</div>
        					</div>
        				</li>
                           @endif

                            @endforeach	  

        						</div>
        					</div>
        				</li>
        			
        			</ul>

<form method="post" action="{{ route('msg.store' )}}" >
                                   @csrf

                                   <input type="hidden" class="textbox" name="sid"value="{{ Auth::user()->id }}">
                                   <input type="hidden" class="textbox" name="rid"value="{{$data2->iid}}">
                                   <input type="hidden" class="textbox" name="iid"value="{{$data2->id}}">
                                   <button type="submit" style="float:right" class="btn btn-success">Send Message</button>
                                   <textarea name="message" style="float:right">Message:</textarea>
								   
                               </form>
                               
        		</div>
        	</div>
        </div>
    </div>

</div>



									

</div>
@include('assets.footer')
                               @endsection