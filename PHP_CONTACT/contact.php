<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>OgunlanaContactForm</title>
			
		</head>
		<body>
		
		
		
			<form action="processform.php" method="POST">
				<p>			
					<label>First Name</label>
					<input type="text" name="first_name" placeholder="Enter Your First Name" required />
				</p>
				<p>
					<label>Last Name</label>
					<input type="text" name="last_name" placeholder="Enter Your Last Name" required />
				</p>
				<p>
					<label>Email</label>
					<input type="email" name="email" placeholder="Enter Your Email" required />
				</p>
				<p>
						<label for="department">Department:</label>
							<select name="department" required>
								<option>Select Department</option>
								<option>Administrative</option>
								<option>Marketting</option>
								<option>Accounts</option>
							</select>
				</p>
				<p>
					<label for="gender">Gender:
					<input type="radio" name="gender" value="Female" required /><span>Female</span>
					<input type="radio" name="gender" value="Male" required /><span>Male</span>
					</label>
				</p>
				<p>
					<input type="checkbox" name="terms" value="yes" required /> <span>By Clicking this box you agree to terms and condition</span>
				</p>
				<p>
				<textarea name="message" rows="10" required></textarea>
				</p>
				
				<button type="submit" name="submit" style="padding:10px;">Send Message</button>
			</form>
		</body>
	</html> 
	