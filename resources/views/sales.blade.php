@include('stylelink')
@include('sidebar')
@include('navbar')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .deskripsi-purchase{
      text-align:left;
      line-height: normal;
  }
  .open-button {
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
}
.gambar{
    height: 100px;
    width: auto;

}
.icon{
  height: 30px;
  width: 30px;
}
</style>
<div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="col">
    <section class="content" style="padding-top:20px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-danger " style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
              <div class="row" style="padding:15px;">
                <div class="col-lg-4 col-4">
                    <img src="https://www.mariowiki.com/images/thumb/f/fc/ItemBoxMK8.png/1200px-ItemBoxMK8.png" class="gambar" alt="kotak">
                </div>
                <div class="col">
                    <div class="row">
                      <div class="col-8">
                        <h5 class="deskripsi-purchase"><strong>[Nama Customer]</strong></h5>
                      </div>
                      <div class="col-4">
                        <img src="https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_1280.png" class="icon float-right" alt="icon">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8">
                        <div class="deskripsi-purchase">[NO. PO]</div>
                      </div>
                      <div class="col">
                        <div class="deskripsi-purchase pull-right">[Code]</div>
                      </div>
                    </div>
                    <div class="deskripsi-purchase">[Quantity]</div>
                    <div class="deskripsi-purchase">[Tujuan Pengiriman]</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
    <div class="col"> 
      <div class="open-button">
        <a href="/addsales">
        <button class="w3-button w3-xlarge w3-circle w3-red w3-card-4 fab-container" >+</button></a>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('jquery')