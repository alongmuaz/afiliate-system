@extends('main.dashboard')
@section('data')
<div class="form-group row add">
    <div class="col-md-12">
        <h1>Simple Laravel Vue JS Crud</h1>
    </div>
    <div class="cold-md-12">
        <button type="button" data-toggle="modal" data-target="#create-item"
                class="btn btn-primary">
            Create New Post
        </button>
    </div>



</div>

<div class="row">
    <div class="table-responsive">
        <table class="table table-borderless">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <tr v-for="item in items">
                <td>@{{ { item.title }}</td>
                <td>@{{ item.description }}</td>
                <td>
                    <button class="edit-model btn btn-warning" @click.prevent="editItem(item)">
                        <span class="glyphicon glyphicon-edit"></span>Edit
                    </button>
                    <button class="edit-model btn btn-warning" @click.prevent="deleteItem(item)">
                        <span class="glyphicon glyphicon-trash"></span>Delete
                    </button>
                </td>
            </tr>

        </table>
    </div>
</div>

    <nav>
        <ul class="pagination">
            <li v-if="pagination.current_page > 1 ">
            <a href="#" aria-label="Previous" @click.prevent="changePage(pagination.current_page - 1)">
                <span aria-hidden="true"> << </span>
            </a>
            </li>
            <li v-for="page in pagesNumber" v-bind:class="[ page == isActivated ? 'active' : '']">
                <a href="#" @click.prevent="changePage(page)" >
                    @{{  page }}
                </a>
            </li>
            <li v-if="pagination.current_page < pagination.last_page ">
                <a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
                    <span aria-hidden="true"> >> </span>
                </a>
            </li>
        </ul>
    </nav>


    @endsection