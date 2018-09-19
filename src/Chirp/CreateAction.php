<?php declare(strict_types=1);

namespace Chirper\Chirp;

use Chirper\Http\InternalServerErrorResponse;
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
        try {
            $json  = $request->getBody()->getContents();
            $chirp = $this->chirpTransformer->toChirp($json);
            $this->persistenceDriver->save($chirp);
            $responseJson = $this->chirpTransformer->toJson($chirp);
            return new ChirpCreatedResponse($responseJson);
        } catch (InvalidJsonException $exception) {
            return new InvalidChirpResponse([]);
        } catch (PersistenceDriverException $driverException) {
            return new InternalServerErrorResponse($driverException->getMessage());
        } catch (TransformerException $transformerException) {
            return new InternalServerErrorResponse($transformerException->getMessage());
        }
    }
}