@extends('layouts.admin')
@section('title', 'Admin - Home')
@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header d-flex">
            <h4 class="card-title mr-3">Payments</h4>
            <div class="input-group no-border">
               <form id="search-data">
                  <input type="text" class="form-control" placeholder="Хайх..." id="search-data-input" required autocomplete="off">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <i class="nc-icon nc-zoom-split"></i>
                     </div>
                  </div>
                  <a href="#" class="p-3" id="load-data">Reset</a>
                  <a href="#" class="p-3" id="add-modal">Нэмэх</a>
               </form>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover">
                  <thead class="text-primary">
                     <tr>
                        <th>
                           #
                        </th>
                        <th>
                           УЛСЫН ДУГААР
                        </th>
                        <th>
                           ОВОГ НЭР
                        </th>
                        <th>
                           АВТО МАШИНЫ ТӨРӨЛ
                        </th>
                        <th>
                           ОН
                        </th>
                        <th>
                           НИЙТ
                        </th>
                        <th>
                           ТӨЛСӨН
                        </th>
                     </tr>
                  </thead>
                  <tbody id="paid">
                  </tbody>
               </table>
               <div class="text-center m-3" id="paid-loading">Loading...</div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal dev-modal" id="add-payment" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="/admin/payment" method="POST">
          <div class="text-center m-5" id="paid-modal">Loading...</div>
            <div class="data-content">
               <input type="hidden" id="data-id" value="0" name="id">
               <div class="modal-body">
                  <div class="form-group">
                     <label>Улсын дугаар</label>
                     <input type="text" class="form-control" placeholder="Улсын дугаар" required name="car_number" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Овог нэр</label>
                     <input type="text" class="form-control" placeholder="Овог нэр" required name="name" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Авто машины төрөл</label>
                     <input type="text" class="form-control" placeholder="Авто машины төрөл" required name="type" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Он</label>
                     <input type="number" class="form-control" placeholder="Он" id="thisyear" required name="year" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Төлбөр</label>
                     <input type="number" class="form-control" placeholder="Төлбөр" required name="amount" autocomplete="off">
                  </div>
                  <div> 
                     <label>Төлсөн хэлбэр</label>
                     <input type="text" class="form-control" placeholder="Төлсөн хэлбэр" required name="status" autocomplete="off">
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="update ml-auto mr-auto">
                     <button type="button" id="delete-data" class="btn bbtn-secondary btn-round d-none">Устгах</button>
                     <button type="submit" class="btn btn-primary btn-round">Хадгалах</button>
                  </div>
               </div>
               @csrf
            </div>
         </form>
      </div>
   </div>
</div>
@endsection