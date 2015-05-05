<?php
namespace App\Model\Table;

use App\Model\Entity\Pregunta;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Preguntas Model
 */
class PreguntasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('preguntas');
        $this->displayField('ID_PREGUNTAS');
        $this->primaryKey('ID_PREGUNTAS');
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
            ->allowEmpty('TEXTO_PREGUNTA');

        return $validator;
    }
}
