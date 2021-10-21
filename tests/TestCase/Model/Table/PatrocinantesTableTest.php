<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PatrocinantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PatrocinantesTable Test Case
 */
class PatrocinantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PatrocinantesTable
     */
    public $Patrocinantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Patrocinantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Patrocinantes') ? [] : ['className' => PatrocinantesTable::class];
        $this->Patrocinantes = TableRegistry::getTableLocator()->get('Patrocinantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Patrocinantes);

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
