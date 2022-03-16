<!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Order confirmation </title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
    body { margin: 0; padding: 0; background: #e1e1e1; }
    div, p, a, li, td { -webkit-text-size-adjust: none; }
    .ReadMsgBody { width: 100%; background-color: #ffffff; }
    .ExternalClass { width: 100%; background-color: #ffffff; }
    body { width: 100%; height: 100%; background-color: #e1e1e1; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
    html { width: 100%; }
    p { padding: 0 !important; margin-top: 0 !important; margin-right: 0 !important; margin-bottom: 0 !important; margin-left: 0 !important; }
    .visibleMobile { display: none; }
    .hiddenMobile { display: block; }

    @media only screen and (max-width: 600px) {
        body { width: auto !important; }
        table[class=fullTable] { width: 96% !important; clear: both; }
        table[class=fullPadding] { width: 85% !important; clear: both; }
        table[class=col] { width: 45% !important; }
        .erase { display: none; }
    }

    @media only screen and (max-width: 420px) {
        table[class=fullTable] { width: 100% !important; clear: both; }
        table[class=fullPadding] { width: 85% !important; clear: both; }
        table[class=col] { width: 100% !important; clear: both; }
        table[class=col] td { text-align: left !important; }
        .erase { display: none; font-size: 0; max-height: 0; line-height: 0; padding: 0; }
        .visibleMobile { display: block !important; }
        .hiddenMobile { display: none !important; }
    }
</style>


<!-- Header -->







<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tr>
        <td height="20"></td>
    </tr>
    <tr>
        <td>


            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
                <tr>
                    <td>
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
                            <tr>
                                <td>
                                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                        <tbody>
                                        <tr>
                                            <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                <p style="font-size: 20px;text-align: center;">Successful payment of USD {{number_format($invoice_details->total,2)}} for order reference #{{$invoice_details->id}}.<br></p>
                                                <br>
                                                <p style="font-size: 20px;text-align: center;">Please log in to http://crosstunesglobal.com to.</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p> By making this payment to CrossTunesGlobal you agreed <br>
                                                    that the Payment is non-transferable, non-refundable and non-revocable. to the Online Payment Terms and Conditions listed at <a style="color: blue; font-weight: 500" href="{{route('frontend.privacy_policy')}}">Terms and Conditions</a>  <br>
                                                    to the facility Terms and Conditions listed at http://crosstunesglobal.com If you need any further assistance please feel free to email us at jnsstuiolk@gmail.com. Please do not reply to this mail.<br>

                                                    <br>Once again, Welcome to CrossTunesGlobal. We hope you enjoy your fitness journey with us.<br>
                                                    Thank you! <br><br>
                                                    Team CrossTunesGlobal</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                        <tbody>
                                        <tr>
                                            <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                <p style="font-size: 20px;text-align: center;">Please contact us for any support you may need. crosscountryentertainment.ltd@gmail.com<br></p>
                                                <br>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr><br><br>
            </table>



            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                <tr class="hiddenMobile">
                    <td height="40"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="30"></td>
                </tr>

                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                            <tr>
                                <td>
                                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                        <tbody>
                                        <tr>
                                            <td align="left">
                                                <img src="{{url('logo/inlogo.png')}}" width="32" height="32" alt="logo" border="0" />
                                            </td>
                                        </tr>
                                        <tr class="hiddenMobile">
                                            <td height="40"></td>
                                        </tr>
                                        <tr class="visibleMobile">
                                            <td height="20"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                              <b>To:</b> {{$user_details->first_name}} {{$user_details->last_name}}.
                                                <br>
                                                {{$address_details->address}}
                                                <br>
                                              <b>City: </b>  {{$address_details->city}}
                                                <br>
                                               <b>Phone Number: </b>
                                                {{$address_details->phone}}
                                                <br>
                                                <b>Country: </b>
                                                {{$address_details->country}}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                        <tbody>
                                            <tr class="visibleMobile">
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td height="5"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                                    Invoice
                                                </td>
                                            </tr>
                                            <tr>
                                            <tr class="hiddenMobile">
                                                <td height="50"></td>
                                            </tr>
                                            <tr class="visibleMobile">
                                                <td height="20"></td>
                                            </tr>

                                            <tr>
                                                <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                                    <small>ORDER ID</small> #000{{$invoice_details->id}}<br />
                                                    <small>Issued Date: {{$invoice_details->created_at}}</small>
                                                    <small>Status : Success</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- /Header -->
<!-- Order Details -->


<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>

    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                <tbody>
                <tr>
                <tr class="hiddenMobile">
                    <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="40"></td>
                </tr>
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>

                                <tr>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;" width="52%" align="left">
                                        Music Name
                                    </th>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
                                        <small>Selected License</small>
                                    </th>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="center">
                                        Price
                                    </th>
                                </tr>

                                @foreach($invoice_item as $inv)
                                    <tr>
                                        <td height="1" style="background: #bebebe;" colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td height="10" colspan="4"></td>
                                    </tr>

                                    <tr>
                                        <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
                                           {{$inv->music_name}}
                                        </td>
                                        <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small>{{$inv->selected_license}}</small></td>
                                        <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">${{number_format($inv->price,2)}}</td>
                                    </tr>
                                    <tr>
                                        <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<!-- /Order Details -->
<!-- Total -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                    <tbody>
                    <tr>
                        <td>

                            <!-- Table Total -->
                            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                <tbody>
                                <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                        Subtotal
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;" width="80">
                                        ${{number_format($invoice_details->sub_total,2)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                        <strong>Total Amount</strong>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                        <strong>${{number_format($invoice_details->total,2)}}</strong>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <!-- /Table Total -->

                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- /Total -->
<!-- Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                <tbody>
                <tr>
                <tr class="hiddenMobile">
                    <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="40"></td>
                </tr>
                <tr>
                    <td>

                    </td>
                </tr>
                <tr>

                </tr>
                <tr class="hiddenMobile">
                    <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="30"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                            <tr>
                                <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                    <b>Note</b> - All tracks subject to re loop for any duration as per customer request.
                                    <br>
                                    <b>File Format</b> - Wave
                                    <br><br>
                                    Thank you very much Trusting Ceylon Music Compositions<br><br>


                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr><br><br>

    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
        <tbody>
        <tr>
            <td>
                <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                    <tbody>
                    <tr>
                        <td align="left">
                            <b>Team J&S Studio</b> <br>
                            <img style="height: 70px;" src="{{url('logo/sq.png')}}" width="20" height="20" alt="logo" border="0" />
                        </td>
                    </tr>

                    </tbody>
                </table>
                <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                    <tbody>
                    <tr>
                        <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                            <b>J&S Studio</b><br />
                            <b>387 C, Kalalgoda Road,</b><br>
                            <b>Pannipitiya,</b><br>
                            <b>Sri Lanka.</b><br>
                            <a href="">jnsstudiolk@gmail.com</a><br>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

    <tr>
        <td height="20"></td>
    </tr>


</table>

