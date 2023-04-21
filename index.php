<?php include_once 'sendmail.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>contact us</title>
        <meta name="description" content="You can contact us through this contact form, we will reply to your message soon.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="vicon-icon-v6/css/vicon.min.css">
        <!-- Google recaptcha API library -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
       
        <div class="container">
            <div class="content-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1589127830553!2d78.17143497628057!3d26.22402558934547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c7841b665bc1%3A0x2362e1b0d3f28b67!2sVicpra!5e0!3m2!1sen!2sin!4v1682048184160!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="content-form">
                <h1>contact us</h1>
                <div class="message-status">
                    <!-- Status message -->
					<?php if(!empty($statusMsg)){ ?>
						<div class="status__msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
					<?php } ?>
                </div>
                <form action="" method="post">
                    <div class="input-box">
                        <label class="label">Name<sup>*</sup></label>
                        <div class="input">
                          <i class="vicon vicon-user-3-line"></i>
                          <input type="text" name="name" id="name" placeholder="your name" required>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label">Email<sup>*</sup></label>
                        <div class="input">
                          <i class="vicon vicon-mail-open-line"></i>
                          <input type="email" name="email" id="email" placeholder="your email" required>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label">Subject<sup>*</sup></label>
                        <div class="input">
                          <i class="vicon vicon-file-text-line"></i>
                          <input type="text" name="subject" id="subject" placeholder="your subject" required>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label">Message<sup>*</sup></label>
                        <div class="input">
                          <i class="vicon vicon-message-2-line"></i>
                          <textarea name="message" id="message" placeholder="your message" required></textarea>
                        </div>
                    </div>
                    <div class="input-box">
                        <!-- Google reCAPTCHA box -->
						<div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                    </div>
                    <div class="button-box">
                        <input type="submit" name="submit" class="btn" value="Send">
                    </div>
                </form>
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>