<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CandidatasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CandidatasTable Test Case
 */
class CandidatasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CandidatasTable
     */
    public $Candidatas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Candidatas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Candidatas') ? [] : ['className' => CandidatasTable::class];
        $this->Candidatas = TableRegistry::getTableLocator()->get('Candidatas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Candidatas);

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
