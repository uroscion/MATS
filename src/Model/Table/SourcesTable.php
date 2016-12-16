<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sources Model
 *
 * @property \Cake\ORM\Association\HasMany $Instructionals
 * @property \Cake\ORM\Association\BelongsToMany $Topics
 *
 * @method \App\Model\Entity\Source get($primaryKey, $options = [])
 * @method \App\Model\Entity\Source newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Source[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Source|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Source patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Source[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Source findOrCreate($search, callable $callback = null)
 */
class SourcesTable extends Table
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

        $this->table('sources');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->hasMany('Instructionals', [
            'foreignKey' => 'source_id'
        ]);
        $this->belongsToMany('Topics', [
            'foreignKey' => 'source_id',
            'targetForeignKey' => 'topic_id',
            'joinTable' => 'sources_topics'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->allowEmpty('nickname');

        $validator
            ->allowEmpty('title_eng_trans');

        $validator
            ->requirePresence('author_first', 'create')
            ->notEmpty('author_first');

        $validator
            ->allowEmpty('author_middle');

        $validator
            ->allowEmpty('author_last');

        $validator
            ->allowEmpty('inventory_num');

        $validator
            ->integer('pub_year')
            ->allowEmpty('pub_year');

        $validator
            ->allowEmpty('link');

        $validator
            ->allowEmpty('notes');

        return $validator;
    }
}
