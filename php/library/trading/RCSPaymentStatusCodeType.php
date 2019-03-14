<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class RCSPaymentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Canceled = 'Canceled';
	const CodeType_Paid = 'Paid';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RCSPaymentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RCSPaymentStatusCodeType = new RCSPaymentStatusCodeType();
?>