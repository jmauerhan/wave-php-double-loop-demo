<?php declare(strict_types=1);

namespace Chirper\Chirp;

use Chirper\Http\Request;
use Chirper\Http\Response;

class CreateAction
{
    /** @var JsonChirpTransformer */
    private $chirpTransformer;

    /** @var ChirpPersistenceDriver */
    private $persistenceDriver;

    public function __construct(JsonChirpTransformer $chirpTransformer, ChirpPersistenceDriver $persistenceDriver)
    {
        $this->chirpTransformer  = $chirpTransformer;
        $this->persistenceDriver = $persistenceDriver;
    }

    public function create(Request $request): Response
    {
        $json = $request->getBody()->getContents();
        $this->chirpTransformer->toChirp($json);
        return new Response();
    }
}