<?php
namespace App\Model\Table;

use App\Model\Entity\Resultado;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Resultados Model
 */
class ResultadosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('resultados');
        $this->displayField('ID_RESULTADOS');
        $this->primaryKey('ID_RESULTADOS');
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
            ->add('ID_RESULTADOS', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_RESULTADOS', 'create');
            
        $validator
            ->add('ID_EJERCICIO', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_EJERCICIO');
            
        $validator
            ->allowEmpty('ACIERTOS');
            
        $validator
            ->allowEmpty('FALLOS');
            
        $validator
            ->add('PUNTAJE', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('PUNTAJE');
            
        $validator
            ->add('TIEMPO_TOTAL', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TIEMPO_TOTAL');
            
        $validator
            ->add('TOTAL_PREGUNTAS', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('TOTAL_PREGUNTAS');

        return $validator;
    }
}
