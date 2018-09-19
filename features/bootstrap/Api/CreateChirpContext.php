<?php declare(strict_types=1);

namespace Test\Behavior\Context\Api;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Faker\Factory;
use GuzzleHttp\Client;
use Ramsey\Uuid\Uuid;

class CreateChirpContext implements Context
{

    /** @var \Faker\Generator */
    private $faker;

    /** @var string */
    private $chirpText;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * @Given I write a Chirp with :arg1 or less characters
     */
    public function iWriteAChirpWithOrLessCharacters($arg1)
    {
        $this->chirpText = $this->faker->text($arg1);
    }

    /**
     * @When I submit the Chirp
     */
    public function iSubmitTheChirp()
    {
        $uuid    = Uuid::uuid4();
        $baseUrl = "http://api.chirper.com:3001";
        $client  = new Client(['base_uri' => $baseUrl]);
        $json    = (object)[
            'data' => (object)[
                'type'       => 'chirp',
                'id'         => $uuid,
                'attributes' => (object)[
                    'text' => $this->chirpText
                ]
            ]
        ];

        $client->post('chirp', ['json' => $json]);
    }

    /**
     * @Then I should see it in my timeline
     */
    public function iShouldSeeItInMyTimeline()
    {
        throw new PendingException();
    }

    /**
     * @Given I write a Chirp with more than :arg1 characters
     */
    public function iWriteAChirpWithMoreThanCharacters($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should not see it in my timeline
     */
    public function iShouldNotSeeItInMyTimeline()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see an error message
     */
    public function iShouldSeeAnErrorMessage()
    {
        throw new PendingException();
    }
}
