@extends('layouts.admin')
@section('title', 'Admin - License')
@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header d-flex">
            <h4 class="card-title mr-3">Licenses</h4>
            <div class="input-group no-border">
               <form id="search-license" action="/admin/license/search/" method="GET">
                  <input type="text" class="form-control" name="search" placeholder="Хайх..." id="search-license-input" required autocomplete="off">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <i class="nc-icon nc-zoom-split"></i>
                     </div>
                  </div>
                  <a href="/admin/license" class="p-3">Reset</a>
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
                           Илгээсэн
                        </th>
                        <th>
                           Төлөв
                        </th>
                        <th class="text-right">
                           Action
                        </th>
                     </tr>
                  </thead>
                  <tbody id="license">
                     @foreach ($licenses as $license)
                     <tr>
                        <td>
                           {{$license->id}}
                        </td>
                        <td>
                           {{$license->car_number}}
                        </td>
                        <td>
                           {{$license->created_at->diffForHumans()}}
                        </td>
                        <td>
                           <span class="badge {{$license->status == "true" ? "badge-success" : "badge-secondary"}}">
                           {{$license->status == "true" ? "Баталгаажсан" : "Шинэ"}}
                           </span>
                        </td>
                        <td class="text-right">
                           <a href="{{asset($license->file_url)}}" class="mr-3">Үзэх</a>
                           @if ($license->status === 'false')
                           <a href="#" id="license-confirm-action" data-key="{{$license->id}}" class="text-success mr-3">Батлах</a>
                          @endif
                           <a href="#" id="license-remove-action" data-key="{{$license->id}}" class="text-danger">Устгах</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal dev-modal" id="edit-license" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="/admin/license" method="POST">
             <div class="text-center m-3" id="paid-modal">Энэ үйлдлийг буцаах боломжгүй тул та сонголтоо зөв хийнэ үү.</div>
               <div class="data-content">
                  <input type="hidden" id="license-id" value="0" name="id">
                  <input type="hidden" id="license-status" value="false" name="status">
                  <input type="hidden" id="license-remove" value="false" name="remove">
                  </div>
                  <div class="row mb-3">
                     <div class="update ml-auto mr-auto">
                        <button type="button" data-dismiss="modal" class="btn bbtn-secondary btn-round">Хаах</button>
                        <button type="submit" class="btn btn-primary btn-round">Ok</button>
                     </div>
                  </div>
                  @csrf
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection