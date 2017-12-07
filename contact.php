
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'common/head.html'; ?>
	</head>

	<body>
<!--header -->
		<header>
			<?php include 'common/header.html'; ?>
		</header> 

<!--content-->
		<div class="content1  contact-page">
			<br>
			<div class="content2">
				<div class="row">
				<h3>Contact Us</h3>
				<br>
					<div class="medium-3 columns">
						<div class="contact-center">
							<img class="contact-img" src="/images/chg_mgmt_bw-500x500.jpg">
						</div>
					</div>
					<div class="medium-9 columns">
						<span>
							<h5><p>We look forward to hearing from you. Please contact us for a confidential, no obligation assessment
							of the opportunities for your business. References available upon request.</p></h5>
							<p>
								<div>Phone: +1.609.902.7496</div>
								<div>Email: <a class="href-mailto" href="mailto:Rebecca@PrincetonHRInsight.com">Rebecca@PrincetonHRInsight.com</a></div>
								<div>Postal: PO Box 1533, Princeton, NJ 08542</div>
								<div>
						            <a target="_blank" href="http://linkedin.com/in/rebecca-oettinger-feder">
						              <img src="images/li_profile2.png">
						            </a>
						         </div>
							</p>
							
						</span>
					</div>
					
					<div class="columns small-12">
						<div>For comments, questions, or problems with this website, please contact the <a class="href-mailto" href="mailto:admin@princetonhrinsight.com">site administrator</a>. Thank you.</div>
					</div>
				</div>
			</div>
		</div>
<!--content end-->

<!--footer -->
		<footer>
			<?php include 'common/footer.html'; ?>
		</footer>
<!--footer end-->
		<script>
			$(window).on('load resize', function () {
				var CurrentFooterHeight = $('footer').height();
				
				var CurrentHeaderHeight = $('header').height();
				
				var CurrentContent1Height = $('.content1').height();
				
				var viewPortHight = window.innerHeight;
				
				var Height = viewPortHight - CurrentFooterHeight;
				Height = Height - CurrentHeaderHeight;
				Height = Height	- CurrentContent1Height;
				
				$(".content1").css("padding-bottom", Height);
			});
		</script>
	</body>
</html>