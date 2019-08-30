<?php include('include/header.php')?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Contact Us Section</h1> 
    <p>Bootstrap is the most popular HTML, CSS...</p> 
  </div>
</div>

<!-- contact us start -->
<section>
	<div class="container mb-5">
		<h1 class="text-center text-capitalize pt-5">Contact Us</h1>
		<hr class="w-25 mx-auto pt-5">

		<div class="w-50 mx-auto">
			<form action="/action_page.php">
			  	<div class="form-group">
			    	<label for="name">Your Name </label>
			    	<input type="text" class="form-control" id="name" autocomplete="off">
			  	</div>
			  	<div class="form-group">
			    	<label for="email">Email</label>
			    	<input type="email" class="form-control" id="email">
			  	</div>
			  	<div class="form-group">
			    	<label for="mob">Mobile Number </label>
			    	<input type="number" class="form-control" id="name" autocomplete="off">
			  	</div>
			  	<div class="form-group">
			    	<label for="msg">Message</label>
			    	<textarea type="text" class="form-control" id="msg"></textarea>
			  	</div>
			  	<div class="form-group form-check">
			    	<label class="form-check-label">
			      		<input class="form-check-input" type="checkbox"> Remember me
			    	</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</section>
<!-- contact us end -->

<!-- flex start -->
<section>
	<div class="flex_css my-5">
		<div><button class="btn btn-success p-3">Study</button></div>
		<div><button class="btn btn-success p-3">Learn</button></div>
		<div><button class="btn btn-success p-3">Enjoy</button></div>
	</div>
</section>
<!-- flex end -->

<?php include('include/footer.php')?>