  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"  role="menu" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
             
                 <li class="nav-item">
                <a href="{{route('categorie.index')}}" class="nav-link ">
                   <i class="fas fa-angle-double-right"></i>
                  <p> Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subCetagory.index')}}" class="nav-link ">
                  <i class="fas fa-angle-right"></i>
                  <p> sub-category </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="{{route('brand.index')}}" class="nav-link">
              <i class="fab fa-pied-piper"></i>

              <p>
                Brand                
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('discount.index')}}" class="nav-link">
              <i class="fab fa-buffer"></i>

              <p>
                Discount              
              </p>
            </a>
           </li>

           <li class="nav-item">
            <a href="{{route('slider.index')}}" class="nav-link">
              <i class="fas fa-sliders-h"></i>
              <p>
                Slider
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('trendy.index')}}" class="nav-link">
              <i class="fas fa-sliders-h"></i>
              <p>
                Trendy Fashin                 
              </p>
            </a>
         </li>
         <li class="nav-item">
            <a href="{{route('banner.index')}}" class="nav-link">
              <i class="fas fa-flag"></i>
              <p>
                Banner               
              </p>
            </a>
         </li>
          <li class="nav-item">
            <a href="{{route('product.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Product    
              </p>
            </a>
         </li>

        <li class="nav-item">
            <a href="{{route('blog.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog   
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log Out 
                
              </p>
            </a>
           </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
