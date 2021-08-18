<?php


namespace App\ParserFatory;


/**
 * Class CourierA
 *
 * @package App\ParserFatory
 */
class CourierA implements Courier
{

    public function parsingAlgorithm(array $data): array
    {
        //Suppose to response received from api
        $response = [
            "awb"          => ["awb001", "awb002", 'awb003'],
            "payment_type" => "cod"
        ];

       //Parsing response in the format
        return [
            "awb"    => $response['awb'],
            "is_cod" => ($response['payment_type'] == 'cod') ? 1 : 0
        ];
    }
}
