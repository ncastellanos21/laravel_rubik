@extends('app')

@section('content')

<div class="contendor">
    <div class="section" id="compete">
        <div class="frame">
            <img src="{{ URL::asset('img/pingu.png')}}" alt="pingu" width="128" height="128">
            <h2>COMPETE</h2>
        </div>
    </div>
    <div class="section" id="record">
        <div class="frame">
            <img src="{{ URL::asset('img/blue_luma.png')}}" alt="pingu" width="128" height="128">
            <h2>RECORD</h2>
        </div>
    </div>
    <div class="section" id="subscribe">
        <div class="frame">
            <img src="{{ URL::asset('img/pingu.png')}}" alt="pingu" width="128" height="128">
            <h2>SUBSCRIBE</h2>
        </div>
    </div>
    <div class="section" id="gallery">
        <div class="frame">
            <img src="{{ URL::asset('img/pingu.png')}}" alt="pingu" width="128" height="128">
            <h2>GALLERY</h2>
        </div>
    </div>
</div>

@endsection