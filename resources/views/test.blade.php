@extends('layouts.master')
@section('content')





<div class="col-lg-6 mt-3">
    <div class="card">
        <div class="card-body ">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h1 class="header-title">Roles</h1>
                </li>
                <li class="list-inline-item"><button type="button" class="btn btn-outline-success waves-effect waves-light btn-xs ">Add Role</button></li>
            </ul>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><button type="button" value="edit" class="btn btn-outline-info waves-effect waves-light btn-xs " data-bs-toggle="modal" data-bs-target="#con-close-modal">Edit</button></li>
                                    <li class="list-inline-item"><button type="button" value="delete" class="btn btn-outline-danger waves-effect waves-light btn-xs " data-bs-toggle="modal" data-bs-target="#con-delete-modal">Delete</button></li>
                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> <!-- end table-responsive-->
        </div>
    </div> <!-- end card -->
</div> <!-- end col -->




<!-- create role -->

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Role</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="field-3" class="form-label">Name</label>
                            <input type="text" class="form-control" id="createName" placeholder="Name" name="createName">
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->


<!-- create role -->

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Role</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="field-3" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editName" placeholder="Name" name="editName">
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<div id="con-delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Role</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="field-3" class="form-label">Role Name</label>
                            <input type="text" class="form-control" id="deleteName" placeholder="Name" name="deleteName">
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->










@endsection