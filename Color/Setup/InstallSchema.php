<?php
/**
* @author Alex.
* Glory to Ukraine! Glory to the heros!
*/
namespace Codelegacy\Color\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {


        $installer = $setup;
        $installer->startSetup();

        /**
         * Create table 'codelegacy_color'
         */
        $table = $installer->getConnection()->newTable($installer->getTable('codelegacy_color'))
            ->addColumn(
                'codelegacy_color_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true, 
                    'unsigned' => true, 
                    'nullable' => false, 
                    'primary' => true
                ],
                'Color ID'
            )->addColumn(
                'title',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Title'
            )->addColumn(
                'price',
                \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
                255,
                [],
                'Price'
            )->addColumn(
                'type',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Type'
            )->addColumn(
                'parent',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Parent'
            )->addColumn(
                'parent_category',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Parent Category'
            )->addColumn(
                'thumbnail_image',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Thumbnail Image'
            )->addColumn(
                'glow_image',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Glow Image'
            )->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                255,
                [],
                'Status'
            );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }

}
