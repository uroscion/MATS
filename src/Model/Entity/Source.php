<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Source Entity
 *
 * @property int $id
 * @property string $title
 * @property string $nickname
 * @property string $title_eng_trans
 * @property string $author_first
 * @property string $author_middle
 * @property string $author_last
 * @property string $inventory_num
 * @property int $pub_year
 * @property string $link
 * @property string $notes
 *
 * @property \App\Model\Entity\Instructional[] $instructionals
 * @property \App\Model\Entity\Topic[] $topics
 */
class Source extends Entity
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
