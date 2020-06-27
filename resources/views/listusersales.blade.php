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
                            <img src="https://i.pinimg.com/originals/40/13/e0/4013e06414be061b44c4e1a82fa55b28.jpg" class="gambar">
                        </div>
                        <div class="col">
                            <h5 class="deskripsi-purchase"><strong>Yaoyorozu</strong></h5>
                            <h6 class="deskripsi-purchase">Email : momo@mail.shoto</h6>
                            <h6 class="deskripsi-purchase">Telepon : 111 1111 111</h6>
                        </div>
                    </div>
                </div>
          </div>
          <div class="col-lg-6 col-12">
            <!-- small box -->
                <div class="small-box bg-info " style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                    <div class="row" style="padding:15px;">
                        <div class="col-lg-3 col-4">
                            <img src="https://a.wattpad.com/cover/150286197-352-k797505.jpg" class="gambar">
                        </div>
                        <div class="col">
                            <h5 class="deskripsi-purchase"><strong>Todoroki</strong></h5>
                            <h6 class="deskripsi-purchase">Email : hanbun@mail.half</h6>
                            <h6 class="deskripsi-purchase">Telepon : umm</h6>
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