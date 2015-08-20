<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->notEmpty('firstname', 'A fist name is required')
            
            ->notEmpty('lastname', ' A last name is required')
            ->add('email', 'valid', ['rule' => 'email'])
            ->notEmpty('email')

            //password validation
            ->notEmpty('password','Please fill in the password')
            ->add('password', ['length' => ['rule' => ['minLength',6], 'message' => 'Passwords must be at least 6 character']])
            
            //confirm password validation
            ->notEmpty('confirm_password','Please fill in the password')
            ->add('confirm_password', ['length' => ['rule' => ['minLength',6], 'message' => 'Should be 6 characters']])
            ->add('confirm_password', ['compareWith' => ['rule' => ['compareWith','password'], 'message' => 'Should be match']])



            ->notEmpty('role', 'A role is required')
		    -> add('role', 'inList', [
                'rule' => ['inList', ['admin', 'customer']],
                'message' => 'Please enter a valid role'
	       ]);
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
        $rules->add($rules->isUnique(['email']));



        return $rules;
    }



}
