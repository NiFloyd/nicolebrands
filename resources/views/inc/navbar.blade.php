@section('navbar')
        <!-- Navigation -->
        <nav class="navbar navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/home"><img class="navbar-brand" src="../images/N.png" alt="logo"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/resume">Resume</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="emailto:NiFloydBrands@gmail.com=Mail from the Website"><span class="fas fa-envelope"></span></a></li>
                    <li><a href="tel:+17066276445"><span class="glyphicon glyphicon-phone-alt"></span></a></li>
                </ul>
            </div> 
            @show
        </nav>
