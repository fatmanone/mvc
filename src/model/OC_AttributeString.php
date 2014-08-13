<?php
namespace mvc\Entities;
require_once 'OC_Attribute.php';

/**
 * @Entity @Table(name="attributes_string")
 **/
class OC_AttributeString extends OC_Attribute
{
	/**
	 @Column(type="string", length=512, unique=true, nullable=false)
	 */
	protected $value;

}
?>