<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $type_id
 * @property int $priority_id
 * @property int $state_id
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property \Cake\I18n\Time $modified
 * @property int $assigner_id
 * @property int $receiver_id
 * @property int $project_id
 * @property int $product_id
 *
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Priority $priority
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\User $assigner
 * @property \App\Model\Entity\User $receiver
 */
class Task extends Entity
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
