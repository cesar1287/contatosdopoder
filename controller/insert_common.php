<?php

	//incluindo o arquivo com as variaveis de caminho
	include_once dirname(__DIR__).'/model/urls.php';
	
	//arquivo com os dados do banco de dados
	include_once ($GLOBALS['project_path'].'/model/db_data.php');
	
	//classe que gerencia o banco...
	include_once ($GLOBALS['project_path'].'/model/class/Manager.class.php');
	
	//criar o objeto do tipo Gerenciador
	$manager = new Manager($GLOBALS['db_host'], $GLOBALS['db_user'], $GLOBALS['db_password'], $GLOBALS['db_name']);
	
	// Recebendo dados do form
	$data = $_POST;
	
	// Pegando o nome da tabela
	$table = $GLOBALS['db_tables'][$data['table']];
	
	// Remover a tabela do array $data
	array_pop($data);
	
	// Testando se é pra contato
	if($table == "tb_contact"){
		// Dados da nova pessoa
		$person['person_name'] = $data['person_name'];
		$person['person_email'] = $data['person_email'];
		
		// Inserindo pessoa
		$person_id = $manager->insert_common("tb_person", $person);
		
		// Dados do contato
		$contact['id_contact'] = $person_id;
		$contact['contact_facebook'] = $data['contact_facebook'];
		$contact['contact_twitter'] = $data['contact_twitter'];
		$contact['contact_address'] = $data['contact_address'];
		$contact['user_id'] = $data['user_id'];
		
		// Inserindo o contato
		$contact_id = $manager->insert_common("tb_contact", $contact);
		
		// Dados do telefone do contato
		$phone['contact_id'] = $contact_id;
		$phone['phone_number'] = $data['phone_number'];
		$phone['phone_operator'] = $data['phone_operator'];
		$phone['phone_type'] = $data['phone_type'];

		// Inserindo o telefone
		$manager->insert_common("tb_phone", $phone);
		
	}else{
		$manager->insert_common($table, $data);
	}
	
	// Redireciona informando que deu certo
	header("location: ".$GLOBALS['project_index']."/user.php?sucess=insert_ok");
	
?>