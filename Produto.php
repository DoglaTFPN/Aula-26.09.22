<?php 
Class Produto
{

	private $DesPro;
	private $QtdeProduto;
	private $ValProduto;

	function __construct($DesPro,$QtdeProduto,$ValProduto)
	{
		$this->DesPro = $DesPro;
		$this->QtdeProduto = $QtdeProduto;
		$this->ValProduto = $ValProduto;
	}   

	function getDesPro()
		{
			return $this->DesPro;
		}
	function setDesPro($DescP)
		{
			$this->DesPro = $DescP;
		}
	function getQtdeProduto()
		{
			return $this->QtdeProduto;
		}
	function setQtdeProduto($QtdeP)
		{
			$this->QtdeProduto = $QtdeP;
		}
	function getValProduto()
		{
			return $this->ValProduto;
		}
	function setValProduto($ValP)
		{
			$this->ValProduto = $ValP;
		}

}
 ?>