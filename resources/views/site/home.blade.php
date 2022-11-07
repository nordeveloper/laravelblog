@extends('layouts.main')

@section('content')

<div class="row">
    @foreach ($result as $item)
    <div class="col-md-4 blog-item">
        <div class="blog-wrapp">
            <div class="blog-image">
                <img class="img-responsive" src="{{ url('/storage/'.$item->preview_image)}}" alt="{{$item->title}}">  
            </div>
            <div class="blog-title">
                <h3><a href="/blog/{{$item->id}}">{{$item->title}}</a></h3>
            </div>
            <p>{{$item->created_at}}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection