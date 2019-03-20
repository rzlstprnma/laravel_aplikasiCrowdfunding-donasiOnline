@extends('layouts.middle-layouts')

@section('title')
    Dashboard
@endsection                 

@section('content')
    
<div class="row">
        <div class="col-md-3">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-user"></i>
              <div class="card-content">
                <h4>User</h4>
                <p>90</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-newspaper-o"></i>
              <div class="card-content">
                <h4>Order</h4>
                <p>252</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-calendar"></i>
              <div class="card-content">
                <h4>Task</h4>
                <p>19</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-shopping-cart"></i>
              <div class="card-content">
                <h4>Pending</h4>
                <p>32</p>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection