<?php
namespace Site\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Site\Model\Table\CategoriesTable;

/**
 * Site\Model\Table\CategoriesTable Test Case
 */
class CategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Site\Model\Table\CategoriesTable
     */
    public $Categories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.site.categories',
        'plugin.site.posts',
        'plugin.site.authors',
        'plugin.site.comments',
        'plugin.site.tags',
        'plugin.site.posts_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categories') ? [] : ['className' => CategoriesTable::class];
        $this->Categories = TableRegistry::get('Categories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categories);

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
