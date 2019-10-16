<?php
//Requerindo o Xtemplate e a Conexão com o Banco de Dados
require_once __DIR__ . '/__lib/template_loader.php';

Class Index{
    //Instânciando a class do Xtemplate
    private $templateLoader;
    public function __construct() {	
        //Abrindo a conexão com o Banco de Dados
       	/*if (!Database::conect()) {
            echo "ERRO!";
        }*/

        //Iniciando sessão
        session_start();

        //Buscar o arquivo que será carregado pelo Xtemplate
        $this->templateLoader = new TemplateLoader ( __DIR__ . "/__html/index.html" );

        //Fechando conexão com o Banco de Dados
        /*Database::close();*/

        //Enviando o HTML do arquivo para o navegador
		$this->templateLoader->parse ( "index" );
		
		$this->templateLoader->out ( "index" );
    }
} 
//Instância a classe Index
new Index ();