<?php

namespace DetailsPage;


use AcceptanceTester;
use Page\Acceptance\DetailsPage;

class ArticleInfoCest
{
    /**
     * @param AcceptanceTester $I
     * @param DetailsPage $page
     */
    public function _before(AcceptanceTester $I, DetailsPage $page)
    {
        $I->amOnPage($page::$URL);
        $I->waitForElement($page::$productHeadlineElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param DetailsPage $page
     */
    public function ArticleInfoWillBeShown(AcceptanceTester $I, DetailsPage $page)
    {
        $I->see('Helm AHM 5000');
        $I->see('Artikelnummer: 1505');
        $I->see('Ein echter Allround-Helm');
    }
}
