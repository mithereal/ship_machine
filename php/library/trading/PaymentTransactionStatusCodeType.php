<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class PaymentTransactionStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Failed = 'Failed';
	const CodeType_Succeeded = 'Succeeded';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentTransactionStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentTransactionStatusCodeType = new PaymentTransactionStatusCodeType();
?>