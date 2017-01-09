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

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


		<!-- BOOTSTRAP -->

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<!-- STYLESHEET -->

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">


		<!-- JQUERY -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>




	</head>

	<body>


		<div id="bar-main">
			<div class="container">

				<!-- BUSINESS NAME -->

				<div class="logo">
					<h4>Henderson Lawn And Snow And Sdsd</h4>
				</div>

				<!-- END BUSINESS NAME -->



				<a href="#callcontain" type="button" class="btn btn-primary btn-lg outline pull-right callback">Request a Quote</a>

			</div>



			<!-- HERO IMAGE TEXT -->

			<div class="hero-content">
<div class"h2-container">
				<h2>Professional Gardeners &amp; Landscapers in
<strong>New England</strong></h2></div><div class="pad-btn">
				<a href="#callcontain" role="button" class="btn btn-primary btn-lg outline2 pad-btn">Request a Quote</a></div>
			</div>
		</div>


			<!-- END HERO IMAGE TEXT-->



			<!-- HOW IT WORKS SECTION -->

		<div class="container-fluid">
			<div class="container how-it-works">
				<h4 class="lead text-center">How it works</h4>

				<div class="flex-parent">

					<div class="flex-child">
						<img src="images/call.svg" alt="call icon"><br>
						<h3>Request</h3>
						<p class="lead"><small>Click the request call-back button.</small>
					</div>


					<div class="flex-child">
						<img src="images/quote.svg" alt="quote icon"><br>
						<h3>Details</h3>
						<p class="lead"><small>Give us your details.</small>
					</div>


					<div class="flex-child">
						<img src="images/relax.svg" alt="relax icon"><br>
						<h3>Relax</h3>
						<p class="lead"><small>Let us get back to you.</small>
					</div>

				</div>	<!-- END flex-parent -->



			</div>
		<div class="holder">
				<a href="#callcontain" role="button" class="btn btn-primary btn-lg outline2">Request a Quote</a></div>
		</div>


			<!-- END HOW IT WORKS SECTION -->




			<!-- SERVICES SECTION -->

		<div class="container-fluid services">
			<div class="container">
				<h4 class="lead text-center">Our Services</h4>
				<div class="row flex">

					<div class="services-column">
						<p class="lead service-item" id="serv1"><img src="images/tick.svg" alt="tick icon">Weekly & Bi-Weekly contracts.</p>
						<p class="lead service-item" id="serv2"><img src="images/tick.svg">Trim and clean.</p>
						<p class="lead service-item" id="serv3"><img src="images/tick.svg">Re-planting.</p>
						<p class="lead service-item" id="serv4"><img src="images/tick.svg">Landscaping.</p>
						<p class="lead service-item" id="serv5"><img src="images/tick.svg">Hedges & trees.</p>
					</div>

				</div>
			</div>
		</div>


			<!-- END SERVICES SECTION -->



			<!-- FORM SECTION -->

		<div id="callcontain" class="container-fluid">
			<div class="container form">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">



						<form id="contact-form" role="form" method="post" action="index.php">

							<div class="controls">
								<div class="row">
									<div class="col-md-6">


										<!-- Form Name -->

										<div class="form-group">
											<label for="name" class="control-label">Name <small>*</small></label>
											<input type="text" class="form-control" id="name" required="required" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
											<?php echo "<p class='text-danger'>$errName</p>";?>
											<div class="help-block with-errors"></div>
										</div>

										<!-- END Form Name -->

									</div>


									<div class="col-md-6">


										<!-- Form Number -->

										<div class="form-group">
											<label for="phone" class="control-label">Phone Number <small>*</small></label>
											<input type="phone" class="form-control" id="phone" required="required" name="phone" placeholder="Phone Number" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
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
											<label for="message" class="control-label">Message</label>
											<textarea class="form-control" rows="6" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
											<?php echo "<p class='text-danger'>$errMessage</p>";?>
											<div class="help-block with-errors"></div>
										</div>

										<!-- END Form Message -->


									</div>


									<!-- Form Submit -->

									<div class="col-md-12 text-center">
										<input id="submit" name="submit" type="submit" value="Send" class="btn btn-success btn-send">
									</div>

									<!-- END Form Submit -->


								</div>


								<!-- Form Required -->

								<div class="row">
									<div class="col-md-12 text-center">
										<p class="text-muted small">* These fields are required.</p>
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

	</html>
