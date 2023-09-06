<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Download Entity
 *
 * @property int $id
 * @property int $user
 * @property int $app
 * @property \Cake\I18n\FrozenDate $Date
 */
class Download extends Entity
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
        'user' => true,
        'app' => true,
        'Date' => true,
    ];
}
