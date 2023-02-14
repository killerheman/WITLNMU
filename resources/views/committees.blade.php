@extends('includes.homelayout')
@section('content')

@include('includes.banner',['title' => 'Committees'])

<div class="container pt-5 pb-70">

        <object
          data='{{ asset('home/images/docs/Commitees-min.pdf') }}'
          type="application/pdf"
          width="1100"
          height="678"
        >


        </object>
</div>

@endsection
