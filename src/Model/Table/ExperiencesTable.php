<?php
namespace Site\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experiences Model
 *
 * @method \Site\Model\Entity\Experience get($primaryKey, $options = [])
 * @method \Site\Model\Entity\Experience newEntity($data = null, array $options = [])
 * @method \Site\Model\Entity\Experience[] newEntities(array $data, array $options = [])
 * @method \Site\Model\Entity\Experience|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Site\Model\Entity\Experience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Site\Model\Entity\Experience[] patchEntities($entities, array $data, array $options = [])
 * @method \Site\Model\Entity\Experience findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExperiencesTable extends Table
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

        $this->setTable('experiences');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('subtitle')
            ->maxLength('subtitle', 255)
            ->allowEmpty('subtitle');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('period')
            ->maxLength('period', 255)
            ->requirePresence('period', 'create')
            ->notEmpty('period');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
