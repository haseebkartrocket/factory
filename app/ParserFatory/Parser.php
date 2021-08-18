<?php


namespace App\ParserFatory;


use Illuminate\Support\Facades\App;

/**
 * Class Parser
 *
 * @package App\ParserFatory
 */
class Parser
{

    const COURIER_CLASS = [
        1 => CourierA::class,
        2 => CourierB::class,
    ];
    /**
     * @var courier
     */
    private $courierType;

    public function __construct(Courier $courierType)
    {
        $this->courierType = $courierType;
    }

    /**
     * @param $id
     *
     * @return mixed
     * @throws \Exception
     */
    public static function getCourierClass($id)
    {

        if (!empty(self::COURIER_CLASS[$id])) {
            return App::make(self::COURIER_CLASS[$id]);
        }
        throw new \Exception("Class Not Found");
    }

    /**
     * For replacing a courierType object at runtime.
     */
    public function setCourierType(Courier $courierType)
    {
        $this->courierType = $courierType;
    }

    public function doParsing(array $data): array
    {
        //  Can change the XML to JSON
        $result = $this->courierType->parsingAlgorithm($data);

        return $result;
    }
}
