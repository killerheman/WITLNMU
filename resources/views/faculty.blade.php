@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'Faculty'])
    <style>
        .our-team {
            text-align: center;
        }

        .our-team .pic {
            position: relative;
        }

        .our-team .pic:before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.55);
            opacity: 0;
            transition: all 0.3s ease 0s;
        }

        .our-team .pic:after {
            content: "";
            width: 90%;
            height: 90%;
            border: 1px solid #f5f5f6;
            position: absolute;
            top: 5%;
            left: 5%;
            opacity: 0;
            transition: all 0.3s ease 0s;
        }

        .our-team:hover .pic:before,
        .our-team:hover .pic:after {
            opacity: 1;
        }

        .our-team .pic img {
            width: 100%;
            height: auto;
        }

        .our-team .social-links {
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            bottom: 40px;
            left: 0;
            opacity: 0;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .our-team:hover .social-links {
            opacity: 1;
        }

        .our-team .social-links li {
            display: inline-block;
            margin-right: 10px;
        }

        .our-team .social-links li a {
            display: block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 50%;
            font-size: 15px;
            color: #f5f5f6;
            border: 1px solid #f5f5f6;
            transition: all 0.3s ease 0s;
        }

        .our-team .social-links li .fa-twitter:hover {
            background: #00aced;
            border-color: #00aced;
        }

        .our-team .social-links li .fa-google-plus:hover {
            background: #007a23;
            border-color: #007a23;
        }

        .our-team .social-links li .fa-linkedin:hover {
            background: #0177b5;
            border-color: #0177b5;
        }

        .our-team .social-links li .fa-facebook:hover {
            background: #4867aa;
            border-color: #4867aa;
        }

        .our-team .team-content {
            padding: 15px 0;
            background: #8b8484d9;
            border-top: 2px solid #7C0000;
            overflow: hidden;
            position: relative;
        }

        .our-team .team-content:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #007a23;
            position: absolute;
            top: -100%;
            left: 0;
            transition: all 0.3s ease-out 0s;
        }

        .our-team:hover .team-content:before {
            top: 0;
        }

        .our-team .team-content1 {
            padding: 10px 0;
            background: #8b8484d9;
            border-bottom: 2px solid #7C0000;
            overflow: hidden;
            position: relative;
        }

        .our-team .team-content1:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #007a23;
            position: absolute;
            top: -100%;
            left: 0;
            transition: all 0.3s ease-out 0s;
        }

        .our-team:hover .team-content1:before {
            top: 0;
        }

        .our-team .title {
            font-size: 24px;
            color: #007a23;
            margin: 0 0 5px;
            text-transform: capitalize;
            z-index: 1;
            position: relative;
            transition: all 0.5s ease 0s;
        }

        .our-team .post {
            display: block;
            font-size: 12px;
            color: #f5f5f6;
            z-index: 1;
            position: relative;
            transition: all 0.5s ease 0s;
        }

        .our-team:hover .title,
        .our-team:hover .post {
            color: #fff;
        }

        @media screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 20px;
            }
        }
    </style>
    <div class="container mt-5 mb-5">

        <p class="p-3 mb-5 text-center">
            APJAKWIT has a team of highly qualified and experienced faculty members. During Course Curriculum complete emphasis is given on the student’s Professional and technical upliftment to face the challenges of techno world.
        </p>
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Director (APJAKWIT)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/officers/wit_director.jpeg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Member</h3>
                        <span class="post">Director (APJAKWIT)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Brajesh Kumar</h3>
                        <span class="post">ENGINEERING & TECHNOLOGY(CSE/IT/MCA)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Santosh Kumar</h3>
                        <span class="post">ENGINEERING & TECHNOLOGY(CSE/IT/MCA)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Amit Kumar Mishra</h3>
                        <span class="post">ENGINEERING & TECHNOLOGY(CSE/IT/MCA)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Ms. Gita Sinha</h3>
                        <span class="post">ENGINEERING & TECHNOLOGY(CSE/IT/MCA)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Deependra Kr Jha</h3>
                        <span class="post">ENGINEERING & TECHNOLOGY(CSE/IT/MCA)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Md. Ashif Habibi</h3>
                        <span class="post">ENGINEERING & TECHNOLOGY(CSE/IT/MCA)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Regular)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Amar Choudhary</h3>
                        <span class="post">Electronics Engineering</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Guest)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Kumar Avinash Chandra</h3>
                        <span class="post">Electrical Engineering</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="team-content1">
                        <span class="post">Assistant Professor (Guest)</span>
                    </div>
                    <div class="pic">
                        <img src="{{ asset('home/images/pic2.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mr. Vikash Kumar</h3>
                        <span class="post">Mechanical Engineering</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
