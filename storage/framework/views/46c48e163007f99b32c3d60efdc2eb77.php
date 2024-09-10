<?php $__env->startSection('container'); ?>



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
                    <?php $__currentLoopData = $pusris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pusri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($loop->iteration); ?></th>
                      <td><?php echo e($pusri->practice_code); ?></td>
                      <td><?php echo e($pusri->activities); ?></td>
                      <td><?php echo e($pusri->evidence); ?></td>
                      <td>

                        <?php if($pusri->attachment == NULL): ?>
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-upload<?php echo e($pusri->id); ?>" data-pusri="<?php echo e(json_encode($pusri)); ?>">Upload</a>

                        <?php else: ?>
                        <a href="<?php echo e(asset($pusri->attachment)); ?>" type="button" class="btn btn-primary">Lihat File</a>

                        <?php endif; ?>
                    </td>
                      <td><?php echo e($pusri->date); ?></td>
                      <td>
                        <form method="post" enctype="multipart/form-data" action="/delete-code/<?php echo e($pusri->id); ?>">
                          <?php echo csrf_field(); ?>
                        
                        <button style="border: none;background-color:rgba(0,0,0,0);color: red" type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data?');"><i class="bi bi-trash"></i></button>
                      </form>
                       
                        <a href="#" data-toggle="modal" data-target="#modal-edit<?php echo e($pusri->id); ?>" ><i class="bi bi-pencil"></i></a>
                    </td>
                    </tr>
                        
                    <div class="modal fade" id="modal-upload<?php echo e($pusri->id); ?>">
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
                            <?php echo csrf_field(); ?>
                              <div class="card-body">
                                <input type="hidden" value="<?php echo e($pusri->id); ?>" name="id" id="id">
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
              
                    
                    <div class="modal fade" id="modal-edit<?php echo e($pusri->id); ?>">
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
                            <?php echo csrf_field(); ?>
                              <div class="card-body">
                                <input type="hidden" value="<?php echo e($pusri->id); ?>" name="id" id="id">

                                <div class="form-group">
                                  <label for="exampleInputPracticecode">Practice code</label>
                                  <input type="text" class="form-control" name="practice_code" value="<?php echo e($pusri->practice_code); ?>" id="exampleInputPracticecode" placeholder="Example: BAI09,MEI230,etc">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputActivities">Activities</label>
                                  <input type="text" class="form-control" name="activities" value="<?php echo e($pusri->activities); ?>" id="exampleInputActivities">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEvidence">Evidence</label>
                                  <input type="text" class="form-control" name="evidence" value="<?php echo e($pusri->evidence); ?>" id="exampleInputEvidence">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputAttachments">Attachments</label>
                                  <small>abaikan jika tidak ingin mengubah file</small>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="attachment" value="<?php echo e($pusri->attachment); ?>" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPracticecode">Tanggal</label>
                                  <input type="date" class="form-control" name="date" value="<?php echo e($pusri->date); ?>" id="exampleInputPracticecode">
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
                    

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php echo csrf_field(); ?>
                <div class="card-body">
                  <input type="hidden" value="<?php echo e($project_id); ?>" name="project_id">
                  <input type="hidden" value="<?php echo e($code_id); ?>" name="code_id">  
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

      
      
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pusri1\resources\views/dashboard/tables.blade.php ENDPATH**/ ?>