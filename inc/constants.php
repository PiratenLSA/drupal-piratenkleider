<?php
/**
 * Piratenkleider Constants
 *
 **/

/*
 * Auswahlliste fuer Textsymbole fuer den Teaser
 */
$textsymbolliste = array(
  'idee'  => array("0021", "!"),
  'person'  => array("263A", "☺"),
  'herz'  => array("2665", "♥"),
  'email'  => array("2709", "✉"),
  'at'  => array("0040", "@"),
  'check'  => array("2713", "✓"),
  'nocheck'  => array("2717", "✗"),
  'telefon'  => array("2706", "✆"),
  'anker'  => array("2693", "⚓"),
  'skull'  => array("2620", "☠"),
  'female'  => array("2640", "♀"),
  'male'  => array("2642", "♂"),
  'malefemale'  => array("26A5", "⚥"),
  'schreiben'  => array("270D", "✍"),
  'rollstuhl'  => array("267F", "♿"),
  'steuerrad'  => array("2638", "☸"),
  'musiknote'  => array("266B", "♫"),
  'paragraph'  => array("00A7", "§"),
  'play'  => array("25B6", "▶"),
  'save'  => array("2714", "✔"),
  'spark' => array("2737", "✷"),
  'star'  => array("2605", "★"),
  'eins'  => array("2460", "①"),
  'zwei'  => array("2461", "②"),
  'drei'  => array("2462", "③"),
  'euro'  => array("20AC", "€"),
  'dollar'  => array("0024", "$"),
  'copyright'  => array("00A9", "©"),
);

/*
 * Definition welche Konstanten als Optionen im Backend geaendert werden koennen
 */
$textsymbolliste_html = array();

foreach($textsymbolliste as $i => $value) {
  $textsymbolliste_html[$i] = '&#x'.$value[0].';';
}

$textsymbolliste_plain = array();

foreach($textsymbolliste as $i => $value) {
  $textsymbolliste_plain[$i] = $value[1];
}

?>
