<?php	

namespace App;
use SoapClient;
use SoapHeader;

use Illuminate\Support\Facades\Cache;
/**
 * Clase Pse pago electronicos
 */
class Pse 
{
	
	public function getBankList()
	{	
		$seed=date('c');
		$auth=array(
			'login'=>$this->login,
			'tranKey'=>sha1($this->seed.$this->tranKey),
			'seed'=>$this->seed
		);
		$bancos=[];
		if (Cache::has('bankList')) {
		   $bancos=Cache::get('bankList');
		}else{
			$soap = new SoapClient($this->wsdl);
        	$data = $soap->getBankList(['auth'=>$auth]);
			Cache::put('bankList',$data->getBankListResult->item, 1200);
			$bancos=Cache::get('bankList');
		} 			
        return $bancos;
	}

	public function createTransaction($request,$persona)
	{
		$seed=date('c');
		$auth=array(
			'login'=>$this->login,
			'tranKey'=>sha1($this->seed.$this->tranKey),
			'seed'=>$this->seed
		);
		$peticion=array(
			'bankCode'=>$request->bankCode,
			'bankInterface'=>$request->bankInterface,
			'reference'=>$request->reference,
			'language'=>'ES',
			'currency'=>'COP',
			'description'=>$request->description,
			'totalAmount'=>$request->totalAmount,
			'taxAmount'=>'0',
			'devolutionBase'=>'0',
			'payer'=>$persona,
			'ipAddress'=>$request->ip(),
			'userAgent'=>$request->userAgent(),
			'returnURL'=>'http://localhost:8000/pago/respuesta/'.$request->reference
		);
		$soap = new SoapClient($this->wsdl);
        $data = $soap->createTransaction(['auth'=>$auth,'transaction'=>$peticion]);
        return $data->createTransactionResult;
	}

	public function getTransactionInformation($transactionID)
	{
		$seed=date('c');
		$auth=array(
			'login'=>$this->login,
			'tranKey'=>sha1($this->seed.$this->tranKey),
			'seed'=>$this->seed
		);
		$soap = new SoapClient($this->wsdl);
        $data = $soap->getTransactionInformation(['auth'=>$auth,'transactionID'=>$transactionID]);
        return $data;
	}

	public $login='6dd490faf9cb87a9862245da41170ff2';
	public $tranKey='024h1IlD';
	public $wsdl='https://test.placetopay.com/soap/pse/?wsdl';
	public $endpoint='https://test.placetopay.com/soap/pse/';
	public $seed="";
	public $person=array(
		'document'=>'143427524',
        'documentType'=>'PPN',
        'firstName'=>'Carlos',
        'lastName'=>'Torres',
        'emailAddress'=>'catg.23@hotmail.com',
        'phone'=>'',
        'id'=>'1'
	); 
}

?>