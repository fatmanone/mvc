<?php
/**
 * @Entity @Table(name="sattr")
 **/
class StringAttribute extends  Attribute 
{

  /** @Column(type="string") 
   *  @var string
   * 
   * **/	
    protected $val;
	
	
	
}

/**
 * @Entity @Table(name="tattr")
 **/
class TextAttribute extends  Attribute 
{

  /** @Column(type="string") 
   *  @var string
   * 
   * **/	
    protected $val;
	
	
	
}

?>