<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
       	<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJw4jjgvkQ7TkRC8oBJc3Q09g&key=AIzaSyBdlvhhWiAnGsguPYAQf-6XdNXSwDv695A" width="100%" height="300" frameborder="0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" method="post" action="mail.php" >
			<div class="form-group">	
			<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" name="phone" placeholder="Phone">
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control"  placeholder="Message" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>