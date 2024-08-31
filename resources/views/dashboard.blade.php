@extends('layouts.master')
@section('content')



<div class="col-lg-6 mt-3">
    <div class="card">
        <div class="card-body ">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h1 class="header-title">Roles</h1>
                </li>
                <li class="list-inline-item"><button type="button" class="btn btn-outline-success waves-effect waves-light btn-xs" data-bs-toggle="modal" data-bs-target="#roleAdd">Add Role</button></li>
            </ul>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><button type="button" value="edit" class="btn btn-outline-info waves-effect waves-light btn-xs" data-bs-toggle="modal" data-bs-target="#roleEdit">Edit</button></li>
                                    <li class="list-inline-item"><button type="button" value="delete" class="btn btn-outline-danger waves-effect waves-light btn-xs" data-bs-toggle="modal" data-bs-target="#danger-alert-modal">Delete</button></li>



                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><button type="button" value="edit" class="btn btn-outline-info waves-effect waves-light btn-xs ">Edit</button></li>
                                    <li class="list-inline-item"><button type="button" value="delete" class="btn btn-outline-danger waves-effect waves-light btn-xs ">Delete</button></li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><button type="button" value="edit" class="btn btn-outline-info waves-effect waves-light btn-xs ">Edit</button></li>
                                    <li class="list-inline-item"><button type="button" value="delete" class="btn btn-outline-danger waves-effect waves-light btn-xs ">Delete</button></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->
        </div>
    </div> <!-- end card -->
</div> <!-- end col -->






<!-- Role Add modal content -->
<div id="roleAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Role</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="role-add" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role-add" placeholder="Role">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success waves-effect waves-light">Add Role</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Role Edit modal content -->
<div id="roleEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
                            <label for="role-edit" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role-edit" placeholder="Role">
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Update Role</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->



<!-- Danger Alert Modal -->
<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-white"></i>
                    <h4 class="mt-2 text-white">Caution!</h4>
                    <p class="mt-3 text-white">This action will delete this data !</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-dark waves-effect waves-light">Delete</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection