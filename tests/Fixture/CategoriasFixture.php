<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasFixture
 */
class CategoriasFixture extends TestFixture
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
                'id_categoria' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'estado' => 1,
            ],
        ];
        parent::init();
    }
}
