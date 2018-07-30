@extends('layouts.app')

@section('navbar')
@parent
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/hi.js"></script>
<div class="container-fluid">
  <div class="text-rotator">
    <div class="jumbotron jumbotron-container" style="background:transparent;">   
      <div class="slogan">
          Hi, I am 
            <ul>
              <li><span>a&nbsp;Web&nbsp;Designer</span></li>
              <li><span>a&nbsp;Web&nbsp;Developer</span></li>
              <li><span>a&nbsp;Project&nbsp;Manager</span></li>
              <li><span>a&nbsp;Software&nbsp;Developer</span></li>
              <li><span>a&nbsp;Certified&nbsp;Quality&nbsp;Auditor</span></li>
              <li><span>Nicole&nbsp;Floyd</span></li>
            </ul>
          <span class="hidethis"></span>
      </div>  
    </div>
  </div>
</div>
<div class="container-fluid">
<div class="col-md-2">
<dl class="skills-diagram">
          <dt class="skill-6">NodeJs</dt>
          <dd>6</dd>
          <dt class="skill-2">SEO</dt>
          <dd>2</dd>
          <dt class="skill-9">Agile</dt>
          <dd>9</dd>
          <dt class="skill-3">CSS3</dt>
          <dd>3</dd>
          <dt class="skill-4">JSon</dt>
          <dd>4</dd>
        </dl>
</div>
  <div class="col-md-6">
    <div class="header">
      <div class="logo-wrapper">
        <p><img src="../images/nImage.jpg" align="left" class="nicole" alt="nFloyd" width="200" height="200" hspace="20"><p class="aboutMe">
        Nicole helps organizations develop solutions to reach their customers using smart web designs, data reporting, business dashboards as well as amazing branding. <br>Drawing over ten years of experience in software development & quality and project management in the logistics and ecommerce industry, Nicole now focuses mainly on programming and web development.<br>After a successful career in Quality &amp Project Management, she now mentors and shares her skills with businesses and non-profit organizations. The endless possibilities to change the world through programming, machine learning, artificial intelligence, and the web has sparked an undying passion to be active in the cycle of revolutions for Nicole. She continues to focus on improving her coding and programming skills and the latest in web development trends. As a certified Quality Manager, Nicole will incorporate these skills when developing your brand, design and user experience.</p>
        </div>
    </div>
  </div>
  <div class="col-md-4" style="top-margin:100px;">
    <h3 style="text-align:center; color:#EDF2F4"></h3>
      <dl class="skills-diagram">
          <dt class="skill-5">jQuery</dt>
          <dd>5</dd>
          <dt class="skill-10">JavaScript</dt>
          <dd>10</dd>
          <dt class="skill-3">React</dt>
          <dd>3</dd>
          <dt class="skill-8">PHP</dt>
          <dd>8</dd>
          <dt class="skill-4">Laravel</dt>
          <dd>4</dd>
          <dt class="skill-6">HTML5</dt>
          <dd>6</dd>
          <dt class="skill-7">Python</dt>
          <dd>7</dd>
          <dt class="skill-9">MySQL</dt>
          <dd>9</dd>
          <dt class="skill-2">CSS</dt>
          <dd>2</dd>
      </dl>
  </div>
</div>

@endsection
@section('footer')
@parent
@endsection


