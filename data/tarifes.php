<?php
$title_for_layout = 'Tarifes';
$vat_not_included = "Els preus no inclouen IVA (21%)";

/**
 * Tarifes
 */
$list = array(
	'presencia' => array(
		'name'     => 'Presència',
		'subtitle' => 'Estigues a internet',
		'description' => "Per aquelles <b>persones</b> o <b>empreses</b> que requereixen una presència web però no poden destinar-hi gaires recursos.",
		'body' => "Realització d'un web a partir d'una plantilla WordPress existent. La plantilla serà escollida pel client d'entre un llistat de suggerències.
		Et deixaré el web a punt i en marxa en un idioma, amb tot preparat per si necessites incloure altres idiomes en un futur. Podràs gestionar de manera
		senzilla la majoria de continguts i crear-ne de nous. No tindràs un disseny original, però seràs visible a internet amb molt poca inversió.",
		'price'	   => 550,
		'features' => array(
			'Personalització de Tema WordPress <em>existent</em>',
			'Configuració i posada en marxa',
		),
		'link' => 'presencia',
		'full_conditions' => array(
			"Entrega en màxim 4 dies. Dates a convenir client i desenvolupador",
			"El client té dret a la personalització de: tipografia, gamma cromàtica i logo (si s'escau)",
			"Les prestacions finals del web seran, com a màxim, les que estiguin incloses al Tema WordPress escollit pel client",
			"Qualsevol prestació addicional, és a dir, no inclosa al Tema WordPress original serà tarifada a part",
			"Aquest servei es paga per anticipat, i l'import no és reemborsable en cas de cancel·lació",
		),
		'includes' => array(
			"Inclou assessorament i guiatge al client en l'elecció del Tema WordPress",
		),
		'does_not_include' => array(
			'El preu no inclou la compra del Tema WordPress',
			"Entrenament en l'ús del WordPress",
		),
	),
	'personal' => array(
		'name'     => 'Personal',
		'subtitle' => 'Per tu, sí, tu',
		'description' => "Per <b>persones</b> o <b>professionals</b> que volen exposar el seu treball o dir al món tot allò que pensen",
		'body' => "Desenvolupament d'un tema WordPress a mida que cobreixi les teves necessitats específiques. Gràcies a la flexibilitat de WordPress
		pots tenir una gestió de continguts completa i senzilla d'utilitzar que et permeti, alhora, mantenir un ordre lògic. No hauràs d'adaptar-te a una
		plantilla genèrica ni hauràs de fer malabarismes per organitzar els teus continguts. Quasi tots els avantages d'un CMS propi però <i>low-cost</i>.",
		'price'	   => 2750,
		'features' => array(
			'Tema WordPress propi',
			'1 element dinàmic o interactiu',
			'Màxim 4 plantilles de pàgina',
			"<strong>S'adapta a mòbils i tauletes</strong>",
		),
		'link' => 'personal',
		'wp_conditions' => true,
	),
	'marqueting' => array(
		'name'     => 'Màrqueting',
		'subtitle' => 'Promou el que fas',
		'description' => "Per <b>empreses</b> o <b>productes</b> que volen publicitar els seus serveis o productes",
		'body' => "Desenvolupament d'un tema WordPress a mida que cobreixi les teves necessitats específiques. Gràcies a la flexibilitat de WordPress
		pots tenir una gestió de continguts completa i senzilla d'utilitzar que et permeti, alhora, mantenir un ordre lògic. No hauràs d'adaptar-te a una
		plantilla genèrica ni hauràs de fer malabarismes per organitzar els teus continguts. Quasi tots els avantages d'un CMS propi però <i>low-cost</i>.",
		'price'	   => 4500,
		'features' => array(
			'Integració parcial o completa a gestor de continguts <i>opensource</i>',
			'Fins a 5 elements dinàmics o interactius',
			'Màxim 7 plantilles de pàgina',
			"<strong>S'adapta a mòbils i tauletes</strong>",
		),
		'link' => 'marqueting',
		'wp_conditions' => true,
	),
	'empren' => array(
		'name'     => 'Negoci online',
		'subtitle' => 'Emprèn',
		'description' => "Per <b>empreses</b>, <b><i>start-ups</i></b> o <b>productes</b> que necessiten desenvolupament a mida",
		'body' => "",
		'price'	   => 17000,
		'features' => array(
			'Desenvolupament a mida en PHP o Ruby on Rails',
			'Màxima cura i atenció per un bon rendiment',
			"Tot per decidir. <i>Sky's the limit</i>",
			"<strong>S'adapta a mòbils i tauletes</strong>",
		),
		'link' => 'empren'
	),
);

/**
 * Global conditions
 */
$conditions = array(
	"Es maquetarà seguint els estàndards de la comunitat i el principi de «millora progressiva», per tal d’assegurar la màxima compatibilitat. Més info: <a href=\"http://ves.cat/bc1T\">http://ves.cat/bc1T</a>",
	"Es garanteix compatibilitat amb els següents navegadors: IE8+, Safari, Firefox 3.5+, Chrome, Opera. Si el client té interès en assegurar compatibilitat amb navegadors més antics, caldrà incloure-ho pressupost.",
	"La maquetació serà fluïda i adaptativa per tal que el web s’adapti a l’entorn de l’usuari, ja sigui un dispositiu mòbil o de sobretaula.",
	"El plaç d’entrega es pactarà amb el client. Si el disseny pateix modificacions en el transcurs d’aquest termini, la data d’entrega podrà veure’s afectada. Es pactaran les dates concretes amb el client en funció del calendari de les dues parts.",
	"El client es comprometen a complir el calendari pactat. En cas d'incompliment es valoraran les mesures a prendre per tal de poder continuar el projecte, essent necessària una compensació econòmica pels dies perduts. En cas d'incompliment reiterat del calendari, el client pot ser rebutjat sense dret a compensació.",
	"El desenvolupador es compromet a complir el calendari pactat. En cas que no es pugui complir, s'informarà degudament al client is es prendran mesures per tal d'assolir-lo al més aviat possible. Si es creu convenient, es pactaran les compensacions oportunes",
	"El client es compromet a donar accès al servidor contractat (allotjament web) al programador per tal de poder crear les bases de dades i pujar els arxius necessaris. En cas contrari, el plaç d’entrega es pot veure afectat.", 
	"L’acceptació del pressupost implica el pagament del 40% per avançat, a mode de reserva i inici d’activitat. Aquest import no és reembossable. La resta de pagaments es pactaran amb el client en base a dates de calendari, generalment vinculades a revisió o tancament de processos.", 
	"El pressupost final s'establirà en base als requeriments del client. Les dues parts (client i dissenyadors/desenvolupadors) es comprometen a treballar d’acord amb ell. Pot ser ampliat si durant el procès de disseny o desenvolupament el client decideix augmentar els requeriments.", 
);

/**
 * WordPress conditions
 */
$wp_conditions = array(
	"El pressupost és per maquetació web i integració a WordPress del disseny web finalitzat. Si el disseny pateix modificacions a petició del client un cop feta la programació corresponent, caldrà revisar el pressupost.",
);

/**
 *
 */
$includes = array(
	"Entorn de proves accessible via web",
	"Assessorament tècnic tant al dissenyador com al client durant el procès de disseny, si s'escau.",
);

/**
 *
 */
$does_not_include = array(
	'Imatge corporativa',
	'Migració de dades de cap tipus',
	'Redacció ni traducció de continguts',
	"Despeses vinculades a la compra o renovació del domini web (exemple.com) ni de l'allotjament web",
);

foreach ($list as $k => $v) { 
	$list[$k]['path'] = 'tarifes/' . $k;
}

	