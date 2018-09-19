<?php declare(strict_types=1);

namespace Test\Behavior\Context\Frontend;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
use Faker\Factory;
use PHPUnit\Framework\Assert;

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
        $this->getSession()->start();
        $this->getSession()->visit('http://local.chirper.com:8080');
        $page = $this->getSession()->getPage();

        $page->fillField('chirp', $this->chirpText);
        $page->fillField('author', 'me');
    }

    /**
     * @When I submit the Chirp
     */
    public function iSubmitTheChirp()
    {
        $page = $this->getSession()->getPage();
        $page->find('xpath', '//button')->click();
        $this->getSession()->wait(1500);
    }

    /**
     * @Then I should see it in my timeline
     */
    public function iShouldSeeItInMyTimeline()
    {
        $firstTimelineItem =
            $this->getSession()
                 ->getPage()
                 ->find('xpath', "//div[@class='v-list__tile__content']//div");
        Assert::assertEquals($this->chirpText, $firstTimelineItem->getText());
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
