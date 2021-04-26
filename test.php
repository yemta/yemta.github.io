<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags always come first -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="theme-color" content="#5B1616" />
  <title>AOV - Go away</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="icon" href="img/clover.png">

  <style>
    body,
    html {
      height: 100%;
      background-color: #F9F9F9;
    }

    .bg {
      /* The image used */
      background-image: url("img/bg_red1.jpg");

      /* Full height */
      height: 50%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .faqHeader {
      font-size: 27px;
      margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
      font-family: 'Glyphicons Halflings';
      content: "e072";
      /* "play" icon */
      float: right;
      color: #F58723;
      font-size: 18px;
      line-height: 22px;
      /* rotate "play" icon from > (right arrow) to down arrow */
      -webkit-transform: rotate(-90deg);
      -moz-transform: rotate(-90deg);
      -ms-transform: rotate(-90deg);
      -o-transform: rotate(-90deg);
      transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
      /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
      -webkit-transform: rotate(90deg);
      -moz-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      -o-transform: rotate(90deg);
      transform: rotate(90deg);
      color: #454444;
    }

    a {
      color: inherit;
    }

    .vertical-center {
      min-height: 50%;
      /* Fallback for browsers do NOT support vh unit */
      min-height: 50vh;
      /* These two lines are counted as one :-)       */

      display: flex;
      align-items: center;
      justify-content: center;
    }

    .intro {
      color: white;
      font-size: 45px;
    }

    h2 {
      line-height: 0.4;
    }

    #about {
      text-align: justify;
      text-justify: inter-word;
    }

    .athena {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #status {
      padding: 20px 20px 5px 20px;
    }
  </style>
  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }
  </style>
</head>

<body aria-busy="true">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>AOV</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="AOV">Home

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq">FAQ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="downloads">Downloads
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rules">Rules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formats">Formats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="templates">Templates</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Content
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="content">Content Home</a>
              <a class="dropdown-item external"
                href="https://docs.google.com/document/d/1eIoh6NWHoeKX9E3clXP-xVCIWeaHX2WrbOaUmnBhqJI/edit"
                target="_blank">Suggestions Document</a>
              <a class="dropdown-item external"
                href="https://docs.google.com/document/d/1Ynwl11Pqiass_LbD9itM3mARLdoO6h9UICLOgjvfvNw/edit"
                target="_blank">Content Rules</a>
              <a class="dropdown-item external"
                href="https://docs.google.com/document/d/1kqxY2Avk-kt72iApawH2IPVs9gFACFkj__v60MFm2V4/edit"
                target="_blank">Crossover Court Downloads</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Community
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="archive">Case Archive</a>
              <a class="dropdown-item" href="competition">Competitions</a>
              <a class="dropdown-item" href="guides">Role Guides</a>
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#">About Us
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="bg">

    <div class="container vertical-center">
      <div class="row">
        <div class="col-sm-12">
          <div class="intro text-center">Ass</div>
        </div>
      </div>
    </div>

  </div>
  <main>
    </br>
    </br>
    <div class="container">

      <div class="jumbotron">
        <div id="status" class="row mb-3">
          <h3><strong>Who the hell are you guys?</strong></h3>
        </div>
        <div id="status" class="row">
          <p id="about">Attorney Online Vidya (AOV) - An Attorney Online server - was created in December 2015.
            Originally posted on 4chan&#39;s /v/ board, the server primarily focused on Ace Attorney styled casing
            formats, including Pre-Written and Improvised trials. Over time, the variety of formats expanded and various
            game formats also became the norm. You can check out our Common Formats and Template Library pages for a
            better idea of our server&#39;s formats.
            </br></br>
            AOV quickly became the biggest server on Attorney Online, at one time regularly having over 100 players
            online at once. Naturally, as with any online community, we&#39;ve had to endure the various drama fallouts
            you&#39;ve come to expect from shit Admins, bad decisions and unfortunate pranks. While we&#39;ve lost some
            players and went through several Head Admins over the years, the server is still alive and kicking with a
            relatively stable player-base.
            </br></br>
            Our main goal when playing is to create a fun and enjoyable story and make sure that everyone involved,
            whether as an active participant or a spectator, has a good time. We don&#39;t tend to take ourselves too
            seriously, with cases often featuring various memes and banter, but more serious styled formats are still
            often played. As long as you&#39;re up for co-operating with fellow players and rolling with the wackiness,
            then you&#39;re more than welcome here.
            </br></br>
            AOV also has a heavy emphasis on community created and submitted content, with occasional updates featuring
            suggested content including new sprites, music, background etc. If you&#39;re interested in submitting
            content, check out the Server Content page for more information.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div id="status" class="jumbotron">
            <h3>Administrators</h3>
            <hr>
            <p class="lead">LawfulDickish (Head Admin)</br>
              AdamBlue</br>
              Deflubber</br>
	      Truce</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div id="status" class="jumbotron">
            <h3>Moderators</h3>
            <hr>
            <p class="lead">
              The server currently has six moderators.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div id="status" class="jumbotron">
            <h3>Content & Server</h3>
            <hr>
            <p class="lead">Ssstar (Website)</br>
              Iamgoofball (Server)</br>
              Jumblies (Content)</br>
              Rye (Content)</br>
              Chen (Content)</p>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="page-footer font-small grey darken-4">

    <!-- Footer Elements -->
    <div class="container text-center athena">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-sm-6 py-2 mb-3">
          </br>
          <a class="lead" href="https://discordapp.com/invite/tKew3hK" target="_blank"><i
              class="fab fa-discord fa-2x indigo-text"></i></a>
          </br>
          <a class="lead" href="https://discordapp.com/invite/tKew3hK" target="_blank">Community</a>
        </div>

        <div class="col-sm-6 py-2 mb-3">
          </br>
          <a class="lead" href="https://discord.gg/ZvzhPBj" target="_blank"><i
              class="fab fa-discord fa-2x red-text"></i></a>
          </br>
          <a class="lead" href="https://discord.gg/ZvzhPBj" target="_blank">Mod Server</a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div id="copy" class="footer-copyright text-center">&#xa9; Attorney Online Vidya
      <br/>This fansite is not affiliated with nor endorsed by Capcom Co., Ltd.
      <br/>All content and trademarks referenced are property of their respective owners.
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <script type="text/javascript" src="js/copyr.js"></script>

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>

</body>

</html>