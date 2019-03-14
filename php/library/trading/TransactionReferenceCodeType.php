<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class TransactionReferenceCodeType extends EbatNs_FacetType
{
	const CodeType_ExternalTransactionID = 'ExternalTransactionID';
	const CodeType_MandateReferenceNumber = 'MandateReferenceNumber';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TransactionReferenceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TransactionReferenceCodeType = new TransactionReferenceCodeType();
?>