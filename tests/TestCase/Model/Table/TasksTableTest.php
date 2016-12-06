<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TasksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TasksTable Test Case
 */
class TasksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TasksTable
     */
    public $Tasks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tasks',
        'app.types',
        'app.priorities',
        'app.states',
        'app.projects',
        'app.products',
        'app.versions',
        'app.users',
        'app.notices',
        'app.projects_users',
        'app.assigners',
        'app.receivers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tasks') ? [] : ['className' => 'App\Model\Table\TasksTable'];
        $this->Tasks = TableRegistry::get('Tasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tasks);

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
