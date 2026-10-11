<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function admin()    { return $this->workspace('admin', 'Admin Console'); }
    public function hr()       { return $this->workspace('hr', 'HR Suite'); }
    public function manager()  { return $this->workspace('manager', 'Manager View'); }
    public function employee() { return $this->workspace('employee', 'Employee Portal'); }

    private function workspace(string $name, string $title)
    {
        return view('workspace', compact('name', 'title'));
    }
}
