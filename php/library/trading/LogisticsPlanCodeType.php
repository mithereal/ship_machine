<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class LogisticsPlanCodeType extends EbatNs_FacetType
{
	const CodeType_PickUpDropOff = 'PickUpDropOff';
	const CodeType_DigitalDelivery = 'DigitalDelivery';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('LogisticsPlanCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_LogisticsPlanCodeType = new LogisticsPlanCodeType();
?>