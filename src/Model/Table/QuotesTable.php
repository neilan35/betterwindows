<?php
namespace App\Model\Table;

use App\Model\Entity\Quote;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quotes Model
 */
class QuotesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('quotes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id'
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
            ->allowEmpty('id', 'create')
            ->add('customer_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('customer_id', 'create')
            ->notEmpty('customer_id')
            ->add('product_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('product_id', 'create')
            ->notEmpty('product_id')
            ->allowEmpty('quote_no')
            ->allowEmpty('item')
            ->add('unit_cost', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('unit_cost')
            ->add('quantity', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quantity')
            ->add('installation', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('installation')
            ->allowEmpty('installtype')
            ->add('delivery', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('delivery')
            ->allowEmpty('deliverytype');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        return $rules;
    }
}
