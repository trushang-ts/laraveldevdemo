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
                  <h4 class="card-title ">Title</h4>
                  <p class="card-category">Title</p>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table">
                        <thead class=" text-primary">
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Country</th>
                              <th>City</th>
                              <th>Salary</th>
                           </tr>
                        </thead>
                        <tbody>
                           
                           <tr>
                              <td>1</td>
                              <td>Dakota Rice</td>
                              <td>Niger</td>
                              <td>Oud-Turnhout</td>
                              <td class="text-primary">$36,738</td>
                           </tr>
                           
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.layout.footer')