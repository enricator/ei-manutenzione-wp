<?php
/**
 * Template per la pagina di Manutenzione che viene mostrata a utenti non autenticati.
 *
 * @package ei-manutenzione-wp
 * @copyright Copyright (c) 2016, Enrico Imbalzano
 * @license GPL2+
 */
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sito in manutenzione">
		<meta name="author" content="Enrico Imbalzano - www.enricator.it">
		<meta name="keywords" itemprop="keywords" content="manutenzione, wordpress, plugin, enricator">
        <title>
            Sito in manutenzione
        </title>
		<link rel="stylesheet" href="<?php echo plugins_url( 'views/bootstrap.min.css', dirname( __FILE__ ) ); ?>">
		<link rel="icon" href="<?php echo plugins_url( 'views/icon-32x32.png', dirname( __FILE__ ) ); ?>" sizes="32x32">
		<link rel="icon" href="<?php echo plugins_url( 'views/icon-192x192.png', dirname( __FILE__ ) ); ?>" sizes="192x192">
		<link rel="apple-touch-icon-precomposed" href="<?php echo plugins_url( 'views/icon-180x180.png', dirname( __FILE__ ) ); ?>">
		<meta name="msapplication-TileImage" content="<?php echo plugins_url( 'views/icon-270x270.png', dirname( __FILE__ ) ); ?>">
    </head>
    <body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 text-center">
				<a href="<?php echo home_url( '/' ); ?>">
					<img class="img-responsive center-block" alt="Sito in manutenzione" src="<?php echo plugins_url( 'views/manutenzione.jpg', dirname( __FILE__ ) ); ?>">
				</a><br>
				<h4>Ci scusiamo per l'inconveniente ma in questo momento stiamo effettuando delle necessarie manutenzioni al nostro sito.<br>
				A breve i contenuti torneranno online.</h4>
			</div>
		</div>
	</div>
    </body>
</html>
