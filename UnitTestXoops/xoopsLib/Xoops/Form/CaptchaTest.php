<?php
namespace Xoops\Form;

require_once(dirname(__FILE__).'/../../../init_mini.php');

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-08-18 at 21:59:23.
 */
 
/**
 * PHPUnit special settings :
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

class CaptchaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Captcha
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Captcha('Caption', 'name');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xoops\Form\Captcha::setConfig
     */
    public function testSetConfig()
    {
        $value = $this->object->setConfig('dummy_name', 'dummy_value');
        $this->assertTrue($value);
        
        $handler = \XoopsCaptcha::getInstance();
        $configs = $handler->config;
        $this->assertTrue(is_array($configs));
        $this->assertSame('dummy_value', $configs['dummy_name']);
    }

    /**
     * @covers Xoops\Form\Captcha::render
     */
    public function testRender()
    {
        $value = $this->object->render();
        $this->assertTrue(is_string($value));
    }

    /**
     * @covers Xoops\Form\Captcha::renderValidationJS
     */
    public function testRenderValidationJS()
    {
        $value = $this->object->renderValidationJS();
        $this->assertTrue(is_string($value));
    }
}
