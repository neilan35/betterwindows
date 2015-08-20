<?php
namespace App\Model\Table;

use App\Model\Entity\Glazing;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Glazings Model
 */
class GlazingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('glazings');
        $this->displayField('glazingtype');
        $this->primaryKey('id');
        $this->hasMany('Products', [
            'foreignKey' => 'glazing_id'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->notEmpty('id', 'create')
            ->notEmpty('glazingtype', 'Please enter a glazing type')
            ->notEmpty('obscurity', 'Please enter an obscuirty')
            ->notEmpty('safetyglazing', 'Please enter a safety glazing')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->notEmpty('price', 'Please enter a price');

        return $validator;
    }
}
