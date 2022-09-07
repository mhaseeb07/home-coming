<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challan Form</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        img{
            width: 90%;
        }
        .main-table{
            width: 100%;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            color: #000;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        .personalInfo table {
            border-collapse: collapse;
        }

        .personalInfo table tr td {
            border: 1px solid black;
        }
        tr{
            margin-bottom: 5px;
        }
        .heading{
            background-color: #c2c2c2;
            padding: 3px 10px;
        }
        .feeTable{
            border-collapse: collapse;
            width: 100%;
            padding: 0;
        }
        .feeTable tbody{
            height: 350px
        }
        .feeTable tr th, .feeTable tr td{
            border: 1px solid #000;
            font-size: 10px;
        }
        .small{
            font-size: 10px;
        }
        .bold{
            font-size: 8px;
            font-weight: bold;
        }
        .border-bottom{
            border: 0;
            border-bottom: 1px solid #000000;
            width: 70%;
            font-weight: bold;
            font-size: 9px;
        }
        .border-bottom-full{
            border: 0;
            border-bottom: 1px solid #000000;
            width: 80%;
            font-weight: bold;
            font-size: 9px;
        }
        .reg-border{
            border: 0;
            border-bottom: 1px solid #000000;
            width: 60%;
            font-weight: bold;
            font-size: 9px;
        }
    </style>

</head>
<body>

<div class="information">
    <table class="main-table">
        <tr>

            <td style="width: 25%; border-right: 1px dotted #000;">
                <table>
                    <tr><td colspan="2" align="center" class="small">HMBL The University of Faisalabad Branch(1208)</td></tr>
                    <tr><td colspan="2" align="center" class="small">(Valid only for the date mentioned)</td></tr><tr><td colspan="2" align="center" class="bold">Habib Metropolitan Bank</td></tr>
                    <tr><td colspan="2" align="center" class="small">THE UNIVERSITY OF FAISALABAD</td></tr>
                    <tr><td colspan="2" align="center" class="bold">Corporate Collection ID @if(isset($eligible) && $eligible->campus_id == 1) 145 @elseif(isset($eligible) && $eligible->campus_id == 2) 148 @elseif(isset($eligible) && $eligible->campus_id == 3) 147 @elseif(isset($eligible) && $eligible->campus_id == 16) 145 @else --- @endif</td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr>
                        <td><label class="small">Date:</label><input type="text" class="border-bottom" value="{{date('d/m/Y',strtotime(now()))}}"></td>
                        <td><label class="small">Challan#:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?date('Y',strtotime(now())).$eligible->id:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Reg#:</label><input type="text" class="reg-border" value="{{(isset($eligible)?$eligible->reg_no:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Name:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->name:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">CNIC#:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->cnic:'')}}"></td>
                    </tr>
                    <tr>
                        <td><label class="small">Degree:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->degree_name:'')}}"></td>
                        <td><label class="small">Session:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->passout_session:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Cash/Chq/DD:</label><input type="text" class="border-bottom"></td>
                    </tr>
                    <tr><td colspan="2">
                            <table class="feeTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Head of A/C</th>
                                    <th>Ammount</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Convocation Fee</td>
                                    <td align="right" align="right">2500/-</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                                </tr>

                                </tbody>

                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td>Grand Total</td>
                                    <td align="right">2500/-</td>
                                </tr>
                                </tfoot>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Depositor Name:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Contact Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">NIC Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bold">Amount In Words: <u><b></b></u></td>
                    </tr>
                    <tr>
                        <td class="bold">Twenty Five Hundreds  Only</td>
                    </tr>
                    <tr><td colspan="2"><br><br><br></td></tr>
                    <tr>
                        <td class="bold">Depositer's Signature</td>
                        <td class="bold">Office Stamp / Signature</td>
                    </tr>

                    <tr><td class="bold">Office Copy</td></tr>
                </table>
            </td>
            <td style="width: 25%; border-right: 1px dotted #000;">
                <table>
                    <tr><td colspan="2" align="center" class="small">HMBL The University of Faisalabad Branch(1208)</td></tr>
                    <tr><td colspan="2" align="center" class="small">(Valid only for the date mentioned)</td></tr>

                    <tr><td colspan="2" align="center" class="bold">Habib Metropolitan Bank</td></tr>
                    <tr><td colspan="2" align="center" class="small">THE UNIVERSITY OF FAISALABAD</td></tr>
                    <tr><td colspan="2" align="center" class="bold">Corporate Collection ID @if(isset($eligible) && $eligible->campus_id == 1) 145 @elseif(isset($eligible) && $eligible->campus_id == 2) 148 @elseif(isset($eligible) && $eligible->campus_id == 3) 147 @else --- @endif</td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr>
                        <td><label class="small">Date:</label><input type="text" class="border-bottom" value="{{date('d/m/Y',strtotime(now()))}}"></td>
                        <td><label class="small">Challan#:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?date('Y',strtotime(now())).$eligible->id:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Reg#:</label><input type="text" class="reg-border" value="{{(isset($eligible)?$eligible->reg_no:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Name:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->name:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">CNIC#:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->cnic:'')}}"></td>
                    </tr>
                    <tr>
                        <td><label class="small">Degree:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->degree_name:'')}}"></td>
                        <td><label class="small">Session:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->passout_session:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Cash/Chq/DD:</label><input type="text" class="border-bottom"></td>
                    </tr>
                    <tr><td colspan="2">
                            <table class="feeTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Head of A/C</th>
                                    <th>Ammount</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Convocation Fee</td>
                                    <td align="right" align="right">2500/-</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                                </tr>

                                </tbody>

                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td>Grand Total</td>
                                    <td align="right">2500/-</td>
                                </tr>
                                </tfoot>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Depositor Name:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Contact Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">NIC Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bold">Amount In Words: <u><b></b></u></td>
                    </tr>
                    <tr>
                        <td class="bold">Twenty Five Hundreds  Only</td>
                    </tr>
                    <tr><td colspan="2"><br><br><br></td></tr>
                    <tr>
                        <td class="bold">Depositer's Signature</td>
                        <td class="bold">Office Stamp / Signature</td>
                    </tr>

                    <tr><td class="bold">Finance Copy</td></tr>
                </table>
            </td>
            <td style="width: 25%; border-right: 1px dotted #000;">
                <table>
                    <tr><td colspan="2" align="center" class="small">HMBL The University of Faisalabad Branch(1208)</td></tr>
                    <tr><td colspan="2" align="center" class="small">(Valid only for the date mentioned)</td></tr>

                    <tr><td colspan="2" align="center" class="bold">Habib Metropolitan Bank</td></tr>
                    <tr><td colspan="2" align="center" class="small">THE UNIVERSITY OF FAISALABAD</td></tr>
                    <tr><td colspan="2" align="center" class="bold">Corporate Collection ID @if(isset($eligible) && $eligible->campus_id == 1) 145 @elseif(isset($eligible) && $eligible->campus_id == 2) 148 @elseif(isset($eligible) && $eligible->campus_id == 3) 147 @else --- @endif</td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr>
                        <td><label class="small">Date:</label><input type="text" class="border-bottom" value="{{date('d/m/Y',strtotime(now()))}}"></td>
                        <td><label class="small">Challan#:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?date('Y',strtotime(now())).$eligible->id:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Reg#:</label><input type="text" class="reg-border" value="{{(isset($eligible)?$eligible->reg_no:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Name:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->name:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">CNIC#:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->cnic:'')}}"></td>
                    </tr>
                    <tr>
                        <td><label class="small">Degree:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->degree_name:'')}}"></td>
                        <td><label class="small">Session:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->passout_session:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Cash/Chq/DD:</label><input type="text" class="border-bottom"></td>
                    </tr>
                    <tr><td colspan="2">
                            <table class="feeTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Head of A/C</th>
                                    <th>Ammount</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Convocation Fee</td>
                                    <td align="right" align="right">2500/-</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                                </tr>

                                </tbody>

                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td>Grand Total</td>
                                    <td align="right">2500/-</td>
                                </tr>
                                </tfoot>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Depositor Name:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Contact Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">NIC Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bold">Amount In Words: <u><b></b></u></td>
                    </tr>
                    <tr>
                        <td class="bold">Twenty Five Hundreds  Only</td>
                    </tr>
                    <tr><td colspan="2"><br><br><br></td></tr>
                    <tr>
                        <td class="bold">Depositer's Signature</td>
                        <td class="bold">Office Stamp / Signature</td>
                    </tr>

                    <tr><td class="bold">Bank Copy</td></tr>
                </table>
            </td>
            <td style="width: 25%; border-right: 1px dotted #000;">
                <table>
                    <tr><td colspan="2" align="center" class="small">HMBL The University of Faisalabad Branch(1208)</td></tr>
                    <tr><td colspan="2" align="center" class="small">(Valid only for the date mentioned)</td></tr>

                    <tr><td colspan="2" align="center" class="bold">Habib Metropolitan Bank</td></tr>
                    <tr><td colspan="2" align="center" class="small">THE UNIVERSITY OF FAISALABAD</td></tr>
                    <tr><td colspan="2" align="center" class="bold">Corporate Collection ID @if(isset($eligible) && $eligible->campus_id == 1) 145 @elseif(isset($eligible) && $eligible->campus_id == 2) 148 @elseif(isset($eligible) && $eligible->campus_id == 3) 147 @else --- @endif</td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr><td colspan="2" align="center"></td></tr>
                    <tr>
                        <td><label class="small">Date:</label><input type="text" class="border-bottom" value="{{date('d/m/Y',strtotime(now()))}}"></td>
                        <td><label class="small">Challan#:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?date('Y',strtotime(now())).$eligible->id:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Reg#:</label><input type="text" class="reg-border" value="{{(isset($eligible)?$eligible->reg_no:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Name:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->name:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">CNIC#:</label><input type="text" class="border-bottom-full" value="{{(isset($eligible)?$eligible->cnic:'')}}"></td>
                    </tr>
                    <tr>
                        <td><label class="small">Degree:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->degree_name:'')}}"></td>
                        <td><label class="small">Session:</label><input type="text" class="border-bottom" value="{{(isset($eligible)?$eligible->passout_session:'')}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Cash/Chq/DD:</label><input type="text" class="border-bottom"></td>
                    </tr>
                    <tr><td colspan="2">
                            <table class="feeTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Head of A/C</th>
                                    <th>Ammount</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Convocation Fee</td>
                                    <td align="right" align="right">2500/-</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                                </tr>

                                </tbody>

                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td>Grand Total</td>
                                    <td align="right">2500/-</td>
                                </tr>
                                </tfoot>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Depositor Name:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">Contact Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label class="small">NIC Number:</label><input type="text" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bold">Amount In Words: <u><b></b></u></td>
                    </tr>
                    <tr>
                        <td class="bold">Twenty Five Hundreds  Only</td>
                    </tr>
                    <tr><td colspan="2"><br><br><br></td></tr>
                    <tr>
                        <td class="bold">Depositer's Signature</td>
                        <td class="bold">Office Stamp / Signature</td>
                    </tr>

                    <tr><td class="bold">Student Copy</td></tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
