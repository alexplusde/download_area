<?php

# rex_config::removeNamespace("download_area");

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::removeTable('rex_download_area');
}
