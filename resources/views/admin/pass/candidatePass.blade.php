<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gate Pass</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        .gatepass .logo{
            width: 100%;
            text-align: center;
            padding: 5px 0;
        }
        .gatepass .table{
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: center;
        }
        .gatepass .logo img{
            width: 500px;
            height: 55px;
            object-fit: contain;
        }
        .gatepass .table .reg_no{
            text-align: center;
            padding: 15px 0;
            font-size: 25px;
        }
        .gatepass .table .venue{
            font-size: 24px;
            font-weight: bold;
        }
        .gatepass .table .date_time{
            font-size: 14px;
            font-weight: bold;
        }
        .gatepass .table .seat{
            font-size: 50px;
            font-weight: bold;
        }
        .gatepass .table .venue_name{
            font-size: 20px;
            font-weight: bold;
        }
        .gatepass .table .barcode-table{
            width: 100%;
            text-align: left;
        }
        .barcode-table tr:first-of-type td:first-of-type{
            width: 150px;
        }
        .w-300{
            width: 200px;
        }
        .w-300 p{
            font-size: .8rem;
            font-weight: bold;
        }
        .gatepass .barcode-table img{
            width: 100%;
        }
        .candidate-information{
            width: 100%;
            border: 1px solid #000000;
            border-style: outset;
            border-spacing: 0px;
            margin-left: .5rem;
        }
        .candidate-information tr td{
            border: 1px solid #000000;
            border-collapse: collapse;
            font-size: 16px;
            font-weight: bold;
            padding: .25rem;
        }
        .print_date{
            width: 100%;
            border-spacing: 0px;
            font-size: .8rem;
            font-weight: bold;
        }
        .justify-text{
            text-align: justify;
        }
    </style>

</head>
<body>


<div class="gatepass">
    <table class="table">
        <tr>
            <td class="logo">
                <img src="{{asset('front/images/logos/logo-black.png')}}"/>
            </td>
        </tr>
        <!-- <tr><td><u>Gate Pass</u></td></tr> -->
        <tr>
            <td class="reg_no">
                <u>Reg #: {{ucwords($user->eligible[0]->reg_no)}} </u>
            </td>
        </tr>
        <tr>
            <td class="venue">
                SARGODHA ROAD, UNIVERSITY TOWN, FAISALABAD
            </td>
        </tr>
        <tr>
            <td class="venue">
                Reporting Time: Uptil 09:00 AM
            </td>
        </tr>
        <tr>
            <td>
                <table class="barcode-table">
                    <tr>
                        <td class="w-300">
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate($user->eligible[0]->pass_id)) !!} ">
                        </td>
                        <td>
                            <table class="candidate-information">
                                <tr>
                                    <td colspan="2">
                                        Name: {{isset($user->eligible[0]->name) ? ucwords($user->eligible[0]->name) : ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        CNIC
                                    </td>
                                    <td>
                                        {{isset($user->eligible[0]->cnic) ? $user->eligible[0]->cnic : ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vaccination Status</td>
                                    <td>
                                        @if(isset($user->eligible[0]->vaccination_status) && $user->eligible[0]->vaccination_status == 0)
                                            Not Vaccinated
                                        @elseif(isset($user->eligible[0]->vaccination_status) && $user->eligible[0]->vaccination_status == 1)
                                            Partially Vaccinated
                                        @elseif(isset($user->eligible[0]->vaccination_status) && $user->eligible[0]->vaccination_status == 2)
                                            Fully Vaccinated
                                        @else
                                            Not Vaccinated
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="print_date">
                    <tr>
                        <td>
                            <p> C#{{$user->eligible[0]->pass_id}}</p>
                        </td>
                        <td style="text-align: right">
                            <p>{{Carbon\Carbon::now()->format('M d, Y')}}</p>
                        </td>
                    </tr>
                </table>
                <table class="print_date">
                    <tr>
                        <td>
                            <p class="justify-text">You are required to get this card scanned at the reception and submit your cell phone at mobile booth.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
