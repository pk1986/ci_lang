<?php
/**
 * Smarty {ci_lang} function plugin
 * @subpackage SmartyPlugins
 * @author Giovanni Luca Murabito <giovanniluca.murabito@gmail.com>
 * @param array parameters
 * @param Smarty
 * @return string The returned string from the Language CodeIgniter helper
 */

 /*
 Example usage:
 {ci_lang param1 = "Line of your lang file"}

 */

function smarty_function_ci_lang( $params, $smarty ) {

    if ( ! function_exists( 'get_instance') ) {
        return 'Can\'t get CI instance';
    }

    if (isset( $params['param2'] )) {
        return 'Please provide only one parameter';
    }

    if ( ! function_exists( $params['param1'] ) ) {
        $CI = get_instance();
        $CI->load->helper( 'language' );
    }

    return call_user_func_array( 'lang', array_values( $params ) );
}

?>  
