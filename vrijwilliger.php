<?php include ('inc.header.php'); ?>
<form class="form" action="/controller-vrijwilliger.php" method="POST" id="registerVolenteer" name="registerVolenteer">
	<h1>Inschrijfformulier vrijwilliger</h1>
	<div class="alert alert-danger alert-dismissible" role="alert" id="warning">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<div></div>
	</div>
	<div class="form-group">
		<label class="control-label" for="name">Voor- en achternaam:</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="" required="">
	</div>
	<div class="form-group">
		<label class="control-label" for="adres">Leeftijd</label>
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="input-group">
					<input type="text" class="form-control" id="age" placeholder="">
					<div class="input-group-addon">jaar</div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label" for="adres">Straatnaam en huisnummer</label>
		<input type="text" class="form-control" name="adres" id="adres" required="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<label class="control-label" for="phone">Telefoonnummer</label>
				<input type="text" class="form-control" name="phone" id="phone" required="">
			</div>
			<div class="col-xs-12 col-sm-6">
				<label class="control-label" for="email">E-mailadres</label>
				<input type="text" class="form-control" name="email" id="email" required="">
			</div>
		</div>
	</div>

	<div class="form-group">
		<p><strong>Je voorkeur als groepsleiding (3 dagen)</strong></p>
		<div class="checkbox">
			<label for="groepOnderbouw">
				<input type="checkbox" name="groepOnderbouw" id="groepOnderbouw" value="1"> Van kinderen  uit groep 1 t/m 4
			</label>
		</div>
		<div class="checkbox">
			<label for="groepBovenbouw">
				<input type="checkbox" name="groepBovenbouw" id="groepBovenbouw" value="1"> Van kinderen  uit groep 5 t/m 8
			</label>
			<div class="indent" id="overnachten">
				<label class="radio-inline disabled">
					<input type="radio" name="overnachten" id="overnachtenJa" value="1" disabled="" checked=""> wel overnachten
				</label>
				<label class="radio-inline disabled">
					<input type="radio" name="overnachten" id="overnachtenNee" value="0" disabled=""> niet overnachten
				</label>
			</div>
		</div>
		<div class="checkbox">
			<label for="metEigenKind">
				<input type="checkbox" name="metEigenKind" id="metEigenKind" value="1"> Begeleider van eigen kind
			</label>
		</div>
		<div class="checkbox checkbox--withinput" style="width: 50%;">
			<label class="label--secondary" for="leidingsamen">Samen met groepsleider:
				<input type="checkbox" name="leidingsamen" id="leidingsamen" value="1">
			</label>
			<input type="text" class="form-control input-sm" name="leidingsamenmet" id="leidingsamenmet" disabled="">
		</div>
	</div>

	<div class="form-group">
		<p><strong>Je voorkeur als daghulp</strong></p>
		<div class="row">
			<div class="col-xs-12 col-sm-4">							
				<div class="checkbox">
					<label for="dag1">
						<input type="checkbox" name="dag1" id="dag1" value="1"> Dinsdag 30 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="dag2">
						<input type="checkbox" name="dag2" id="dag2" value="1"> Woensdag 31 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="dag3">
						<input type="checkbox" name="dag3" id="dag3" value="1"> Donderdag 1 September
					</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="checkbox">
					<label for="creatiefspel">
						<input type="checkbox" name="creatiefspel" id="creatiefspel" value="1"> Bij creatief spel
					</label>
				</div>
				<div class="checkbox">
					<label for="sportiefspel">
						<input type="checkbox" name="sportiefspel" id="sportiefspel" value="1"> Bij sportief spel
					</label>
				</div>
				<div class="checkbox">
					<label for="spelgeenvoorkeur">
						<input type="checkbox" name="spelgeenvoorkeur" id="spelgeenvoorkeur" value="1"> Bij spel maar geen voorkeur
					</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="checkbox">
					<label for="geenvoorkeur">
						<input type="checkbox" name="geenvoorkeur" id="geenvoorkeur" value="1"> Geen voorkeur
					</label>
				</div>
				<div class="checkbox checkbox--withinput">
					<label for="anderevoorkeur" style="width: 100%;">
						<input type="checkbox" name="anderevoorkeur" id="anderevoorkeur" value="1"> Andere voorkeur:
					</label>
					<input type="text" class="form-control input-sm" name="voorkeur" id="voorkeur" disabled="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="checkbox checkbox--withinput" style="width: 50%;">
					<label for="daghulp">
						<input type="checkbox" name="daghulp" id="daghulp" value="1"> Samen met andere opgegeven daghulp, namelijk: 
					</label>
					<input type="text" class="form-control input-sm" name="daghulpsamenmet" id="daghulpsamenmet" disabled="">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-lg">Inschrijven</button>
		<a href="javascript:fillFormVolenteer();" class="right">Prefill</a>
	</div>
</form>
<?php include ('inc.footer.php'); ?>