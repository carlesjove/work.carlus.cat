<section id="tarifes-intro">
	<h1><?php echo $title_for_layout; ?></h1>
	<p class="lead">
		Pressupostar un projecte web és complexe i cal tenir en compte molts aspectes. Cada projecte es pressuposta individualment en base a la complexitat i demandes <em>reals</em> del client. Aquestes tarifes tan sols són un punt de referència.
	</p>
	<p>
		Per projectes complets (disseny i desenvolupament) consulta les <a href="#tarifes-integrals" class="anchor">tarifes integrals</a>.<br /> 
		Si tan sols necessites desenvolupament, consulta les <a href="#tarifes-dev" class="anchor">tarifes de desenvolupador</a>
	</p>
</section>

<section id="tarifes-integrals">
	<h1>Tarifes de desenvolupament integral</h1>
	<ul class="price-list">
		<?php foreach( $list as $tarifa ): ?>
		<li>
			<a href="<?php echo $tarifa['path']; ?>">
				<header>
					<h3><?php echo $tarifa['name']; ?></h3>
					<small>a partir de</small>
					<span class="price"><?php echo $tarifa['price']; ?>€</span>
				</header>
			</a>
			<div class="description">
				<p><?php echo $tarifa['description']; ?></p>
			</div>
			<div class="features">
				<ul>
					<?php foreach( $tarifa['features'] as $feature ): ?>
					<li><?php echo $feature; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<a href="<?php echo $tarifa['path']; ?>" class="btn-more">Amplia</a>
		</li>
		<?php endforeach; ?>
	</ul>
	<small><?php echo $vat_not_included; ?></small>
</section>

<section id="tarifes-dev">
	<h1>Tarifes de desenvolupador</h1>
	<ul class="price-list">
		<li>
			<header>
				<h3>Per hores</h3>
			</header>
			<div class="description">
				<p>Per microencàrrecs.</p>
			</div>
			<div>
				<p><strong>35€ / hora</strong></p>
			</div>
		</li>
		<li>
			<header>
				<h3>Per jornada</h3>
			</header>
			<div class="description">
				<p>Per si necessites que em sumi al teu equip durant unes jornades, o per encàrrecs molt concrets.</p>
			</div>
			<div>
				<p><strong>195€ / jornada</strong></p>
			</div>
		</li>
	</ul>
	<small><?php echo $vat_not_included; ?></small>
</section>