<?php 

namespace Search;

use AcceptanceTester;
use Page\Acceptance\Page;

class SearchCest
{
    public function _before(AcceptanceTester $I, Page $page)
    {
        $I->amOnPage($page::$startPagePath);
        $I->waitForElement($page::$searchInput, 2);
        $I->scrollTo($page::$searchInput);
        $I->fillField($page::$searchInput, $page::$searchParam);
        $I->click($page::$searchSubmit);
        $I->waitForElement($page::$searchInput);
    }

    public function searchStringIsOnDetailUrl(AcceptanceTester $I, Page $page)  
    {
        $I->canSeeInCurrentUrl('searchparam=' . $page::$searchParam);
    }

    public function findsAtLeastOneProduct(AcceptanceTester $I, Page $page)
    {
        $I->seeNumberOfElements($page::$searchResultItem, [1,10]);
    }

    public function titlesContainsSearchWord(AcceptanceTester $I, Page $page)
    {
        $headlines = $I->grabMultiple($page::$searchResultItemHeadline);

        $I->assertNotEmpty($headlines);

        foreach ($headlines as $headline) {
            $I->assertStringContainsStringIgnoringCase($page::$searchParam, $headline);
        }
    }

    public function headlineContainsSearchWord(AcceptanceTester $I, Page $page)
    {
        $I->see($page::$searchParam, $page::$pageHeader);
    }
}
