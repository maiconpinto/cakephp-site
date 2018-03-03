<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\ExperiencesTable;

/**
 * Site\Model\Table\ExperiencesTable Test Case
 */
class ExperiencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\ExperiencesTable
     */
    public $Experiences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.experiences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Experiences') ? [] : ['className' => ExperiencesTable::class];
        $this->Experiences = TableRegistry::get('Experiences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Experiences);

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
