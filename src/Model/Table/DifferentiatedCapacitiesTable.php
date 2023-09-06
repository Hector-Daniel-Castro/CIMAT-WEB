<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DifferentiatedCapacities Model
 *
 * @method \App\Model\Entity\DifferentiatedCapacity newEmptyEntity()
 * @method \App\Model\Entity\DifferentiatedCapacity newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity get($primaryKey, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DifferentiatedCapacity[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DifferentiatedCapacitiesTable extends Table
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

        $this->setTable('differentiated_capacities');
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
            ->scalar('description')
            ->maxLength('description', 100)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
