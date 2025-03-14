<?php

namespace App\Exceptions;

use Exception;

class customException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'message' => $this->getMessage(),
            'errors' => class_basename($this),
            'status' => $this->getCode() ?: 400
        ], $this->getCode() ?: 400);
    }
}
