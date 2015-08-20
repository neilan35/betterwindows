<?php
namespace App\Model\Table;

use App\Model\Entity\Reveal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reveals Model
 */
class RevealsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('reveals');
        $this->displayField('revealsize');
        $this->primaryKey('id');
        $this->hasMany('Products', [
            'foreignKey' => 'reveal_id'
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
            ->notEmpty('reveal', 'Please enter a reveal')
            ->notEmpty('revealsize', 'Please enter a reveal')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->notEmpty('price', 'Please enter a price');

        return $validator;
    }
}
