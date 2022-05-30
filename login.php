<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact - Brand</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets2/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets2/css/Modal-Login-form.css">
    <link rel="stylesheet" href="assets2/css/Registration-Form-with-Photo.css">
</head>

<body>
   
<?php include 'includes/navbar2.php'; ?>
    <main class="page contact-page">
        <section class="portfolio-block contact">
            <div id="myModal">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="h4 modal-title">Autentificare</h4><button class="btn btn-primary close" type="button" data-dismiss="modal" aria-hidden="true">x</button>
                        </div>
                        <div class="modal-body">
                            <form action="log.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>

                                <p class="error"><?php echo $_GET['error']; ?></p>

                                    <?php } ?>
                                <div class="form-group"><i class="fa fa-star fa-user"></i><input class="form-control" type="text" name="username" placeholder="Email" required="required"></div>
                                <div class="form-group"><i class="fa fa-star fa-lock"></i><input class="form-control" type="password" name="password" placeholder="Parola" required="required"></div>
                                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" value="Login">Autentificare</button></div>
                            </form>
                        </div>
                        <div class="modal-footer"><a href="forgot.php">Ai uitat parola?</a></div>
                        <div class="modal-footer" style="margin-top: 40px;margin-bottom: 40px;"><a href="inregistrare.php">Înregistrare</a></div>
                    </div>
                </div>
            </div>
            <p class="text-sm-center"><a href="doctors_appointment/admin/login.php">admin</a></p>
        </section>
    </main> 
    
    <?php include 'includes/footer.php';?> 
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>