@extends('layouts.app')

@section('content')

<div class="container my-5" dir="rtl">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <!-- Table to display buses -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>اسم الشركة</th>
                                <th>رقم الباص</th>
                                <th>وقت الوصول</th>
                                <th>وقت المغادرة</th>
                                <th>التاريخ</th>
                                <th>نقطة التجمع</th>
                                <th>من مدينة</th>
                                <th>إلى مدينة</th>
                                <th>اختيار</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bus as $info)
                            <tr>
                                <td>{{ $info->company_name }}</td>
                                <td>{{ $info->bus_number }}</td>
                                <td>{{ $info->arrival_time }}</td>
                                <td>{{ $info->departure_time }}</td>
                                <td>{{ $info->date }}</td>
                                <td>{{ $info->gathering_point }}</td>
                                <td>{{ $info->destination_from }}</td>
                                <td>{{ $info->destination_to }}</td>
                                <td>
                                    <input type="radio" name="bus_id" class="bus-radio" value="{{ $info->id }}">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="t1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>تم حجز رحلتك بنجاح</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        <button type="button" class="btn btn-primary">حفظ</button>
      </div>
    </div>
  </div>
</div>
    <div class="row mt-3">
        <div class="col text-center">
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target=#t1 > حجز</button>
        </div>
    </div>
</div>

@endsection


