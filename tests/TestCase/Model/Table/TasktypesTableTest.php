<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TasktypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TasktypesTable Test Case
 */
class TasktypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TasktypesTable
     */
    public $Tasktypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tasktypes',
        'app.tasks',
        'app.projects',
        'app.products',
        'app.versions',
        'app.users',
        'app.notices',
        'app.projects_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tasktypes') ? [] : ['className' => 'App\Model\Table\TasktypesTable'];
        $this->Tasktypes = TableRegistry::get('Tasktypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tasktypes);

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
