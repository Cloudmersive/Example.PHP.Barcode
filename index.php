<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');



$apiInstance = new Swagger\Client\Api\GenerateBarcodeApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
$value = "value_example"; // string | QR code text to convert into the QR code barcode

try {
    $result = $apiInstance->generateBarcodeQRCode($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateBarcodeApi->generateBarcodeQRCode: ', $e->getMessage(), PHP_EOL;
}
?>