<?php

namespace StylesFactory\RPNodes;

use XF\AddOn\AbstractSetup;
use XF\Db\Schema\Alter;

class Setup extends AbstractSetup
{
    public function install(array $stepParams = [])
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->addColumn('iconca', 'text')->nullable()->setDefault('NULL');
		    $table->addColumn('catfor', 'varchar', 250)->nullable();	
        });
    }

    public function upgrade(array $stepParams = [])
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
		    $table->addColumn('catfor', 'varchar', 250)->nullable();	
        });		
    }

    public function uninstall(array $stepParams = [])
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->dropColumns(array('iconca'));
		    $table->dropColumns(array('catfor'));	
        });
    }
}