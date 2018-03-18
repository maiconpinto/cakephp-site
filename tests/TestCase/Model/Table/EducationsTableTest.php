<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\EducationsTable;

/**
 * Site\Model\Table\EducationsTable Test Case
 */
class EducationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\EducationsTable
     */
    public $Educations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.educations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Educations') ? [] : ['className' => EducationsTable::class];
        $this->Educations = TableRegistry::get('Educations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Educations);

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
