@extends('layouts.appdash')

@section('content')
<div class="container my-5">
    <!-- Button to Show Modal -->
     <div dir="rtl">
     <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add" >
     إضافة رحلة</button>

     </div>


    <!-- Modal -->
    <div class="modal" tabindex="-1" id="add">
     <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header text-cente">
        <h5 class="modal-title">إضافة بيانات الرحلة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div dir="rtl">
     <form action="{{ route('city_trans') }}" method="get">
        @csrf
        <!-- Company Name -->
        <div class="mb-3">
            <label for="company_name" class="form-label">اسم الشركة</label>
            <input type="text" name="company_name" id="company_name" class="form-control" required>
        </div>

        <!-- Bus Number -->
        <div class="mb-3">
            <label for="bus_number" class="form-label">رقم الباص</label>
            <input type="number" name="bus_number" id="bus_number" class="form-control" required>
        </div>

        <!-- Arrival Time -->
        <div class="mb-3">
            <label for="arrival_time" class="form-label">وقت الوصول</label>
            <input type="time" name="arrival_time" id="arrival_time" class="form-control" required>
        </div>

        <!-- Departure Time -->
        <div class="mb-3">
            <label for="departure_time" class="form-label">المغادرة</label>
            <input type="time" name="departure_time" id="departure_time" class="form-control" required>
        </div>

        <!-- Date -->
        <div class="mb-3">
            <label for="date" class="form-label">التاريخ</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <!-- Gathering Point -->
        <div class="mb-3">
            <label for="gathering_point" class="form-label">نقطة التجمع</label>
            <input type="text" name="gathering_point" id="gathering_point" class="form-control" required>
        </div>

        <!-- Destination From -->
        <div class="mb-3">
            <label for="destination_from" class="form-label">من</label>
            <input type="text" name="destination_from" id="destination_from" class="form-control" required>
        </div>

        <!-- Destination To -->
        <div class="mb-3">
            <label for="destination_to" class="form-label">إلى</label>
            <input type="text" name="destination_to" id="destination_to" class="form-control" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-success">حفظ</button>
        </div>
     </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-primary">حفظ</button>
      </div>

    </div>
  </div>
</div>

<div class="row m-5" dir="rtl">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                          <th> اسم الشركة</th>
                          <th> رقم الباص</th>
                          <th> وقت الوصول</th>
                          <th> وقت المغادرة</th>
                          <th> التاريخ</th>
                          <th> نقطة التجمع</th>
                          <th>  من مدينة </th>
                          <th> إلى مدينة </th>
                          <th> تعديل </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bus as $info)
                        <tr>
                            <td>
                                {{$info->company_name}}
                            </td>
                            <td>
                                {{$info->bus_number}}
                            </td>
                            <td>
                                {{$info->arrival_time}}
                            </td>
                            <td>
                                {{$info->departure_time}}
                            </td>
                            <td>
                                {{$info->date}}
                            </td>
                            <td>
                                {{$info->gathering_point}}
                            </td>
                            <td>
                                {{$info->destination_from}}
                            </td>
                            <td>
                                {{$info->destination_to}}
                            </td>
                            <td>
                                    <!-- Edit Icon -->
                                    <a href="{{ route('edit_city_trans', $info->id) }}" class="text-primary me-2" title="Edit">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <!-- Delete Icon -->
                                    <a href="{{ route('delete_city_trans', $info->id) }}" class="text-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>
</div>
@endsection