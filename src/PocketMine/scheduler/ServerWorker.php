<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team

 *
 *
*/

namespace PocketMine\Scheduler;

use PocketMine\Plugin\Plugin;

class ServerWorker{
	private $asyncTask;
	private $thread;

	/**
	 * @param ServerAsyncTask $asyncTask
	 * @param \Thread         $thread
	 */
	public function __construct(ServerAsyncTask $asyncTask, \Thread $thread){
		$this->asyncTask = $asyncTask;
		$this->thread = $thread;
	}

	public function __destruct(){
		unset($this->asyncTask, $this->thread);
	}

	/**
	 * @return int
	 */
	public function getTaskId(){
		return $this->asyncTask->getTaskId();
	}

	/**
	 * @return Plugin;
	 */
	public function getOwner(){
		return $this->asyncTask->getOwner();
	}

	/**
	 * @return \Thread
	 */
	public function getThread(){
		//TODO
	}
}