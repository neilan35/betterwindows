<?php
namespace App\Model\Table;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 */
class CustomersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customers');
        $this->displayField('first_name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasOne('Users', [
            'foreignKey' => 'customer_id',
            'dependent' => 'true',
            'cascadeCallbacks' => 'true'
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
            // ->requirePresence('australian_business_number')
            // ->notEmpty('australian_business_number')
            // ->requirePresence('company_name')
            // ->notEmpty('company_name')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name', 'You forget to write your first name.')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name','You forget to write your last name.')
            ->add('phone_number', 'valid', ['rule' => 'numeric'])
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number','You forget to write your phone number')
            ->requirePresence('street_address', 'create')
            ->notEmpty('street_address')
            ->requirePresence('suburb', 'create')
            ->notEmpty('suburb')
            ->requirePresence('state', 'create')
            ->notEmpty('state')
            ->add('postcode', 'valid', ['rule' => 'numeric'])
            ->requirePresence('postcode', 'create')
            ->notEmpty('postcode');

        return $validator;
    }
}
