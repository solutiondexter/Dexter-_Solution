<?php
require_once("header.php");
?>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Contact</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<div class="row">
							<div class="col-md-4 animate-box">
								<h3>My Address</h3>
								<ul class="contact-info">
									<li><span><i class="icon-map5"></i></span>318 Pallahar Nagar New 60 feet Airport Road, Sector B, Palhar Nagar, Indore, Madhya Pradesh 452006</li>
									<li><span><i class="icon-phone4"></i></span>+ 91 97534 24161</li>
									<li><span><i class="icon-globe3"></i></span><a href="#">www.dextersolution.co.in</a></li>
								</ul>
							</div>
							
							<div class="col-md-7 col-md-push-1 animate-box">
								<div class="row"><form method="post" action="mail.php">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name= "name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name= "phone"class="form-control" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name= "email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea name=""  name= "massage" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary btn-submit">
										</div>
									</div></form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php
require_once("footer.php");
?>	

	</body>
</html>

