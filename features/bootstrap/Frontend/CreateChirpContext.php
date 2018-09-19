<?php declare(strict_types=1);

namespace Test\Behavior\Context\Frontend;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

class CreateChirpContext extends MinkContext
{

    /**
     * @Given I write a Chirp with :arg1 or less characters
     */
    public function iWriteAChirpWithOrLessCharacters($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I submit the Chirp
     */
    public function iSubmitTheChirp()
    {
        throw new PendingException();
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
