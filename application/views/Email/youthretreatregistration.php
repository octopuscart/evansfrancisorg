<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: center;font-size: 18px;">


                    <b>Dear <?php echo $inputdata['full_name']; ?>,</b>
                    <p>Thanks you for filling form of Youth Retreat.</p>
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
                            <th style="text-align: right;width:45%;padding-right: 10px;">Full Name</th>
                            <td style="    text-align: left;"><?php echo $inputdata['full_name']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:45%;padding-right: 10px;">Contact No.</th>
                            <td style="    text-align: left;"><?php echo $inputdata['contact_no']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Email</th>
                            <td style="    text-align: left;"><?php echo $inputdata['email']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Church Name</th>
                            <td style="    text-align: left;"><?php echo $inputdata['church_name']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Age.</th>
                            <td style="    text-align: left;"><?php echo $inputdata['age']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Gender</th>
                            <td style="    text-align: left;"><?php echo $inputdata['gender']; ?></td>
                        </tr>

                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Food Preference</th>
                            <td style="    text-align: left;"><?php echo $inputdata['food_preference']; ?></td>
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