<?php

/**
 * BaseCredential
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $group_name
 * @property integer $sort_order
 * @property Doctrine_Collection $Roles
 * 
 * @method string              getName()       Returns the current record's "name" value
 * @method string              getGroupName()  Returns the current record's "group_name" value
 * @method integer             getSortOrder()  Returns the current record's "sort_order" value
 * @method Doctrine_Collection getRoles()      Returns the current record's "Roles" collection
 * @method Credential          setName()       Sets the current record's "name" value
 * @method Credential          setGroupName()  Sets the current record's "group_name" value
 * @method Credential          setSortOrder()  Sets the current record's "sort_order" value
 * @method Credential          setRoles()      Sets the current record's "Roles" collection
 * 
 * @package    timehive
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCredential extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_credential');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('group_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('sort_order', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Role as Roles', array(
             'refClass' => 'RoleCredential',
             'local' => 'credential_id',
             'foreign' => 'role_id'));
    }
}