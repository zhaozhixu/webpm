<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tasktypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Tasks
 *
 * @method \App\Model\Entity\Tasktype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tasktype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tasktype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tasktype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tasktype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tasktype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tasktype findOrCreate($search, callable $callback = null)
 */
class TasktypesTable extends Table
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

        $this->table('tasktypes');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Tasks', [
            'foreignKey' => 'tasktype_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
