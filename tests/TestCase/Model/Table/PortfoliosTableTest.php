<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\PortfoliosTable;

/**
 * Site\Model\Table\PortfoliosTable Test Case
 */
class PortfoliosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\PortfoliosTable
     */
    public $Portfolios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.portfolios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Portfolios') ? [] : ['className' => PortfoliosTable::class];
        $this->Portfolios = TableRegistry::get('Portfolios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Portfolios);

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
