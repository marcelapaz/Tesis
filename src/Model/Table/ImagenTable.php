<?php
namespace App\Model\Table;

use App\Model\Entity\Imagen;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imagen Model
 */
class ImagenTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('imagen');
        $this->displayField('ID_IMAGEN');
        $this->primaryKey('ID_IMAGEN');
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
            ->add('ID_IMAGEN', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_IMAGEN', 'create');
            
        $validator
            ->add('ID_TIPO_IMAGEN', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_TIPO_IMAGEN');
            
        $validator
            ->allowEmpty('URL_IMAGEN');
            
        $validator
            ->add('COMPLEJIDAD', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('COMPLEJIDAD');

        return $validator;
    }
}
