<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


/**
 * Usuario Entity
 *
 * @property int $id
 * @property string|null $nombres_mostrar
 * @property int|null $cedula
 * @property string|null $usuario
 * @property string|null $password
 * @property string $correo
 * @property int $privilegio
 * @property bool|null $estatus
 * @property \Cake\I18n\FrozenDate|null $fecha_registro
 */
class Usuario extends Entity
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
        'nombres_mostrar' => true,
        'cedula' => true,
        'usuario' => true,
        'password' => true,
        'correo' => true,
        'privilegio' => true,
        'estatus' => true,
        'fecha_registro' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
