<?php

class TasksController {
    public function index () {
        global $app;
        $tasks = $app['database']->selectAll('todos');
        return view('tasks', ['tasks' => $tasks]);
    }
    public function store () {
        global $app;
        $app['database']->insert('todos', [
            'description' => $_POST['description'],
        ]);
        return redirect('tasks');
    }
    public function edit () {
        global $app;
        $task = $app['database']->selectById('tasks', $_GET['id']);
        return view('edit-task', ['task' => $task]);
    }
    public function update () {
        global $app;
        $app['database']->update('tasks', $_POST['id'], [
            'task' => $_POST['task'],
        ]);
        return redirect('tasks');
    }
    public function delete () {
        global $app;
        $app['database']->delete('tasks', $_GET['id']);
        return redirect('tasks');
    }
}
