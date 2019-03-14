<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ErrorClassificationCodeType extends EbatNs_FacetType
{
	const CodeType_RequestError = 'RequestError';
	const CodeType_SystemError = 'SystemError';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ErrorClassificationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ErrorClassificationCodeType = new ErrorClassificationCodeType();
?>