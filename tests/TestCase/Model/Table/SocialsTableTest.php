<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\SocialsTable;

/**
 * Site\Model\Table\SocialsTable Test Case
 */
class SocialsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\SocialsTable
     */
    public $Socials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.socials'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Socials') ? [] : ['className' => SocialsTable::class];
        $this->Socials = TableRegistry::get('Socials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Socials);

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
