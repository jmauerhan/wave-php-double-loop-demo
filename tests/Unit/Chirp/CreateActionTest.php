<?php declare(strict_types=1);

namespace Test\Unit\Chirp;

use Chirper\Chirp\CreateAction;
use Test\TestCase;

class CreateActionTest extends TestCase
{

    private $persistenceDriver;
    private $chirpTransformer;

    public function setUp()
    {

        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testCreateSendsRequestToTransformer()
    {
    }

    public function testCreateReturnsInvalidChirpResponseOnTransformerException()
    {
    }

    public function testCreateSendsChirpToPersistence()
    {
    }

    public function testCreateReturnsInternalServerErrorResponseOnPeristenceException()
    {
    }

    public function testCreateSendsSavedChirpToTransformer()
    {
    }

    public function testCreateReturnsInternalServerErrorResponseOnTransformerException()
    {
    }

    public function testCreateReturnChirpCreateResponseOnSuccess()
    {
    }
}
