<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\CountersTable;

/**
 * Site\Model\Table\CountersTable Test Case
 */
class CountersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\CountersTable
     */
    public $Counters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.counters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Counters') ? [] : ['className' => CountersTable::class];
        $this->Counters = TableRegistry::get('Counters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Counters);

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
