<?php
namespace App\Model\Table;

use App\Model\Entity\Ejercicio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ejercicio Model
 */
class EjercicioTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ejercicio');
        $this->displayField('ID_EJERCICIO');
        $this->primaryKey('ID_EJERCICIO');
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
            ->add('ID_EJERCICIO', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_EJERCICIO', 'create');
            
        $validator
            ->add('ID_CUESTIONARIO', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_CUESTIONARIO');
            
        $validator
            ->add('ID_TEST', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_TEST');
            
        $validator
            ->allowEmpty('NOMBRE_EJERCICIO');

        return $validator;
    }
}
