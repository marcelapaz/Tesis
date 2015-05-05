<?php
namespace App\Model\Table;

use App\Model\Entity\TipoImagen;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoImagen Model
 */
class TipoImagenTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tipo_imagen');
        $this->displayField('ID_TIPO_IMAGEN');
        $this->primaryKey('ID_TIPO_IMAGEN');
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
            ->allowEmpty('NOMBRE_IMAGEN');
            
        $validator
            ->add('ID_TIPO_IMAGEN', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID_TIPO_IMAGEN', 'create');

        return $validator;
    }
}
