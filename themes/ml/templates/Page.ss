<!DOCTYPE html>
<html lang="en">
  <head>
    <% base_tag %>
    $MetaTags(false)
    <meta charset="utf-8">
    <title>$Title | $Sitetitle </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="$ThemeDir/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="$ThemeDir/css/styles.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>

    <% require themedCSS(bootstrap-responsive) %>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


  </head>

  <body class="template-$ClassName">

    <div class="navbar<% if $ClassName == HomePage %> homepage-navbar<% end_if %>">
      <div class="navbar-inner">
        <div class="container">
      <!-- Uncomment to enable search -->
      <!--$SearchForm-->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/"></a>


	  <% if Menu(1) %>
          <div class="nav-collapse">
           
<ul class="nav">
   <% control Menu(1) %>   
   <!--   <li class="dropdown"><a class="dropdown-toggle $LinkingMode" data-toggle="dropdown" href="$Link" title="Go to the {$Title} page">$MenuTitle -->

<% if Children && $Title !="Home" %>
<li class="dropdown"><a class="dropdown-toggle $LinkingMode" data-toggle="dropdown" href="$Link" title="Go to the {$Title} page">$MenuTitle 

      <b class="caret"></b>
<% else %>

<li><a class="$LinkingMode" href="$Link" title="Go to the {$Title} page">$MenuTitle 

 <% end_if %>

      </a>
         <% if Children && $Title !="Home" %>
            <ul class="dropdown-menu">
            <% control Children %>
               <li><a class="$LinkingMode" href="$Link" title="Go to the {$Title} page">$MenuTitle</a></li>
            <% end_control %>
            </ul>
         <% end_if %>
      </li>
   <% end_control %>
</ul>




          </div><!--/.nav-collapse -->
          <% end_if %>
        </div>
      </div>
    </div>


    <% if $ClassName == HomePage %>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <% if  $Herounit %>

      <div class="homepage-hero">
        <% loop $Herounit.Limit(1) %> 
        $Image
        <% end_loop %>
      </div>

      <div class="homepage-blurb-shader clearfix">
        <div class="container homepage-blurb-shader-inner">     
          <div class="row">
            <div class="span8">
            <% loop $Herounit.Limit(1) %>
              <h2><span>$Blurb</span></h2>
            <% end_loop %>
            </div>
            <div class="span4">
              $siteConfig.CampaignImage.setWidth(370)
            </div>
          </div>
        </div>
      </div>



      <% end_if %>
    <% end_if %>

    <div class="container">

      $Layout

      <hr>

      <footer> 
        
         <p>&copy; Matt Lawrey $Now.Year Authorised by Matt Lawrey, Nelson.</p>
        
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster tee hee -->
  
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="$ThemeDir/js/bootstrap.min.js"></script>
  

  </body>
</html>

