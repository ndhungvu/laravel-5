@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Detail</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="article_detail" class="table table-bordered" role="grid">
                        <tbody>
                            <tr>
                                <td class="col-sm-3">ID</td>
                                <td>{!! $user->id !!}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">Full Name</td>
                                <td>{!! $user->first_name . ' ' . $user->last_name !!}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">ID</td>
                                <td>{!! $user->id !!}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">ID</td>
                                <td>{!! $user->id !!}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">ID</td>
                                <td>{!! $user->id !!}</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">ID</td>
                                <td>{!! $user->id !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@stop