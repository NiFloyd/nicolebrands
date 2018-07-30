@extends('layouts.app')

@section('navbar')
@parent
@endsection
@section('content')
<!--   *** PORTFOLIO ***-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>
<main class="container-fluid">
  <!-- <h1 class="text-center inner" style="background-color: transparent;">PORTFOLIO</h1> -->
  <br><br>
  <div class="row">
    <div class="col-md-1"></div>
    <!-- Art The Artist Project Begin -->
    <div class="text-center col-md-5">
      <div class="inner">
        <h3 class="vas">Art The Artist Website</h3>
        <a href="http://arttheartist.biz/asap/"><img src="../images/artTheArtist.PNG" class="img-responsive center-block" alt="ATA" width="450" height="300"></a>
          <p class="vas" style="padding: 10px;">This collaboration project was created to assist an artistic, retired Veteran in launching a new art program to increase art awareness and exposure for students in the local community. The artist wanted the design to focus on his illustration art with a few samples of other mediums. If you want to see the full site visit<a href="http://arttheartist.biz/asap/"> ASAP!</a></p>
      </div>
    </div>
    <!-- Art The Artist Project End -->
    <!-- Personal Project Begins -->
    <div class="text-center col-md-5">
      <div class="inner">
      <h3 class="vas">Nicole</h3>
        <img src="../images/personalWeb.PNG" class="img-responsive center-block" alt="BrandN" width="450" height="300">
          <p class="vas" style="padding: 10px;">This site is a personal project to promote brand Nicole. Explore the full site and feedback is always welcomed!</p>
      </div>
      <!-- Personal Project End -->
      <!-- Quote Begins -->
      <br>
      <div class="inner">
        <figure class="quote2">
          <h5>&quot;I have not failed. I've just found 10,000 ways that won't work.&quot;</h5> 
            <cite>Thomas Edison</cite>
        </figure>
      </div>
    </div>
      <!-- Quote Ends -->
    <div class="col-md-1"></div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="text-center col-md-5">
      <div class="inner">
      <img src="../images/agilemethodology.png" class="img-responsive center-block" alt="Agile" width="650" height="550">
        
      </div>
    </div>
    <!-- Calculator Project Begin -->
    <div class="text-center col-md-5">
      <div class="inner">
        <h3 class="vas">Calculator</h3>
        <p class="vas"style="padding: 10px;">With the use of Javascript &amp CSS items we use daily can be created like this calculator.<br> Test it out!</p>  
          <div class="main">
            <form name="form">
              <input class="textview" name="textview">
            </form>
            <table align="center"> 
              <tr>
                <td><input class="buttonC" type="button" value="C" onclick="clean()"></td>
                <td><input class="buttonC" type="button" value="<" onclick="insert('<')"></td>
                <td><input class="buttonC" type="button" value="/" onclick="insert('/')"></td>
                <td><input class="buttonC" type="button" value="x" onclick="insert('*')"></td>
             </tr>
             <tr>
                <td><input class="buttonC" type="button" value="7" onclick="insert(7)"></td>
                <td><input class="buttonC" type="button" value="8" onclick="insert(8)"></td>
                <td><input class="buttonC" type="button" value="9" onclick="insert(9)"></td>
                <td><input class="buttonC" type="button" value="-" onclick="insert('-')"></td>
             </tr>
             <tr>
                <td><input class="buttonC" type="button" value="4" onclick="insert(4)"></td>
                <td><input class="buttonC" type="button" value="5" onclick="insert(5)"></td>
                <td><input class="buttonC" type="button" value="6" onclick="insert(6)"></td>
                <td><input class="buttonC" type="button" value="+" onclick="insert('+')"></td>
             </tr>
             <tr>
                <td><input class="buttonC" type="button" value="1" onclick="insert(1)"></td>
                <td><input class="buttonC" type="button" value="2" onclick="insert(2)"></td>
                <td><input class="buttonC" type="button" value="3" onclick="insert(3)"></td>
                <td rowspan=5><input class="buttonC" style="height:106" type="button" value="=" onclick="equal('=')"></td>
             </tr>
             <tr>
                <td colspan=2><input class="buttonC" type="button" style="width:106;" value="0" onclick="insert(0)"></td>
                <td><input class="buttonC" type="button" value="." onclick="insert('.')"></td>
             </tr>
            </table>
          </div>
      </div>
    </div>
    <!-- Calculator Project End -->
    <br>
    <br>
</main>
@endsection
@section('footer')
@parent
@endsection
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
  <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>



  
