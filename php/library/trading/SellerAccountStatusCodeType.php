<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellerAccountStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Current = 'Current';
	const CodeType_PastDue = 'PastDue';
	const CodeType_OnHold = 'OnHold';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerAccountStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerAccountStatusCodeType = new SellerAccountStatusCodeType();
?>