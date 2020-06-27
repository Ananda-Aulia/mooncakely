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
                <div class="small-box bg-danger " style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                    <div class="row" style="padding:15px;">
                        <div class="col-lg-3 col-4">
                            <img src="https://i.pinimg.com/564x/68/e6/8e/68e68e0bc63e99c6288b26e13ea97209.jpg" class="gambar">
                        </div>
                        <div class="col">
                            <h5 class="deskripsi-purchase"><strong>Himeko</strong></h5>
                            <h6 class="deskripsi-purchase">Email : himeko@mail.aru</h6>
                            <h6 class="deskripsi-purchase">Telepon : 666 - 777 888</h6>
                        </div>
                    </div>
                </div>
          </div>
          <div class="col-lg-6 col-12">
            <!-- small box -->
                <div class="small-box bg-success " style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                    <div class="row" style="padding:15px;">
                        <div class="col-lg-3 col-4">
                            <img src="https://static.zerochan.net/Midoriya.Izuku.full.2574053.jpg" class="gambar">
                        </div>
                        <div class="col">
                            <h5 class="deskripsi-purchase"><strong>Midoriya</strong></h5>
                            <h6 class="deskripsi-purchase">Email : deku@mail.desu</h6>
                            <h6 class="deskripsi-purchase">Telepon : + Ultra</h6>
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