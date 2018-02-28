<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\SkillsTable;

/**
 * Site\Model\Table\SkillsTable Test Case
 */
class SkillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\SkillsTable
     */
    public $Skills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.skills'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Skills') ? [] : ['className' => SkillsTable::class];
        $this->Skills = TableRegistry::get('Skills', $config);
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
