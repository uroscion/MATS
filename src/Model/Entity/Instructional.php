<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Instructional Entity
 *
 * @property int $id
 * @property int $technique_id
 * @property int $source_id
 * @property string $location_in_source
 * @property string $type
 *
 * @property \App\Model\Entity\Technique $technique
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\InstrImageText[] $instr_image_texts
 */
class Instructional extends Entity
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
        '*' => true,
        'id' => false
    ];
}
