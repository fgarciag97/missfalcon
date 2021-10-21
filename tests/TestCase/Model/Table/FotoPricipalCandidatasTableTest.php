<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotoPricipalCandidatasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotoPricipalCandidatasTable Test Case
 */
class FotoPricipalCandidatasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotoPricipalCandidatasTable
     */
    public $FotoPricipalCandidatas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FotoPricipalCandidatas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FotoPricipalCandidatas') ? [] : ['className' => FotoPricipalCandidatasTable::class];
        $this->FotoPricipalCandidatas = TableRegistry::getTableLocator()->get('FotoPricipalCandidatas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotoPricipalCandidatas);

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
