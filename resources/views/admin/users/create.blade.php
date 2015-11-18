@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{!! $key + 1 !!}</td>
                                <td>{!! $user->first_name . ' ' . $user->last_name !!}</td>
                                <td>{!! $user->username !!}</td>
                                <td>{!! $user->email !!}</td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="{{URL::route('admin.user.detail', $user->id)}}" data-toggle="tooltip" data-placement="top" title="View" role="button"><i class="fa fa-fw fa-eye"></i></a>
                                    <a class="btn btn-primary btn-xs" href="{{URL::route('admin.user.edit', $user->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" role="button"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="javascript:;" class="btn btn-danger btn-xs jsDelete" attr_href="{{URL::route('admin.user.delete', $user->id)}}" data-toggle="tooltip" data-placement="top" title="Delete" role="button"><i class="fa fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="paginate_button previous disabled" id="example2_previous">
                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                        </li>
                        <li class="paginate_button active">
                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a>
                        </li>
                        <li class="paginate_button next" id="example2_next">
                            <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a>
                        </li>
                    </ul>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop