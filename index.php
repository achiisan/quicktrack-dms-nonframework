
<!-- LOGIN/SIGNUP PAGE -->
<?php
	error_reporting(E_ERROR); //Remove any error prompts

	session_start();
	if ($_SESSION['auth'] == 1){
		header("Location: dashboard");
	}//if the user is already logged in, continue to home
?>


<?php include 'lib/header.php'; ?>


		<div id="login-pane" class="mdl-card mdl-shadow--2dp">
			<div class="logo logo-login"></div>


			<?php
					// If the user had an invalid username/password combination prompt this alert
					if ($_GET['errcode'] == 1 ){
							echo '<p class="alert alert-danger">&nbsp</span>Oops! Wrong username/password combination</p> ';
					}
						// if the user had a successful signup prompt this alert
					if ($_GET['signup'] == 1 ){
							echo '<p class="alert alert-success">&nbsp</span>User successfully added</p> ';
					}
						// else prompt this alert
					elseif ($_GET['signup'] == 2 ){
							echo '<p class="alert alert-warning">&nbsp</span>Add user not permitted</p> ';
					}
						
				?>
			<form id="login-form" method="POST" action="login.php">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					<input class="mdl-textfield__input" type="text" id="username" name="username"/>
					<label class="mdl-textfield__label" for="username">Username</label>
				</div>


				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

					<input class="mdl-textfield__input" type="password" id="password" name="password"/>

					<label class="mdl-textfield__label" for="username">Password</label>
				</div>

				<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="margin-left: 15px" />
			</form>
		</div>

<?php include 'lib/footer.php'; ?>


