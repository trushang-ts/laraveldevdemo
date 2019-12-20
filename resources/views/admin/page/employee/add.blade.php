<!-- 
   /admin/page/employee/add
-->

@include('admin.layout.header')
<div class="main-panel">
<!-- Navbar -->
@include('admin.layout.navbar')
<!-- End Navbar -->
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add New Employee</h4>
                  <p class="card-category">Title</p>
               </div>
               <div class="card-body">
               <form method="post" action="{{ url('admin/employee/storeEmployee') }}" accept-charset="UTF-8">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Fist Name</label>
                           <input type="text" name="firstname" id="firstname" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Last Name</label>
                           <input type="text" name="lastname" id="lastname" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Role</label>
                           <input type="text" name="role" id="role" class="form-control">
                           </div>
                        </div>                        
                     </div>

                     <div class="row">

                        <div class="col-md-4">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Email address</label>
                           <input type="email" name="email" id="email" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Username</label>
                           <input type="text" name="username" id="username" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Password</label>
                           <input type="text" name="password" id="password" class="form-control">
                           </div>
                        </div>
                     
                     </div>


                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group bmd-form-group">
                           <label class="bmd-label-floating">Adress</label>
                           <input type="text" class="form-control">
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary pull-right">Save</button>
                     <div class="clearfix"></div>
                     </form>
                  </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.layout.footer')
