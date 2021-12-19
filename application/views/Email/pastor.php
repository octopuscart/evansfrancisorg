<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: center;font-size: 18px;">


                    <b>Dear <?php echo $inputdata['first_name']; ?>,</b>
                    <p>Thanks you for filling form of SPONSOR A PASTOR, <br/>after praying we will get back to you.</p>
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
                            <th style="text-align: right;width:45%;padding-right: 10px;">First Name</th>
                            <td style="    text-align: left;"><?php echo $inputdata['first_name']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:45%;padding-right: 10px;">Last Name</th>
                            <td style="    text-align: left;"><?php echo $inputdata['last_name']; ?></td>
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
                            <th style="text-align: right;width:200px;padding-right: 10px;">Amount.</th>
                            <td style="    text-align: left;"><?php echo $inputdata['amount']; ?></td>
                        </tr>
                                  <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Donation Period</th>
                            <td style="    text-align: left;"><?php echo $inputdata['donation_period']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Country</th>
                            <td style="    text-align: left;"><?php echo $inputdata['country']; ?></td>
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