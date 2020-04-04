@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $tot_produk }}</h3>

              <p>Total produk</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $tot_po }}<sup style="font-size: 20px">%</sup></h3>

              <p>Total PO</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $tot_supplier }}</h3>

              <p>Total Supplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $tot_gr }}</h3>

              <p>Good Receipt</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      </div>

          <div class="col-md-12">
            <div class="box box-solid box-primary">
              <div class="box-header">
                <b class="box-title">PT. JVC ELECTRONICS INDONESIA</b> <hr>
                  <div class="entry-header-custom-left">
                    <p class="address "><label>Alamat: </label>
                      <span id="frontend_address" class="listing_custom frontend_address">Jl. Surya Lestari Kav. 1-16B Suryacipta City of Industry, Ciampel Karawang 41361 Jawa Barat</span>
										</p>
                    <p class="email "><label>Email: </label>
                      <span class="entry-email frontend_email listing_custom">yamaya-yuichi@jvckenwood.com</span>
                    </p>

                    <div class="social-share-link-wrap clearfix">
                      <span class="listing_custom">
                        <div class="share_link"></div>	
                          <script>
                            jQuery('.share_link').each(function() {
                              if ( jQuery.trim( jQuery(this).text() ).length == 0 ) {
                                if ( jQuery(this).children().length == 0 ) {
                                  jQuery(this).text('');
                                  // $(this).remove(); // remove empty paragraphs
                                }
                              }
                            });
                          </script>
                            <!--Directory Share Link Coding End -->
                      </span>    
                    </div>
                    <p class="custom_header_field phone" itemprop="phone">
                       <label>Telepon:</label><span>(0267) 440520</span>  
                    </p>
									  <p class="custom_header_field fax" itemprop="fax">
                       <label>Fax: </label><span>(0267) 440522 </span>  
                    </p>
                      <p style="text-align:center">
                     <b> PT. JVC ELECTRONIC INDONESIA (JVC KENWOOD) </b></p>
                     <p style="text-align:center"> Merupakan sebuah perusahaan yang menghasilkan berbagai macam barang elektronik yang bermarkas di Yokohama, Jepang yang didirikan pada tahun 1927. Perusahaan ini merupakan penghasil televisi dan video recorder pertama. Didirikan pada tahun 1927 dengan nama "The Victor Talking Machine Company of Japan, Limited".Victor Company of Japan, Limited (日本ビクター株式会社 Nippon Bikutā Kabushiki-gaisha) (TYO: 6792), atau biasanya dipanggil JVC merupakan sebuah perusahaan yang menghasilkan berbagai macam barang elektronik yang bermarkas di Yokohama, Jepang yang didirikan pada tahun 1927. Perusahaan ini merupakan penghasil televisi dan video recorder pertama. Didirikan pada tahun 1927 dengan nama "The Victor Talking Machine Company of Japan, Limited".
                      </p>  
                      <p style="text-align:center"><a href="https://www.jvckenwood.com/en.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                      </p>
                  </div>
              </div>     
            </div>
              
          </div>

  

<br><br><br>
<div class="text-center">
    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
    <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
    <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
    <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
<br>
    <strong>Copyright © 2020 <a>Group_Project</a></strong> All rights
            reserved.
</div> 
           
  
@endsection