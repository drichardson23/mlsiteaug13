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
    <style type="text/css">
      body {
        padding-top: 120px;
        padding-bottom: 1px;
      }



    </style>
    <% require themedCSS(bootstrap-responsive) %>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
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
