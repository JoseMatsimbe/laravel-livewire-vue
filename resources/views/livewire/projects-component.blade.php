<div>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h3><strong>Laravel (Livewire & Vue.js)</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Projects</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addProjectModal">Add New Project</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                            <div id="example"></div>
                        @endif

                        <div id="example"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addProjectModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="storeProjectData">
                        <div class="form-group row">
                            <label for="project_id" class="col-3">Project ID</label>
                            <div class="col-9">
                                <input type="number" id="project_id" class="form-control" wire:model="project_id">
                                @error('project_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-3">Name</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="name">
                                @error('name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-3">Description</label>
                            <div class="col-9">
                                <input type="text" id="description" class="form-control" wire:model="description">
                                @error('description')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="homepage" class="col-3">Homepage</label>
                            <div class="col-9">
                                <input type="text" id="homepage" class="form-control" wire:model="homepage">
                                @error('homepage')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parent_id" class="col-3">Parent id</label>
                            <div class="col-9">
                                <input type="text" id="parent_id" class="form-control" wire:model="parent_id">
                                @error('parent_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author_id" class="col-3">Author Id</label>
                            <div class="col-9">
                                <input type="text" id="author_id" class="form-control" wire:model="author_id">
                                @error('author_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="identifier" class="col-3">Identifier</label>
                            <div class="col-9">
                                <input type="text" id="identifier" class="form-control" wire:model="identifier">
                                @error('identifier')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-3">Status</label>
                            <div class="col-9">
                                <input type="text" id="status" class="form-control" wire:model="status">
                                @error('status')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="has_shared_budget" class="col-3">Has shared budget</label>
                            <div class="col-9">
                                <input type="text" id="has_shared_budget" class="form-control" wire:model="has_shared_budget">
                                @error('has_shared_budget')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="created_on" class="col-3">Created on</label>
                            <div class="col-9">
                                <input type="text" id="created_on" class="form-control" wire:model="created_on">
                                @error('created_on')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="updated_on" class="col-3">Updated on</label>
                            <div class="col-9">
                                <input type="text" id="updated_on" class="form-control" wire:model="updated_on">
                                @error('updated_on')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lft" class="col-3">LFT</label>
                            <div class="col-9">
                                <input type="text" id="lft" class="form-control" wire:model="lft">
                                @error('lft')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rgt" class="col-3">RGT</label>
                            <div class="col-9">
                                <input type="text" id="rgt" class="form-control" wire:model="rgt">
                                @error('rgt')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inherit_members" class="col-3">Inherit members</label>
                            <div class="col-9">
                                <input type="text" id="inherit_members" class="form-control" wire:model="inherit_members">
                                @error('inherit_members')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="default_version_id" class="col-3">Default Version ID</label>
                            <div class="col-9">
                                <input type="text" id="default_version_id" class="form-control" wire:model="default_version_id">
                                @error('default_version_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="default_assigned_to_id" class="col-3">Default Assigned to ID</label>
                            <div class="col-9">
                                <input type="text" id="default_assigned_to_id" class="form-control" wire:model="default_assigned_to_id">
                                @error('default_assigned_to_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Add Project</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
@push('scripts')
    <script src="{{ mix('/js/app.js')}}"></script>


    <script>
        window.addEventListener('close-modal', event =>{
            $('#addProjectModal').modal('hide');

        });

    </script>
@endpush
