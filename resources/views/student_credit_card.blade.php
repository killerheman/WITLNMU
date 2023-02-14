@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'Student Credit Card'])
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-8">
                <p class="p-3 text-justify">
                    In the month of October 2016 the Hon’ble Chief Minister of Bihar Shree Nitish Kumar launched Bihar Student Credit Card Scheme under “Saat Nischay” program. It helps students who passed the 12th standard to realise their higher education dreams. This government initiative aims to bridge the gap between Gross Enrolment Ration (GER) in Bihar and that in other parts of the country by ensuring that students do not stop studying due to lack of finances. Net Scheme in the state of Bihar. Later on in the month of March the state government announced about the free Wi-Fi service in colleges across the state. Beneficiaries of the Student Credit Card Yojna get financing of up to Rs. 4 lakh at nominal interest rates. APJAKWIT is a registered Institute of Student Credit Card Scheme of Government of Bihar under “Saat Nischay”. Significant number of students has been taking advantage of this scheme and being continuously benefited.
                </p>
            </div>

            <div class="col-md-4 p-3">
                <div class="box">
                    <img src="{{ asset('home/images/campus-life/credit.jpg') }}">
                    <div class="box-content">
                        {{-- <h3 class="title">Pro-Vice Chancellor</h3> --}}
                        <span class="post">Student Credit Card</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
