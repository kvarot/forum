<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		ONE JOB FOR ME
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->css('main');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<style>
	    body {
		  padding-top: 70px;
		}
    </style>
</head>
<body>
	  <div id="main" class="clearfix">
    <?php echo $this->element('navigation');?>
  
    <div class="container">
      <?php echo $this->Session->flash(); ?>

	  <?php echo $this->fetch('content'); ?>
      
      <hr>

      </div>
    </div> <!-- /container -->
     <footer class="footer">
                <div class="container">
                  <p class="text-center padding-20">Forum developpé sur CAKEPHP pour JOb Finder</p>
                  <p class="text-center padding-20"><?php echo $this->Html->link(__("Conditions d'utilisation"),array('controller'=>'pages','action'=>'conditions'))?></p>
                </div>
          </footer>
	
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
</body> 
</html>
