<?php
namespace App\Model\Table;

use App\Model\Entity\InterPreRe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InterPreRes Model
 */
class InterPreResTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('inter_pre_res');
        $this->displayField('ID_PREGUNTAS');
        $this->primaryKey(['ID_PREGUNTAS', 'ID_RPTA']);
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
            ->add('ID_PREGUNTAS', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_PREGUNTAS', 'create');
            
        $validator
            ->add('ID_RPTA', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_RPTA', 'create');

        return $validator;
    }
}
