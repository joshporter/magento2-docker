<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class Homepage extends Page
{
    protected $path = "/";

    protected $elements = [
        'Logo' => ['css' => '.logo']
    ];

    public function waitForHomePageLoad($maxWait = 120000)
    {
        $this->getDriver()->wait($maxWait, '(document.readyState == "complete") && (typeof window.jQuery == "function")');
    }

    public function logoExists()
    {
        $this->hasElement('Logo');
    }
}