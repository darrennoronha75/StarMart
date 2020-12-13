<?php

require('top.php');

if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
		window.location.href = 'my_order.php';
	</script>
<?php
}

?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(tmp/banner_1.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Login / Register</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="login-form"  method="post">

									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" id="login_email" name="login_email" placeholder="Your Email*" style="width:100%">
                                        </div>
                                        <span class="field_error" id="email_login_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" id="login_password" name="login_password" placeholder="Your Password*" style="width:100%">
                                        </div>
                                        <span class="field_error" id="password_login_error"></span>

									</div>
                                    
                                    
									<div class="contact-btn">
										<button type="button" onclick="user_login()" class="fv-btn">Login</button>
                                    </div>
                                    
                                    <div class="form-output field_error login_msg">
									<p class="form-messege sp_03"></p>
								</div>
								</form>
								<div class="form-output register_msg">
									<p class="form-messege field_error sp_03"></p>
								</div>
							</div>
						</div> 
                
				</div>
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="register-form" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
                                        </div>
                                        <span class="field_error" id="name_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="email" id="email" placeholder="Your Email*" style="width:100%">
                                        </div>
                                        <span class="field_error" id="email_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="number" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%">
                                        </div>
                                        <span class="field_error" id="mobile_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">
                                        </div>
                                        <span class="field_error" id="password_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" onclick="user_register()" class="fv-btn">Register</button>
									</div>
								</form>
								<div class="form-output register_msg">
									<p class="form-messege field_error sp_02"></p>
								</div>
							</div>
						</div> 
                
				</div>
					
            </div>
        </section>
        <!-- End Contact Area -->
        <!-- End Banner Area -->
  



<?php

require('footer.php');

?>