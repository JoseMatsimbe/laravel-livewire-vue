<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class ProjectsComponent extends Component
{
    public function index(){
        return  Projects::all();
    }
    public $project_id, $name, $description, $homepage, $parent_id, $author_id, $identifier, $status, $has_shared_budget, $created_on, $updated_on, $lft, $rgt, $inherit_members, $default_version_id, $default_assigned_to_id;

    //Input fields on update validation
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required|unique:projects',
            'name' => 'required|unique:projects',
            'description' => 'required',
            'homepage' => 'required',
            'parent_id' => 'required',
            'author_id' => 'required',
            'identifier' => 'required',
            'status' => 'required',

            'has_shared_budget' => 'required',
            'created_on' => 'required',
            'updated_on' => 'required',
            'lft' => 'required',
            'rgt' => 'required',
            'inherit_members' => 'required',
            'default_version_id' => 'required',
            'default_assigned_to_id' => 'required',
        ]);
    }


    public function storeProjectData()
    {
        //on form submit validation
        $this->validate([
            'project_id' => 'required|unique:projects',
            'name' => 'required|unique:projects',
            'description' => 'required',
            'homepage' => 'required',
            'parent_id' => 'required',
            'author_id' => 'required',
            'identifier' => 'required',
            'status' => 'required',
            'has_shared_budget' => 'required',
            'created_on' => 'required',
            'updated_on' => 'required',
            'lft' => 'required',
            'rgt' => 'required',
            'inherit_members' => 'required',
            'default_version_id' => 'required',
            'default_assigned_to_id' => 'required',
        ]);

        //Add Project Data
        $project = new Projects();

        $project->project_id = $this->project_id;
        $project->name = $this->name;
        $project->description = $this->description;
        $project->homepage = $this->homepage;
        $project->parent_id = $this->parent_id;
        $project->author_id = $this->author_id;
        $project->identifier = $this->identifier;
        $project->status = $this->status;
        $project->has_shared_budget = $this->has_shared_budget;
        $project->created_on = $this->created_on;
        $project->updated_on = $this->updated_on;
        $project->lft = $this->lft;
        $project->rgt = $this->rgt;
        $project->inherit_members = $this->inherit_members;
        $project->default_version_id = $this->default_version_id;
        $project->default_assigned_to_id = $this->default_assigned_to_id;


        $project->save();


        session()->flash('message','Project has been added successfully');


        $this->project_id = '';
        $this->name = '';
        $this->description = '';
        $this->homepage = '';
        $this->parent_id = '';
        $this->author_id = '';
        $this->identifier = '';
        $this->status = '';
        $this->has_shared_budget ='';
        $this->created_on = '';
        $this->updated_on = '';
        $this->lft = '';
        $this->rgt = '';
        $this->inherit_members = '';
        $this->default_version_id = '';
        $this->default_assigned_to_id = '';

        //For hide modal after add Project success
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInputs()
    {
        $this->project_id = '';
        $this->name = '';
        $this->description = '';
        $this->homepage = '';
        $this->parent_id = '';
        $this->author_id = '';
        $this->identifier = '';
        $this->status = '';
        $this->has_shared_budget ='';
        $this->created_on = '';
        $this->updated_on = '';
        $this->lft = '';
        $this->rgt = '';
        $this->inherit_members = '';
        $this->default_version_id = '';
        $this->default_assigned_to_id = '';
    }

    public function close()
    {
        $this->resetInputs();
    }


    public function viewProjectDetails($id)
    {
        $project = Projects::where('id', $id)->first();

        $this->view_project_id = $project->project_id;
        $this->view_project_name = $project->name;
        $this->view_project_email = $project->email;
        $this->view_project_phone = $project->phone;

        $this->dispatchBrowserEvent('show-view-project-modal');
    }

    public function closeViewProjectModal()
    {

        $this->view_project_id= '';
        $this->view_project_name= '';
        $this->view_project_description= '';
        $this->view_project_parent_id= '';
        $this->view_project_author_id= '';
        $this->view_project_identifier= '';
        $this->view_project_status= '';
    }
    public function render()
    {
        return view('livewire.projects-component')->layout('livewire.layouts.base');
    }
}
