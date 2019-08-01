@extends('layouts.user')
@section('title', 'Нүүр хуудас')
@section('content')
<div class="container-fluid">
   <h3 class="text-dark mb-4" style="font-size: 21px;font-family: 'Roboto Condensed', sans-serif;">ОРОН НУТГИЙН ЗАМ АВТО ЗАМ АШИГЛАСНЫ НЭГ УДААГИЙН ТӨЛБӨР</h3>
   <div class="row mb-3">
      <div class="col-lg-8">
         <div class="row">
            <div class="col">
               <div class="card shadow mb-3">
                  <div class="card-header py-3">
                     <p class="text-primary m-0 font-weight-bold" style="font-family: 'Roboto Condensed', sans-serif;">ОРОН НУТГИЙН САН</p>
                  </div>
                  <div class="card-body">
                     <form id="check">
                        <div class="form-row">
                           <div class="col">
                              <div class="form-group">
                                 <label for="search" style="font-family: 'Roboto Condensed', sans-serif;">
                                 <strong>УЛСЫН</strong>&nbsp;<strong>ДУГААРАА ОРУУЛНА УУ</strong>
                                 <br>
                                 </label>
                                 <input class="form-control" type="text" placeholder="XXXXУБА" name="search" style="font-family: 'Roboto Condensed', sans-serif;" id="check-input" required autocomplete="off"/>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-group">
                                 <div class="card shadow border-left-info py-2" style="height: 78px;color: rgb(22,24,40);margin: 10px;opacity: 1;">
                                    <div class="card-body text-white" style="width: 299px;height: 61px;font-size: 10px;" id="result-text"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="font-family: 'Roboto Condensed', sans-serif;">ХАЙЛТ ХИЙХ</button></div>
                     </form>
                  </div>
               </div>
               <div class="card shadow"></div>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="text-primary m-0 font-weight-bold" style="font-family: 'Roboto Condensed', sans-serif;">МЭДЭГДЭЛ</h6>
            </div>
            <div class="card-body">
               <p class="m-0" style="font-family: 'Roboto Condensed', sans-serif;"><strong>Тээврийн хэрэгслийн албан татвар, зам ашигласны төлбөр, агаарын бохирдлын төлбөрийг онлайнаар төлөх боломжтой боллоо таньд амжилт хүсье !</strong><br><br></p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="search-found" class="d-none">
   <div class="col" style="margin: 15px;font-family: 'Roboto Condensed', sans-serif;">
      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
         <thead>
            <tr>
               <th>УЛСЫН ДУГААР</th>
               <th>ОВОГ НЭР</th>
               <th>АВТО МАШИНЫ ТӨРӨЛ</th>
               <th>ОН</th>
               <th>НИЙТ</th>
               <th>ТӨЛӨВ</th>
            </tr>
         </thead>
         <tbody id="search-result">
         </tbody>
      </table>
   </div>
   <div class="col" style="height: 38px;margin: 13px;"><a href="/pay" class="btn btn-success btn-icon-split" role="button" style="background-color: rgb(15,217,11);"><span class="text-white-50 icon"><i class="fas fa-file-invoice-dollar"></i></span><span class="text-white text" style="font-family: 'Roboto Condensed', sans-serif;"><strong>ТӨЛБӨР ТӨЛӨХ</strong></span></a></div>
</div>
@endsection