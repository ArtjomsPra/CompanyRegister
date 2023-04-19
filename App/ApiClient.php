<?php declare(strict_types=1);

namespace App;
use GuzzleHttp\Client;

class ApiClient {

private $client;

public function __construct () {
$this->client =new Client();
}

public function getInfo (int $regcode) {
    $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?q=" . $regcode . "&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9";
    $response = $this->client->request('GET', $url, ['verify' => false]);
    $companyInfo =json_decode($response->getBody()->getContents());
    return new CompanyInfo(
        $companyInfo->result->records[0]->name,
        $companyInfo->result->records[0]->type,
        $companyInfo->result->records[0]->type_text,
        $companyInfo->result->records[0]->address,
        $companyInfo->result->records[0]->regcode
    );

}

}
