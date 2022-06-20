<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: left;font-size: 18px;">


                    <b>Dear <?php echo $inputdata['first_name']; ?>,</b>
                    <p>
                        Thank you again for signing up to receive updates from me.
                    </p>    <p>
                        Allow me to introduce myself: My name is Evans Francis, and I have been an evangelist in full-time ministry for over a decade. Born in a village called Mukerian, Punjab, India, in 1988, I began my evangelistic career at the age of nineteen. God is helping my wife and me to travel around the globe to share the gospel of Jesus Christ.
                    </p>    <p>
                        God helps me share the Word of God on my YouTube channel, “Evans Francis”; millions have viewed my videos. In addition, I  fearlessly share the dreams, visions and messages God gives me for the body of Christ, which are posted on my mobile app “Evans Francis”, available on Google Play and App Store for free and my social media platforms. 
                    </p>
               



                </td>
            </tr>

        </tbody>
    </table>

</div>


<?php
$this->load->view('Email/footer');
?>