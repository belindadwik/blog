@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ route('posts.index') }}">Posts</a></li>
					<li class="active">Tampil Post</li>
				</ul>
			
		        <div class="row">
		            <div class="col-lg-12">
		                <h1 class="page-header">{{ $post -> title }}
		                    <small>oleh :{{ $post -> author }}</small>
		                </h1>
		            </div>
		        </div>
    			<div class="row">
            		<div class="col-md-8">
                		<?php $path = storage_path(); ?>	
						<img class="img-responsive" src="{{asset('/source/'.$post->image)}}" />
            		</div>

            		<div class="col-md-4">
                		<p>{{ $post-> content }}</p>
                		<h3>Project Details</h3>
                		<ul>
		                    <li>Lorem Ipsum</li>
		                    <li>Dolor Sit Amet</li>
		                    <li>Consectetur</li>
		                    <li>Adipiscing Elit</li>
                		</ul>
        		</div>
		        <hr>
		        <footer>
		            <div class="row">
		                <div class="col-lg-12">
		                    <p>Copyright © Latihan Laravel 2017</p>
		                </div>
		            </div>
		        </footer>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

<script type="text/javascript">
	$("#unlike").on('click', function() {
	  alert("inside onclick");
	});

</script>



        
