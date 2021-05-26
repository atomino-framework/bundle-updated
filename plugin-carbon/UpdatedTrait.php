<?php namespace Atomino\Carbon\Plugins\Updated;

use Atomino\Carbon\Attributes\EventHandler;
use Atomino\Carbon\Entity;

/**
 * @method static \Atomino\Carbon\Model model()
 */
trait UpdatedTrait{
	#[EventHandler(Entity::EVENT_BEFORE_INSERT, Entity::EVENT_BEFORE_UPDATE)]
	protected function UpdatedPlugin_BeforeInsert($event, $data){
		$this->{Updated::fetch(static::model())->field} = new \DateTime();
	}
}