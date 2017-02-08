<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<header class="col-sm-12">			
					<h1>Hello, world!</h1>
				</header>
			</div>
			<div class="row">
				<section class="col-xs-12 col-sm-9 col-sm-push-3">
					<form action="/" method="POST" id="register" name="register">
						<div class="form-group">
							<label for="naam">Voor- en achternaam kind:</label>
							<input type="text" class="form-control" id="naam" placeholder="">
						</div>
						<div class="form-group">
							<label class="radio-inline">
								<input type="radio" name="geslacht" id="geslachtJongen" value="j"> Jongen
							</label>
							<label class="radio-inline">
								<input type="radio" name="geslacht" id="geslachtMeisje" value="m"> Meisje
							</label>
						</div>
						<div class="form-group">
							<label for="adres">Straatnaam en huisnummer</label>
							<input type="text" class="form-control" id="adres" placeholder="">
						</div>
						<div class="form-group">
							<label for="geboortedatum">Geboortedatum</label>
							<div class="row">
								<div class="col-xs-12 col-sm-3">
									<select name="bday" id="bday" class="form-control">
										<option value="">Dag</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-3">
									<input type="text" class="form-control" placeholder="">
								</div>
								<div class="col-xs-12 col-sm-4">
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</form>
				</section>
				<aside class="col-xs-12 col-sm-3 col-sm-pull-9">
					Sidebar
				</aside>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/assets/js/bootstrap.min.js"></script>
	</body>
</html>