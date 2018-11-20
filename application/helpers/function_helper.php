<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('convertDay')){
	function convertDay($number){

		$hari = array(
			1 => 'Senin',
			2 => 'Selasa',
			3 => 'Rabu',
			4 => 'Kamis' ,
			5 => 'Jummat',
			6 => 'Sabtu' ,
			7 => 'Minggu'
		);


		return $hari[$number];
	}
}
?>