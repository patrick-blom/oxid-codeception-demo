<?php

namespace DetailsPage;


use AcceptanceTester;
use Page\Acceptance\DetailsPage;

class BasketActionsCest
{
    /**
     * @param AcceptanceTester $I
     * @param DetailsPage $page
     * @throws \Exception
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
    public function basketButtonWillBeDisplayed(AcceptanceTester $I, DetailsPage $page)
    {
        $I->seeElement($page::$addToBasketButton);
    }

    /**
     * @param AcceptanceTester $I
     * @param DetailsPage $page
     * @throws \Exception
     */
    public function productCanBeAddedToTheBasketOnce(AcceptanceTester $I, DetailsPage $page)
    {
        $I->fillField($page::$productAmountField, 1);
        $I->click($page::$addToBasketButton);
        $I->waitForElementVisible($page::$basketModal);
        $I->see('1 Artikel im Warenkorb');
    }

    /**
     * @param AcceptanceTester $I
     * @param DetailsPage $page
     * @throws \Exception
     */
    public function productCanNotBeAddedTwiceToTheBasket(AcceptanceTester $I, DetailsPage $page)
    {
        $I->fillField($page::$productAmountField, 2);
        $I->click($page::$addToBasketButton);
        $I->waitForElementVisible($page::$errorMessageContainer);
        $I->see('Die maximale Bestellmenge für den Artikel');
    }
}
