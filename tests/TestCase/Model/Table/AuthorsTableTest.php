<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\AuthorsTable;

/**
 * Site\Model\Table\AuthorsTable Test Case
 */
class AuthorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\AuthorsTable
     */
    public $Authors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.authors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Authors') ? [] : ['className' => AuthorsTable::class];
        $this->Authors = TableRegistry::get('Authors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Authors);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
