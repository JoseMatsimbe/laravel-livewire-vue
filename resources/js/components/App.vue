<template>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Homepage</th>
                <th>Parent ID</th>
                <th>Author ID</th>
                <th>Identifier</th>
                <th>Status</th>
                <th>budget</th>
                <th>LFT</th>
                <th>RGT</th>
                <th>Inherit Members</th>
                <th>DV ID</th>
                <th>DA ID</th>
            </tr>
        </thead>
        <tbody>
                <tr v-for="value in list_of_projects" :key="value.id">
                    <th>{{value.project_id}}</th>
                    <td>{{value.name}}</td>
                    <td>{{value.description}}</td>
                    <td>{{value.homepage}}</td>
                    <td>{{value.parent_id}}</td>
                    <td>{{value.author_id}}</td>
                    <td>{{value.identifier}}</td>
                    <td>{{value.status}}</td>
                    <td>{{value.has_shared_budget}}</td>
                    <td>{{value.lft}}</td>
                    <td>{{value.rgt}}</td>
                    <td>{{value.inherit_members}}</td>
                    <td>{{value.default_version_id}}</td>
                    <td>{{value.default_assigned_to_id}}</td>
                </tr>
        </tbody>
    </table>

</template>

<script>
    const axios = require('axios').default;

    export default {
        data(){
            return{
                'project':{
                    'project_id' : '',
                    'name' : '',
                    'description' : '',
                    'homepage' : '',
                    'parent_id' : '',
                    'author_id' : '',
                    'identifier' : '',
                    'status' : '',
                    'has_shared_budget' :'',
                    'created_on' : '',
                    'updated_on' : '',
                    'lft' : '',
                    'rgt' : '',
                    'inherit_members' : '',
                    'default_version_id' : '',
                    'default_assigned_to_id' : '',
                },
                list_of_projects:[]
            };

        },
        mounted() {
            axios.get('list_of_projects').then((response)=>{
                this.list_of_projects = response.data
            }).catch((error) =>{
                console.log(error)
            });
        },

    }

</script>


