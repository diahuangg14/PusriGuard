@extends('dashboard.layout.main')

@section('container')



<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pengisian Data Audit Departement TI PSP</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Practice Code</th>
                      <th style="width: 10rem;word-wrap: break-word;">Activities</th>
                      <th>Evidence</th>
                      <th>Attachments</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pusris as $pusri)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $pusri->practice_code}}</td>
                      <td>{{ $pusri->activities}}</td>
                      <td>{{ $pusri->evidence}}</td>
                      <td>

                        @if ($pusri->attachment == NULL)
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-upload{{ $pusri->id }}" data-pusri="{{ json_encode($pusri) }}">Upload</a>

                        @else
                        <a href="{{ asset($pusri->attachment) }}" type="button" class="btn btn-primary">Lihat File</a>

                        @endif
                    </td>
                      <td>{{ $pusri->date }}</td>
                      <td>
                        <form method="post" enctype="multipart/form-data" action="/delete-code/{{ $pusri->id }}">
                          @csrf
                        
                        <button style="border: none;background-color:rgba(0,0,0,0);color: red" type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data?');"><i class="bi bi-trash"></i></button>
                      </form>
                       
                        <a href="#" data-toggle="modal" data-target="#modal-edit{{ $pusri->id }}" ><i class="bi bi-pencil"></i></a>
                    </td>
                    </tr>
                        
                    <div class="modal fade" id="modal-upload{{ $pusri->id }}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">upload file</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form method="post" enctype="multipart/form-data" action="/upload-file">
                            @csrf
                              <div class="card-body">
                                <input type="hidden" value="{{ $pusri->id }}" name="id" id="id">
                                <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="attachment" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPracticecode">Tanggal</label>
                                  <input type="date" class="form-control" name="date" id="exampleInputPracticecode">
                                </div>
                              </div> 
                              <!-- /.card-body -->
              
                              <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload File</button>
                          </div>
                            </form>
                          </div>
                          
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
              
                    
                    <div class="modal fade" id="modal-edit{{ $pusri->id }}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form method="post" enctype="multipart/form-data" action="/edit-code">
                            @csrf
                              <div class="card-body">
                                <input type="hidden" value="{{ $pusri->id }}" name="id" id="id">

                                <div class="form-group">
                                  <label for="exampleInputPracticecode">Practice code</label>
                                  <input type="text" class="form-control" name="practice_code" value="{{ $pusri->practice_code }}" id="exampleInputPracticecode" placeholder="Example: BAI09,MEI230,etc">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputActivities">Activities</label>
                                  <input type="text" class="form-control" name="activities" value="{{ $pusri->activities }}" id="exampleInputActivities">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEvidence">Evidence</label>
                                  <input type="text" class="form-control" name="evidence" value="{{ $pusri->evidence }}" id="exampleInputEvidence">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputAttachments">Attachments</label>
                                  <small>abaikan jika tidak ingin mengubah file</small>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="attachment" value="{{ $pusri->attachment }}" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPracticecode">Tanggal</label>
                                  <input type="date" class="form-control" name="date" value="{{ $pusri->date }}" id="exampleInputPracticecode">
                                </div>
                              </div>
                              <!-- /.card-body -->
              
                              <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                          </div>
                            </form>
                          </div>
                          
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    

                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        
        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default2">Add new data</a>
        

      <div class="modal fade" id="modal-default2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" enctype="multipart/form-data" action="/new-data">
              @csrf
                <div class="card-body">
                  <input type="hidden" value="{{ $project_id }}" name="project_id">
                  <input type="hidden" value="{{ $code_id }}" name="code_id">  
                  <div class="form-group">
                    <label for="exampleInputPracticecode">Practice code</label>
                    <input type="text" class="form-control" name="practice_code" id="exampleInputPracticecode" placeholder="Example: BAI09,MEI230,etc">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputActivities">Activities</label>
                    <input type="text" class="form-control" name="activities" id="exampleInputActivities">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEvidence">Evidence</label>
                    <input type="text" class="form-control" name="evidence" id="exampleInputEvidence">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Data</button>
            </div>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>  

      
      
        @endsection