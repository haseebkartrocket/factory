<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ParserFatory\Parser;


/**
 * Class PrefetchController
 *
 * @package App\Http\Controllers
 */
class PrefetchController extends Controller
{
    /**
     * @param  Request  $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function getPrefetchAwb(Request $request)
    {

        $courier_class = Parser::getCourierClass($request->courier_id);

        $parser   = new Parser($courier_class);

        $data     = [
            "awb"    => [],
            "is_cod" => 0
        ];
        $response = $parser->doParsing($data);

        return response(["data" => $response]);
    }
}
