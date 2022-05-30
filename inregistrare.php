<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
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
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me"></section>
    </main>
    <section class="register-photo">
        <div class="form-container">
            <div></div><img src="assets/img/inregistrare.jpg">
          <form action="register.php" method="post">
                <h2 class="text-center"><strong>Înregistrare</strong></h2>
                <label for="name"></label>
                <input type="text" name="name" placeholder="Nume" required>
                <label for="address"></label>
                <input type="text" name="address" placeholder="Adresa" required>
                <label for="contact"></label>
                <input type="text" name="contact" placeholder="Nr. de contact" required>
                <label for="username"></label>
                <input type="email" name="username" placeholder="Email" required>
                <label for="password"></label>
                <input type="password" name="password" placeholder="Parolă" required>
                <input type="hidden" name="doctor_id" >
                <input type="hidden" name="type" >
                <input type="submit" value="Înregistrare">
                
            </form>
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Accept termenii și condițiile.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background: fixed center;">Înregistrare</button></div><a class="already" href="login.php">Ai deja un cont? <span style="text-decoration: underline;">Autentificare.</span></a>
            </form>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets2/js/theme.js"></script>
</body>

</html>