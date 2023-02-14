@extends('includes.homelayout')
@section('content')
    @include('includes.banner', ['title' => 'Fee Structure'])

    <div class="container mt-5 mb-5 me-2">
        <div class="row">
            <div class="col-md-offset-1 col-md-11">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <h4 class="title">Fee Structure</h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Particulars</th>
                                    <th>B.Tech (Annual)</th>
                                    <th>MCA (Per Semester)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 </td>
                                    <td>Annual Fee</td>
                                    <td>30,000/-</td>
                                    <td>Annual Fee</td>
                                </tr>
                                <tr>
                                    <td>2 </td>
                                    <td>Tuition Fee</td>
                                    <td>42,000/-</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3 </td>
                                    <td>Miscellaneous</td>
                                    <td>8,000/-</td>
                                    <td>20,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Examination Fee</td>
                                    <td>1,000/-</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td><b>81,000/-</b></td>
                                    <td><b>20,000/-</b></td>
                                </tr>
                                <tr>
                                    <td>5 </td>
                                    <td>Caution Money (Refundable) (One-Time)</td>
                                    <td>2,500/-</td>
                                    <td>2,500</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <p>
            <b>Hostel Fee: –</b>
        <ul>
            <li>Lodging charges of ₹ 12,000/ per annum for Institute Campus Hostel & ₹ 18,000/- per annum for University
                Campus Hostel (approximately 400 meters away from the Institute campus).
            </li>
            <li>
                Mess charges shall be borne by boarders on monthly basis. Presently, it is ₹ 2,200/- per month which may
                change as per inflation rate.
            </li>
        </ul>
        <p><b>Note - </b> Institute receives fee either in the form of <b>Demand Draft</b> drawn in favor of “<b>W.I.T. LNMU
                Security Deposit”</b> payable at Darbhanga or through various <b>Electronic Fund Transfer Mode like RTGS,
                NEFT, IMPS etc.</b> as per below details:-</p>

        </p>
        <br>
        <div class="panel-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Particulars</th>
                        <th>Details</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 </td>
                        <td>Account Holder Name</td>
                        <td>W.I.T. LNMU Security Deposit</td>
                    </tr>
                    <tr>
                        <td>2 </td>
                        <td>Bank Name</td>
                        <td>Punjab National Bank</td>
                    <tr>
                        <td>3 </td>
                        <td>Branch</td>
                        <td>LNMU Campus, Kameshwara Nagar, Darbhanga</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Account Number</td>
                        <td>0108032100000241</td>
                    </tr>
                    <tr>
                        <td>5 </td>
                        <td>IFSC Branch</td>
                        <td>PUNB0622700</td>
                    </tr>

                </tbody>
            </table>
            <p>Admission through <b>Lateral Entry</b> in second year of B.Tech.<b> (CSE & IT) </b>is also allowed for
                diploma holders in relevant program.

                <b>P+C+M = Physics + Chemistry + Mathematics,</b> P+C+B+M = <b>Physics + Chemistry + Biology+ Mathematics,
                    P+C+B = Physics + Chemistry + Biology.</b>
            </p>
        </div>
    </div>
@endsection
