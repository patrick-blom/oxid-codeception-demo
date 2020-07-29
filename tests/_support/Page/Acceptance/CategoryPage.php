<?php

namespace Page\Acceptance;

class CategoryPage
{
    // include url of current page
    public static $URL = '/Kiteboarding/Kites/';

    public static $paginationElement = 'div.pagination-options';
    public static $filterElement = 'form#filterList';
    public static $productListBoxes = 'div#productList div.productBox';

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
