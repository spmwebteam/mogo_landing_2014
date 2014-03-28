<!-- Global Head -->
<?php include('views/partials/globalHead.php'); ?>
<!-- End Global Head -->

<body>
	
	<header>
		
		<!-- Main Navigation -->
		<?php include('views/partials/mainNavigation.php'); ?>
		<!-- End Main Navigation -->

	</header>

	<main class="sticky-compensation" role="main">
		
		<section class="mogo-experience">
			<div class="mogo-experience--container">
				<img class="mogo-experience__logo" src="images/logo-mogo-experience.png" alt="mogo-experience">					
			</div>
		</section>

		<section class="mogo-makeover">
			<div class="wrapper align-center">
				<img src="images/logo-mogobox.png">
				<p class="mvxs uppercase secondary-color great-text">Is Going Through A</p>
				<img src="images/logo-mogo-makeover.png">
			</div>
		</section>

		<section class="mogo-update">
			<div class="wrapper align-center pvl">
				<h3 class="uppercase great-text">Here is What's Taking Place</h3>
				<p class="primer-text secondary-color">The ownership of Mogo has hired a new executive marketing director.  In hiring this new director, an updated vision and new passion is being brought to Mogo. To create the new vision that Mogo has we have temporarily pulled the account down to rebrand and structure the site to give a premier look, feel and experience to the Mogo Nation.</p>
				<p class="primer-text semibold mbl">On July 1st, MogoBox  will have a launch - offering some of the best products you will ever see or find, along with a new Steal or Deal every month.</p>
			</div>
		</section>

		<!--TABS WILL GO HERE-->

		<section class="mogo-nation border-divider">
			<div class="wrapper align-center pvs">
				<h3 class="great-text">Join MogoNation</h3>
				<p class="paragon-text secondary-color pbl">Hundreds Are Already Following Us.  Are You?</p>
			</div>
		</section>

		<section class="mogo-submit">
			<div class="wrapper">
				<div class="gd-row">
					<div class="gd-quarter gd-columns ptl">
						<img src="images/graphic-submit-box.png" />
					</div>
					<div class="gd-three-quarters gd-columns">
						<h3 class="uppercase great-text">Submit Your Product</h3>
						<p class="primer-text semibold">Have A GREAT Product You Are Trying To Promote Or Sell Online? Need Some Help Getting The Word Out?</p>
						<p class="primer-text secondary-color">Fill out this form and we will contact you about offering your product on MogoBox.</p>
					</div>
				</div>
				<div class="gd-row pvm">
					<form action="" method="">
						<div class="gd-half gd-columns">
							<input type="text" name="name" placeholder="NAME">
							<input type="email" name="email" placeholder="EMAIL">
							<input type="url" name="website" placeholder="WEBSITE">
						</div>
						<div class="gd-half gd-columns">
							<textarea name="message" row="4" placeholder="TELL US ABOUT YOUR PRODUCT">
							</textarea>
						</div>
						<div class="gd-full gd-columns pvs">
							<button type="submit">Help Me Sell My Product!</button>
						</div>
					</form>
				</div>
			</div>
		</section>

		<section class="mogo-learn">
			<div class="stretch-bg--mogo-crew align-center pts">
				<h3 class="great-text white uppercase">Learn More About MogoNation</h3>
				<h4 class="canon-text thin">Find Out Why We &amp; Our Partners Are So Successful</h4>
			</div>
		</section>

	</main>

	<footer>

		<!-- Footer -->
		<?php // include('viws/partials/footer.php'); ?>
		<!-- End Footer -->

	</footer>

	<!-- Loading Scripts -->
	<?php include('views/partials/scripts.inc.php'); ?>
	<!-- End Loading Scripts -->

</body>
</html>