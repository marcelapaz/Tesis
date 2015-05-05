<?php
namespace App\Model\Table;

use App\Model\Entity\Paciente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paciente Model
 */
class PacienteTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('paciente');
        $this->displayField('ID_PACIENTE');
        $this->primaryKey('ID_PACIENTE');
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
            ->allowEmpty('NIVEL_EDUCATIVO');
            
        $validator
            ->allowEmpty('PROFESION');
            
        $validator
            ->allowEmpty('ANIOS_DE_EVOL_ENF');
            
        $validator
            ->allowEmpty('NIVEL_COGNICION');
            
        $validator
            ->add('ID_PACIENTE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_PACIENTE', 'create');
            
        $validator
            ->add('ID_ESPECIALISTA', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ID_ESPECIALISTA', 'create')
            ->notEmpty('ID_ESPECIALISTA');
            
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
