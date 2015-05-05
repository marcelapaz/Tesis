<?php
namespace App\Model\Table;

use App\Model\Entity\InterEjIm;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InterEjIm Model
 */
class InterEjImTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('inter_ej_im');
        $this->displayField('ID_EJERCICIO');
        $this->primaryKey(['ID_EJERCICIO', 'ID_IMAGEN']);
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
            ->add('ID_IMAGEN', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_IMAGEN', 'create');

        return $validator;
    }
}
