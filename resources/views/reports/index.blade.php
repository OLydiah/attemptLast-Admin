@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-receipt"></i> Sales Report</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sales</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Sales date</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nixon Ghendia</td>
                            <td>Noodles</td>
                            <td>61</td>
                            <td>2022/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Gerald Of Rubia</td>
                            <td>Diesel Engine</td>
                            <td>63</td>
                            <td>2022/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Fidelity Price</td>
                            <td>Pant Suits</td>
                            <td>66</td>
                            <td>2022/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Mwimbaji</td>
                            <td>Hp Laptop</td>
                            <td>22</td>
                            <td>2022/03/29</td>
                            <td>$33,060</td>
                        </tr>
                        <tr>
                            <td>Harold Machakos</td>
                            <td>Water Pumps</td>
                            <td>59</td>
                            <td>2021/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Chepleting'</td>
                            <td>Farm equipment</td>
                            <td>55</td>
                            <td>2021/10/14</td>
                            <td>$327,900</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
