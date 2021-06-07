<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: center;font-size: 18px;">


                    <b>Dear <?php echo $inputdata['full_name']; ?>,</b>
                    <p>Thanks you for filling form of Invitation, <br/>we will get back to you shortly.</p>
                    <br/>
                    Your details are as below.
                    <table style="font-size: 12px;    font-size: 12px;
                           text-align: center;
                           /* width: 300px; */
                           margin: 10px 100px;
                           background: white;
                           color: black;
                           border-radius: 39px;">
                        <tr>
                            <th style="text-align: right;width:45%;padding-right: 10px;">Name of Organization</th>
                            <td style="    text-align: left;"><?php echo $inputdata['name_org']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:45%;padding-right: 10px;">Full Name</th>
                            <td style="    text-align: left;"><?php echo $inputdata['full_name']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Email</th>
                            <td style="    text-align: left;"><?php echo $inputdata['email']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Contact No.</th>
                            <td style="    text-align: left;"><?php echo $inputdata['contact_no']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Address</th>
                            <td style="    text-align: left;"><?php echo $inputdata['address']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Country</th>
                            <td style="    text-align: left;"><?php echo $inputdata['country']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">State</th>
                            <td style="    text-align: left;"><?php echo $inputdata['state']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">City</th>
                            <td style="    text-align: left;"><?php echo $inputdata['city']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Zip/Postal Code</th>
                            <td style="    text-align: left;"><?php echo $inputdata['zip']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Website</th>
                            <td style="    text-align: left;"><?php echo $inputdata['website']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Contact Person</th>
                            <td style="    text-align: left;"><?php echo $inputdata['contact_person']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Contact Person Phone</th>
                            <td style="    text-align: left;"><?php echo $inputdata['contact_person_phone']; ?></td>
                        </tr>

                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Pastor/Overseer</th>
                            <td style="    text-align: left;"><?php echo $inputdata['pastor']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Event Title</th>
                            <td style="    text-align: left;"><?php echo $inputdata['event_title']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Event Theme</th>
                            <td style="    text-align: left;"><?php echo $inputdata['event_theme']; ?></td>
                        </tr>
                         <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Event Date</th>
                            <td style="    text-align: left;"><?php echo $inputdata['event_date']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Event Attendance</th>
                            <td style="    text-align: left;"><?php echo $inputdata['event_attendance']; ?></td>
                        </tr>


                    </table>



                </td>
            </tr>

        </tbody>
    </table>

</div>


<?php
$this->load->view('Email/footer');
?>