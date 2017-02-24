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
		<link href="/assets/css/screen.css" rel="stylesheet">

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
				<section class="col-xs-12 col-sm-9 col-sm-push-3">
					<h1>Bedankt</h1>
<!-- 					<form action="/controller.php" method="POST" id="registerChild" name="registerChild">
						<div class="alert alert-danger alert-dismissible" role="alert" id="warning">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="namechild">Voor- en achternaam kind:</label>
							<input type="text" class="form-control" name="namechild" id="namechild" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="radio-inline">
								<input type="radio" name="gender" id="geslachtJongen" value="j" required=""> Jongen
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" id="geslachtMeisje" value="m" required=""> Meisje
							</label>
						</div>
						<div class="form-group">
							<label class="control-label" for="adres">Straatnaam en huisnummer</label>
							<input type="text" class="form-control" name="adres" id="adres" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="geboortedatum">Geboortedatum</label>
							<div class="row">
								<div class="col-xs-12 col-sm-2">
									<select name="bday" id="bday" class="form-control" required="">
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
								<div class="col-xs-12 col-sm-4">
									<select class="form-control" id="bmonth" name="bmonth" required="">
										<option value="">Maand</option>
										<option value="1">Januari</option>
										<option value="2">Februari</option>
										<option value="3">Maart</option>
										<option value="4">April</option>
										<option value="5">Mei</option>
										<option value="6">Juni</option>
										<option value="7">Juli</option>
										<option value="8">Augustus</option>
										<option value="9">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-3">
									<select class="form-control" name="byear" id="byear" required="">
										<option value="">Jaar</option>
										<?php 
											$maxyear = 2013;
											$range = $maxyear - 20;
											for ($i = $maxyear; $i > $range; $i--){
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label" for="phone">Telefoonnummer ouders</label>
									<input type="text" class="form-control" name="phone" id="phone" placeholder="" required="">
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label" for="email">E-mailadres ouders</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>In welke groep en op welke school zit uw kind?</label>
							<div class="row">
								<div class="col-xs-12 col-sm-2">
									<label class="control-label" for="groep">Groep</label>
									<input type="text" class="form-control" name="groep" id="groep" placeholder="" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label" for="school">van basisschool</label>
									<select class="form-control" name="school" id="school" required="">
										<option value=""></option>
										<option value="Brukelum">Brukelum</option>
										<option value="Driehoek">Driehoek</option>
										<option value="Heindert">De Heindert</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<label for="opmerkingen">Bijzonderheden m.b.t. medicijnen, allergieën, dieet, relevante indicaties (i.v.m. juiste leiding), e.d.</label>
							<textarea name="opmerkingen" id="opmerkingen" class="form-control" rows="5"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label for="voorkeur">Bij voorkeur in het groepje bij</label>
									<input type="text" class="form-control" name="voorkeur" id="voorkeur">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg">Registreren</button>
							<a href="javascript:fillForm();">Prefill</a>
						</div>
					</form> -->
				</section>
				<aside class="col-xs-12 col-sm-3 col-sm-pull-9">
					<h1>J3D</h1>
				</aside>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/build/app.min.js"></script>
	</body>
</html>