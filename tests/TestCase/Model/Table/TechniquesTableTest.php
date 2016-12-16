<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TechniquesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TechniquesTable Test Case
 */
class TechniquesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TechniquesTable
     */
    public $Techniques;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.techniques',
        'app.instructionals',
        'app.sources',
        'app.instr_image_texts',
        'app.topics',
        'app.techniques_topics'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Techniques') ? [] : ['className' => 'App\Model\Table\TechniquesTable'];
        $this->Techniques = TableRegistry::get('Techniques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Techniques);

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
