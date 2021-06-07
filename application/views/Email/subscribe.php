<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: center;font-size: 18px;">


                    <p>                        Thank you for subscribing to our mailing list.</p>

                    <table style="font-size: 12px;    font-size: 12px;
                           text-align: center;
                           /* width: 300px; */
                           margin: 10px 100px;
                           background: white;
                           color: black;
                           border-radius: 39px;">

                        <tr>
                            <th style="text-align: right;width:200px;padding-right: 10px;">Email</th>
                            <td style="    text-align: left;"><?php echo $inputdata['email']; ?></td>
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