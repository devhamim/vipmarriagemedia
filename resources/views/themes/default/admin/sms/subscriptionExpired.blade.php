@extends('admin.master.dashboardmaster')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home <small>Subscription Expired</small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Subscription Expired All </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-sm table-striped" id="tblCustomers">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        {{-- <th>Sent Message</th> --}}
                                    </tr>
                                    @php
                                        $i=0;
                                    @endphp
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->mobile }}</td>
                                            {{-- <td>
                                                <form action="subscription.expired.sms" method="post">
                                                    @csrf
                                                    <div class="btn btn-primary">Sent</div>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </table>



                            </div>

                            <div class="pagination text-center">
                                {{-- {{ $users->links('pagination::bootstrap-4') }} --}}
                                {{ $users->links() }}

                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
    </section>
@endsection

