<div class="pop-up" id="id02">
		<div class="pop-up-content">
			<form action="signininfo.php" method="post">
				<div class="login-img">
					<ion-icon name="person-circle-outline"></ion-icon>
				</div>
				<div class="container">
					<label for="username">
						<input type="text" id="username"  name="username" placeholder="Enter username" autocomplete="off" required>
					</label>
					<label for="email">
						<input type="email" id="email"  name="email" placeholder="Enter email" autocomplete="off" required>
					</label>
					<label for="password">
						<input type="password" id="password" name="password" placeholder="Enter password" required>
					</label>
					<label for="confirmpassword">
						<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" required>
					</label>
					<input type="submit" value="Sign up" onclick="signininfocondition()">
					<input type="reset" value="Reset">
					<label>
      					<input type="checkbox" checked="checked" name="remember">Remember me
    				</label>
				</div>
			</form>
		</div>
	</div>