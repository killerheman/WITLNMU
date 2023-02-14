@extends('includes.homelayout')
@section('content')

@include('includes.banner',['title' => 'Academic Programmes'])

<div class="academics-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="academics-left-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-academics-card3">
                                <div class="icon">
                                    <i class="flaticon-college-graduation"></i>
                                </div>
                                <a href="academics-details.html">
                                    <h3>B.Tech - Information Technology</h3>
                                </a>
                                <p>No. of seats - 30</p>
                                <p>Duration of course - 4 Years (Eight Semester)</p>
                                <p>Eligibility - 10+2 or equivalent with minimum 45% marks (40% for reserved category) in P+C+M / P+C+B+M taken together and pass in English.</p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-academics-card3">
                                <div class="icon">
                                    <i class="flaticon-college-graduation"></i>
                                </div>
                                <a href="academics-details.html">
                                    <h3>B.Tech - Computer Science & Engineering</h3>
                                </a>
                                <p>No. of seats - 60</p>
                                <p>Duration of course - 4 Years (Eight Semester)</p>
                                <p>Eligibility - 10+2 or equivalent with minimum 45% marks (40% for reserved category) in P+C+M / P+C+B+M taken together and pass in English.</p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-academics-card3">
                                <div class="icon">
                                    <i class="flaticon-college-graduation"></i>
                                </div>
                                <a href="academics-details.html">
                                    <h3>B.Tech - Bioinformatics</h3>
                                    <p class="mb-2" style="color: #007a23;">Admission Academic Program (AICTE Approval Awaited)</p>
                                </a>
                                <p>No. of seats - 30</p>
                                <p>Duration of course - 4 Years (Eight Semester)</p>
                                <p>Eligibility - 10+2 or equivalent with minimum 45% marks (40% for reserved category) in P+C+M / P+C+B+M / P+C+B taken together and pass in English.</p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-academics-card3">
                                <div class="icon">
                                    <i class="flaticon-student-with-graduation-cap"></i>
                                </div>
                                <a href="academics-details.html">
                                    <h3>Master of Computer Application (MCA)</h3>
                                </a>
                                <p>No. of seats - 30</p>
                                <p>Duration of course - 3 Years (Six Semester)</p>
                                <p>Eligibility - 3 year recognized bachelor degree with minimum 50% marks (45% for reserved category) & mathematics at 10+ 2/ equivalent level.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
