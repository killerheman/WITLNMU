@extends('includes.homelayout')
@section('content')

    {{-- Slider Area --}}
    <div class="banner-area">
        <div class="hero-slider2 style2 owl-carousel owl-theme">
            <div class="slider-item" style="background-image: url({{ asset('home/images/banner/banner0.jpg') }});">
                <div class="container-fluid">
                    <div class="slider-content style2">
                        <h1>Welcome to APJAKWIT</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                            mattis pulvinar dapibus dolor sit amet consec</p> -->
                        <a href="#" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url({{ asset('home/images/banner/banner1.jpg') }});">
                <div class="container-fluid">
                    <div class="slider-content style2">
                        <h1>Welcome to APJAKWIT</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                            mattis pulvinar dapibus dolor sit amet consec</p> -->
                        <a href="#" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url({{ asset('home/images/banner/banner2.jpg') }});">
                <div class="container-fluid">
                    <div class="slider-content style2">
                        <h1>Welcome to APJAKWIT</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                            mattis pulvinar dapibus dolor sit amet consec</p> -->
                        <a href="#" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url({{ asset('home/images/banner/banner3.jpg') }});">
                <div class="container-fluid">
                    <div class="slider-content style2">
                        <h1>Welcome to APJAKWIT</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                            mattis pulvinar dapibus dolor sit amet consec</p> -->
                        <a href="#" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="eduction-area pb-1">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                    data-aos-once="true">
                    <div class="single-education-card bg-1">
                        <div class="edication-content">
                            <div class="icon">
                                <i class="flaticon-college"></i>
                            </div>
                            <a href="{{route('mandatoryDisclosure')}}">
                                <h3>Mandatory Disclosure</h3>
                            </a>
                            <a href="academics-details.html" class="read-more-btn white-color">Click Here<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                    data-aos-once="true">
                    <div class="single-education-card bg-2">
                        <div class="edication-content">
                            <div class="icon">
                                <i class="flaticon-student-with-graduation-cap"></i>
                            </div>
                            <a href="{{ route('trainingPlacementCell') }}">
                                <h3>Training & Placement Cell</h3>
                            </a>
                            {{-- <a href="academics-details.html" class="read-more-btn white-color">Click Here<i
                                    class="flaticon-next"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                    data-aos-once="true">
                    <div class="single-education-card bg-3">
                        <div class="edication-content">
                            <div class="icon">
                                <i class="flaticon-college-graduation"></i>
                            </div>
                            <a href="#">
                                <h3>Academics</h3>
                            </a>
                            <a href="#" class="read-more-btn white-color">Click Here<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800"
                    data-aos-once="true">
                    <div class="single-education-card bg-4">
                        <div class="edication-content">
                            <div class="icon">
                                <i class="flaticon-athletics"></i>
                            </div>
                            <a href="#">
                                <h3>Admissions</h3>
                            </a>
                            <a href="#" class="read-more-btn white-color">Clck Here<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 d-flex announcement">
        <div class="mark">
            Announcment
        </div>
        <marquee width="100%" direction="right" scrollamount="3" height="100px">
            <a href="#">
                <i class="fa fa-newspaper-o me-3"></i>Admission Notice- CAT/2022 <img src="{{ asset('home/images/newanim.gif') }}" class=" me-5" />
            </a>
            <a href="#">
                <i class="fa fa-newspaper-o me-3"></i>Admission Notice- CAT/2022 <img src="{{ asset('home/images/newanim.gif') }}" class=" me-5" />
            </a>
        </marquee>
    </div>

    <div class="campus-information-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Tabs with icons on Card -->
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary">
                            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#notice" data-toggle="tab">
                                                <i class="material-icons">notifications</i>
                                                Latest Notice
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#events" data-toggle="tab">
                                                <i class="material-icons">campaign</i>
                                                Events/Seminars
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="tab-content text-right">
                                <div class="tab-pane active" id="notice">
                                    <ul style="list-style-type: none;padding: 5px;">
                                        <li class="border-bottom pb-2 mb-2">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Admission Notice- CAT/2022 <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Application Form (Admissions-2022) <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i> DETAILED INSTRUCTIONS-2022  <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i> Quotation for ID Card <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-2">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i> Extension-of-Tender-18-Nov-2021-15-28-32 <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>

                                        <li class="border-bottom pb-2 mb-2">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i> Tender-Notice-20-Oct-2021-14-50-12-compressed  <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>

                                        <a href="#" class="btn btn-success">More</a>


                                    </ul>
                                </div>
                                <div class="tab-pane" id="events">
                                    <ul style="list-style-type: none;padding: 5px;">
                                        <li class="border-bottom pb-2 mb-3">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Admission Notice- CAT/2022 <img src="{{ asset('home/images/newanim.gif') }}"/>
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-3">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Admission Notice- CAT/2022
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-3">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Admission Notice- CAT/2022
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-3">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Admission Notice- CAT/2022
                                            </a>
                                        </li>
                                        <li class="border-bottom pb-2 mb-3">
                                            <a href="#">
                                                <i class="fa fa-hand-o-right me-3" aria-hidden="true"
                                                    style="color: green;font-size:25px;"></i>Admission Notice- CAT/2022
                                            </a>
                                        </li>

                                        <a href="#" class="btn btn-success">More</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs with icons on Card -->
                </div>

                <div class="col-md-4">
                    <div class="serviceBox orange">
                        <div class="service-icon">
                            <span style="align-items: center;"><i class="fa fa-globe"></i></span>
                        </div>
                        <h3 class="title">Important Links</h3>
                        <ul style="list-style-type: none;background-color: #9eca8b ;padding: 5px;">
                            <li style="padding-bottom:5px ;text-align:left;" class="border-bottom mb-3 mt-3">
                                <a href="{{ route('mandatoryDisclosure') }}" class="link"><span><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        Mandatory Disclosure</span>
                                </a>
                            </li>

                            <li style="padding-bottom:5px ;text-align:left;">
                                <a href="{{ route('trainingPlacementCell') }}" class="link"><span><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        Training & Placement Cell</span>
                                </a>
                            </li>
                            <li style="padding-bottom:5px ;text-align:left;" class="border-bottom mb-3 mt-3">
                                <a href="#" class="link"><span><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        AICTE</span>
                                </a>
                            </li>

                            <li style="padding-bottom:5px ;text-align:left;">
                                <a href="#" class="link"><span><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        DST, Bihar</span>
                                </a>
                            </li>
                             <li style="padding-bottom:5px ;text-align:left;" class="border-bottom mb-3 mt-3">
                                <a href="#" class="link"><span><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        Higher Education</span>
                                </a>
                            </li>

                            <li style="padding-bottom:5px ;text-align:left;">
                                <a href="#" class="link"><span><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        Committees</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- College Information --}}
    <div class="courses-area pt-100 pb-70 bg-f4f6f9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="campus-image">
                        <img src="{{ asset('home/images/campus-life/college.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="campus-content style-2">
                        <div class="campus-title">
                            <h2>Campus Information</h2>
                            <p>The L. N. Mithila University in pursuance of the order of the Bihar Govt. issued notification regarding establishment of APJAKWIT as a unit of L. N. Mithila University vide Letter No. 4346-4488 dated April 21, 2004. A three member expert committee of AICTE visited the APJAKWIT campus on April 30, 2004 for physical verification of the infrastructural facilities. </p>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li>
                                            <i class="ri-check-fill"></i>
                                            <p>B.Tech.- Information Technology</p>
                                        </li>
                                        <li>
                                            <i class="ri-check-fill"></i>
                                            <p>B.Tech.- Computer Science & Engineering</p>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li>
                                            <i class="ri-check-fill"></i>
                                            <p>AB.Tech.- Bioinformatics</p>
                                        </li>
                                        <li>
                                            <i class="ri-check-fill"></i>
                                            <p>Master of Computer Application (MCA)</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="counter">
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <div class="counter-card">
                                        <h1>
                                            <span class="odometer" data-count="18">00</span>
                                            <span class="target">+</span>
                                        </h1>
                                        <p>Years Of Experience</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="counter-card">
                                        <h1>
                                            <span class="odometer" data-count="500">00</span>
                                            {{-- <span class="target heading-color">k</span> --}}
                                            <span class="target">+</span>
                                        </h1>
                                        <p>Students</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="counter-card">
                                        <h1>
                                            <span class="odometer" data-count="15">00</span>
                                            <span class="target">+</span>
                                        </h1>
                                        <p>Faculties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Our Mentor Area --}}
    <div class="health-care-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Mentors</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="{{ asset('home/images/officers/vc.jpeg') }}">
                        <div class="box-content">
                            <h5 class="title">Vice-Chancellor</h5>
                            <span class="post">Prof. Surendra Pratap Singh</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="{{ asset('home/images/officers/pvc.jpeg') }}">
                        <div class="box-content">
                            <h3 class="title">Pro-Vice Chancellor</h3>
                            <span class="post">Prof. Dolly Sinha</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="{{ asset('home/images/officers/registrar.jpeg') }}">
                        <div class="box-content">
                            <h5 class="title">Registrar, LNMU</h5>
                            <span class="post">Dr. Mushtaque Ahmad</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <img src="{{ asset('home/images/officers/wit_director.jpeg') }}">
                        <div class="box-content">
                            <h3 class="title">Director, APJAKWIT</h3>
                            <span class="post">Dr. B.S. Jha</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Placed Students Area --}}
    <div class="health-care-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Placed Students</h2>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
                </p> --}}
            </div>
            <div class="health-care-slider owl-carousel owl-theme">
                <div class="single-health-care-card style-3">
                    <div class="img">
                        <a href="health-care-details.html"><img
                                src="{{ asset('home/images/placed/p1.jpeg') }}" alt="Image" height="450"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Priya Kumari (2018-22) </h3>
                            <span style="color: black;">Placed in - Cognizant <br/> CTC : 4 LPA</span>
                        </a>
                    </div>
                </div>
                <div class="single-health-care-card style-3">
                    <div class="img">
                        <a href="health-care-details.html"><img
                                src="{{ asset('home/images/placed/p2.jpeg') }}" alt="Image" height="450"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Prerna Priya (2018-22) </h3>
                            <span style="color: black;">Placed in - Infosys <br/> CTC : 4 LPA</span>
                        </a>
                    </div>
                </div>
                <div class="single-health-care-card style-3">
                    <div class="img">
                        <a href="health-care-details.html"><img
                                src="{{ asset('home/images/placed/p4.jpg') }}" alt="Image" height="450"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Shivani Sinha </h3>
                            <span style="color: black;">Placed in - WIPRO <br/> CTC : 3.6 LPA</span>
                        </a>
                    </div>
                </div>
                <div class="single-health-care-card style-3">
                    <div class="img">
                        <a href="health-care-details.html"><img
                                src="{{ asset('home/images/placed/p3.jpeg') }}" alt="Image" height="450"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Pragati Kumari (2018-22) </h3>
                            <span style="color: black;">Placed in - Hays Business Solution <br/> CTC : 3.5 LPA</span>
                        </a>
                    </div>
                </div>
                <div class="single-health-care-card style-3">
                    <div class="img">
                        <a href="health-care-details.html"><img
                                src="{{ asset('home/images/placed/p5.jpeg') }}" alt="Image" height="450"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Shilpy (2018-22) </h3>
                            <span style="color: black;">Placed in - Capgemini <br/> CTC : 4 LPA</span>
                        </a>
                    </div>
                </div>
                <div class="single-health-care-card style-3">
                    <div class="img">
                        <a href="health-care-details.html"><img
                                src="{{ asset('home/images/placed/p6.jpeg') }}" alt="Image" height="450"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Aprajita Kumari (2018-22) </h3>
                            <span style="color: black;">Placed in -Capgemini <br/> CTC : 4 LPA</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="admisssion-area ptb-100 admission-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="admission-left-content">
                        <h2>You're Learning Start Today!</h2>
                        {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                            mattis</p> --}}
                        <a href="admission.html" class="default-btn btn">More on admission<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="admission-right-content">
                        <ul>
                            <li>
                                <p>Watch Video</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Gallery Area --}}
    <div class="campus-life-area pt-100">
        <div class="container">
            <div class="section-title">
                <h2>Gallery</h2>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
                </p> --}}
            </div>
            <div class="campus-slider2 owl-carousel owl-theme">
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery1.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Cultural Programme</span>

                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery2.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>15th August Celebration</span>
                        {{-- <a href="campus-life.html">
                            <h3>Improve Athletic Performance
                                Tips From Sanu</h3>
                        </a> --}}
                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery3.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Programmes</span>

                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery4.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Teacher's Day Celebrations</span>

                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery5.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Teacher's Day Celebrations</span>

                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery6.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Teacher's Day Celebrations</span>

                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery7.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Teacher's Day Celebrations</span>

                    </div>
                </div>
                <div class="single-campus-card style-3">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('home/images/gallery/gallery8.jpeg') }}"
                                alt="Image" height="300"></a>
                    </div>
                    <div class="campus-content">
                        <span>Teacher's Day Celebrations</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Events Area --}}
    <div class="events-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Events</h2>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
                </p> --}}
            </div>
            <div class="events-slider owl-carousel owl-theme">
                <div class="single-events-card style-3 mlr-5">
                    <div class="events-image">
                        <a href="#"><img src="{{ asset('home/images/events/event1.jpeg')}}" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Independence Day Celebration</h3>
                        </a>
                        {{-- <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p> --}}
                        <div class="date-and-read-more">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style-3 mlr-5">
                    <div class="events-image">
                        <a href="#"><img src="{{ asset('home/images/events/event2.jpeg')}}" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Independence Day Celebration</h3>
                        </a>
                        {{-- <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p> --}}
                        <div class="date-and-read-more">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style-3 mlr-5">
                    <div class="events-image">
                        <a href="#"><img src="{{ asset('home/images/events/event3.jpeg')}}" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Independence Day Celebration</h3>
                        </a>
                        {{-- <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p> --}}
                        <div class="date-and-read-more">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style-3 mlr-5">
                    <div class="events-image">
                        <a href="#"><img src="{{ asset('home/images/events/event4.jpeg')}}" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Independence Day Celebration</h3>
                        </a>
                        {{-- <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p> --}}
                        <div class="date-and-read-more">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                                </li>
                                {{-- <li>
                                    <a href="#" class="read-more-btn active">Read Article<i
                                            class="flaticon-next"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--<div class="podcasts-area pt-100 pb-70 bg-f4f6f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title style2">
                        <h2>Our Podcasts</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                            mattis </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                            data-aos-once="true">
                            <div class="single-podcasts-card style3">
                                <div class="podcasts-image">
                                    <img src="assets/images/podcasts/podcasts-4.jpg" alt="Image">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i></a>
                                    <div class="episodes">
                                        <p>Episodes: 01</p>
                                    </div>
                                </div>
                                <div class="podcast-content">
                                    <h3>Finding Moments Of Joy In A Challenging Year</h3>
                                    <div class="date">
                                        <p>April 10,2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                            data-aos-once="true">
                            <div class="single-podcasts-card style3">
                                <div class="podcasts-image">
                                    <img src="assets/images/podcasts/podcasts-5.jpg" alt="Image">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i></a>
                                    <div class="episodes">
                                        <p>Episodes: 03</p>
                                    </div>
                                </div>
                                <div class="podcast-content">
                                    <h3>Arranging and enjoying life through work</h3>
                                    <div class="date">
                                        <p>April 10,2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                            data-aos-once="true">
                            <div class="single-podcasts-card style3">
                                <div class="podcasts-image">
                                    <img src="assets/images/podcasts/podcasts-6.jpg" alt="Image">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i></a>
                                    <div class="episodes">
                                        <p>Episodes: 08</p>
                                    </div>
                                </div>
                                <div class="podcast-content">
                                    <h3>Proved, only action can bring success</h3>
                                    <div class="date">
                                        <p>April 10,2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800"
                            data-aos-once="true">
                            <div class="single-podcasts-card style3">
                                <div class="podcasts-image">
                                    <img src="assets/images/podcasts/podcasts-7.jpg" alt="Image">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i></a>
                                    <div class="episodes">
                                        <p>Episodes: 11</p>
                                    </div>
                                </div>
                                <div class="podcast-content">
                                    <h3>Finding happy moments through challenges</h3>
                                    <div class="date">
                                        <p>April 10,2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories style-2">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#"><i class="flaticon-briefcase"></i>Business</a></li>
                            <li><a href="#"><i class="flaticon-fashion"></i>Fashion</a></li>
                            <li><a href="#"><i class="flaticon-writing-tool"></i>writing</a></li>
                            <li><a href="#"><i class="flaticon-web-development"></i>Development</a></li>
                            <li><a href="#"><i class="flaticon-audio-speaker"></i>Marketing</a></li>
                        </ul>
                    </div>
                    <div class="subscribe-area">
                        <div class="top-content">
                            <i class="flaticon-email"></i>
                            <h3>Subscribe To Newsletter</h3>
                            <p>Get updates to news & events</p>
                        </div>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your Email" name="EMAIL" required
                                autocomplete="off">
                            <button class="default-btn" type="submit">
                                Subscribe
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="students-stories-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Check Student stories</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                    data-aos-once="true">
                    <div class="single-stories-card style2">
                        <div class="stories-content">
                            <h3>Why I choose Sanu_Freshman Student</h3>
                        </div>
                        <iframe src="https://www.youtube.com/embed/dT9uXvsH6EU" title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                    data-aos-once="true">
                    <div class="single-stories-card style2">
                        <div class="stories-content">
                            <h3>Why I choose Sanu University And Teachers</h3>
                        </div>
                        <iframe src="https://www.youtube.com/embed/TM9gjl-8X-E" title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                    data-aos-once="true">
                    <div class="single-stories-card style2">
                        <div class="stories-content">
                            <h3>Why I choose Sanu Campus And Environment</h3>
                        </div>
                        <iframe src="https://www.youtube.com/embed/yeZpJ6lJC54" title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <div class="lates-news-area pt-100 pb-70 bg-f4f6f9">
        <div class="container">
            <div class="section-title">
                <h2>Latest News</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
                </p>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="single-news-card style3" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200" data-aos-once="true">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="news-img">
                                    <a href="news-details.html"><img src="assets/images/news/news-1.jpg"
                                            alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="news-content">
                                    <div class="list">
                                        <ul>
                                            <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a>
                                            </li>
                                            <li><i class="flaticon-tag"></i>Social Sciences</li>
                                        </ul>
                                    </div>
                                    <a href="news-details.html">
                                        <h3>Professor Tom Comments On The Volunteer B. Snack Brand</h3>
                                    </a>
                                    <a href="news-details.html" class="read-more-btn">read More<i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-news-card style3" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400" data-aos-once="true">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="news-img">
                                    <a href="news-details.html"><img src="assets/images/news/news-2.jpg"
                                            alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="news-content">
                                    <div class="list">
                                        <ul>
                                            <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a>
                                            </li>
                                            <li><i class="flaticon-tag"></i>Social Sciences</li>
                                        </ul>
                                    </div>
                                    <a href="news-details.html">
                                        <h3>How To Use Technology To Adapt Your Talent To The World</h3>
                                    </a>
                                    <a href="news-details.html" class="read-more-btn">read More<i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                    data-aos-once="true">
                    <div class="single-news-card style2">
                        <div class="news-img">
                            <a href="news-details.html"><img src="assets/images/news/news-4.jpg" alt="Image"></a>
                        </div>
                        <div class="news-content">
                            <div class="list">
                                <ul>
                                    <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                    <li><i class="flaticon-tag"></i>Social Sciences</li>
                                </ul>
                            </div>
                            <a href="news-details.html">
                                <h3>Here Are The Things To Look For When Selecting Course</h3>
                            </a>
                            <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection
