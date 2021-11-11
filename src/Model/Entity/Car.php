<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property string $matricula
 * @property int $brand_id
 * @property int $color_id
 *
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\Color $color
 */
class Car extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'matricula' => true,
        'brand_id' => true,
        'color_id' => true,
        'brand' => true,
        'color' => true,
    ];
}
