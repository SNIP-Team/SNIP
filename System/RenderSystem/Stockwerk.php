<?php
/**
 * Stockwerk Klasse
 *
 * Diese Klasse modelliert ein Stockwerk in SNIP,
 * welches mehrere Raeume enthaelt.
 *
 * @author Paspartout
 * @copyright Copyright 2011, SNIP-Team
 * @package RenderSys
 */
 
class Stockwerk {
	
	// Fuegt eine Node zum Raum hinzu
	public function insert_room($room) {
		array_push($this -> nodes,$node);
	}
	
	// Attribute aus ER-Modell
	public $Nummer;

	// Dieses Array enthaelt alle Nodes eines Raumes
	private $rooms = array();

}

?>