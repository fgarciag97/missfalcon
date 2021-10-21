<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Candidatas Model
 *
 * @method \App\Model\Entity\Candidata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Candidata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Candidata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Candidata|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Candidata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Candidata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Candidata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Candidata findOrCreate($search, callable $callback = null, $options = [])
 */
class CandidatasTable extends Table
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

        $this->setTable('candidatas');
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
            ->integer('id_categoria')
            ->allowEmptyString('id_categoria');

        $validator
            ->scalar('nombres')
            ->allowEmptyString('nombres');

        $validator
            ->scalar('municipio')
            ->allowEmptyString('municipio');

        $validator
            ->scalar('edad')
            ->allowEmptyString('edad');

        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula');

        $validator
            ->date('fecha_nacimiento')
            ->allowEmptyDate('fecha_nacimiento');

        $validator
            ->scalar('direccion')
            ->allowEmptyString('direccion');

        $validator
            ->scalar('telefono_1')
            ->allowEmptyString('telefono_1');

        $validator
            ->scalar('telefono_2')
            ->allowEmptyString('telefono_2');

        $validator
            ->scalar('instagram')
            ->allowEmptyString('instagram');

        $validator
            ->scalar('facebook')
            ->allowEmptyString('facebook');

        $validator
            ->scalar('ocupacion')
            ->allowEmptyString('ocupacion');

        $validator
            ->scalar('hobbie')
            ->allowEmptyString('hobbie');

        $validator
            ->decimal('busto')
            ->allowEmptyString('busto');

        $validator
            ->decimal('cintura')
            ->allowEmptyString('cintura');

        $validator
            ->decimal('cadera')
            ->allowEmptyString('cadera');

        $validator
            ->scalar('experiencia')
            ->allowEmptyString('experiencia');

        $validator
            ->decimal('estatura')
            ->allowEmptyString('estatura');

        $validator
            ->allowEmptyString('photo');


        return $validator;
    }
}
