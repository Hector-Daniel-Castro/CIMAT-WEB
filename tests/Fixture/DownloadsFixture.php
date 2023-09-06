<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DownloadsFixture
 */
class DownloadsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user' => 1,
                'app' => 1,
                'Date' => '2023-08-30',
            ],
        ];
        parent::init();
    }
}
