<?php
$this->load->view('Email/header');
?>
<div style="padding: 40px; background: #fff;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>

            <tr>
                <td style="    text-align: left;font-size: 15px;">


                    <b>Dear <?php echo $inputdata['first_name']; ?>,</b>
                    <p>
                        Thank you again for signing up to receive updates from me.
                    </p>
                    <p>
                        Allow me to introduce myself: My name is Evans Francis, and I have been an evangelist in
                        full-time ministry for over a decade. Born in a village called Mukerian, Punjab, India, in 1988,
                        I began my evangelistic career at the age of nineteen. God is helping my wife and me to travel
                        around the globe to share the gospel of Jesus Christ.
                    </p>
                    <p>
                        God helps me share the Word of God on my YouTube channel, “Evans Francis”; millions have viewed
                        my videos. In addition, I fearlessly share the dreams, visions and messages God gives me for the
                        body of Christ, which are posted on my mobile app “Evans Francis”, available on Google Play and
                        App Store for free and my social media platforms.
                    </p>

                    <br />
                    <br />
                    <p style="color:red;">
                        To ensure delivery to your inbox, please add [contact@evansfrancis.org] to your address book
                    </p>



                </td>
            </tr>

        </tbody>
    </table>

</div>

<?php
if ($inputdata["downloadBooks"]) {
    ?>
    <table border="0" style="width: 100%;background:white; padding: 20px;">
        <?php
        foreach ($inputdata["downloadBooks"] as $link) {
            ?>
            <tr style="vertical-align: top;">
                <td style="text-align: right;vertical-align: top;width: 200px;">
                    <img src="<?php echo base_url("assets/bookcover/") . $link['image']; ?>"
                        style="width: 200px; height: 200px;" />
                </td>
                <td style="text-align: left;vertical-align: middle;">
                    <h4><?php echo $link['title']; ?></h4>
                  
                    <a href="<?php echo $link['downloadlink']; ?>" style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 4px 4px;

    cursor: pointer;">Download EBook</a>
                </td>

            </tr>


            <?php
        }

        ?>

    </table>
    <?php
}
?>


<?php
$this->load->view('Email/footer');
?>