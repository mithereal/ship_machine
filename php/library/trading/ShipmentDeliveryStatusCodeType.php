<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ShipmentDeliveryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Created = 'Created';
	const CodeType_DroppedOff = 'DroppedOff';
	const CodeType_InTransit = 'InTransit';
	const CodeType_Delivered = 'Delivered';
	const CodeType_Returned = 'Returned';
	const CodeType_Canceled = 'Canceled';
	const CodeType_LabelPrinted = 'LabelPrinted';
	const CodeType_Unconfirmed = 'Unconfirmed';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Error = 'Error';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShipmentDeliveryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShipmentDeliveryStatusCodeType = new ShipmentDeliveryStatusCodeType();
?>