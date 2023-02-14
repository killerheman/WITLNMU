@php
if(!isset($bannerpic)){
    $bannerpic = 'page-bnner-1.jpg';
}
@endphp
<div class="page-banner-area" style="background-image: url({{ asset('home/images/page-banner/'. $bannerpic) }})">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $title }}</h1>
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>{{ $title }}</li>
            </ul>
        </div>
    </div>
</div>
