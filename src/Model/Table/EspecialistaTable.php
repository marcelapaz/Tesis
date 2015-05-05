<?php
namespace App\Model\Table;

use App\Model\Entity\Especialistum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especialista Model
 */
class EspecialistaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('especialista');
        $this->displayField('ID_ESPECIALISTA');
        $this->primaryKey('ID_ESPECIALISTA');
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
            ->allowEmpty('ESPECIALIDAD');
            
        $validator
            ->add('ID_ESPECIALISTA', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_ESPECIALISTA', 'create');
            
        $validator
            ->allowEmpty('NOMBRE');
            
        $validator
            ->allowEmpty('CORREO');
            
        $validator
            ->allowEmpty('CONTRASENA');
            
        $validator
            ->add('FECHA_NAC', 'valid', ['rule' => 'date'])
            ->allowEmpty('FECHA_NAC');

        return $validator;
    }
}
