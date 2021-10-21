<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VotacionActividadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VotacionActividadTable Test Case
 */
class VotacionActividadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VotacionActividadTable
     */
    public $VotacionActividad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.VotacionActividad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VotacionActividad') ? [] : ['className' => VotacionActividadTable::class];
        $this->VotacionActividad = TableRegistry::getTableLocator()->get('VotacionActividad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VotacionActividad);

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
