<?php
namespace Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\RawMinkContext;
use Page\Homepage;

class HealthCheckContext extends RawMinkContext implements SnippetAcceptingContext
{
    /**
     * @var Homepage
     */
    private $_homepage;

    public function __construct(Homepage $homepage)
    {
        $this->_homepage = $homepage;
    }
    /**
     * @Given I have loaded the homepage
     */
    public function iHaveLoadedTheHomepage()
    {
        $this->_homepage->open();
    }

    /**
     * @When It is loaded
     */
    public function itIsLoaded()
    {
        $this->_homepage->waitForHomePageLoad();
    }

    /**
     * @Then I should see site logo
     */
    public function iShouldSeeSiteLogo()
    {
        $this->_homepage->logoExists();
    }

}