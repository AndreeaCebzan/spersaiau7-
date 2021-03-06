<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact - Brand</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets2/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets2/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets2/css/Map-Clean.css">
    <link rel="stylesheet" href="assets2/css/Pretty-Footer.css">
</head>

<body>
<?php include 'includes/navbar2.php'; ?>
    <main class="page contact-page">
        <section class="portfolio-block contact" style="width: 1003.6px;height: 1376.4px;">
            <div class="container-fluid" style="width: 1552.6px;height: 450.8px;">
                <h1></h1>
                <hr>
                <form id="contactForm" action="javascript:void(0);" method="get" style="width: 752px;margin: 94px;padding: 37px;height: 386.6px;"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                    <h2 class="h4" style="width: 554px;height: 34.8px;margin: 0px;"><i class="fa fa-user"></i>Info</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="successfail"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6" id="message">
                            <h2 class="h4"></h2>
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><span class="input-group-text">Mihalceanu Tudor</span></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span><span class="input-group-text">contact@drmihalceanu.ro</span></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><span class="input-group-text"><br><strong>+40&nbsp;723 943 110</strong><br><br></span></div>
                            </div>
                            <hr class="d-flex d-md-none">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> </a></div>
                                </div>
                                <div class="col-2 col-sm-6 col-md-12 col-lg-6 text-center" style="width: 287.5px;height: 144.8px;">
                                    <h2 class="h4"><i class="fa fa-location-arrow"></i>&nbsp;Adresa</h2>
                                    <div><span><strong>Cabinet DR. M Tudor</strong></span></div>
                                    <div><span>Liege nr.10&nbsp;</span></div>
                                    <div><span>Timi??oara , Ro&nbsp;</span></div>
                                    <div></div>
                                    <hr class="d-sm-none">
                                </div>
                            </div><span class="input-group-text"><i class="fa fa-clock-o"></i></span><span class="input-group-text">Lu, Mi : 15:00-20:00</span><span class="input-group-text">Ma, Joi, Vi : 8:30-13:00</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="heading"></div>
            </div>
            <div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Contact Information</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="successfail"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6" id="message">
                                            <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Name</label><span class="required-input">*</span>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name" name="name" required="" placeholder="Full Name"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-email">Email</label><span class="required-input">*</span>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="text" id="from-email" name="email" required="" placeholder="Email Address"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                    <div class="form-group mb-3"><label class="form-label" for="from-phone">Phone</label><span class="required-input">*</span>
                                                        <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                    <div class="form-group mb-3"><label class="form-label" for="from-calltime">Best Time to Call</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-select" id="from-calltime" name="call time">
                                                                <optgroup label="Best Time to Call">
                                                                    <option value="Morning" selected="">Morning</option>
                                                                    <option value="Afternoon">Afternoon</option>
                                                                    <option value="Evening">Evening</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-comments">Comments</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <div class="col"><button class="btn btn-primary d-block w-100" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                    <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                                </div>
                                            </div>
                                            <hr class="d-flex d-md-none">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                                </div>
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                    <div><span><strong>Name</strong></span></div>
                                                    <div><span>email@awebsite.com</span></div>
                                                    <div><span>www.awebsite.com</span></div>
                                                    <hr class="d-sm-none d-md-block d-lg-none">
                                                </div>
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                    <div><span><strong>Office Name</strong></span></div>
                                                    <div><span>55 Icannot Dr</span></div>
                                                    <div><span>Daytone Beach, FL 85150</span></div>
                                                    <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                    <hr class="d-sm-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="map-clean" style="text-align: center;">
                <div class="container" style="text-align: center;">
                    <div class="intro">
                        <h2 class="text-center" style="width: 800px;height: 56.4px;margin: 2px;">Loca??ie cabinet</h2>
                    </div>
                </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDIKE9Mw1iKUEPHsFeY9O89ktLVpmo107Y&amp;q=Liege+10+%2C+Timisoara%2C+Romania&amp;zoom=15" width="100%" height="450" style="text-align: center;width: 1143.6px;height: 500px;margin: 50px;padding: 4px;"></iframe>
            </section>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets2/js/theme.js"></script>
</body>

</html>