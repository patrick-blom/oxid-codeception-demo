<?php

namespace StartPage;


use AcceptanceTester;
use Page\Acceptance\StartPage;

class TopsellerCest
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
    public function topSellerWillBeShown(AcceptanceTester $I, StartPage $page)
    {
        $I->see('Topseller');
        $I->seeElement($page::$topSellerElement);
        $elements = $I->grabMultiple($page::$topSellerElements);
        $I->assertCount(2, $elements);
    }
}
