@extends('includes.homelayout')
@section('content')

@include('includes.banner',['title' => 'Mandatory Disclosure'])

<div class="container pt-5 pb-70">

        <object
          data='{{ asset('home/images/docs/Mandatory Disclosures 30-Apr-2022 11-59-32.pdf') }}'
          type="application/pdf"
          width="1100"
          height="678"
        >


        </object>
</div>

@endsection
