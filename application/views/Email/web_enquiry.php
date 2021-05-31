
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>PROFESSIONAL MOVING SERVICES</title>
        <style>
            td, th {
                padding: 0;
                vertical-align: baseline;
            }
        </style>
    </head>

    <body style="margin:0px; background: #f8f8f8; ">
        <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
            <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; background: #fff">
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:30px;" align="center">
                                <a href="<?php echo site_url("/"); ?>" target="_blank">
                                    <img src="https://www.promovers.hk/assets/img/logo.png" alt="Professional Movers" style="border:none;height:50px;    margin-top: 20px;"/></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                        <tbody>

                            <tr>
                                <td style="    text-align: center;font-size: 18px;">


                                    <b>Dear <?php echo $appointment['name']; ?>,</b>
                                    <p>Thank you for contact us.</p>

                                    <table style="font-size: 12px;    font-size: 12px;
                                           text-align: center;
                                           /* width: 300px; */
                                           margin: 10px 100px;
                                           background: white;
                                           color: black;
                                           border-radius: 39px;">
                                        <tr>
                                            <th style="text-align: right;width:45%;padding-right: 10px;">Name</th>
                                            <td style="    text-align: left;"><?php echo $appointment['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Email</th>
                                            <td style="    text-align: left;"><?php echo $appointment['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Contact No.</th>
                                            <td style="    text-align: left;"><?php echo $appointment['contact_no']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">From Location</th>
                                            <td style="    text-align: left;"><?php echo $appointment['source']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Destination Location</th>
                                            <td style="    text-align: left;"><?php echo $appointment['destination']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Date</th>
                                            <td style="    text-align: left;"><?php echo $appointment['select_date']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Time</th>
                                            <td style="    text-align: left;"><?php echo $appointment['select_time']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Note</th>
                                            <td style="    text-align: left;white-space: pre-line;"><?php echo $appointment['note'] ? $appointment['note'] : '---'; ?></td>
                                        </tr>



                                    </table>



                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div style="    text-align: center;
                         font-size: 12px;
                         border:1px solid #000;

                         padding: 10px;">
                        <b>- Thanks -</b> 
                        <br/>
                        <p>Contact No./WhatsApp: +(852)6151-2644, Email: m.sirajbtc@gmail.com</p>
                    </div>
                </div>

            </div>
        </div>
    </body>

</html>
