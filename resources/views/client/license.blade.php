@extends('layouts.user')
@section('content')
<div class="container-fluid">
        <div class="row mb-3">
            <div class="col" style="width: 845px;height: 267px;margin: 1px;padding: 11px;">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-primary m-0 font-weight-bold" style="font-family: 'Roboto Condensed', sans-serif;"><strong>ХАТУУ</strong>&nbsp;ХУЧИЛТТАЙ АВТОЗАМЫН ХӨДӨЛГӨӨНД ОРОЛЦОХОД НЭГ ТЭНХЛЭГ ДЭЭРХ АЧААЛАЛ 5 ТН-ООС ИХ АЧААНЫ МАШИН БОЛОН МЕХАНИЗМ ЗӨВШӨӨРӨЛ АВАХАД БҮРДҮҮЛЭХ БАРИМТ БИЧГИЙН ЖАГСААЛТ<br></h6>
                    </div>
                    <div class="card-body">
                        <p class="m-0" style="font-family: 'Roboto Condensed', sans-serif;">Замын цагдаагийн тасгаар батлуулсан маршрут<br> Зөвшөөрөл авах хүсэлт /байгууллага албан бичиг /<br> Тээврийн хэрэгслийн гэрчилгээний хуулбар<br> Жолоодох эрхийн үнэмлэхний хуулбар<br> Нэг удаагийн автозамын сангийн төлбөр
                            төлсөн баримт<br> Хүнд даацын машины зөвшөөрлийн төлбөр төлсөн баримт<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="margin: 11px;width: 653px;">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold" style="font-family: 'Roboto Condensed', sans-serif;">ЦАХИМ ЗӨВШӨӨРӨЛ АВАХ<br></p>
                </div>
                <div class="card-body" style="color: rgb(255,255,255);padding: 22px;width: 626px;">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="error-list">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <form action="/license" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col" style="width: 374px;height: 88px;margin: 2px;padding: 4px;">
                                <div class="form-group"><label for="username" style="font-family: 'Roboto Condensed', sans-serif;color: rgb(38,33,33);"><strong>УЛСЫН</strong>&nbsp;<strong>ДУГААРАА ОРУУЛНА УУ</strong><br></label>
                                    <input class="form-control" type="text" placeholder="XXXXУБА" name="car_number" style="font-family: 'Roboto Condensed', sans-serif;" required/></div>
                            </div>
                            <div class="col" style="height: 18px;">
                                <div class="form-group" style="padding: -13px;width: 355px;height: -13px;margin: 1px;">
                                    <div class="card shadow border-left-info py-2" style="height: 80px;color: rgb(22,24,40);margin: 5px;opacity: 1;padding: 36px;width: 333px;">
                                        <div class="card-body text-white" style="width: 299px;height: 54px;font-size: 10px;margin: -8px;padding: 29px;">
                                        <input type="file" name="data" style="width: 239px;height: 53px;margin: -5px;padding: -6px;font-size: 17px;color: rgb(23,20,20);font-family: 'Roboto Condensed', sans-serif;" required /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit" style="font-family: 'Roboto Condensed', sans-serif;background-color: rgb(47,86,200);color: rgb(255,255,255);"><strong>ИЛГЭЭХ</strong><br></button>
                            <a target="_blank" href="http://zero.mn/film/2622" class="btn btn-primary btn-sm" style="font-family: 'Roboto Condensed', sans-serif;background-color: rgb(47,86,200);margin: 10px;color: rgb(255,255,255);"><strong>ЗААВАР&nbsp;</strong></a>
                            <a href="/" class="btn btn-primary btn-sm" style="font-family: 'Roboto Condensed', sans-serif;background-color: rgb(47,86,200);margin: 6px;color: rgb(255,255,255);height: 45px;"><strong>ТӨЛБӨР</strong>&nbsp;ТӨЛӨХ<br><strong>&nbsp;</strong><br></a>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
@endsection