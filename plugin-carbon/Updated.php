<?php namespace Atomino\Carbon\Plugins\Updated;

use Atomino\Carbon\Generator\CodeWriter;
use Atomino\Carbon\Plugin\Plugin;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Updated extends Plugin{
	public function __construct(public $field = 'updated'){ }
	public function generate(\ReflectionClass $ENTITY, CodeWriter $codeWriter){
		$codeWriter->addAttribute('#[Protect("'.$this->field.'", true, false)]');
		$codeWriter->addAttribute('#[RequiredField("'.$this->field.'", \Atomino\Carbon\Field\DateTimeField::class)]');
	}
	public function getTrait():string|null{ return UpdatedTrait::class;}
}