<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Payment for FriendBook</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
		<style>
			label{
				font-weight: bold;
			}
			body{
				background-image: linear-gradient(to bottom right, #33475b, #0033CC, #FF77CC, rgb(255, 122, 89));
			}
			.form-control{
				border: none;
				border-radius: 100px;
				box-shadow: 0 5px orange;
			}
	
			
		</style>
	</head>
	<body class="bg-secondary">

		<div class="container">
			<div class="row">
				<div class="col-md-12 p-5 display-4 text-capitalize text-center">
					<h3 class="text-white">Payment for FriendsBook</h3>
					
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-5">
					<div class="card border-0">
						<div class="card-header bg-white">
							<h4 class="card-title">
								Payment Checkout
							</h4>
						</div>
						<div class="card-body">
							
							<form action="cash.php" method="post">
								<label for="">Select Date and Time slot:</label>
								<div class="form-group">
									<input type="date" id="date" name="date"class="form-control" required>
								</div>
								<div class="form-group">
									<select id='timeslot'name='timeslot'class="form-control" required>
											<option selected>Select your preferable slot</option>
											<option value="1">Slot 1: 0800</option>
											<option value="2">Slot 2: 1000</option>
											<option value="3">Slot 3: 1200</option>
											<option value="4">Slot 4: 1400</option>
											<option value="5">Slot 5: 1600</option>
											<option value="6">Slot 6: 1800</option>
									</select>
								</div>
						
								<label for="">Email:</label>
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Enter the email...Exp:friendsbook@gmail.com" required>
								</div>
								<label for="">Phone No:</label>
								<div class="form-group">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter the phone...Exp:01X-XXXXXXX" required>
								</div>

								<div class="form-group">
									<label for="duration" class="form-label">Duration</label>
									<input type="number" class="form-control" id="inputduration" oninput="myAmount()"required>
								</div>

								<label for="">Amount:(in Ringgit Malaysia RM)</label>
								<div class="form-group">
									<input autocomplete="off" id="amt" name="amt"class="form-control" oninput="myAmount()"required >
								

									<script>
										function myAmount() {
											var amount= '50';
											var duration= document.getElementById("inputduration").value;
										
											var total = +amount * +duration ;
											document.getElementById("amt").value = total;
																					
										}
									</script>

								</div>

								<div class="form-group">
								<style>
									.button {
									display: inline-block;
									padding: 15px 157px;
									font-size: 24px;
									cursor: pointer;
									text-align: center;
									text-decoration: none;
									outline: none;
									color: #fff;
									background-color: #4791d0;
									border: none;
									border-radius: 100px;
									box-shadow: 0 9px #999;
									margin: 0;
									justify-content: center;
									align-items: center;
									}

									.button:hover {background-color: #0F5897}

									.button:active {
									background-color: #0F5897;
									box-shadow: 0 5px #999;
									transform: translateY(4px);
									}
								</style>
									<button type="submit" name="payment" class="button" onclick="validate()">Proccess </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html> 