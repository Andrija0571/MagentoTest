<?php
namespace Andrija\Test\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
	public function install(SchemaSetupInterface $setup,
	ModuleContextInterface $context)
	{
		$setup->startSetup();
		
		$table = $setup->getConnection()
			->newTable($setup->getTable('andrija_test_bookauthor'))
			->addColumn('entity_id',
						\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
						null,
						['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
						'Entity ID')
			->addColumn('firstname',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						[],
						'Firstname')
			->addColumn('lastname',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						[],
						'Lastname')
			->addColumn('fullname',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						[],
						'Fullname')
			->addColumn('image',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						[],
						'Image')
			->setComment('Test table with image as link to actual file');
		$setup->getConnection()->createTable($table);
		$setup->endSetup();
	}
}
?>