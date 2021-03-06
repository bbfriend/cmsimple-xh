<?php

/**
 * Testing the search functionality.
 *
 * PHP version 5
 *
 * @category  Testing
 * @package   XH
 * @author    The CMSimple_XH developers <devs@cmsimple-xh.org>
 * @copyright 2013-2016 The CMSimple_XH developers <http://cmsimple-xh.org/?The_Team>
 * @license   http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link      http://cmsimple-xh.org/
 */

require_once './cmsimple/functions.php';
require_once './cmsimple/utf8.php';

/**
 * A test case for the search functionality.
 *
 * @category Testing
 * @package  XH
 * @author   The CMSimple_XH developers <devs@cmsimple-xh.org>
 * @license  http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link     http://cmsimple-xh.org/
 * @since    1.6
 */
class SearchTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        global $c, $cf;

        $c = array(
            '<h1>Welcome to CMSimple_XH</h1>',
            'Some arbitrary content',
            'More about CMSimple.',
            '#CMSimple hide# CMSimple again',
            'Bill &amp; Ted',
            "se\xC3\xB1or"
        );
        $cf['show_hidden']['pages_search'] == 'true';
    }

    public function dataForSearch()
    {
        return array(
            array('cmsimple', array(0, 2)),
            array('wurstsuppe', array()),
            array('cmsimple more', array(2)),
            array(' ', array()),
            array('&', array(4)),
            array( // testing unicode equivalence
                "sen\xCC\x83or",
                method_exists('Normalizer', 'normalize') ? array(5) : array()
            )
        );
    }

    /**
     * @dataProvider dataForSearch
     */
    public function testSearch($searchString, $expected)
    {
        $search = new XH\Search($searchString);
        $actual = $search->search();
        $this->assertEquals($expected, $actual);
    }
}

?>
