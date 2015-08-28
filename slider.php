<?php 
global $brew_options;
if (isset($brew_options['opt-slides']) && !empty($brew_options['opt-slides'])) {
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">

		<?php	
			for ($i = 0; $i < count($brew_options['opt-slides']); $i++) {
				//echo "<li data-target='#myCarousel' data-slide-to='$i' class=".($i < 1)? 'active' : '' ." ></li>";
		} ?>
	</ol>

<?php $counter = 1; ?>
	<div class="carousel-inner" role="listbox">
		<?php	
			foreach ($brew_options['opt-slides'] as $slide) {
		?>
		    <div class="item<?php if($counter <= 1){echo  ' active'; } ?>">	        
	        	<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
		    </div>		   
		<?php	
		 $counter++; 
		} ?>
	</div>

	<!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
		
	</div>

<?php	} ?> 

