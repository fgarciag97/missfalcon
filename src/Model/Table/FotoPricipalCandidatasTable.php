<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FotoPricipalCandidatas Model
 *
 * @method \App\Model\Entity\FotoPricipalCandidata get($primaryKey, $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FotoPricipalCandidata findOrCreate($search, callable $callback = null, $options = [])
 */
class FotoPricipalCandidatasTable extends Table
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

        $this->setTable('foto_pricipal_candidatas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        @$this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'subidas', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [   // Define the prefix of your thumbnail
                        'w' => 300, // Width
                        'h' => 300, // Height
                        'jpeg_quality'  => 100
                    ]
                ],
                'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
            ]
        ]);
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
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        $validator
            ->allowEmptyString('photo');

        $validator
            ->date('fecha_registro')
            ->allowEmptyDate('fecha_registro');

        $validator
            ->scalar('municipio')
            ->allowEmptyString('municipio');

        $validator
            ->scalar('nombres_candidata')
            ->allowEmptyString('nombres_candidata');

        $validator
            ->scalar('categoria')
            ->allowEmptyString('categoria');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        return $validator;
    }
}
