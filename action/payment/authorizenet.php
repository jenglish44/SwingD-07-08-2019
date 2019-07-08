<?php
/*require 'authorizenet/autoload.php';
	use net\authorize\api\contract\v1 as AnetAPI;
 	use net\authorize\api\controller as AnetController;
define("AUTHORIZENET_API_LOGIN_ID", "9QCc3tY7T");
define("AUTHORIZENET_TRANSACTION_KEY", "98KsXu2R663Bjm6t");
define("AUTHORIZENET_SANDBOX", true);
$sale           = new AuthorizeNetAIM;
$sale->amount   = "5.99";
$sale->card_num = '4111111111111111';
$sale->exp_date = '2038-12';
$response = $sale->authorizeAndCapture();
if ($response->approved) {
    $transaction_id = $response->transaction_id;
	print '<pre>';
	print_r(get_object_vars($response));
	print '</pre>';
}
else
{
	echo 'not approved';
	print '<pre>';
	print_r(get_object_vars($response));
	print '</pre>';
}*/

require 'authorizenet/autoload.php';
	use net\authorize\api\contract\v1 as AnetAPI;
 	use net\authorize\api\controller as AnetController;
//define("AUTHORIZENET_API_LOGIN_ID", "9QCc3tY7T");
//define("AUTHORIZENET_TRANSACTION_KEY", "98KsXu2R663Bjm6t");
define("AUTHORIZENET_API_LOGIN_ID", "972BebDM");
define("AUTHORIZENET_TRANSACTION_KEY", "9zZBMf328qVs26Mn");
define("AUTHORIZENET_SANDBOX", false);
$sale           = new AuthorizeNetAIM;
$sale->amount   = $amount;
$sale->card_num = $_REQUEST['c'];
$sale->exp_date = $_REQUEST['e'];
$response = $sale->authorizeAndCapture();
	//print '<pre>';
	//print_r(get_object_vars($response));
	//print '</pre>';
if ($response->approved) {
    $transaction_id = $response->transaction_id;
	$arr['success']=1;
	$arr['transaction_id']=$response->transaction_id;
}
else
{
	$arr['error']=1;
	$arr['msg']=$response->response_reason_text;
}




/* require 'authorizenet/autoload.php';
 require 'authorizenet/classmap.php';
  	use net\authorize\api\contract\v1 as AnetAPI;
 	use net\authorize\api\controller as AnetController;
  define("AUTHORIZENET_LOG_FILE", "phplog");

  // Common setup for API credentials
  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
  $merchantAuthentication->setName("9QCc3tY7T");
  $merchantAuthentication->setTransactionKey("98KsXu2R663Bjm6t");
  $refId = 'ref' . time();

  // Create the payment data for a credit card
  $creditCard = new AnetAPI\CreditCardType();
  $creditCard->setCardNumber( "4111111111111111" );
  $creditCard->setExpirationDate( "2038-12");
  $paymentOne = new AnetAPI\PaymentType();
  $paymentOne->setCreditCard($creditCard);

  // Order info
  $order = new AnetAPI\OrderType();
  $order->setInvoiceNumber("101");
  $order->setDescription("professional membership");

  // Line Item Info
  $lineitem = new AnetAPI\LineItemType();
  $lineitem->setItemId("Membership");
  $lineitem->setName("Professional");
  $lineitem->setDescription("membership");
  $lineitem->setQuantity("1");
  $lineitem->setUnitPrice(20.95);
  $lineitem->setTaxable("N");

  // Tax info 
  $tax =  new AnetAPI\ExtendedAmountType();
  $tax->setName("level 2 tax name");
  $tax->setAmount(4.50);
  $tax->setDescription("level 2 tax");

  // Customer info 
  $customer = new AnetAPI\CustomerDataType();
  $customer->setId("15");
  $customer->setEmail("drjohnenglish@gmail.com");

  // PO Number
  $ponumber = "15";
  //Ship To Info
 $shipto = new AnetAPI\NameAndAddressType();
  $shipto->setFirstName("Bayles");
  $shipto->setLastName("China");
  $shipto->setCompany("Thyme for Tea");
  $shipto->setAddress("12 Main Street");
  $shipto->setCity("Pecan Springs");
  $shipto->setState("TX");
  $shipto->setZip("44628");
  $shipto->setCountry("USA");

 // Bill To
  $billto = new AnetAPI\CustomerAddressType();
  $billto->setFirstName("John");
  $billto->setLastName("English");
  //$billto->setCompany("Souveniropolis");
  //$billto->setAddress("14 Main Street");
  //$billto->setCity("Pecan Springs");
  //$billto->setState("TX");
 // $billto->setZip("44628");
  //$billto->setCountry("USA");
  
  //create a transaction
  $transactionRequestType = new AnetAPI\TransactionRequestType();
  $transactionRequestType->setTransactionType( "authCaptureTransaction"); 
  $transactionRequestType->setAmount(151.51);
  $transactionRequestType->setPayment($paymentOne);
  $transactionRequestType->setOrder($order);
  //$transactionRequestType->addToLineItems($lineitem);
 // $transactionRequestType->setTax($tax);
  $transactionRequestType->setPoNumber($ponumber);
  $transactionRequestType->setCustomer($customer);
  $transactionRequestType->setBillTo($billto);
 // $transactionRequestType->setShipTo($shipto);

  $request = new AnetAPI\CreateTransactionRequest();
  $request->setMerchantAuthentication($merchantAuthentication);
  $request->setRefId($refId);
  $request->setTransactionRequest( $transactionRequestType);
  $controller = new AnetController\CreateTransactionController($request);
   //	echo 'hello';
	//exit();
  $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);

  if ($response != null)
  {
    $tresponse = $response->getTransactionResponse();

    if (($tresponse != null) && ($tresponse->getResponseCode()=="1") )   
    {
      echo "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
      echo "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
    }
    else
    {
        echo  "Charge Credit Card ERROR :  Invalid response\n";
    }
    
  }
  else
  {
    echo  "Charge Credit card Null response returned";
  }*/
  
  
  
  
  
  /*require 'authorizenet/autoload.php'; 

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE","phplog");

// Common setup for API credentials  
  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();   

  
  $merchantAuthentication->setName("343453434534");   
  $merchantAuthentication->setTransactionKey("345345345345345");   
  $refId = 'ref' . time();

// Create the payment data for a credit card
  $creditCard = new AnetAPI\CreditCardType();
  $creditCard->setCardNumber("4111111111111111" );  
  $creditCard->setExpirationDate( "2038-12");
  $paymentOne = new AnetAPI\PaymentType();
  $paymentOne->setCreditCard($creditCard);

// Create a transaction
  $transactionRequestType = new AnetAPI\TransactionRequestType();
  $transactionRequestType->setTransactionType("authCaptureTransaction");   
  $transactionRequestType->setAmount(72.54);
  $transactionRequestType->setPayment($paymentOne);
  $request = new AnetAPI\CreateTransactionRequest();
  $request->setMerchantAuthentication($merchantAuthentication);
  $request->setRefId( $refId);
  $request->setTransactionRequest($transactionRequestType);
  $controller = new AnetController\CreateTransactionController($request);
 // $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);   
 $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);   
if ($response != null) 
{
  $tresponse = $response->getTransactionResponse();
  
  //print_r($tresponse);
  if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
  {
    echo "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
    echo "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
  }
  else
  {
	
    echo "     >>>>>>>> Charge Credit Card ERROR :  Invalid response\n"; 
  print_r($tresponse);
  }
}  
else
{
  echo  "Charge Credit Card Null response returned";
}*/

?>
