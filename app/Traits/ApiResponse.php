<?php

namespace App\Traits;

Trait ApiResponse {

protected function success (string $message = null, int $code = 200) {
    return response()->json([
        'status' => 'Success',
        'message' => $message,
    ], $code);
}

public function returnData($key, $value, $msg = "")
{
    return response()->json([
        'status' => true,
        'msg' => $msg,
        $key => $value
    ]);
}

public function returnError($errNum, $msg)
    {
        return response()->json([
            'status' => false,
            'errNum' => $errNum,
            'msg' => $msg
        ]);
    }


} // end success




?>