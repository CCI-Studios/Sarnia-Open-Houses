<?php defined('KOOWA') or die;


// template helpers
KService::setAlias('com://site/openhouse.template.helper.listbox', 'com://admin/openhouse.template.helper.listbox');

// models
KService::setAlias('com://site/openhouse.model.agents', 'com://admin/openhouse.model.agents');
KService::setAlias('com://site/openhouse.model.houses', 'com://admin/openhouse.model.houses');
KService::setAlias('com://site/openhouse.model.images', 'com://admin/openhouse.model.images');
KService::setAlias('com://site/openhouse.model.showings', 'com://admin/openhouse.model.showings');

// tables
KService::setAlias('com://site/openhouse.database.table.agents', 'com://admin/openhouse.database.table.agents');
KService::setAlias('com://site/openhouse.database.table.houses', 'com://admin/openhouse.database.table.houses');

// rows
KService::setAlias('com://site/openhouse.database.row.house', 'com://admin/openhouse.database.row.house');