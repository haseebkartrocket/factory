<?php


namespace App\ParserFatory;


/**
 * Class CourierB
 *
 * @package App\ParserFatory
 */
class CourierB implements Courier
{
    public function parsingAlgorithm(array $data): array
    {
        //Suppose to response received from api
        $response = [
            "awb_code" => ["1001", "1002", '1003'],
            "cod"      => true
        ];

       //parsing response in the format
        return [
            "awb"    => $response['awb_code'],
            "is_cod" => !empty($response['cod']) ? 1 : 0
        ];
    }
}
