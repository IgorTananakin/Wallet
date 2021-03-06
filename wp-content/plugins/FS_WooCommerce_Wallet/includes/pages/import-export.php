<?php

if(! defined('ABSPATH')) {
    header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

$current_tab = ! empty( $_REQUEST['tab'] ) ? sanitize_title( $_REQUEST['tab'] ) : '';

?>

<div class="wrap fsww">
    <h1><?php _e('Import/Export', 'fsww') ?></h1><br>

    <h2 class="nav-tab-wrapper">
    <a href="<?php echo admin_url('admin.php?page=fsww-import-export&tab=' . 'import') ?>" class="nav-tab <?php echo ($current_tab=='import' || $current_tab=='')?'nav-tab-active':'' ?>"><?php echo  __('Import Wallets', 'fsww'); ?></a>
    <a href="<?php echo admin_url('admin.php?page=fsww-import-export&tab=' . 'export') ?>" class="nav-tab <?php echo ($current_tab=='export')?'nav-tab-active':'' ?>"><?php echo  __('Export Wallets', 'fsww'); ?></a>
    <a href="<?php echo admin_url('admin.php?page=fsww-import-export&tab=' . 'transactions-export') ?>" class="nav-tab <?php echo ($current_tab=='transactions-export')?'nav-tab-active':'' ?>"><?php echo  __('Export Transactions', 'fsww'); ?></a>
    <a href="<?php echo admin_url('admin.php?page=fsww-import-export&tab=' . 'withdrawal-export') ?>" class="nav-tab <?php echo ($current_tab=='withdrawal-export')?'nav-tab-active':'' ?>"><?php echo  __('Export Withdrawal Requests', 'fsww'); ?></a>
    </h2>
    
    
    <div class="postbox">
        <div class="inside">

            <?php 
            
            if(($current_tab == 'import') || ($current_tab == '')) {

                require_once(dirname(FSWW_FILE) . '/includes/import_export_pages/import.php');
    
            } elseif(($current_tab == 'export')) {
                
                require_once(dirname(FSWW_FILE) . '/includes/import_export_pages/export.php');
                
            } elseif(($current_tab == 'transactions-export')) {

                require_once(dirname(FSWW_FILE) . '/includes/import_export_pages/transactions-export.php');

            } elseif(($current_tab == 'withdrawal-export')) {

                require_once(dirname(FSWW_FILE) . '/includes/import_export_pages/withdrawal-export.php');

            } ?>
            
        </div>
    </div>
    
</div>