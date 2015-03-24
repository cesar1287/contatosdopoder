<?php

	// Incluindo o arquivo que possui os caminhos
	include_once 'model/urls.php';
	
	// Título da página
	$page_title = "Página Teste";
	
	// Conteúdo da página	
	function page_content(){
		echo "Conteúdo da página teste";
	}
	
	// Incluindo arquivo de template das telas
	include_once 'view/template.html';

?>