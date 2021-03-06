<?php

/**
 * Testing the mailform view.
 *
 * PHP version 5
 *
 * @category  Testing
 * @package   XH
 * @author    The CMSimple_XH developers <devs@cmsimple-xh.org>
 * @copyright 2014-2016 The CMSimple_XH developers <http://cmsimple-xh.org/?The_Team>
 * @license   http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link      http://cmsimple-xh.org/
 */

require_once './vendor/autoload.php';
require_once './cmsimple/functions.php';

class MailformRenderTest extends PHPUnit_Framework_TestCase
{
    private $_subject;

    public function setUp()
    {
        $this->_subject = new XH\Mailform();
        $tagStub = new PHPUnit_Extensions_MockFunction('tag', $this->_subject);
        $tagStub->expects($this->any())->will($this->returnCallback(
            function ($string) {
                return "<$string>";
            }
        ));
    }

    public function testForm()
    {
        $this->_assertMatches(
            array(
                'tag' => 'form',
                'attributes' => array(
                    'class' => 'xh_mailform',
                    'method' => 'post'
                )
            )
        );
    }

    public function testFunctionInput()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'hidden',
                    'name' => 'function',
                    'value' => 'mailform'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testNoFunctionInputInEmbeddedMailform()
    {
        $this->_subject = new XH\Mailform(true);
        $this->_assertNotMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'name' => 'function',
                    'value' => 'mailform'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testActionInput()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'hidden',
                    'name' => 'action',
                    'value' => 'send'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testSendernameInput()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'text',
                    'name' => 'sendername',
                    'class' => 'text'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testSenderphoneInput()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'tel',
                    'name' => 'senderphone',
                    'class' => 'text'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testSenderInput()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'email',
                    'name' => 'sender',
                    'class' => 'text',
                    'required' => 'required'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testSubjectInput()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'text',
                    'name' => 'subject',
                    'class' => 'text',
                    'required' => 'required'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testTextareaOfNormalMailform()
    {
        $this->_testTextarea('mailform');
    }

    public function testTextareaOfEmbeddedMailform()
    {
        $this->_subject = new XH\Mailform(true);
        $this->_testTextarea('xh_mailform');
    }

    private function _testTextarea($name)
    {
        $this->_assertMatches(
            array(
                'tag' => 'textarea',
                'attributes' => array(
                    'name' => $name,
                    'required' => 'required'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testSubmit()
    {
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'submit',
                    'class' => 'submit'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testCaptcha()
    {
        global $cf;

        $cf['mailform']['captcha'] = 'true';
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'hidden',
                    'name' => 'getlast'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
        $this->_assertMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'type' => 'text',
                    'name' => 'cap',
                    'class' => 'xh_captcha_input',
                    'required' => 'required'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    public function testNoCaptcha()
    {
        global $cf;

        $cf['mailform']['captcha'] = '';
        $this->_assertNotMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'name' => 'getlast'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
        $this->_assertNotMatches(
            array(
                'tag' => 'input',
                'attributes' => array(
                    'name' => 'cap'
                ),
                'ancestor' => array('tag' => 'form')
            )
        );
    }

    private function _assertMatches($matcher)
    {
        @$this->assertTag($matcher, $this->_subject->render());
    }

    private function _assertNotMatches($matcher)
    {
        @$this->assertNotTag($matcher, $this->_subject->render());
    }

}

?>
