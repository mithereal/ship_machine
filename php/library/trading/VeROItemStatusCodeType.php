<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class VeROItemStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Received = 'Received';
	const CodeType_Submitted = 'Submitted';
	const CodeType_Removed = 'Removed';
	const CodeType_SubmissionFailed = 'SubmissionFailed';
	const CodeType_ClarificationRequired = 'ClarificationRequired';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('VeROItemStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_VeROItemStatusCodeType = new VeROItemStatusCodeType();
?>