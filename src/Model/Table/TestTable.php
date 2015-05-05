<?php
namespace App\Model\Table;

use App\Model\Entity\Test;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Test Model
 */
class TestTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('test');
        $this->displayField('ID_TEST');
        $this->primaryKey('ID_TEST');
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
            ->add('ID_TEST', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_TEST', 'create');
            
        $validator
            ->add('ID_PACIENTE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_PACIENTE');
            
        $validator
            ->add('FECHA_HORA', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('FECHA_HORA');

        return $validator;
    }
}
