<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>CIT 313 Final Project</h1>
  </div>
	<img src='views/home/indianapolis.jpg' alt = 'Indianapolis Skyline'>
	<br>
	<br>
</div>
	<div style = 'float: left; width: 70%; text-align: center;'>
	<p>Welcome to the home page of my final project in CIT313. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et mattis nisi. Duis et pharetra elit. Pellentesque sapien justo, dapibus vel ultrices vitae, tempor eget tortor. Aenean tortor nulla, congue sed urna nec, faucibus pharetra ligula. Duis facilisis laoreet orci, eu vestibulum ante. Pellentesque a neque ut libero gravida iaculis vitae eget orci. Donec eu arcu non nibh scelerisque varius. Curabitur pharetra eleifend mauris ac imperdiet. Etiam non nibh nibh. Praesent non augue at odio vulputate porttitor quis a est. In condimentum gravida eros, eget elementum metus cursus in. Ut lobortis laoreet tellus, blandit egestas neque ultrices in. Proin congue, lacus nec malesuada aliquet, magna augue mollis arcu, efficitur sollicitudin nunc augue at diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque dictum euismod commodo. Vivamus blandit tristique libero.</p>
		</div>
		<div style = 'float: right; width 20%; margin-right: 5px;'>
			<h3>Get Your Local Weather</h3>
			<form method = 'post' action = '<?php echo BASE_URL?>weather/getresults'>

				<label for 'zip'>Enter Your Zip Code</label>
				<input type = 'text' name = 'zip' id = 'zip' required = 'zip' />
				<br>
				<button type = 'submit' class = 'btn'>Load Results</button>
			</form>
		</div>
	</div>
</div>
<?php include('views/elements/footer.php');?>
