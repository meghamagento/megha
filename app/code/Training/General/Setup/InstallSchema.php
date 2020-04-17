<?php

namespace Training\General\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        //Your install script

        $createform = $setup->getConnection()->newTable($setup->getTable('create_form'));

        $createform->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,],
            'Entity ID'
        );

        $createform->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            50,
            [],
            'name'
        );

        $createform->addColumn(
            'phone_no',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            20,
            [],
            'phone_no'
        );

        $createform->addColumn(
            'image',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Image'
        );

        $setup->getConnection()->createTable($createform);
    }
}