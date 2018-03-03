<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>ajax | data </title>
	</head>
	<style>
		.container {
			margin: 100 0 0 0 auto;
			width: 50%;
		}
		form {
			margin-top: 250px;
		}
		#h1 {
			color: white;
		}
	</style>
	<body>
		<div class="container">
			<!-- Default form subscription -->
			<form autocomplete="off" method="POST" action=".">
				<h1 class="title">Customer Information Lookup</h1>
				<h2 class="subtitle">Sample Email: mattfoley@gmail.com</h2>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-large email" name="email" type="email" placeholder="Email">
					<span class="icon is-medium is-left">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<br>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-large phone" name="phone" type="tel" placeholder="Phone">
					<span class="icon is-medium is-left">
						<i class="fas fa-phone"></i>
					</span>
				</div>
				<br>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-large address" name="address" type="address" placeholder="Address">
					<span class="icon is-medium is-left">
						<i class="fas fa-home"></i>
					</span>
				</div>
				<br>
				<input type="submit" id="update" class="button is-primary showmodal" value="Update">
			</form>
			<br>
			<br>
			<article class="message">
				<div class="message-header">
					<button class="delete" aria-label="delete"></button>
				</div>
				<div class="message-body">

				</div>
			</article>
			<div class="modal">
				<div class="modal-background"></div>
				<div class="modal-content" id="root">
					<!-- Any other Bulma elements you want -->
				</div>
				<button class="modal-close is-large" aria-label="close"></button>
			</div>
		</div>
		<script src="js/main.js"></script>
	</body>
</html>
