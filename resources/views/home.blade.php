<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->
       
    </head>
    <body>

            

        @extends('layouts.app')

        @section('content')

            <div class="content">
                <div class="container">
                    <div class="row">
                         @foreach($posts as $row)
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="">
                                    @if(($row->image) == "noimage.jpg")
                                        <img src="{{asset('/source/noimage.jpg')}}" />
                                    @else                                        
                                        <img src="{{asset('/source/'.$row->image)}}" />
                                    @endif
                                </a>
                                <br />
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="{{ route('posts.show', $row->id) }}">
                                            {{ $row-> title }}
                                        </a>
                                    </h4>
                                    <div class="">
                                        {{ str_limit(strip_tags($row-> content), 150) }}
                                        @if (strlen(strip_tags($row-> content)) > 150)
                                            <div class="card-read-more">
                                                <a class="btn btn-link btn-block" href="{{ route('posts.show', $row->id) }}">
                                                    Read More
                                                </a>
                                            </div> 
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach

                    </div>
                </div>
            </div>
            <div class="container">
              <div class="row">
                {{ $posts->links() }}
              </div>
            </div>
             
        @endsection
        </div>
    </body>
</html>






