<?php declare(strict_types=1);

namespace Test\Behavior\Context\Frontend;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
use Faker\Factory;

class CreateChirpContext extends MinkContext
{

    /** @var \Faker\Generator */
    private $faker;

    /** @var string */
    private $chirpText;

    /** @var string */
    private $id;

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
        $this->fillField('chirp', $this->chirpText);
        $this->fillField('author', 'me');
        $this->pressButton('CHIRP!');
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
