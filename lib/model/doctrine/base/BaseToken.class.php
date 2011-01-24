<?php

/**
 * BaseToken
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property enum $action
 * @property string $value
 * @property User $User
 * 
 * @method integer getUserId()  Returns the current record's "user_id" value
 * @method enum    getAction()  Returns the current record's "action" value
 * @method string  getValue()   Returns the current record's "value" value
 * @method User    getUser()    Returns the current record's "User" value
 * @method Token   setUserId()  Sets the current record's "user_id" value
 * @method Token   setAction()  Sets the current record's "action" value
 * @method Token   setValue()   Sets the current record's "value" value
 * @method Token   setUser()    Sets the current record's "User" value
 * 
 * @package    timehive
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseToken extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_token');
        $this->hasColumn('user_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('action', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'autologin',
              1 => 'recovery',
             ),
             ));
        $this->hasColumn('value', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}