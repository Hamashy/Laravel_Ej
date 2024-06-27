@extends("layouts.master")
@section("title")
Cities
@endsection
@section("content")



<div>




    <ul>
        @foreach ($cities as $city)
        <li>
            <a href="{{route('cities.show', $city->city_id)}}">{{$city->name}}</a>
        </li>
        @endforeach
    </ul>

    
</div> 
