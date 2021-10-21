<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Candidata Entity
 *
 * @property int $id
 * @property int|null $id_categoria
 * @property string|null $nombres
 * @property string|null $municipio
 * @property string|null $edad
 * @property int|null $cedula
 * @property \Cake\I18n\FrozenDate|null $fecha_nacimiento
 * @property string|null $direccion
 * @property string|null $telefono_1
 * @property string|null $telefono_2
 * @property string|null $instagram
 * @property string|null $facebook
 * @property string|null $ocupacion
 * @property string|null $hobbie
 * @property float|null $busto
 * @property float|null $cintura
 * @property float|null $cadera
 * @property string|null $experiencia
 * @property float|null $estatura
 * @property string|null $photo
 * @property string|null $photo_dir
 */
class Candidata extends Entity
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
        'id_categoria' => true,
        'nombres' => true,
        'municipio' => true,
        'edad' => true,
        'cedula' => true,
        'fecha_nacimiento' => true,
        'direccion' => true,
        'telefono_1' => true,
        'telefono_2' => true,
        'instagram' => true,
        'facebook' => true,
        'ocupacion' => true,
        'hobbie' => true,
        'busto' => true,
        'cintura' => true,
        'cadera' => true,
        'experiencia' => true,
        'estatura' => true,
        'photo' => true,
        'photo_dir' => true
    ];
}
