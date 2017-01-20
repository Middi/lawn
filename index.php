<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$from = 'VY Local';
		$to = 'cameron.dull@gmail.com'; // BUSINESS EMAIL ADDRESS
		$subject = 'Message from VY Local';

		$body ="From: $name\n Number: $phone\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['phone'] || !filter_var($_POST['phone'])) {
			$errphone = 'Please enter a valid phone number';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errPhone && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		 header("Location: success.html");
		 exit();
	} else {
		header("Location: fail.html");
		exit();
	}
}
	}
?>



	<!DOCTYPE html>

	<html>

	<head>

		<title>Henderson Lawn And Snow</title>


		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">



		<!-- FONT AWESOME -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


		<!-- GOOGLE FONTS -->


<link href="https://fonts.googleapis.com/css?family=Arvo:400,700|Hind:300,400,600" rel="stylesheet">

		<!-- BOOTSTRAP -->

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<!-- STYLESHEET -->

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">


		<!-- JQUERY -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

	<script>	$(".btn-float").click(function() {
		  window.location = $(this).find("a").attr("href");
		  return false;
		});
</script>

	</head>

	<body>


		<div id="bar-main">
			<div class="container-fluid bar">
				<div class="container">
				<!-- BUSINESS NAME -->

				<div class="logo">
					<h4>HENDERSONS LAWN AND SNOW</h4>
				</div>

				<!-- END BUSINESS NAME -->



				<a href="#callcontain" type="button" class="btn btn-primary btn-lg outline pull-right callback">Request a Quote</a>
		</div>
	</div>

<a href="tel:123456789">
<div class="btn-float"><p>CALL</p></div>
</a>

			<!-- HERO IMAGE TEXT -->

			<div class="hero-content">
<div class="h2-container">
				<h2><span>We’ll make your dream lawn a reality</span></h2><br><h2>
Trusted lawn experts in
<strong>New England</strong></h2></div>



				<a href="#callcontain" role="button" class="btn outline2">GET YOUR FREE QUOTE</a>



			</div>
		</div>


			<!-- END HERO IMAGE TEXT-->



			<!-- HOW IT WORKS SECTION -->

		<div class="container-fluid how-color">
			<div class="container how-it-works">


				<h4 class="lead text-center">How it works</h4>
				<hr class="how-hr">
<div class="dots"><img src="images/dots.png" alt="dots"></div>

<div class="dots2"><img src="images/dots.png" alt="dots"></div>

				<div class="flex-parent">

					<div class="flex-child">
						<img src="images/1.png" alt="call icon"><br>
						<h3>QUOTE</h3>
						<p><small>Request your free quote- a personalized solution to meet all of your lawn care needs.</small>
					</div>


					<div class="flex-child">
						<img src="images/2.png" alt="quote icon"><br>
						<h3>CONFIRM</h3>
						<p><small>Confirm your quote.  We’ll work to ensure our services fit around your busy schedule.</small>
					</div>


					<div class="flex-child">
						<img src="images/3.png" alt="relax icon"><br>
						<h3>RELAX</h3>
						<p><small>Sit back and relax. With our team of lawn care experts, you won’t have to lift a finger.</small>
					</div>

				</div>	<!-- END flex-parent -->



			</div>

		</div>


			<!-- END HOW IT WORKS SECTION -->




			<!-- SERVICES SECTION -->

		<div class="container-fluid services">
			<div class="container">

				<div class="row flex">

					<div class="services-column">


						<h4 class="lead">Our Services</h4>
						<hr class="hr-services">

<div class="rss">
			<ul>
				<li>
					<p class="lead service-item" id="serv1">Weekly & Bi-Weekly Contracts</p>
</li>
<li>
						<p class="lead service-item" id="serv2">Trim and clean.</p>

					</li>
					<li>


						<p class="lead service-item" id="serv3">Re-planting.</p>

					</li>
					<li>

						<p class="lead service-item" id="serv4">Landscaping.</p>

					</li>
					<li>
						<p class="lead service-item" id="serv5">Hedges & trees.</p>

					</li>
				</ul>

							<a href="#callcontain" role="button" class="btn outline3">REQUEST QUOTE</a>

</div>



	</div>

				</div>
			</div>

		</div>


			<!-- END SERVICES SECTION -->



			<!-- FORM SECTION -->

		<div id="callcontain" class="container-fluid">
			<div class="container form">
				<h4 class="lead">Request a quote</h4>
				<hr class="hr-form">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">



						<form id="contact-form" role="form" method="post" action="index.php">

							<div class="controls">
								<div class="row">
									<div class="col-md-6">


										<!-- Form Name -->

										<div class="form-group">
											<label for="name" class="control-label"></label>
											<input type="text" class="form-control" id="name" required="required" name="name" placeholder="YOUR NAME (REQUIRED)" value="<?php echo htmlspecialchars($_POST['name']); ?>">
											<?php echo "<p class='text-danger'>$errName</p>";?>
											<div class="help-block with-errors"></div>
										</div>

										<!-- END Form Name -->

									</div>


									<div class="col-md-6">


										<!-- Form Number -->

										<div class="form-group">
											<label for="phone" class="control-label"></label>
											<input type="phone" class="form-control" id="phone" required="required" name="phone" placeholder="YOUR PHONE NUMBER (REQUIRED)" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
											<?php echo "<p class='text-danger'>$errPhone</p>";?>
											<div class="help-block with-errors"></div>
										</div>

										<!-- END Form Number -->

									</div>

								</div>	<!-- END ROW 1 FORM -->



								<div class="row">
									<div class="col-md-12">


										<!-- Form Message -->

										<div class="form-group">
											<label for="message" class="control-label"></label>
											<textarea class="form-control" rows="10" placeholder="TELL US ABOUT YOUR LAWN CARE NEEDS" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
											<?php echo "<p class='text-danger'>$errMessage</p>";?>
											<div class="help-block with-errors"></div>
										</div>

										<!-- END Form Message -->


									</div>


									<!-- Form Submit -->

									<div class="col-md-12 text-center">
										<input id="submit" name="submit" type="submit" value="SEND" class="btn btn-send outline4">
									</div>

									<!-- END Form Submit -->


								</div>


								<!-- Form Required -->

								<div class="row">
									<div class="col-md-12 text-center">

									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<?php echo $result; ?>
										</div>
									</div>
								</div>


						</form>	<!-- END FORM -->

						</div>
					</div>
				</div>
			</div>


		</div>	<!-- END FORM SECTION -->


		<footer>

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 text-center">
						Copyright Henderson Lawn And Snow 2016 | Made with <a href="3">VY Local</a>
					</div>
				</div>
			</div>

		</footer>

	</body>

	<script>$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});</script>

	</html>
