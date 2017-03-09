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
		<div class="row" id="dagdelen">
			<div class="col-xs-12 col-sm-6">							
				<p><strong>Je voorkeur als daghulp</strong></p>
				<div class="checkbox">
					<label for="dagMa">
						<input type="checkbox" name="dagMa" id="dagMa" value="1"> Maandag 21 Augustus (opbouw)
					</label>
				</div>
				<div class="checkbox">
					<label for="dagDi">
						<input type="checkbox" name="dagDi" id="dagDi" value="1"> Dinsdag 22 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="dagDiAaf">
						<input type="checkbox" name="dagDiAaf" id="dagDiAaf" value="1"> Dinsdag 22 Augustus (avond)
					</label>
				</div>
				<div class="checkbox">
					<label for="dagWo">
						<input type="checkbox" name="dagWo" id="dagWo" value="1"> Woensdag 23 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="dagDo">
						<input type="checkbox" name="dagDo" id="dagDo" value="1"> Donderdag 24 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="dagVr">
						<input type="checkbox" name="dagVr" id="dagVr" value="1"> Vrijdag 25 Augustus (afbreken)
					</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">							
				<p><strong>Je voorkeur als groepsleiding</strong></p>
				<div class="checkbox">
					<label for="groepDi">
						<input type="checkbox" name="groepDi" id="groepDi" value="1"> Dinsdag 22 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="groepDiAaf">
						<input type="checkbox" name="groepDiAaf" id="groepDiAaf" value="1"> Dinsdag 22 Augustus (avond)
					</label>
				</div>
				<div class="checkbox">
					<label for="groepWo">
						<input type="checkbox" name="groepWo" id="groepWo" value="1"> Woensdag 23 Augustus
					</label>
				</div>
				<div class="checkbox">
					<label for="groepDo">
						<input type="checkbox" name="groepDo" id="groepDo" value="1"> Donderdag 24 Augustus
					</label>
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