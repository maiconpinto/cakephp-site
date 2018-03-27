<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\PartnersTable;

/**
 * Site\Model\Table\PartnersTable Test Case
 */
class PartnersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\PartnersTable
     */
    public $Partners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.partners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Partners') ? [] : ['className' => PartnersTable::class];
        $this->Partners = TableRegistry::get('Partners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Partners);

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
