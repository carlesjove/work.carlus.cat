<?php  
$tarifa = $item;

if ( isset($tarifa['full_conditions']) ) {
	$conditions = array_merge($tarifa['full_conditions']);
} elseif ( isset($tarifa['conditions']) ) {
	$conditions = array_merge($tarifa['conditions'], $conditions);
} else {
	$conditions = array_merge($conditions);
}

if ( isset($tarifa['wp_conditions']) ) {
	$conditions = array_merge($conditions, $wp_conditions);
}

$includes = isset($tarifa['includes']) ?
						array_merge($tarifa['includes'], $includes) :
						$includes;

$does_not_include = isset($tarifa['does_not_include']) ?
						array_merge($tarifa['does_not_include'], $does_not_include) :
						$does_not_include;

$item = $tarifa;
?>
<article class="tarifa-individual">
	<h1><?php echo $item['name']; ?></h1>
	<p class="lead">
		<?php echo $item['description']; ?>
	</p>
	<p><?php echo $item['body']; ?></p>
	
	<h2>Condicions generals</h2>
	<ul>
		<?php foreach($conditions as $condition): ?>
		<li><?php echo $condition; ?></li>
		<?php endforeach; ?>
	</ul>

	<h3>Inclou</h3>
	<ul>
	<?php foreach($includes as $include): ?>
		<li><?php echo $include; ?></li>
	<?php endforeach; ?>
	</ul>

	<h3>No inclou</h3>
	<ul>
	<?php foreach($does_not_include as $not_included): ?>
		<li><?php echo $not_included; ?></li>
	<?php endforeach; ?>
	</ul>

	<footer>
		<?php echo $this->Html->link('« Torna a les Tarifes', $this->request->referer()); ?>
	</footer>
</article>