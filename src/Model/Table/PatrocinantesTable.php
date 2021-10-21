<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patrocinantes Model
 *
 * @method \App\Model\Entity\Patrocinante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Patrocinante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Patrocinante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Patrocinante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patrocinante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patrocinante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Patrocinante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Patrocinante findOrCreate($search, callable $callback = null, $options = [])
 */
class PatrocinantesTable extends Table
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

        $this->setTable('patrocinantes');
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
            ->allowEmptyString('photo');

        $validator
            ->scalar('nombre')
            ->allowEmptyString('nombre');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->date('fecha_registro')
            ->allowEmptyDate('fecha_registro');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        return $validator;
    }
}
