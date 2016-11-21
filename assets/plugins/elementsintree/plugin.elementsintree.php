<?php
/**
 * ElementsInTree
 *
 * Get access to all Elements and Modules inside Manager sidebar
 *
 */

if(!defined('MODX_BASE_PATH')) die('What are you doing? Get out of here!');

$inc_path = str_replace('\\','/',dirname(__FILE__)) . '/includes/';
include_once($inc_path.'functions.inc.php');

global $_lang;

$e = &$modx->event;

if(!isset($_SESSION['elementsInTree'])) $_SESSION['elementsInTree'] = array();

// Set reloadTree = true for this events
if( in_array($e->name, array(
        'OnTempFormSave',
        'OnTVFormSave',
        'OnChunkFormSave',
        'OnSnipFormSave',
        'OnPluginFormSave',
        'OnModFormSave',

        'OnTempFormDelete',
        'OnTVFormDelete',
        'OnChunkFormDelete',
        'OnSnipFormDelete',
        'OnPluginFormDelete',
        'OnModFormDelete',

    )) || $_GET['r'] == 2) {
    $_SESSION['elementsInTree']['reloadTree'] = true;
}

// Trigger reloading tree for relevant actions
if ( $e->name == 'OnManagerMainFrameHeaderHTMLBlock' )        include($inc_path.'on_manager_main_frame_header_html_block.inc.php');
// Main elementsInTree-part
if ( $e->name == 'OnManagerTreePrerender')                    include($inc_path.'on_manager_tree_prerender.inc.php');

if ( $e->name == 'OnManagerTreeRender' && hasAnyPermission()) include($inc_path.'on_manager_tree_render.inc.php');
