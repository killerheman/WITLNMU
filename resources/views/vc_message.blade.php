@extends('includes.homelayout')
@section('content')

@include('includes.banner',['title' => 'Vice-Chancellors Message'])
<style>
    .our-team{
    text-align: center;
}
.our-team .pic{
    position: relative;
}
.our-team .pic:before{
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
.our-team .pic:after{
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
.our-team:hover .pic:after{
    opacity: 1;
}
.our-team .pic img{
    width: 100%;
    height: auto;
}
.our-team .social-links{
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
.our-team:hover .social-links{
    opacity: 1;
}
.our-team .social-links li{
    display: inline-block;
    margin-right: 10px;
}
.our-team .social-links li a{
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
.our-team .social-links li .fa-twitter:hover{
    background: #00aced;
    border-color: #00aced;
}
.our-team .social-links li .fa-google-plus:hover{
    background: #007a23;
    border-color: #007a23;
}
.our-team .social-links li .fa-linkedin:hover{
    background: #0177b5;
    border-color: #0177b5;
}
.our-team .social-links li .fa-facebook:hover{
    background: #4867aa;
    border-color: #4867aa;
}
.our-team .team-content{
    padding: 15px 0;
    background: #8b8484d9;
    border-top: 2px solid #7C0000;
    overflow: hidden;
    position: relative;
}
.our-team .team-content:before{
    content: "";
    width: 100%;
    height: 100%;
    background: #007a23;
    position: absolute;
    top: -100%;
    left: 0;
    transition: all 0.3s ease-out 0s;
}
.our-team:hover .team-content:before{
    top: 0;
}
.our-team .title{
    font-size: 24px;
    color: #007a23;
    margin: 0 0 5px;
    text-transform: capitalize;
    z-index: 1;
    position: relative;
    transition: all 0.5s ease 0s;
}
.our-team .post{
    display: block;
    font-size: 14px;
    color: #f5f5f6;
    text-transform: capitalize;
    z-index: 1;
    position: relative;
    transition: all 0.5s ease 0s;
}
.our-team:hover .title,
.our-team:hover .post{
    color: #fff;
}
@media screen and (max-width: 990px){
    .our-team{ margin-bottom: 20px; }
}
</style>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset('home/images/officers/vc.jpeg')}}">
                    {{-- <ul class="social-links">
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                        <li><a href="#" class="fab fa-facebook"></a></li>
                    </ul> --}}
                </div>
                <div class="team-content">
                    <h3 class="title">Prof. Surendra Pratap Singh</h3>
                    <span class="post">Vice-Chancellor, L.N.M.U</span>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <p class="p-5 text-justify">
                The establishment of APJAKWIT in this region is a step forward in the context of promoting technical education especially for the upliftment of women of Mithila in particular and India in general. Student of this Institute has proven merit to excel in their field. We can’t negate that knowledge is the real power in the present age of knowledge technology and in the process; the women technocrats have a remarkable impact on the overall economic transformation of the country. The APJAKWIT proved to be a unique Institute only for the girl students. In view of the transformation of economy through the active participation of women which may empower them to face the change and challenges of 21st century. I wish the upcoming and budding students enrolled in the institute a bright and prosperous career.
            </p>
        </div>

    </div>

</div>

@endsection
