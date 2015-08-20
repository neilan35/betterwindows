<?php
namespace App\Model\Table;

use App\Model\Entity\Balrating;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Balratings Model
 */
class BalratingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('balratings');
        $this->displayField('balrating');
        $this->primaryKey('id');
        $this->hasMany('Products', [
            'foreignKey' => 'balrating_id'
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
            ->add('balrating', 'valid', ['rule' => 'numeric'])
            ->notEmpty('balrating')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->notEmpty('price');

        return $validator;
    }
}
