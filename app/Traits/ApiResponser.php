<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{
    // build success responser
    // success reponser
    public function successReponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
