<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Instructionals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Techniques
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\HasMany $InstrImageTexts
 *
 * @method \App\Model\Entity\Instructional get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instructional newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Instructional[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instructional|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instructional patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instructional[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instructional findOrCreate($search, callable $callback = null)
 */
class InstructionalsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('instructionals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Techniques', [
            'foreignKey' => 'technique_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('InstrImageTexts', [
            'foreignKey' => 'instructional_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('location_in_source');

        $validator
            ->allowEmpty('type');

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
        $rules->add($rules->existsIn(['technique_id'], 'Techniques'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));

        return $rules;
    }
}
