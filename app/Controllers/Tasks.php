<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $tasks = (new TaskModel())->where('is_archived', 0)->orderBy('task_date', 'ASC')->findAll();
        return view('tasks/index', ['title' => 'Task List', 'tasks' => $tasks]);
    }

    public function newTask()
    {
        return view('tasks/form', ['title' => 'New Task', 'task' => null, 'action' => '/tasks']);
    }

    public function create()
    {
        $data = $this->validatedTask();
        if ($data === null) return redirect()->back()->withInput();
        (new TaskModel())->insert($data);
        return redirect()->to('/tasks')->with('success', 'Task created successfully.');
    }

    public function edit(int $id)
    {
        $task = (new TaskModel())->where('is_archived', 0)->find($id);
        if (! $task) return redirect()->to('/tasks')->with('error', 'Task not found.');
        return view('tasks/form', ['title' => 'Edit Task', 'task' => $task, 'action' => "/tasks/{$id}/update"]);
    }

    public function update(int $id)
    {
        $model = new TaskModel();
        if (! $model->where('is_archived', 0)->find($id)) return redirect()->to('/tasks')->with('error', 'Task not found.');
        $data = $this->validatedTask();
        if ($data === null) return redirect()->back()->withInput();
        $model->update($id, $data);
        return redirect()->to('/tasks')->with('success', 'Task updated successfully.');
    }

    public function delete(int $id)
    {
        $model = new TaskModel();
        if ($model->where('is_archived', 0)->find($id)) {
            $model->update($id, ['is_archived' => 1]);
            return redirect()->to('/tasks')->with('success', 'Task archived successfully.');
        }
        return redirect()->to('/tasks')->with('error', 'Task not found.');
    }

    private function validatedTask(): ?array
    {
        $rules = [
            'title' => 'required|min_length[3]|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]',
            'description' => 'permit_empty|max_length[1000]',
            'status' => 'required|in_list[Pending,In Progress,Completed]',
        ];
        if (! $this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return null;
        }
        return [
            'title' => trim((string) $this->request->getPost('title')),
            'task_date' => $this->request->getPost('task_date'),
            'description' => trim((string) $this->request->getPost('description')),
            'status' => $this->request->getPost('status'),
        ];
    }
}
