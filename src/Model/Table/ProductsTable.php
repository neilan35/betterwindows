<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 */
class ProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('products');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Colours', [
            'foreignKey' => 'colour_id'
        ]);
        $this->belongsTo('Balratings', [
            'foreignKey' => 'balrating_id'
        ]);
        $this->belongsTo('Itemtypes', [
            'foreignKey' => 'itemtype_id'
        ]);
        $this->belongsTo('Designs', [
            'foreignKey' => 'design_id'
        ]);
        $this->belongsTo('Reveals', [
            'foreignKey' => 'reveal_id'
        ]);
        $this->belongsTo('Flyscreenmeshes', [
            'foreignKey' => 'flyscreenmesh_id'
        ]);
        $this->belongsTo('Glazings', [
            'foreignKey' => 'glazing_id'
        ]);
        $this->hasMany('Quotes', [
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
            ->add('colour_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('colour_id', 'create')
            ->notEmpty('colour_id')
            ->add('balrating_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('balrating_id', 'create')
            ->notEmpty('balrating_id')
            ->add('itemtype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('itemtype_id', 'create')
            ->notEmpty('itemtype_id')
            ->add('design_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('design_id', 'create')
            ->notEmpty('design_id')
            ->add('reveal_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('reveal_id')
            ->add('flyscreenmesh_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('flyscreenmesh_id')
            ->add('glazing_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('glazing_id', 'create')
            ->notEmpty('glazing_id')
            ->add('height', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('height')
            ->add('width', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('width');

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
        $rules->add($rules->existsIn(['colour_id'], 'Colours'));
        $rules->add($rules->existsIn(['balrating_id'], 'Balratings'));
        $rules->add($rules->existsIn(['itemtype_id'], 'Itemtypes'));
        $rules->add($rules->existsIn(['design_id'], 'Designs'));
        $rules->add($rules->existsIn(['reveal_id'], 'Reveals'));
        $rules->add($rules->existsIn(['flyscreenmesh_id'], 'Flyscreenmeshes'));
        $rules->add($rules->existsIn(['glazing_id'], 'Glazings'));
        return $rules;
    }
}
