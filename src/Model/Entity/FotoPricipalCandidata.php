<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FotoPricipalCandidata Entity
 *
 * @property int $id
 * @property int $id_usuario
 * @property string|null $photo_dir
 * @property string|null $photo
 * @property \Cake\I18n\FrozenDate|null $fecha_registro
 * @property string|null $municipio
 * @property string|null $nombres_candidata
 * @property string|null $categoria
 * @property bool|null $estatus
 */
class FotoPricipalCandidata extends Entity
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
        'id_usuario' => true,
        'photo_dir' => true,
        'photo' => true,
        'fecha_registro' => true,
        'municipio' => true,
        'nombres_candidata' => true,
        'categoria' => true,
        'estatus' => true
    ];
}
