<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\PlansTable;

/**
 * Site\Model\Table\PlansTable Test Case
 */
class PlansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\PlansTable
     */
    public $Plans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.plans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Plans') ? [] : ['className' => PlansTable::class];
        $this->Plans = TableRegistry::get('Plans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Plans);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
