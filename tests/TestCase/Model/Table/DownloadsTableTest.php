<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DownloadsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DownloadsTable Test Case
 */
class DownloadsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DownloadsTable
     */
    protected $Downloads;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Downloads',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Downloads') ? [] : ['className' => DownloadsTable::class];
        $this->Downloads = $this->getTableLocator()->get('Downloads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Downloads);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DownloadsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
