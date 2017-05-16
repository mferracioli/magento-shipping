<?php
class Cammino_Shipping_Model_Source_Correios_Services
{
    public function toOptionArray()
    {

    	$confUser = Mage::getStoreConfig('carriers/correios/user');
    	$confPass = Mage::getStoreConfig('carriers/correios/pass');
    	$services = null;

    	if ( !empty($confUser) && !empty($confPass) ) {
			$services = array(
				// PAC
				array("value"=>"41106", "label"=>"PAC"),
				array("value"=>"41211", "label"=>"PAC (com contrato) 41211"),
				array("value"=>"41068", "label"=>"PAC (com contrato) 41068"),
				array("value"=>"4669", "label"=>"PAC (com contrato) 4669"),
				
				// SEDEX
				array("value"=>"40010", "label"=>"SEDEX"),
				array("value"=>"40096", "label"=>"SEDEX (com contrato) 40096"),
				array("value"=>"40436", "label"=>"SEDEX (com contrato) 40436"),
				array("value"=>"40444", "label"=>"SEDEX (com contrato) 40444"),
				array("value"=>"40568", "label"=>"SEDEX (com contrato) 40568"),
				array("value"=>"40606", "label"=>"SEDEX (com contrato) 40606"),
				array("value"=>"4162", "label"=>"SEDEX (com contrato) 4162"),

				array("value"=>"40215", "label"=>"SEDEX 10"),
				array("value"=>"40290", "label"=>"SEDEX Hoje"),
				
				// e-SEDEX
				array("value"=>"81019", "label"=>"e-SEDEX"),
				array("value"=>"81868", "label"=>"e-SEDEX (Grupo 1)"),
				array("value"=>"81833", "label"=>"e-SEDEX (Grupo 2)"),
				array("value"=>"81850", "label"=>"e-SEDEX (Grupo 3)"),

				// Carta Registrada
				array("value"=>"10014", "label"=>"Carta Registrada")
	        );    		
    	} else {
    		$services = array(
				array("value"=>"41106", "label"=>"PAC"),
				array("value"=>"40010", "label"=>"SEDEX"),
				array("value"=>"40215", "label"=>"SEDEX 10"),
				array("value"=>"40290", "label"=>"SEDEX Hoje"),
				array("value"=>"10014", "label"=>"Carta Registrada")
	        );
    	}

    	return $services;

        
    }
}