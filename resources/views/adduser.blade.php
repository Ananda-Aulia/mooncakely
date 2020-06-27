@include('stylelink')
@include('sidebar')
@include('navbar')
<style>
  input[type=text], select {
  width: 100%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
<div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content" style="padding-top:20px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" style="justify-content: center;">
          <div class="col-lg-5 col-12" style="align-items: center;">
            <!-- small box -->
            <div style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); background-color:#ededed; border-radius:20px;">
              <div class="inner">
                <!-- Input addon -->
                <div class="card card-info" style=" border-radius:20px;">
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="input-group mb-3">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Telp">
                    </div>
                    <select class="form-control" id="sel1" style="border-radius:15px;">
                      <option disable selected hidden>Select Role</option>
                      <option>Purchase</option>
                      <option>Sales</option>
                      <option>Warehouse</option>
                    </select>
                    <button type="button" class="btn btn-block btn-outline-primary" style="margin-top:20px; border-radius:15px;" data-toggle="modal" data-target="#myModal">Submit</button>
                    <div class="container">
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah data yang anda masukkan sudah benar?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-submit="modal">Iya</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
@include('jquery')
