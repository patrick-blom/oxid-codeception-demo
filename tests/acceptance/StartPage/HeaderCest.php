<?php

namespace StartPage;


use AcceptanceTester;
use Page\Acceptance\StartPage;

class HeaderCest
{
    public function _before(AcceptanceTester $I, StartPage $page)
    {
        $I->amOnPage($page::$URL);
        $I->waitForElement($page::$footerElement);
    }

    // tests
    public function testHeaderWillBeDisplayed(AcceptanceTester $I, StartPage $page)
    {
        $I->seeElement($page::$headerElement);
    }
}
