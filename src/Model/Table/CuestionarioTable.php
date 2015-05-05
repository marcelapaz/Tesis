<?php
namespace App\Model\Table;

use App\Model\Entity\Cuestionario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cuestionario Model
 */
class CuestionarioTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('cuestionario');
        $this->displayField('ID_CUESTIONARIO');
        $this->primaryKey('ID_CUESTIONARIO');
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
            ->add('ID_CUESTIONARIO', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_CUESTIONARIO', 'create');
            
        $validator
            ->allowEmpty('NOMBRE');

        return $validator;
    }
}
