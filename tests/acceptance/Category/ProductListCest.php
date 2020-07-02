<?php

namespace Category;


use AcceptanceTester;
use Page\Acceptance\Category;

class ProductListCest
{
    /**
     * @param AcceptanceTester $I
     * @param Category $page
     *
     * @throws \Exception
     */
    public function _before(AcceptanceTester $I, Category $page)
    {
        $I->amOnPage($page::$URL);
        $I->waitForElement($page::$paginationElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param Category $page
     */
    public function PaginationWillBeShown(AcceptanceTester $I, Category $page)
    {
        $I->see('Kites');
        $I->seeElement($page::$paginationElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param Category $page
     */
    public function FilterOptionsWillBeShown(AcceptanceTester $I, Category $page)
    {
        $I->seeElement($page::$filterElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param Category $page
     */
    public function ProductListContainsAllElements(AcceptanceTester $I, Category $page)
    {
        $elements = $I->grabMultiple($page::$productListBoxes);
        $I->assertCount(10, $elements);

    }
}
