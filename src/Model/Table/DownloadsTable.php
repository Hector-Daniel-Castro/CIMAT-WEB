<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Downloads Model
 *
 * @method \App\Model\Entity\Download newEmptyEntity()
 * @method \App\Model\Entity\Download newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Download[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Download get($primaryKey, $options = [])
 * @method \App\Model\Entity\Download findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Download patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Download[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Download|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Download saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Download[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Download[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Download[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Download[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DownloadsTable extends Table
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

        $this->setTable('downloads');
        $this->setDisplayField('id');
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
            ->integer('user')
            ->requirePresence('user', 'create')
            ->notEmptyString('user');

        $validator
            ->integer('app')
            ->requirePresence('app', 'create')
            ->notEmptyString('app');

        $validator
            ->date('Date')
            ->requirePresence('Date', 'create')
            ->notEmptyDate('Date');

        return $validator;
    }
}
