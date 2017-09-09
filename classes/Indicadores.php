<?
/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Criação: 28/01/2015
*
*  Versao: 1.0
*
*  É proibido sob pena de Lei a utilização ou reprodução de parte ou de todo conteudo desse codigo sem a previa autorização da Intelligy Networks
*  Esse Site é concedido com licença de uso autorizada somente durante o periodo em que o cliente estiver com um contrato de hospedagem vigente
*  com a Intelligy Networks, Não podendo ser replicado, copiado, emprestado ou concedido. 
*/	

class Indicadores {


	public static function getCurrencyConversion($currency = 'USD'){

		$content = file_get_contents("http://br.financas.yahoo.com/q?s={$currency}BRL=X");
		preg_match('/<span id=\"yfs_p20_'. strtolower($currency) .'brl=x\">(.*)<\/span>/', $content, $matches, PREG_OFFSET_CAPTURE);
		preg_match('/<span id=\"yfs_b00_'. strtolower($currency) .'brl=x\">(.*)<\/span>/', $content, $matches2, PREG_OFFSET_CAPTURE);
		preg_match('/<span id=\"yfs_a00_'. strtolower($currency) .'brl=x\">(.*)<\/span>/', $content, $matches3, PREG_OFFSET_CAPTURE);
		$variation = substr($matches[0][0], 29, 29);
		$buyPrice = substr($matches2[0][0], 28, 9);
		$sellPrice = substr($matches3[0][0], 28, 9);
		$currencyVariation = preg_replace('/\)/', '', $variation);


		echo <<<CURRENCY
		<td><strong>{$currency}</strong></td>
		<td>$buyPrice</td>
		<td>$sellPrice</td>
		<td class="green"><strong>$currencyVariation</strong></td>
CURRENCY;

	}


}



?>