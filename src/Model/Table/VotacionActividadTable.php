<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VotacionActividad Model
 *
 * @method \App\Model\Entity\VotacionActividad get($primaryKey, $options = [])
 * @method \App\Model\Entity\VotacionActividad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VotacionActividad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VotacionActividad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VotacionActividad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VotacionActividad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VotacionActividad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VotacionActividad findOrCreate($search, callable $callback = null, $options = [])
 */
class VotacionActividadTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('votacion_actividad');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        return $validator;
    }
}
