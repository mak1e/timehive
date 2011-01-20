<?php

/**
 * BaseRoleCredential
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $role_id
 * @property integer $credential_id
 * 
 * @method integer        getRoleId()        Returns the current record's "role_id" value
 * @method integer        getCredentialId()  Returns the current record's "credential_id" value
 * @method RoleCredential setRoleId()        Sets the current record's "role_id" value
 * @method RoleCredential setCredentialId()  Sets the current record's "credential_id" value
 * 
 * @package    projecttimeboxx
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRoleCredential extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_role_credential');
        $this->hasColumn('role_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 20,
             ));
        $this->hasColumn('credential_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}