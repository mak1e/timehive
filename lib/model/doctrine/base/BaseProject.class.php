<?php

/**
 * BaseProject
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $number
 * @property boolean $deactivated
 * @property integer $owner_id
 * @property integer $account_id
 * @property timestamp $deleted_at
 * @property User $Owner
 * @property Doctrine_Collection $AssignedUser
 * @property Account $Account
 * @property Doctrine_Collection $TimeLogItems
 * @property Doctrine_Collection $ProjectUsers
 * 
 * @method string              getName()         Returns the current record's "name" value
 * @method string              getNumber()       Returns the current record's "number" value
 * @method boolean             getDeactivated()  Returns the current record's "deactivated" value
 * @method integer             getOwnerId()      Returns the current record's "owner_id" value
 * @method integer             getAccountId()    Returns the current record's "account_id" value
 * @method timestamp           getDeletedAt()    Returns the current record's "deleted_at" value
 * @method User                getOwner()        Returns the current record's "Owner" value
 * @method Doctrine_Collection getAssignedUser() Returns the current record's "AssignedUser" collection
 * @method Account             getAccount()      Returns the current record's "Account" value
 * @method Doctrine_Collection getTimeLogItems() Returns the current record's "TimeLogItems" collection
 * @method Doctrine_Collection getProjectUsers() Returns the current record's "ProjectUsers" collection
 * @method Project             setName()         Sets the current record's "name" value
 * @method Project             setNumber()       Sets the current record's "number" value
 * @method Project             setDeactivated()  Sets the current record's "deactivated" value
 * @method Project             setOwnerId()      Sets the current record's "owner_id" value
 * @method Project             setAccountId()    Sets the current record's "account_id" value
 * @method Project             setDeletedAt()    Sets the current record's "deleted_at" value
 * @method Project             setOwner()        Sets the current record's "Owner" value
 * @method Project             setAssignedUser() Sets the current record's "AssignedUser" collection
 * @method Project             setAccount()      Sets the current record's "Account" value
 * @method Project             setTimeLogItems() Sets the current record's "TimeLogItems" collection
 * @method Project             setProjectUsers() Sets the current record's "ProjectUsers" collection
 * 
 * @package    timehive
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProject extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_project');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('deactivated', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('owner_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('account_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('deleted_at', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User as Owner', array(
             'local' => 'owner_id',
             'foreign' => 'id'));

        $this->hasMany('User as AssignedUser', array(
             'refClass' => 'ProjectUser',
             'local' => 'project_id',
             'foreign' => 'user_id'));

        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id'));

        $this->hasMany('TimeLogItem as TimeLogItems', array(
             'local' => 'id',
             'foreign' => 'project_id'));

        $this->hasMany('ProjectUser as ProjectUsers', array(
             'local' => 'id',
             'foreign' => 'project_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}