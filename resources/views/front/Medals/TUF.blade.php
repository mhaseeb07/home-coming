@extends('front.layouts.app')
@section('title','TUF Convocation - The University of Faisalabad')
@section('content')

        <!-- Top Most Medals Banner -->
        <div id="page-banner-area" class="page-banner-area conv-instructions mb-5" style="background-image:url(front/images/hero_area/banner_bg.png)">
                <!-- Subpage title start -->
                <div class="page-banner-title">
                    <div class="text-center">
                    <h2>Medals List</h2>
                    </div>
                </div><!-- Subpage title end -->
        </div><!-- Page Banner end -->
    <div class="container">
        <div class="row"> <!--Medals List Row Starts Here -->
            <div class="col-md-12 col-12"> <!--Col Start -->
                <div class="toper-text text-center">
                    <h2>TUF Medals List</h2>
                </div>
            </div> <!--Col Ends -->
            <!-- <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-sm dataTable">
                        <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Degree Name</th>
                                <th scope="col">Session</th>
                                <th scope="col">Reg.No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Medal</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div> -->


            <!-- add static list for request of Miss Rabia -->

            <div class="col-md-12">
                <div class="table-responsive">

<p style="margin-right: 5px; text-align: center;"><span style="font-size:11pt"><span style="line-height:90%"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b>&nbsp;</b><b><u style="text-underline:black"><span style="font-size:14.0pt"><span style="line-height:90%">List of Medal Holders for Eighth Convocation</span></span></u></b><b> </b></span></span></span></span></p>

<table class="TableGrid table" >
    <tbody>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:2px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Serial </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none">
            <p align="center" style="margin-right:2px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Degree&nbsp; </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none">
            <p align="center" style="margin-right:2px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Session </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none">
            <p align="center" style="margin-right:2px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Registration No </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none">
            <p align="center" style="margin-right:2px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Name&nbsp; </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Medal </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
            <p style="margin-bottom:1px; margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">Marks </span></b></span></span></span></span></p>

            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">% </span></b></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:34px; border-top:1px solid black; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><b><span style="font-size:1rem">CGPA </span></b></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">1.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bachelor of Business Administration&nbsp; </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BBA-FA17-032 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">NOOR SOOFI </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.72 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.87 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BBA-FA17-007 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD ABDULLAH </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.86 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.76 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BBA-FA17-026 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD HASSAAN HASSAN </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">83.37 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.76 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">4.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bachelor of Chemical Engineering&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BChE-FA17-035 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">HAMZA TAHIR </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">87.73 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.87 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">5.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bachelor of Electrical Engineering&nbsp; </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BEE-FA17-045 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD UZAIR ISHAQ&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.06 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.74 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">6.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BEE-FA17-064 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD UZAIR ARSHAD&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">83.55 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.72 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">7.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BEE-FA17-040 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">SHAROON&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">82.82 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.65 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">8.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSc Engineering Technology </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSET-FA17-016 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUSAWAR ADNAN AHMAD </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">85.86 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.84 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:center 22.7pt"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">9.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSET-FA17-065 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD ZULFIQAR ALI </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.51 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.82 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">10.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSET-FA17-093 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD SUBHAN </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.73 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.79 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">11.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bachelor of Civil Engineering&nbsp; </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSCE-FA17-006 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD HAROON </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.02 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.83 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">12.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSCE-FA17-026 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD SAEED </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">85.11 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.77 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">13.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSCE-FA17-007 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD HAMAAD </span></span></span></span></span></p>

            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BHUTTA </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.05 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.72 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">14.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BS Computer Science </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSCS-FA17-040 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">NIMRA NAVEED </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">87.75 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.86 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">15.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSCS-FA17-094 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">HINA JAMSHED </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.58 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.73 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">16.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSCS-FA17-073 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MUHAMMAD TAYYAB </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.42 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.69 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">17.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-right:1px; margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BS Software Engineering </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSSE-FA17-084 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">AYESHA RAHMAN </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">90.76 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.98 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">18.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSSE-FA17-049 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MARYAM SHOUKAT </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">91.47 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.96 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">19.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSSE-FA17-042 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">ANEEHA SHABBIR </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">90.63 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.96 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">20.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BS English </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSEN-FA17-014 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">IFRAH AHMAD </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">87.03 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.90 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">21.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bachelor of Interior Design &nbsp;&nbsp;</span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSID-FA17-017 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">AIMAN YOUNAS </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">82.31 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.64 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">22.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Doctor of Dietetics and Nutritional Sciences&nbsp; </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2016-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DND-FA16-021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MINAL ALI&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">87.45 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.90 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">23.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DND-FA16-060 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">HAFIZA ANWAH KARIM&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">87.96 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.88 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">24.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DND-FA16-006 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">FAIZA ZAHID&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">85.64 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.84 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">25.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BS Islamic Sciences&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2017-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSIS-FA17-012 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">AIMAN </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.67 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.84 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">26.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Doctor of Pharmacy </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2016-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPH-FA16-047 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">SYEDA FASEEHA BATOOL </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">88.67 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.87 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">27.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPH-FA16-004 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">ZURWA ASHRAF </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">87.37 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.85 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">28.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPH-FA16-002 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">QURATULAIN ALAM </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.34 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.83 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">29.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Doctor of Physical Therapy&nbsp; </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2016-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPT-FA16-072 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">SHAFA RAZA </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">88.27 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.91 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">30.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPT-FA16-119 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">FIZZA PERVES </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.62 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.77 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">31.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPT-FA16-040 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">KHIZRA ASIF </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.43 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.76 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">32.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Doctor of Medical Imaging Sciences </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2016-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DRD-FA16-029 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">TABINDA RABYIA&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">91.82 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.96 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">33.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DRD-FA16-001 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">FATIMA JABBAR&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">91.57 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.96 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">34.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DRD-FA16-099 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">AMNA&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">89.63 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.90 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">35.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Doctor of Optometry </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2016-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">OD-FA16-062 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">RABIA BUSHRA EHSAN </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">90.67 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.96 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">36.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">OD-FA16-023 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">ROQIA AAMIR </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">88.18 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.89 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">37.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">OD-FA16-033 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">FARIAH ATA </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.99 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.81 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">38.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BS Nursing </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2016-2020 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSN-FA16-018 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">SANA LIAQAT </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.95 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.82 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">39.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSN-FA16-023 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">IQRA RAFIQ </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">85.18 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.76 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">40.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSN-FA16-008 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">RUKHSAR BANO </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">82.99 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.67 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">41.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MA English&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2019-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MAE-FA19-007 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">SHARMEEN ZAINAB </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">54.61 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.83 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">42.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MA Islamic Sciences&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2019-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MAIS-FA19-005 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">HUMAIRA FATIMA </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">90.21 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.93 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">43.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Post RN Nursing&nbsp; </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2019-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSRN-FA19-034 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MEMOONA FIAZ </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">80.62 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.53 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">44.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSRN-FA19-036 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">NAZISH FAKHAR </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">79.92 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.42 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">45.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">BSRN-FA19-027 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">ANAM KHAN </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">79.31 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.31 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">46.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MS Physical Therapy </span></span></span></span></span></p>
        </td>
        <td rowspan="3" style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2018-2020 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPT-FA13-117 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">IZZA AYUB </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Gold </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">86.10 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.86 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">47.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">DPT-FA13-106 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">AMNA AYUB </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.95 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.84 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">48.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MSPP-FA18-006 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">KASHAF -U-DUJA </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Bronze<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">82.95 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.74 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">49.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MPhil Pharmaceutics </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2018-2020 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MPC-FA18-001 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">TAYYBA ASHFAQ </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">72.96 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.53 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;text-align:center;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">50.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MPhil Optometry&nbsp; </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2018-2020 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MPO-FA18-002 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">HINA MANZOOR </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">95.38 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:29px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.59 </span></span></span></span></span></p>
        </td>
    </tr>
    <tr>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black;text-align:center; border-left:1px solid black">
            <p align="center" style="margin-right:8px; text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">51.</span> &nbsp;</span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:132px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Master of Commerce </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:69px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">2019-2021 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:105px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">MCOM-FA19-008 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:168px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">KASHAF RAUF </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:66px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">Silver<b> </b></span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">84.58 </span></span></span></span></span></p>
        </td>
        <td style="border-bottom:1px solid black;width:132px;padding:3px 5px 0in 7px;height:29px;border-top:none;border-right:1px solid black;border-left:none; vertical-align: middle; width:48px; padding:3px 5px 0in 7px; height:30px; border-top:none; border-right:1px solid black; border-left:none">
            <p style="margin-left:1px"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="color:black"><span style="font-size:1rem">3.80 </span></span></span></span></span></p>
        </td>
    </tr>
    </tbody>
</table>

                </div>
            </div>

        </div><!--Medals List Row Ends Here -->
    </div>

@endsection
@push('js')
<script>
        $(function (){
            var t = $('.dataTable').DataTable({
                processing: true,
                serverSide: true,
                order:[[0,'desc']],
                ajax: "{{route('getTUFMedals')}}",
                columns: [
                    { data: 'id' },
                    { data: 'degree_name' },
                    { data: 'passout_session' },
                    { data: 'reg_no'},
                    { data: 'name'},
                    { data: 'medal_id'}
                ],
                columnDefs: [
                    {
                        render: function ( data, type, row,meta ) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        searchable:false,
                        orderable:true,
                        targets: 0
                    }
                ]
            });
        });
    </script>
@endpush
