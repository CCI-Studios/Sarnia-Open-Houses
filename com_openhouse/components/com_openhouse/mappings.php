<?php
defined('KOOWA') or die;

KFactory::map('site::com.openhouse.template.helper.listbox', 'admin::com.openhouse.template.helper.listbox');

KFactory::map('site::com.openhouse.model.agents', 'admin::com.openhouse.model.agents');
KFactory::map('site::com.openhouse.model.images', 'admin::com.openhouse.model.images');
KFactory::map('site::com.openhouse.model.houses', 'admin::com.openhouse.model.houses');

KFactory::map('site::com.openhouse.database.table.agents', 'admin::com.openhouse.database.table.agents');
KFactory::map('site::com.openhouse.database.table.houses', 'admin::com.openhouse.database.table.houses');
