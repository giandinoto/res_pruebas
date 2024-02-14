<?php
/*
* Plugin Name: Pruebas
* Plugin URI: https://example.com/plugins/pruebas/
* Description: Este es un plugin de pruebas.
* Version: 1.10.3
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Ale Giandi
* Author URI: https://author.example.com/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: pruebas
* Domain Path: /languages
*/ 


// PLUGIN  ACTIVATE AND DESACTIVATE FUNCTIONS

function res_install() {
    //Acción
    requiere_once 'activador.php';
}
register_activation_hook( __FILE__, 'res_install' );


function res_desactivacion(){
    //To flush the permalinks or rewrite rules from your theme or plugin
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'res_desactivacion');
