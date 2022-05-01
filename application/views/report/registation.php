<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <title>Registration</title>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="starter-template">
                            <h1>Youth Treat Registration</h1>
                            <p><a style="border:1px solid #000;background:blue;color:white;padding:5px;" href="<?php echo site_url("Report/youthretreat_report") ?>">Back</a></p>

                            <form class="" id="template-contactform" name="template-contactform" action="#" method="post">

                          

                                <div class="">

                                    <div class="col-md-6 form-group">
                                        <label class="nott" for="first_name">Full Name<small>*</small></label>
                                        <input type="text" id="first_name" name="full_name" value="" class="form-control required" required="" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="nott" for="contact_name">WhatsApp No.<small>*</small></label>
                                        <input type="text" id="last_name" name="contact_no" value="" class="form-control required" required="" />
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label class="nott" for="email">Email <small>*</small></label>
                                        <input type="email" id="email" name="email" value="" class="required email form-control" />
                                    </div>



                                    <div class="col-md-8 form-group">
                                        <label class="nott" for="contact_no">Church Name<small>*</small></label>
                                        <input type="text" id="contact_no" name="church_name" value="" required="" class="form-control" />
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="nott" for="contact_no">City Name<small>*</small></label>
                                        <input type="text" id="contact_no" name="city" value="" required="" class="form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="nott" for="age">Age<small>*</small></label>
                                        <select  name="age" class="required email form-control" >

                                            <option selected="">Select Age</option>
                                            <?php
                                            for ($i = 15; $i <= 35; $i++) {
                                                echo "<option>$i</option>";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="nott" for="prayer_time">Gender<small>*</small></label>
                                        <select  name="gender" class="required email form-control" >
                                            <option selected="">Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="nott" for="food_preference">Food Preference<small>*</small></label>
                                        <select  name="food_preference" class="required email form-control" >
                                            <option selected="">Veg</option>
                                            <option>Non-Veg</option>
                                        </select>
                                    </div>


                                    <hr/>

                                    <div class="col-md-4 form-group"></div>
                                    <div class="col-12 form-group">
                                        <button class="button button-rounded button-large m-0 btn btn-danger" type="submit" id="template-contactform-submit" name="submit" value="submit">Submit</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> </body>
</html>