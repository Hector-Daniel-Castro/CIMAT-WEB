<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * App Entity
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property string $icon
 * @property int $differentiated_capacity
 * @property int $size
 * @property int $learning_problem
 * @property int $category
 * @property int $skill
 * @property string $short_description
 * @property string $description
 */
class App extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'file' => true,
        'icon' => true,
        'differentiated_capacity' => true,
        'size' => true,
        'learning_problem' => true,
        'category' => true,
        'skill' => true,
        'short_description' => true,
        'description' => true,
    ];
}
