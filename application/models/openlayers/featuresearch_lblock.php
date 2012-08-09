<?php

/**
 * MapIgniter
 *
 * An open source GeoCMS application
 *
 * @package		MapIgniter
 * @author		Marco Afonso
 * @copyright	Copyright (c) 2012, Marco Afonso
 * @license		dual license, one of two: Apache v2 or GPL
 * @link		http://marcoafonso.com/miwiki/doku.php
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

require_once APPPATH.'models/layout/lblock_model.php';

class Featuresearch_lblock extends Lblock_model {
    
    public function __construct() {
        parent::__construct();
        
        // Load language
        $this->lang->load('featuresearch', $this->session->userdata('lang'));
        
        $this->view = 'openlayers/searchblock';
        
        $this->scripts = array(
            base_url()."web/openlayers/featuresearch.js"
        );
        
    }
    
}

?>
