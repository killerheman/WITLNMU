@extends('includes.homelayout')
@section('content')

@include('includes.banner',['title' => 'DST, Bihar', 'bannerpic'=> 'page-bnner-2.jpg'])

<div class="container pt-5 pb-70">
<p class="p-5 text-justify">This department was known earlier as ‘ Industry and Technical Education Department’ as it was under control of Department of Industry. In the year 1978, it was separated and established as an independent department as Department of Science and Technology. Again, in the year 2007 the Department of Information Technology was carved out as an independent Department from the Department of Science and Technology. An era of technical education started in Bihar with establishment of Bihar College of Engineering Patna in 1924, which at present, converted as National Institute of Technology, Patna. This was the 6th Oldest Engineering College in India. After independence industrial revolution took place and to fulfil the needs of the nation for technological manpower, Bihar Institute of Technology, Sindri was started as College of Mechanical and Electrical Engineering at Patna in the year of 1949. It was later shifted to Sindri on 17th November 1950. After that Muzaffarpur Institute of Technology was established in the year 1954. In the year 2000, after bifurcation of the state, Bihar Institute of Technology, Sindri became part of Jharkhand Sate. At present, in Bihar sixteen engineering colleges and seventeen Polytechnic institutions are functioning. Dr. APJ Abdul Kalam Women’s Institute of Technology, L. N. Mithila University, Darbhanga has been imparting technical education only to Women since AY 2004-05 after receiving No Objection Certificate (NOC) from Department of Science and Technology (DST), Govt. of Bihar.</p>
<p class="text-center"><a href="#">Download Report<img src="{{ asset('home/images/pdfimg.png') }}" height="60"/></a></p>
</div>


@endsection
