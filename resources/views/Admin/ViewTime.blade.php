@extends('layouts.admin')
@section('form')
    <br xmlns="http://www.w3.org/1999/html"/>
    <div class="portlet box blue">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="portlet light bordered">

                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column"
                               id="sample_1">
                            <thead>
                            <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>سن</th>
                                <th>شماره همراه</th>
                                <th>شماره ثابت</th>
                                <th>کد ملی</th>
                                <th>عملیات</th>

                            </tr>

                            </thead>
                                <tbody>
@foreach($show as $sho)
                                <tr class="odd gradeX">
                                    <td>{{$sho->name}}</td>
                                    <td>{{$sho->age}}</td>
                                    <td>{{$sho->phone}}</td>
                                    <td>{{$sho->tel}}</td>
                                    <td>{{$sho->nathionalCode}}</td>
                                    <td>
                                        <a href="/Add"><img src="{{asset('/icon/icons8-todo-list-50 (1).png')}}"
                                                            title="ساعت کاری پرسنل" width="30"
                                                            height="30"><br/></a>
                                    </td>
                                </tr>
@endforeach
                                </tbody>

                        </table>


                    </div>
                </div>

                <!-- END EXAMPLE TABLE PORTLET-->

            </div>
        </div>
    </div>

    <!-- BEGIN EXAMPLE TABLE PORTLET-->



@endsection




