<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellingManagerPaisaPayPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PaisaPayAwaitingShipment = 'PaisaPayAwaitingShipment';
	const CodeType_PaisaPayTimeExtensionRequestDeclined = 'PaisaPayTimeExtensionRequestDeclined';
	const CodeType_PaisaPayPendingReceived = 'PaisaPayPendingReceived';
	const CodeType_PaisaPayRefundInitiated = 'PaisaPayRefundInitiated';
	const CodeType_PaisaPayTimeExtensionRequested = 'PaisaPayTimeExtensionRequested';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerPaisaPayPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerPaisaPayPropertyTypeCodeType = new SellingManagerPaisaPayPropertyTypeCodeType();
?>