<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version14 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('tb_timelog_item', 'itemdate', 'date', '25', array());
    }

    public function down()
    {
        $this->removeColumn('tb_timelog_item', 'itemdate');
    }
}