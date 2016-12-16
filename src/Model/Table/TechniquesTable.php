<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Techniques Model
 *
 * @property \Cake\ORM\Association\HasMany $Instructionals
 * @property \Cake\ORM\Association\BelongsToMany $Topics
 *
 * @method \App\Model\Entity\Technique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Technique newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Technique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Technique|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Technique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Technique[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Technique findOrCreate($search, callable $callback = null)
 */
class TechniquesTable extends Table
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

        $this->table('techniques');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Instructionals', [
            'foreignKey' => 'technique_id'
        ]);
        $this->belongsToMany('Topics', [
            'foreignKey' => 'technique_id',
            'targetForeignKey' => 'topic_id',
            'joinTable' => 'techniques_topics'
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
            ->requirePresence('main_name', 'create')
            ->notEmpty('main_name')
            ->add('main_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['main_name']));

        return $rules;
    }
}
