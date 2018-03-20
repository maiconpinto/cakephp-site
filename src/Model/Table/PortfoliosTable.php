<?php
namespace Site\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Portfolios Model
 *
 * @method \Site\Model\Entity\Portfolio get($primaryKey, $options = [])
 * @method \Site\Model\Entity\Portfolio newEntity($data = null, array $options = [])
 * @method \Site\Model\Entity\Portfolio[] newEntities(array $data, array $options = [])
 * @method \Site\Model\Entity\Portfolio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Site\Model\Entity\Portfolio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Site\Model\Entity\Portfolio[] patchEntities($entities, array $data, array $options = [])
 * @method \Site\Model\Entity\Portfolio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PortfoliosTable extends Table
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

        $this->setTable('portfolios');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => []
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url');

        $validator
            ->allowEmpty('image');

        $validator
            ->scalar('category')
            ->maxLength('category', 255)
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
