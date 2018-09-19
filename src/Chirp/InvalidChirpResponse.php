<?php declare(strict_types=1);

namespace Chirper\Chirp;

use Chirper\Http\Response;

class InvalidChirpResponse extends Response
{
    public function __construct(array $errors)
    {
        parent::__construct(Response::CLIENT_CONFLICT);
    }
}