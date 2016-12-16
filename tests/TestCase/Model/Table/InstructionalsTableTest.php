<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstructionalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstructionalsTable Test Case
 */
class InstructionalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstructionalsTable
     */
    public $Instructionals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instructionals',
        'app.techniques',
        'app.sources',
        'app.instr_image_texts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Instructionals') ? [] : ['className' => 'App\Model\Table\InstructionalsTable'];
        $this->Instructionals = TableRegistry::get('Instructionals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Instructionals);

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
