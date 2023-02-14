@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'Free Wi-Fi'])
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-8">
                <p class="p-3 text-justify">
                    In the month of January 2017 the Hon’ble Chief Minister of Bihar Shree Nitish Kumar launched Bharat Net Scheme in the state of Bihar. Later on in the month of March the state government announced about the free Wi-Fi service in colleges across the state. On 22nd March 2017, on the occasion of 105th year of Bihar Divas the scheme was officially launched by the Hon’ble Chief Minister of the state. As of now more than 2,00,000 students have registered under the scheme. Under this scheme the state govt. provides free Wi-Fi to students in colleges across the state. The scheme namely Free Wi-Fi in Colleges allow students to download books and study materials from external source up to 1 GB per day. Department of Information Technology, Govt. of Bihar facilitate the scheme in the state through its nodal agency ‘BELTRON’. In addition to internet facilities of National Knowledge Network (NKN) under Ministry of Electronics and Information Technology, Govt. of India, Institute has another alternative facility of Free Wi-Fi facility of 10 Mbps under “Saat Nischay” scheme of Hon’ble Chief Minister.
                </p>
            </div>

            <div class="col-md-4 p-3">
                <div class="box">
                    <img src="{{ asset('home/images/campus-life/free-wifi.jpg') }}">
                    <div class="box-content">
                        {{-- <h3 class="title">Pro-Vice Chancellor</h3> --}}
                        <span class="post">Free Wi-Fi</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
