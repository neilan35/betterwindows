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
        $this->belongsTo('Glazings', [
            'foreignKey' => 'glazing_id'
        ]);
        $this->belongsTo('Balratings', [
            'foreignKey' => 'balrating_id'
        ]);
        $this->belongsTo('Reveals', [
            'foreignKey' => 'reveal_id'
        ]);
        $this->belongsTo('Winopentypes', [
            'foreignKey' => 'winopentype_id'
        ]);
        $this->belongsTo('Dooropentypes', [
            'foreignKey' => 'dooropentype_id'
        ]);
        $this->belongsTo('Flyscreens', [
            'foreignKey' => 'flyscreen_id'
        ]);
        $this->belongsTo('Glasscomps', [
            'foreignKey' => 'glasscomp_id'
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
            ->add('colour_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('colour_id', 'create')
            ->notEmpty('colour_id')
            ->add('glazing_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('glazing_id', 'create')
            ->notEmpty('glazing_id')
            ->add('balrating_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('balrating_id', 'create')
            ->notEmpty('balrating_id')
            ->add('reveal_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('reveal_id', 'create')
            ->notEmpty('reveal_id')
            ->add('winopentype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('winopentype_id', 'create')
            ->notEmpty('winopentype_id')
            ->add('dooropentype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('dooropentype_id', 'create')
            ->notEmpty('dooropentype_id')
            ->add('flyscreen_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('flyscreen_id', 'create')
            ->notEmpty('flyscreen_id')
            ->add('glasscomp_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('glasscomp_id', 'create')
            ->notEmpty('glasscomp_id');

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
        $rules->add($rules->existsIn(['glazing_id'], 'Glazings'));
        $rules->add($rules->existsIn(['balrating_id'], 'Balratings'));
        $rules->add($rules->existsIn(['reveal_id'], 'Reveals'));
        $rules->add($rules->existsIn(['winopentype_id'], 'Winopentypes'));
        $rules->add($rules->existsIn(['dooropentype_id'], 'Dooropentypes'));
        $rules->add($rules->existsIn(['flyscreen_id'], 'Flyscreens'));
        $rules->add($rules->existsIn(['glasscomp_id'], 'Glasscomps'));
        return $rules;
    }
}
