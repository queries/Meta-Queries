<?php
	function metaqueries() {
		$currentDirectory = array_pop(explode("/", getcwd()));
		print $currentDirectory;
	}
	metaqueries();
?>