<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addtbtimeitemtype extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('tb_timeitem_type', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'account_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('tb_timeitem_type');
    }
}