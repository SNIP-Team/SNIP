<?php
/**
 * Raum Klasse
 *
 * Diese Klasse modelliert einen Raum in SNIP,
 * welche mehrere Nodes/Knotenpunkte enthaelt.
 *
 * @author Paspartout
 * @copyright Copyright 2011, SNIP-Team
 * @package RenderSys
 */
 
class Raum {
	
	// Fuegt eine Node zum Raum hinzu
	public function insert_node($node) {
		array_push($this -> nodes,$node);
	}
	
	// Attribute aus ER-Modell
	public $ID;
	public $Nummer;
	public $Kennzeichnung;
	public $Betreuer;
	
	// Dieses Array enthaelt alle Nodes eines Raumes
	private $nodes = array();

}

?>