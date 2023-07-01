<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'APIKEY-HERE');



$apiInstance = new Swagger\Client\Api\GenerateBarcodeApi(
    
    
    new GuzzleHttp\Client(array('verify'          => false)),
    $config
);
$value = "value_example"; // string | QR code text to convert into the QR code barcode

try {
    $result = $apiInstance->generateBarcodeQRCode($value);
    print_r(base64_encode($result));
} catch (Exception $e) {
    echo 'Exception when calling GenerateBarcodeApi->generateBarcodeQRCode: ', $e->getMessage(), PHP_EOL;
}
?>