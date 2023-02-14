<div class="navbar-area nav-bg-2">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('home/images/logo/witlogo.png') }}" class="main-logo" height="60"
                            lt="logo">
                        <span>WIT LNMU</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <!-- <a class="navbar-brand" href="index-3.html">
                    <img src="assets/images/logo.png" class="main-logo" alt="logo">
                    <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                </a> -->
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('witGlance') }}" class="nav-link">APJAKWIT at a Glance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('aboutLnmu') }}" class="nav-link">About LNMU</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('history') }}" class="nav-link">History</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('visionMission') }}" class="nav-link">Vision & Mission</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Governance
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('managingCouncil') }}" class="nav-link">Managing Council</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('vcMessage') }}" class="nav-link">Vice Chancellor's Message</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('directorDesk') }}" class="nav-link">Director's Desk</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('committees') }}" class="nav-link">Committees</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Approval
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('aicte')}}" class="nav-link">AICTE</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('dstBihar')}}" class="nav-link">DST, Bihar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('higherEducation')}}" class="nav-link">Higher Education</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('faculty')}}" class="nav-link">
                                Faculty
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Admission
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('academicProgrammes') }}" class="nav-link">Academic Programmes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('feeStructure') }}" class="nav-link">Fee Structure</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('reservation') }}" class="nav-link">Reservation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Alumni
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('alumniList') }}" class="nav-link">Alumni List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('alumniMessage') }}" class="nav-link">Alumni Message</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Facilities
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('hostel') }}" class="nav-link">Hostels</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('nationalKnowledgeNetwork') }}" class="nav-link">National Knowledge Network (Gol)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('freeWifi') }}" class="nav-link">Free Wi-Fi(GoB)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('studentCreditCard') }}" class="nav-link">Student Credit Card</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="others-options">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="icon">
                        <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
