@extends('layouts.admin')
@section('form')
    <br xmlns="http://www.w3.org/1999/html"/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                فرم ثبت پرسنل جدید
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">
                    <form action={{ route('register') }} method="post" class="mt-repeater form-horizontal"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام و نام خانوادگی</label>
                                    <br/>
                                    <input type="text" name="name" class="form-control"
                                           required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">شماره همراه</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Demand" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">شماره ثابت</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="from" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کد ملی</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Uptodate" required/>
                                </div>
                                <br/>
                                <div class="mt-repeater-input">
                                    <label class="control-label">سن</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Uptodate" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">سمت</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Uptodate" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">ایمیل</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Uptodate" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کلمه عبور</label>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Uptodate" required/>
                                </div>


                            </div>
                        </div>
                        <input type="submit" data-repeater-create class="btn btn-success mt-repeater-add" value="ثبت"/>
                        </input>
                    </form>
                </div>


                <div class="portlet light bordered">

                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column"
                               id="sample_1">
                            <thead>
                            <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره همراه</th>
                                <th>سن</th>
                                <th>ایمیل</th>
                                <th>کد ملی</th>
                                <th>عملیات</th>

                            </tr>

                            </thead>

                                <tbody>

                                <tr class="odd gradeX">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{--@if($leav->text == "")--}}
                                            {{--<span--}}
                                                    {{--class="label label-sm label-success">در حال برسی</span>--}}
                                        {{--@else--}}
                                            {{--{{$leav->text}}--}}
                                        {{--@endif--}}

                                    </td>
                                    <td></td>
                                </tr>

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




