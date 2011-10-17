<?php defined('KOOWA') or die;


// template helpers
KService::setAlias('site::com.openhouse.template.helper.listbox', 'admin::com.openhouse.template.helper.listbox');

// models
KService::setAlias('site::com.openhouse.model.agents', 'admin::com.openhouse.model.agents');
KService::setAlias('site::com.openhouse.model.images', 'admin::com.openhouse.model.images');
KService::setAlias('site::com.openhouse.model.houses', 'admin::com.openhouse.model.houses');

// tables
KService::setAlias('site::com.openhouse.database.table.agents', 'admin::com.openhouse.database.table.agents');
KService::setAlias('site::com.openhouse.database.table.houses', 'admin::com.openhouse.database.table.houses');
