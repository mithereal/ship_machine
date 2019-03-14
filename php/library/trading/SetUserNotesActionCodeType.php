<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SetUserNotesActionCodeType extends EbatNs_FacetType
{
	const CodeType_AddOrUpdate = 'AddOrUpdate';
	const CodeType_Delete = 'Delete';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SetUserNotesActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SetUserNotesActionCodeType = new SetUserNotesActionCodeType();
?>