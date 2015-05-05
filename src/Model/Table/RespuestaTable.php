<?php
namespace App\Model\Table;

use App\Model\Entity\Respuestum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Respuesta Model
 */
class RespuestaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('respuesta');
        $this->displayField('ID_RPTA');
        $this->primaryKey('ID_RPTA');
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
            ->add('ID_RPTA', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_RPTA', 'create');
            
        $validator
            ->allowEmpty('TEXTO_RPTA');

        return $validator;
    }
}
