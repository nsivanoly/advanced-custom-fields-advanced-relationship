<?php

/*
 * Plugin Name: Advanced Custom Fields: Advanced Relationship
 * Description: Enables the Full Post Objects [Specially targetted for Rest [Rendered Post]
 * Author: N Sivanoly
 * Author URI: https://github.com/nsivanoly
 * Version: 1.0.0
 * Plugin URI: https://github.com/nsivanoly/Advanced-Custom-Fields-Advanced-Relationship-REST
*/

class acf_field_advanced_relationship_plugin
{
    /*
    *  Construct
    *
    *  @description:
    *  @since: 3.6
    *  @created: 1/04/13
    */
    function __construct()
    {
        // set text domain
        /*
        $domain = 'acf-advanced_relationship';
        $mofile = trailingslashit(dirname(__File__)) . 'lang/' . $domain . '-' . get_locale() . '.mo';
        load_textdomain( $domain, $mofile );
        */
        // version 4+
        add_action('acf/register_fields', array($this, 'register_fields'));
        // version 5+
        add_action('acf/include_field_types', array($this, 'include_field_types_advanced_relationship') );
    }
    /*
    *  Init
    *
    *  @description:
    *  @since: 3.6
    *  @created: 1/04/13
    */
    function init()
    {
    }
    /*
    *  register_fields
    *
    *  @description:
    *  @since: 3.6
    *  @created: 1/04/13
    */
    function include_field_types_advanced_relationship() {
        include_once('acf-field-advanced-relationship-v5.php');
    }
}
new acf_field_advanced_relationship_plugin();