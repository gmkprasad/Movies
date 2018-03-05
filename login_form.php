			<form id="login_form1" class="form-signin" method="post">
				<h2 class="form-signin-heading">
					<i class="icon-lock"></i> Login
				</h2>
				<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
				<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
				
				<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
				<a href="reg.php" style="float:right;color:white">Register</a>
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				});
				</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "loginpage.php",
									data: formData,
									success: function(html){
									if(html=='true_admin')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to Movies", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/home/'  }, delay);  
									}else if (html == 'true'){
										$.jGrowl("Welcome to Movies", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'home/'  }, delay);  
									}else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
			