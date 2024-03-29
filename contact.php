<?php
require_once('lib/phpmailer/class.phpmailer.php');
require_once('lib/phpmailer/class.smtp.php');
require_once('lib/phpmailer/class.pop3.php');

  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = "Contact Form";
    $to = "askjoni546@gmail.com";
    $subject = "Message from Contact Demo ";

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    $errName = NULL;
    $errEmail = NULL;
    $errMessage = NULL;
    $errHuman = NULL;

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'askjoni546@gmail.com';                 // SMTP username askjoni546@gmail.com
        $mail->Password = 'j0k3_tM!';                           // SMTP password "j0k3_tM!"
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom($email, $name);
        $mail->addAddress('askjoni546@gmail.com', 'Joni Kim');     // Add a recipient
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;


        if ($mail->send()) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>' . $mail->ErrorInfo;
        }
    }
}
?>

<?php require("nav/include_nav.php"); ?>
<?php insertTitle(["title" => "Joni Kim - Vancouver Model"]); ?>

<script type="text/javascript">
  var currentTab = document.getElementById("contact-nav");
  currentTab.className = "current";
</script>

    <!-- line break -->
    <hr>

    <!-- page content -->
    <div class="container">
      <div class="row">
        <div class="social-root col-sm-12 col-lg-1 col-md-12 col-xs-12">
          <a href="https://www.facebook.com/JKjoni">
            <img class="img btn social-icon" src="images/icons/facebook.png">
          </a>
          <a href="https://twitter.com/jonikim92">
            <img class="img btn social-icon" src="images/icons/twitter.png">
          </a>
          <a href="https://www.instagram.com/jkitsjoni">
            <img class="img btn social-icon" src="images/icons/instagram.png">
          </a>
        </div>
        <form class="form-horizontal col-sm-11" role="form" method="post" action="contact.php">
          <div class="form-group">
            <label for="name" class="col-sm-1 control-label">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-1 control-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="col-sm-1 control-label">Message</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="human" class="col-sm-1 control-label">2 + 3 = ?</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-1">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-2">
            <?php echo "<h1>$result</h1>"; ?>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>