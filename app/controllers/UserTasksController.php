<?php
	class UserTasksController extends BaseController{
		public function index($username){
			$tasks= Task::byUsername($username);
			return View::make("tasks.index",compact("tasks"));	
		}

		public function show($username,$task_id)
		{
			$task = Task::find($task_id,$username);
			return View::make("tasks.show",compact("task"));
		}
	}
?>