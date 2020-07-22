<?php require_once('include/db.php') ;?>
<?php require_once('include/config.php') ;?>
<?php require_once('include/session.php') ;?>
<?php require_once('include/header.php') ;?>

<main role="main" class="container">
  <div class="jumbotron mt-5">
    <h1>Welcome, admin</h1>
    <p class="lead">Hospital management system is an online patient management and appointment, scheduler application software for getting an appointment very easily over the internet.</p>
    <a class="btn btn-primary" href="appointments.php" role="button">Appointments </a>
   <a class="btn btn-danger" href="doctors.php" role="button">Doctors</a>
  </div>
</main>

<?php require_once('include/footer.php') ;?>