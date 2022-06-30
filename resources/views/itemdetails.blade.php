@extends('layouts.app')

@section('body')

<header class="page-header" style="background-color: #A29500">


    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-white space-bottom-medium">
                    {{ ucfirst($item->title) }}
                </h1>
                <h2 class="text-white space-bottom-medium">
                    <i class="fa fa-map-marker"></i> {{ ucfirst($item->location) }}
                </h2>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</header>

<section>
    <div class="container">
        @include('partials.search')
        <hr>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <div class="panel-body">
                        <h2><strong>Title:</strong> {{ ucfirst($item->title) }}</h2>
                        <br>
                        <h3 class="font-weight-100"><strong>Posted by:</strong> {{ ucfirst($author->name) }}</h3>
                        <br>
                        <h3><i class="fa fa-map-marker"></i> <strong>Location:</strong> {{ ucfirst($item->location) }}</h3>
                        <hr>
                        <img src="{{ asset('storage/lost-and-found/'. $item->image) }}" alt="{{ $item->title }}"
                        class="img-responsive img-thumbnail" width="350px">
                        <br><br>
                        <div style="border-left: 5px outset lightgray; padding: 20px">
                            <p class="lead font-weight-100">
                                {!! $item->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
