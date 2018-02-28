<?php
namespace Site\Test\TestCase\View\Cell;

use Cake\TestSuite\TestCase;
use Site\View\Cell\SkillsCell;

/**
 * Site\View\Cell\SkillsCell Test Case
 */
class SkillsCellTest extends TestCase
{

    /**
     * Request mock
     *
     * @var \Cake\Http\ServerRequest|\PHPUnit_Framework_MockObject_MockObject
     */
    public $request;

    /**
     * Response mock
     *
     * @var \Cake\Http\Response|\PHPUnit_Framework_MockObject_MockObject
     */
    public $response;

    /**
     * Test subject
     *
     * @var \Site\View\Cell\SkillsCell
     */
    public $Skills;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->request = $this->getMockBuilder('Cake\Http\ServerRequest')->getMock();
        $this->response = $this->getMockBuilder('Cake\Http\Response')->getMock();
        $this->Skills = new SkillsCell($this->request, $this->response);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Skills);

        parent::tearDown();
    }

    /**
     * Test display method
     *
     * @return void
     */
    public function testDisplay()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
