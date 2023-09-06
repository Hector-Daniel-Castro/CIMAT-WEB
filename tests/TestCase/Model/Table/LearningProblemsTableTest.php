<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LearningProblemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LearningProblemsTable Test Case
 */
class LearningProblemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LearningProblemsTable
     */
    protected $LearningProblems;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LearningProblems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LearningProblems') ? [] : ['className' => LearningProblemsTable::class];
        $this->LearningProblems = $this->getTableLocator()->get('LearningProblems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LearningProblems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LearningProblemsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
