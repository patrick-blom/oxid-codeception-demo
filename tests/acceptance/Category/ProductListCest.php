<?php

namespace Category;


use AcceptanceTester;
use Page\Acceptance\CategoryPage;

class ProductListCest
{
    /**
     * @param AcceptanceTester $I
     * @param Category $page
     *
     * @throws \Exception
     */
    public function _before(AcceptanceTester $I, CategoryPage $page)
    {
        $I->amOnPage($page::$URL);
        $I->waitForElement($page::$paginationElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param Category $page
     */
    public function PaginationWillBeShown(AcceptanceTester $I, CategoryPage $page)
    {
        $I->see('Kites');
        $I->seeElement($page::$paginationElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param Category $page
     */
    public function FilterOptionsWillBeShown(AcceptanceTester $I, CategoryPage $page)
    {
        $I->seeElement($page::$filterElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param Category $page
     */
    public function ProductListContainsAllElements(AcceptanceTester $I, CategoryPage $page)
    {
        $elements = $I->grabMultiple($page::$productListBoxes);
        $I->assertCount(10, $elements);

    }
}
