<?php
namespace App\Model\Table;

use App\Model\Entity\Colour;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colours Model
 */
class ColoursTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('colours');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Products', [
            'foreignKey' => 'colour_id'
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
            ->add('category', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('category')
            ->allowEmpty('name')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('price');

        return $validator;
    }
}
