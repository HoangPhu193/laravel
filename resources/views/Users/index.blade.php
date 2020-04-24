@extends('master')

@section('title')
    User manager
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
<link rel='stylesheet' type='text/css' href='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css'>
@endsection

@section('content')
    <table class="table table-bordered" id="list-user" style="padding-bottom: 10px;">
    	<thead>
    		<tr>
    			<th></th>
    			<th>Id</th>
    			<th>Name</th>
    			<th>Email</th>
    			<th>Address</th>
    			<th>Phone</th>
    			<th>Created</th>
    			<th>Updated</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			
    		</tr>
    	</tbody>
    	
    </table>
@endsection

@section('scripts')
    <script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>
<script type='text/javascript' src='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js'></script>
    <script  type="text/javascript" charset="utf-8" async defer>
    	
    </script>
@endsection