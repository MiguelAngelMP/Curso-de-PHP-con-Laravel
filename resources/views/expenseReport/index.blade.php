@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Create new report</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped">
                @foreach ($expenseReports as $expenseReport)
                <tr>
                    <td>{{$expenseReport->title}}</td>
                    <td><a href="/expense_reports/{{$expenseReport->id}}/edit">edit</a></td>
                    <td><a href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
            
   
@endsection