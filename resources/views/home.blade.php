@extends('layouts.app')

@section('navbar')
@parent
@endsection
@section('content')
<!-- Half-page image. -->
<script src="js/script.js"></script>
<div class="hero-image">
  <div class="hero-text">
    <blockquote contenteditable="true"><q>Web Development and Designs that Innovates the World</q>
            <cite>Nicole Floyd</cite>
    </blockquote> 
  </div>
</div>

<br><br>

<!-- Intro Statement. -->
<div class="container text-center">
  <h2 class="headline">THE UX IN DESIGN</h2>
    <p class="headline2">User experiences have become an increasingly  principal factor in web design. As consumers, we are inundated with information, websites, and options. If a user visits your site and finds it too difficult or tedious to navigate, he or she will likely abandon the site to find more user-friendly results. In every field, a positive user experience is necessary to beat your competition; our competition if you wish it. Let Nicole help!</p>
  </div>
<br><br>
<br><br>
<br><br>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>VALUE-ADDED SERVICES</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"  style="font-size:50px;color:#734B5E"></span>
      <h4>RESPONSIVE DESIGN</h4>
      <p class="vas">Developing Mobile First Apps..</p>
    </div>
    <div class="col-sm-4">
      <span class="fas fa-cogs logo-small" style="font-size:50px;color:#734B5E"></span>
      <h4>CREATIVE</h4>
      <p class="vas">Brand Development, Design &amp Strategy..</p>
    </div>
    <div class="col-sm-4">
      <span class="fas fa-tasks logo-small" style="font-size:50px;color:#734B5E"></span>
      <h4>PROJECT MANAGEMENT</h4>
      <p class="vas">Using Agile Methodologies..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-stats logo-small" style="font-size:50px;color:#734B5E"></span>
      <h4>DATA &amp REPORTING</h4>
      <p class="vas">Custom Reports &amp Dashboards..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small" style="font-size:50px;color:#734B5E"></span>
      <h4>CERTIFIED</h4>
      <p class="vas">Quality Management Certified..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small" style="font-size:50px;color:#734B5E"></span>
      <h4>SUPPORT</h4>
      <p class="vas">Providing Support 24/7..</p>
    </div>
  </div>
</div>
<br><br>
<br><br>
	

@endsection
@section('content')
@section('footer')
@parent
@endsection