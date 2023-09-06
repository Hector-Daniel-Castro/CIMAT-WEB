<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DifferentiatedCapacitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DifferentiatedCapacitiesTable Test Case
 */
class DifferentiatedCapacitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DifferentiatedCapacitiesTable
     */
    protected $DifferentiatedCapacities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DifferentiatedCapacities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DifferentiatedCapacities') ? [] : ['className' => DifferentiatedCapacitiesTable::class];
        $this->DifferentiatedCapacities = $this->getTableLocator()->get('DifferentiatedCapacities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DifferentiatedCapacities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DifferentiatedCapacitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
