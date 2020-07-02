<?php

namespace StartPage;


use AcceptanceTester;
use Page\Acceptance\StartPage;

class ActionsCest
{
    /**
     * @param AcceptanceTester $I
     * @param StartPage $page
     *
     * @throws \Exception
     */
    public function _before(AcceptanceTester $I, StartPage $page)
    {
        $I->amOnPage($page::$URL);
        $I->waitForElement($page::$footerElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param StartPage $page
     */
    public function SpecialProductWillBeShown(AcceptanceTester $I, StartPage $page)
    {
        $I->see('Angebote der Woche');
        $I->seeElement($page::$addsOfTheWeekElement);
        $elements = $I->grabMultiple($page::$addsOfTheWeekElements);
        $I->assertCount(4, $elements);

        $I->see('Frisch eingetroffen');
        $I->seeElement($page::$newArrivedElement);
        $elements = $I->grabMultiple($page::$newArrivedElements);
        $I->assertCount(8, $elements);
    }
}
