@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'National Knowledge Network (GoI)'])
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-8">
                <p class="p-5 text-justify">
                    APJAKWIT is lashed with very high speed (100 Mbps) internet (wi-fi) facilities provided by National Knowledge Network (NKN) under Ministry of Electronics and Information Technology, Govt. of India since 2012. The objective of the National Knowledge Network (NKN) is to interconnect all institutions of higher learning and research with a high speed data communication network to facilitate knowledge sharing and collaborative research. NKN will facilitate advanced distance education in specialized fields like engineering, science, medicine etc. as well as enable an ultra-high speed e Governance backbone. It will bridge the existing knowledge gap in the country and help the country evolve as a Knowledge Society and also spur economic activities in the Knowledge domain.
                </p>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <img src="{{ asset('home/images/campus-life/nkn.jpg') }}">
                    <div class="box-content">
                        {{-- <h3 class="title">Pro-Vice Chancellor</h3> --}}
                        <span class="post">GoI</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
