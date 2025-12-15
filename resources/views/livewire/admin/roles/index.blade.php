@section('title', 'نقش ها')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <h4 class="card-title">افزودن نقش</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان نقش (لاتین):</label>
                                            <input type="text" class="form-control" id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">توضیحات نقش:</label>
                                            <select class="js-example-basic-single form-control" name=""
                                                style="width: 100%;">
                                                <option value="AL">Alabama</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">سطح دسترسی:</label>
                                            <select class="js-example-basic-single form-control" multiple="multiple"
                                                name="" style="width: 100%;">
                                                <option value="AL">Alabama</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست نقش ها</h4>
                                <button type="button" class="btn btn-danger mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-refresh"></i> سطل
                                    زباله</button>
                                <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button>
                                <hr>

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>عنوان نقش</th>
                                            <th>توضیحات نقش</th>
                                            <th>سطح نقش</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>نام کاربری</td>
                                            <td>سیستم</td>
                                            <td>شرکت</td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="zmdi zmdi-delete zmdi-custom"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
</div>
