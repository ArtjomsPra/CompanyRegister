<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

$regcode = intval(readline("Please enter a regcode for the company you are looking for: "));

$apiClient = new App\ApiClient();
$companyInfo = $apiClient->getInfo($regcode);

echo "________________________" . PHP_EOL;
echo "The name of the company is ". $companyInfo->getName() . PHP_EOL;
echo "The legal type of the company is " . $companyInfo->getType() . PHP_EOL;
echo "The full name of legal type is " . $companyInfo->getTypeText() . PHP_EOL;
echo "The address of the company is " . $companyInfo->getAddress() . PHP_EOL;
echo "The entered regcode of the company is " . $companyInfo->getRegcode() . PHP_EOL;