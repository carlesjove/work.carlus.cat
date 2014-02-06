<?php 
/**
 * Clients array
 */
$clients = array(
	array(
		'title' => 'linealstudio',
		'link'	=> 'http://linealstudio.com/',
	),
	array(
		'title' => 'Víctor Dols',
		'link'	=> 'http://victordols.com/',
	),
	array(
		'title' => 'Vellut',
		'link'	=> 'http://vellut.cat/',
	),
	array(
		'title' => 'Guadalupe Iserte',
		'link'	=> 'http://guadalupeiserte.com/',
	),
	array(
		'title' => 'La Fonda Gràfica',
		'link'	=> 'http://www.lafondagrafica.com/',
	),
	array(
		'title' => 'Ginjaume',
		'link'	=> 'http://ginjaume.com/',
	),
	array(
		'title' => 'Recupera la memòria digital',
		'link'	=> 'http://recuperalamemoriadigital.com/',
	),
	array(
		'title' => 'SecondNews',
		'link'	=> 'http://www.secondnews.org/',
	),
	array(
		'title' => 'Ruscínia',
		'link'	=> 'http://ruscinia.cat/',
	),
); 


	foreach( $clients as $client ) {
		$clients_links[] = '<a href="' . $client['link'] . '">' . $client['title']. '</a>';
	}
	$clients_links = implode(', ', $clients_links);
	$clients = $clients_links;

?>