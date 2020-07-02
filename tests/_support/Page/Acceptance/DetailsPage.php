<?php

namespace Page\Acceptance;

class DetailsPage
{
    // include url of current page
    public static $URL = '/Kiteboarding/Zubehoer/Helm-AHM-5000.html';

    public static $productHeadlineElement = 'h1#productTitle';
    public static $addToBasketButton = 'button#toBasket';
    public static $productAmountField = 'input#amountToBasket';
    public static $basketModal = 'div#basketModal';
    public static $errorMessageContainer = 'p.alert-danger';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
