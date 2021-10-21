<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotoPreViewTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotoPreViewTable Test Case
 */
class FotoPreViewTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotoPreViewTable
     */
    public $FotoPreView;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FotoPreView'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FotoPreView') ? [] : ['className' => FotoPreViewTable::class];
        $this->FotoPreView = TableRegistry::getTableLocator()->get('FotoPreView', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotoPreView);

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
