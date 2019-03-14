<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DeviceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Platform = 'Platform';
	const CodeType_SMS = 'SMS';
	const CodeType_ClientAlerts = 'ClientAlerts';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DeviceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DeviceTypeCodeType = new DeviceTypeCodeType();
?>