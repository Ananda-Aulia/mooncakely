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
  border-radius: 15px;
  box-sizing: border-box;
}
.list-purchase{
  height:80px;
  margin:auto;
  border-color:grey;
  border-style:solid;
  border-width:thin;
  border-radius:10px;
}
.show-purchase-image{
  height:250px;
  width:auto;
  border-color:black;
  border-width:thin;
  border-style:solid;
  border-radius:20px;
}
.addout{ 
  margin:0; 
}
</style>
<div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content" style="padding-top:20px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="col-lg-6 col-12;" style="align-items: center">
            <div class="row" style="justify-content: center; border-radius:20px;padding:2px;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); background-color:#ededed;">
                <div class="col-12" style="padding:10px;">
                  <div class="row">
                    <div class="col-6">
                        <select class="form-control" id="sel1" style="border-radius:15px;">
                            <option disable selected hidden>Role Sales</option>
                            <option>Online Sales</option>
                            <option>Offline Sales</option>
                        </select>
                    </div>
                    <div class="col-6">
                      <div class="input-group mb-3">
                        <input style="border-radius:15px;" type="text" class="form-control" placeholder="NO.PO">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Nama Costumer">
                    </div>
                    <div class="col-6">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Kode Barang">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <select class="form-control" id="sel1" style="border-radius:15px;">
                        <option disable selected hidden>Pilih Kurir</option>
                        <option>JNE</option>
                        <option>J&T</option>
                        <option>Tiki</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <input style="border-radius:15px;" type="text" class="form-control" placeholder="Nama Supplier">
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input style="border-radius:15px;" type="text" class="form-control" placeholder="Tujuan Pengiriman">
                  </div>
                  <div class="addout">
                    QTY&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-danger col-1">-</button>
                    <input type="text" class="form-control text-center col-2" value="1">
                    <button type="submit" class="btn btn-success col-1">+</button>
                  </div>
                  <div class="row" style="margin-top:30px;">
                    <div class="col-md-6 col-6">
                      <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                    <div class="col-md-6 col-6">
                      <a href="/purchase"><button type="submit" class="btn float-right btn-outline-danger">Batal</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
@include('jquery')