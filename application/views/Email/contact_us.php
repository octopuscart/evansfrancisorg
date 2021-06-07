<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: center;font-size: 18px;">


                    <b>Dear <?php echo $inputdata['name']; ?>,</b>
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
                            <td style="    text-align: left;"><?php echo $inputdata['name']; ?></td>
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
                            <th style="text-align: right;width:200px;padding-right: 10px;">Subject</th>
                            <td style="    text-align: left;"><?php echo $inputdata['subject']; ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Message</th>
                            <td style="    text-align: left;"><?php echo $inputdata['message']; ?></td>
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