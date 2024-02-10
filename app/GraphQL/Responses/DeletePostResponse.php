<?php declare(strict_types=1);

namespace App\GraphQL\Responses;

class DeletePostResponse
{
    public $success;
    public $message;

    public function __construct($success, $message = null)
    {
        $this->success = $success;
        $this->message = $message;
    }
}
