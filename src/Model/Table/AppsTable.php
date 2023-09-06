<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Apps Model
 *
 * @method \App\Model\Entity\App newEmptyEntity()
 * @method \App\Model\Entity\App newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\App[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\App get($primaryKey, $options = [])
 * @method \App\Model\Entity\App findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\App patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\App[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\App|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\App saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\App[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\App[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\App[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\App[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AppsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('apps');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('file')
            ->maxLength('file', 100)
            ->requirePresence('file', 'create')
            ->notEmptyFile('file');

        $validator
            ->scalar('icon')
            ->maxLength('icon', 100)
            ->requirePresence('icon', 'create')
            ->notEmptyString('icon');

        $validator
            ->integer('differentiated_capacity')
            ->requirePresence('differentiated_capacity', 'create')
            ->notEmptyString('differentiated_capacity');

        $validator
            ->integer('size')
            ->requirePresence('size', 'create')
            ->notEmptyString('size');

        $validator
            ->integer('learning_problem')
            ->requirePresence('learning_problem', 'create')
            ->notEmptyString('learning_problem');

        $validator
            ->integer('category')
            ->requirePresence('category', 'create')
            ->notEmptyString('category');

        $validator
            ->integer('skill')
            ->requirePresence('skill', 'create')
            ->notEmptyString('skill');

        $validator
            ->scalar('short_description')
            ->maxLength('short_description', 100)
            ->requirePresence('short_description', 'create')
            ->notEmptyString('short_description');

        $validator
            ->scalar('description')
            ->maxLength('description', 100)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
