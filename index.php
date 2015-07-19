<?php include 'lib/header.php'; ?>


		<div id="login-pane" class="mdl-card mdl-shadow--2dp">
			<div class="logo logo-login"></div>
			
			<form id="login-form" method="POST" action="home.php">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					<input class="mdl-textfield__input" type="text" id="username"/>
					<label class="mdl-textfield__label" for="username">Username</label>
				</div>


				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="password" id="password"/>
					<label class="mdl-textfield__label" for="username">Password</label>
				</div>

				<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"/>
			</form>
		</div>

<?php include 'lib/footer.php'; ?>


