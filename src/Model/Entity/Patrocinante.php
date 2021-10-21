<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patrocinante Entity
 *
 * @property int $id
 * @property string|null $photo_dir
 * @property string|null $photo
 * @property string|null $nombre
 * @property string|null $denominacion
 * @property \Cake\I18n\FrozenDate|null $fecha_registro
 * @property bool|null $estatus
 */
class Patrocinante extends Entity
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
        'photo_dir' => true,
        'photo' => true,
        'nombre' => true,
        'denominacion' => true,
        'fecha_registro' => true,
        'estatus' => true
    ];
}
