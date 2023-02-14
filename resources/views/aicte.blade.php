@extends('includes.homelayout')
@section('content')

@include('includes.banner',['title' => 'AICTE'])

<div class="container pt-5 pb-70">
<p class="p-5 text-justify">The All India Council for Technical Education (AICTE) has been in existence since November 1945 as a national Level Apex Advisory Body and as a statutory body through an Act of Parliament in 1987 with its mission of developing and promoting quality Technical Education in the Country in a coordinated and integrated manner. The Council’s constant endeavour is to encourage a meaningful association between the Technical Education system and research and development activities in a concerted effort aimed at nation building. The All India Council for Technical Education (AICTE) has been continuously granting Extension of Approval (EoA) since 2005 to Dr. APJ Abdul Kalam Women’s Institute of Technology, L. N. Mithila University, Darbhanga in addition to its first Letter of Approval (LoA) issued in 2004.</p>

</div>
<div class="container mb-5 me-2">
    <div class="row">
        <div class="col-md-offset-1 col-md-11">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <h4 class="title">AICTE</h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Particulars</th>
                                <th>Download</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 </td>
                                <td>AICTE Approval 2021-22</td>
                                <td><a href="#"><img src="{{ asset('home/images/pdfimg.png') }}" height="40"/></td>
                            </tr>
                            <tr>
                                <td>2 </td>
                                <td>Extension of Approval 2020-21</td>
                                <td><a href="#"><img src="{{ asset('home/images/pdfimg.png') }}" height="40"/></td>
                            </tr>
                            <tr>
                                <td>3 </td>
                                <td>Extension of Approval 2019-20</td>
                                <td><a href="#"><img src="{{ asset('home/images/pdfimg.png') }}" height="40"/></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Extension of Approval 2018-19</td>
                                <td><a href="#"><img src="{{ asset('home/images/pdfimg.png') }}" height="40"/></td>
                            </tr>
                            <tr>
                                <td>5 </td>
                                <td>Letter of Approval 2004</td>
                                <td><a href="#"><img src="{{ asset('home/images/pdfimg.png') }}" height="40"/></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
