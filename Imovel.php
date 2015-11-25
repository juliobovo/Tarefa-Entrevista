<?php
class Imovel
{
   private $referencia;
   private $tipo;
   private $dormitorios;
   private $bairro;
   private $cidade;
   private $estado;


    public function __construct($tipo, $dormitorios, $bairro, $cidade, $estado){
    	$this->tipo = $tipo;
    	$this->dormitorios = $dormitorios;
    	$this->bairro = $bairro;
    	$this->cidade = $cidade;
    	$this->estado = $estado;
    }


     function __get($atributo){
           return $this->$atributo;
             }

     function __set($atributo, $valor){
             $this->$atributo = $valor;
             }

	public function cadastrar()
	{
		$SQL = "INSERT INTO imoveis( tipo, dormitorios, bairro, cidade, estado) VALUES ('" . $this->tipo . "', '" . $this->dormitorios . "', '" . $this->bairro . "' ,'" . $this->cidade . "', '" . $this->estado . "')";
		mysql_query($SQL);		
	}
}
?>