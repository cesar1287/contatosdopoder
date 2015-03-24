<?php 

//o arquivo que possui os caminhos...
include_once 'model/urls.php';

//arquivo de validação
include_once 'controller/validate.php';

### testar se existe usuario logado...
//startar a sessao
session_start();

//se existir ele redireciona pra pagina "user.php"
if(isset($_SESSION['user_on'])){
	header("location: user.php");
}


//titulo da pagina...
$page_title = "Página Inicial";

//conteudo da pagina...
function page_content(){
	//chamando funções de validação...
	validate_error();
	validate_success();
	
	
	### incluir o modal de cadastro/login...
	$modal_id = "login_add_user";
	$modal_title = "Login / Cadastro";
	$modal_text = "";
	$modal_file = $GLOBALS['project_path']."/view/tabs.html";
	
	include_once 'view/modal.html';
	#########################################
	
	
	echo 'A Comunidade PHP com Rapadura tem o prazer de oferecer esta plataforma arretadamente desenvolvida que lhe ajudará a manter seus contatos organizados e de fácil acesso!<br>
			<br>
			<b>Utilize nosso serviço,<br> É gratuito.<br> É livre<br> É do poder<br> E o mais importante é a base de Rapadura!</b>
			<br>';
}

include_once 'view/template.html';

?>