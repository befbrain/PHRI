<!--
	Developers: D. Bowers, B. Feder
-->
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

<!--content--><div class="content1">
			<br>
			<div class="row partners-page">
				<h3>Partners</h3>
				<br>
				
				<div class="columns medium-6 partners">
						<img class="partners-img-hogan" src="/images/hogan_2013_vert.jpg">
							<p class="title">Hogan Assessments</p>
							<p>
								Hogan is the international authority in personality
								assessment and consulting. Hogan Assessments has
								more than three decades of experience dramatically
								reducing turnover and increasing productivity by
								helping businesses hire the right people, develop
								key talent, and evaluate leadership potential.
							</p>
							<a class="button2" target="_blank" href="http://www.hoganassessments.com">Learn More</a>
				</div>
				<div class="columns medium-6 partners">
						<img class="partners-img-hogan" src="/images/icflogocolor.jpg">
							<p class="title">International Coach Federation</p>
							<p>
							‘The International Coach Federation (ICF) is the 
							leading global organization dedicated to advancing 
							the coaching profession by setting high standards, 
							providing independent certification and building a
							 worldwide network of trained coaching professionals.’
							</p>
							<a class="button2" target="_blank" href="http://www.hoganassessments.com">Learn More</a>
				</div>
				
			</div>
			<div class="row partners-page">
			<div class="columns medium-6 partners">
						<img class="partners-img-hogan" src="/images/TTI.png">
							<p class="title">TTI Success Insights</p>
							<p>
								TTI Success Insights® (TTI SI) is the world’s leading developer of
								research-based, validated behavioral assessments (including DISC) that enable
								organizations to use the Science of Self™ to reveal and harness the talent and
								skills of their greatest asset – their people. This approach leads to more engaged
								employees, stronger teams and greater productivity.
							</p>
							<a class="button2" target="_blank" href="https://www.ttisuccessinsights.com/">Learn More</a>
				</div>
			<div class="columns medium-6 partners">
					<img class="partners-img" src="/images/pz-120x120.jpg">
					<p class="long_title title">Paula Zimmerman<span class="color1">, Founder and Principal Consultant, PJ Zimmerman Advisors</span></p>
					<p>
						Compliance and employee relations expert with
						experience as both an employment lawyer and
						human resources professional. Specializes in anticipating
						and resolving issues around employee relations by designing
						customized compliance strategies, policies, processes and
						trainings. Helps small- to mid-size companies establish
						performance management, benefits, and other HR programs and processes.
					</p>
					<a class="button2" target="_blank" href="https://www.linkedin.com/in/paulajzimmerman">Learn More</a>
				</div>
			</div>
			<div class="row partners-page">
			<div class="columns medium-6 partners">
					<img class="partners-img" src="/images/lb-120x120.jpg">
					<p class="title">Lee Bannister<span class="color1">, President, LW Bannister, Inc</span></p>
					<p>
						HR Enablement Consulting & Services: Fulfills HR
						mission through HR technologies
						(HRIS, Talent Management, Recruiting and more), analytics,
						Project Management Office (PMO), business process engineering
						and optimization, change management, communications and financial
						strategy/administration.
					</p>
					<a class="button2" target="_blank" href="https://about.me/lwbannister">Learn More</a>
				</div>
				<div class="columns medium-6 partners">
					<img class="partners-img" src="/images/MS.png">
					<p class="title">Mallika Sarkar<span class="color1">, Leadership Coach and HR Consultant</span></p>
					<p>
						"Strategic Human Resources Advisor with fifteen years of diverse HR experience in
						high-growth and complex environments. Mallika has significant expertise in
						coaching senior leadership teams in building organizational capability for
						maximizing performance and in leading change management during business transformation.
						Mallika's career as a HR leader has been focused on developing organizational interventions
						to meet business priorities and she brings with her strong consulting and coaching skills." 
					</p>
					<a class="button2" target="_blank" href="http://www.rsgexecsearch.com/">Learn More</a>
				</div>
			</div>
			<div class="row partners-page">
				<div class="columns medium-6 partners">
					<img class="partners-img" src="/images/ec-120x120.jpg">
					<p class="title">Even Curry<span class="color1">, Dean of Business School at Cairn University</span></p>
					<p>Evan served 20 years as an automotive manufacturing executive
						and currently as dean of Cairn University's business school. Throughout
						his career, he coached leaders and teams through team-forming, storming and
						strategic planning. In the nonprofit sector, he voluntarily counsels inner-city
						fathers and teens. 
						
					</p>
					<a class="button2" target="_blank" href="https://linkedin.com/in/evan-curry-80a3b536">Learn More</a>
				</div>
				<div class="columns medium-6 partners">
					<img class="partners-img" src="/images/wh-120x120.jpg">
					<p class="title">Whitney Hodges<span class="color1">, President, Recruiting Services Group, Inc</span></p>
					<p>
						Places talented individuals with super companies
						coast to coast. Search focus is on Human Resources,
						Supply Chain, and Manufacturing Operations Executive talent.
					</p>
					<a class="button2" target="_blank" href="http://www.rsgexecsearch.com/">Learn More</a>
				</div>
				
			</div>
			<div class="row partners-page">
					<div class="columns medium-6 partners">
						<img class="partners-img" src="/images/jc-120x120.jpg">
						<p class="title">Judy Canavan<span class="color1">, Managing Partner, HR+Survey Solutions, LLC</span></p>
						<p>
							Helps companies tie their compensation
							programs to overall organizational strategy,
							and develops and implements custom compensation
							research and surveys.
						</p>
						<a class="button2" target="_blank" href="http://www.hrsurveysolutions.com/">Learn More</a>
					</div>
					
				</div>
			</div>
		</div>
<!--content end-->
		
<!--footer -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
			$(window).on('load resize', function () {
				 $('.title').height($('.long_title').height());
			});
		</script>
		<footer>
			<?php include 'common/footer.html'; ?>
		</footer>
<!--footer end-->

	</body>
</html>