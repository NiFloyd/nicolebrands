@extends('layouts.app')

@section('navbar')
@parent
@endsection
@section('content')
<link rel="stylesheet" type="text/css" media="screen" href="css/resume.css"/>
<div class="container-fluid">
	<div class="main">
		<br>
		<h1 style="color:#734b5e; font-weight:bolder;">Nicole Floyd</h1>
		<p style="color:#EDF2F4; font-size: 28px;">Full Resume &rarr;<span><a href="resume.pdf" class="btn download" download>Download PDF</a></span></p>
	</div>

	<div class="timeline">
		<div class="column">
			<div class="title">
				<h1> 2018-Present </h1>
				<h2> Full Stack Developer </h2>
				<br>
			</div>
			<div class="description">
				<p class="vas"> Junior Web developer able to build a Web presence from the ground up -- from concept, navigation, layout and programming to UX and SEO. Skilled at writing well-designed, testable and efficient code using current best practices in Web development. Responsibilities includes analyzing,designing and building new components using various programming languages and Agile Methodology.</p>
			</div>
		</div>
		<div class="column">
			<div class="title">
				<h1> 2006-2018 </h1>
				<h2> Quality &amp Project Manager </h2>
				<br>
			</div>
			<div class="description">
				<p class="vas"> Design new processes, statistical analysis, quality concepts and system standards. Oversee the evaluation, deployment and administration of all Information Technology software, hardware, database and network systems within the corporation. Trained and mentored staff members in EHS hazards, quality standards and software usage. Maintained SharePoint intranet structure for company. </p>
			</div>
		</div>

		<div class="column">
			<div class="title">
				<h1> 2017-2018 </h1>
				<h2> Web Administrator </h2>
				<br>
			</div>
			<div class="description">
				<p class="vas"> Voluntarily maintained web environment for a local non-profit organization by identifying system requirements, installing upgrades, monitoring system performance and managing content.</p>
			</div>
		</div>

		<div class="column">
			<div class="title">
				<h1> 2014-2017 </h1>
				<h2> Event Manager </h2>
				<br>
			</div>
			<div class="description">
				<p class="vas"> Highly effective Event Manager specializing in efficient event planning, production and execution. Offering an array of skills in marketing, change improvement recommendation, creative issue resolution, securing discounted pricing, tracking goals, accurate reporting, cross-functional collaboration, fostering positive relationships and project management. </p>
			</div>
		</div>
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	</div>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</div>
@endsection
@section('content')
@section('footer')
@parent
@endsection
    

