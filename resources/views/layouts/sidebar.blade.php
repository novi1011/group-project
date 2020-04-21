<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        @if(auth()->user()->role=='admin')
        <li class="menu-sidebar"><a href="{{ url('/home') }}"><span class="fa fa-calendar-minus-o"></span> Beranda Dashboard</span></a></li>
        @endif

        
        @if(auth()->user()->role == 'supplier')
        <li class="menu-sidebar"><a href="{{ url('/produk') }}"><span class="fa fa-table"></span> Add Product Data</span></a></li>
        @endif

        @if(auth()->user()->role == 'customer')
        <li class="menu-sidebar"><a href="{{ url('/po/') }}"><span class="fa fa-shopping-cart"></span> Product Orders</span></a></li>
        @endif

        @if(auth()->user()->role == 'admin')
        <li class="menu-sidebar"><a href="{{ url('/supplier') }}"><span class="fa fa-user-plus"></span> Add Supplier Data</span></a></li>
        @endif
        @if(auth()->user()->role == 'admin')
        <li class="menu-sidebar"><a href="{{ url('/supplier/index') }}"><span class="fa fa-meh-o"></span> Supplier List</span></a></li>
        @endif
        @if(auth()->user()->role == 'admin')
        <li class="menu-sidebar"><a href="{{ url('/produk/index') }}"><span class="fa fa-table"></span> Product List</span></a></li>
        @endif
        @if(auth()->user()->role == 'admin')
        <li class="menu-sidebar"><a href="{{ url('/po/index') }}"><span class="fa fa-shopping-cart"></span> Order List</span></a></li>
        @endif
        @if(auth()->user()->role == 'admin')
        <li class="menu-sidebar"><a href="{{ url('/gr/') }}"><span class="fa fa-check-square-o"></span> Goods Receipt</span></a></li>
        @endif
        <!-- @if(auth()->user()->role == 'admin')
        <li class="menu-sidebar"><a href="{{ url('/update-perusahaan') }}"><span class="glyphicon glyphicon-log-out"></span> Data Perusahaan</span></a></li>
        @endif -->
        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>

       
      </ul>
    </section>