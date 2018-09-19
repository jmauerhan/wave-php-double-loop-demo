<?php declare(strict_types=1);

namespace Test\Unit\Chirp;

use Chirper\Chirp\ChirpPersistenceDriver;
use Chirper\Chirp\CreateAction;
use Chirper\Chirp\JsonChirpTransformer;
use Chirper\Http\Request;
use PHPUnit\Framework\MockObject\MockObject;
use Test\TestCase;

class CreateActionTest extends TestCase
{

    private $persistenceDriver;
    /** @var JsonChirpTransformer|MockObject */
    private $chirpTransformer;

    public function setUp()
    {
        $this->chirpTransformer  = $this->createMock(JsonChirpTransformer::class);
        $this->persistenceDriver = $this->createMock(ChirpPersistenceDriver::class);
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testCreateSendsRequestToTransformer()
    {
        $body    = "{}";
        $request = new Request('POST', 'chirp', [], $body);

        $this->chirpTransformer->expects($this->once())
                               ->method('toChirp')
                               ->with($body);

        $action = new CreateAction($this->chirpTransformer, $this->persistenceDriver);
        $action->create($request);
    }

//    public function testCreateReturnsInvalidChirpResponseOnTransformerException()
//    {
//    }
//
//    public function testCreateSendsChirpToPersistence()
//    {
//    }
//
//    public function testCreateReturnsInternalServerErrorResponseOnPeristenceException()
//    {
//    }
//
//    public function testCreateSendsSavedChirpToTransformer()
//    {
//    }
//
//    public function testCreateReturnsInternalServerErrorResponseOnTransformerException()
//    {
//    }
//
//    public function testCreateReturnChirpCreateResponseOnSuccess()
//    {
//    }
}
