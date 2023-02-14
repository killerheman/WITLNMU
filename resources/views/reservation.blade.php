@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'Reservation'])

    <div class="container mt-5 mb-5 me-2">
        <p class="mb-3 text-justify">
            Reservation of seats for permanent resident/native/domicile of Bihar shall be made as per existing rules of Govt. of Bihar.
        </p>
        <div class="row">
            <div class="col-md-offset-1 col-md-11">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <h4 class="title">Reservation Of Seat</h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Economically Weaker Section (EWS)</th>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <th>Backward Class (BC)</th>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <th>Extremely Backward Class (EBC)</th>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <th>Schedule Caste (SC)</th>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <th>Schedule Tribes (ST)</th>
                                    <td>01%</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <p class="mt-3 text-justify">
            10% seats are reserved under NRI/Payment quota seats. 5% of seats are reserved for wards of permanent employees of Lalit Narayan Mithila University, Darbhanga (wife or unmarried daughter), Ward Certificate from Employer and affidavit of the employee must be enclosed with Application Form.
        </p>
        <p class="mt-2 text-justify">
            Candidates belonging to reserved category and selected under General category will not be treated/ counted under reserved quota.
        </p>
    </div>
@endsection
