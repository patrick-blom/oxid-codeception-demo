<?php
namespace Page\Acceptance;

class StartPage
{
    // include url of current page
    public static $URL = '/';

    public static $headerElement = 'header#header';
    public static $footerElement = 'footer#footer';

    public static $addsOfTheWeekElement = 'div#bargainItems';
    public static $addsOfTheWeekElements = 'div#bargainItems > div.newItems > div.productBox';

    public static $newArrivedElement = 'div#newItems';
    public static $newArrivedElements = 'div#newItems div.productBox';

    public static $topSellerElement = 'div#topBox';
    public static $topSellerElements = 'div#topBox > div.newItems > div.productBox';

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

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
