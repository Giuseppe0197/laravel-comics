@extends('layout.main-layout')

@section('content')

<div class="container-general">

    <button class="series">Current Series</button>

    <div class="container">

        @foreach ($arrComics as $comics)

        <div class="thumbsComics">

            <a href="{{route('comic-page')}}"><img src="{{$comics['image']}}"></a>

            <p><a href="{{route('comic-page')}}">{{$comics['title']}}</a></p>
            
    
        </div>
            
        @endforeach
        
    </div>
    <div class="buttonload">

        <button class="load">Load</button>

    </div>
</div>

<div class="container-merchandise">

    <div class="merchandise">

        @foreach ($arrMerch as $merch)
            
        <div class="buy">
            <img src="{{$merch['image']}}" alt="">
            <span>{{$merch['title']}}</span>
        </div>

        @endforeach
    
    </div>
    
</div>




@endsection