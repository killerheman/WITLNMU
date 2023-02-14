@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'Hostel'])
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-8">
                <p class="p-5 text-justify">
                    APJAKWIT has three safe and secure in campus Hostels with an approximate capacity of 200. Two hostels are in Institute campus while one in University Campus at a walking distance of 300 meters approx. All hostels are having good lodging and boarding facilities with power backup of round the clock.
                </p>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <img src="{{ asset('home/images/campus-life/hostel.jpg') }}">
                    <div class="box-content">
                        {{-- <h3 class="title">Pro-Vice Chancellor</h3> --}}
                        <span class="post">Hostel</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
