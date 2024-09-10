@extends('dashboard.layout.main')

@section('container')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Code Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Code</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($codes as $code)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <a href="{{ route('tables', ['project_id' => $project->id, 'code_id' => $code->id]) }}" class="nav-link active">
                        
                          <p>{{ $code->code }}</p>
                          <td>{{ $code->description}}</td>
                          </a>
                      </td>
                      
                    </tr>
                   
                
                @endforeach

                
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <ul class="nav nav-treeview">
              
          </ul>
          </div>
          <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default5">Add New Code</a>

          <div class="modal fade" id="modal-default5">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add New data</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="/new-code">
                @csrf
                    <div class="card-body">
                      <input type="hidden" value="{{ $project_id }}" name="project_id">
                    <div class="form-group">
                        <label for="exampleInputNo">New Code</label>
                        <input type="No" class="form-control" id="exampleInputCode" name="code" placeholder="Enter Code">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPracticecode">Description</label>
                        <input type="Description" class="form-control" name="description" id="exampleInputDescription">
                      </div>
                      
    
                    <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Code</button>
                </div>
                  </form>
                </div>
                
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
    



@endsection