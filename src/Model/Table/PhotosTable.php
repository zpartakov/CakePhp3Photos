<?php
namespace App\Model\Table;

use App\Model\Entity\Photo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Photos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 */
class PhotosTable extends Table
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

        $this->table('photos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Tags', [
            'foreignKey' => 'photo_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'photos_tags'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('file', 'create')
            ->notEmpty('file');

        $validator
            ->requirePresence('rem', 'create')
            ->allowEmpty('rem');

        return $validator;
    }
}
