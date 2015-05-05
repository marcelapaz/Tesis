<?php
namespace App\Model\Table;

use App\Model\Entity\InterCuesPre;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InterCuesPre Model
 */
class InterCuesPreTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('inter_cues_pre');
        $this->displayField('ID_CUESTIONARIO');
        $this->primaryKey(['ID_CUESTIONARIO', 'ID_PREGUNTAS']);
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
            ->add('ID_PREGUNTAS', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_PREGUNTAS', 'create');

        return $validator;
    }
}
