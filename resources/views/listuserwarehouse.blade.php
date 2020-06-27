@include('stylelink')
@include('sidebar')
@include('navbar')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .deskripsi-purchase{
      text-align:left;
  }
.gambar{
    height: 100px;
    width: auto;

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
                <div class="small-box" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); background-color:brown; color:white;">
                    <div class="row" style="padding:15px;">
                        <div class="col-lg-3 col-4">
                            <img src="https://static.zerochan.net/Uraraka.Ochako.full.2289539.jpg" class="gambar">
                        </div>
                        <div class="col">
                            <h5 class="deskripsi-purchase"><strong>Uraraka</strong></h5>
                            <h6 class="deskripsi-purchase">Email : Ochako@mail.deku</h6>
                            <h6 class="deskripsi-purchase">Telepon : 333 333 333</h6>
                        </div>
                    </div>
                </div>
          </div>
          <div class="col-lg-6 col-12">
            <!-- small box -->
                <div class="small-box bg-warning " style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                    <div class="row" style="padding:15px;">
                        <div class="col-lg-3 col-4">
                            <img src="https://i.quotev.com/img/q/u/18/6/23/ypetkdhxxr.jpg" class="gambar">
                        </div>
                        <div class="col">
                            <h5 class="deskripsi-purchase"><strong>Bakugo</strong></h5>
                            <h6 class="deskripsi-purchase">Email : BOOOM@mail.DOR</h6>
                            <h6 class="deskripsi-purchase">Telepon : HAAAAAAA</h6>
                        </div>
                    </div>
                </div>
          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
  </div>
  <!-- /.content-wrapper -->
@include('jquery')