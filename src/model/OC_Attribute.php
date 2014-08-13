<?php
namespace mvc\Entities;
require_once 'OC_Entity.php';

/**
 * @Entity @Table(name="attributes")
 **/
class OC_Attribute extends OC_Entity
{

	/**
	 * @ManyToMany(targetEntity="OC_Attribute")
	 **/
	protected $attributes;



}
?>