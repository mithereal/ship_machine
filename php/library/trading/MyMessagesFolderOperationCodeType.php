<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MyMessagesFolderOperationCodeType extends EbatNs_FacetType
{
	const CodeType_Display = 'Display';
	const CodeType_Rename = 'Rename';
	const CodeType_Remove = 'Remove';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesFolderOperationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MyMessagesFolderOperationCodeType = new MyMessagesFolderOperationCodeType();
?>