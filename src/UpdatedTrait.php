<?php namespace Atomino\Molecules\EntityPlugin\Updated;

use Atomino\Entity\Attributes\EventHandler;
use Atomino\Entity\Entity;

/**
 * @method static \Atomino\Entity\Model model()
 */
trait UpdatedTrait{
	#[EventHandler(Entity::EVENT_BEFORE_INSERT, Entity::EVENT_BEFORE_UPDATE)]
	protected function UpdatedPlugin_BeforeInsert($event, $data){
		$this->{Updated::fetch(static::model())->field} = new \DateTime();
	}
}