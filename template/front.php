<!--
   Author Name: Shivcharan Anandro Patil 
   Author Email: shiv@itapplication.net
   Author Website: http://itapplication.net      
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="template/style.css">
	<link rel="stylesheet" href="template/front-style.css">
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
  </head>
  <body>	  
    <header id="site-header" class="sitelayout d-print-none">		
		 <div class="container">
		  <div class="row">
			<div class="col-12">
			 <div class="logo"><a href="index.php?=content/home.php" /><img src="" /></a></div><h1 class="site-name"><a href="index.php?=content/home.php" /><?php siteName(); ?></a></h1>
			</div>
		  </div><!-- /.row -->
		 </div><!-- /.container -->
    </header>
    <section id="navigation" class="nav bar d-print-none">
	 <div class="container">
	  <div class="row">
	   <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
	   <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	     <?php navMenu(); ?>
	    </ul>
	   </div>
       </nav>
	  </div><!-- /.row -->
	 </div><!-- /.container -->
	</section>
    <section id="content" class="">
	 <div class="container">
	  <main class="row">
	   <article class="col">        
        <?php pageContent(); ?>
       </article> 
	  </main><!-- /.row -->
	 </div><!-- /.container -->
	</section>
    <footer id="site-footer" class="d-print-none">
	 <?php include "footer.php"; ?>
    </footer>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
