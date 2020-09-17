@extends('layouts.users')
 <!-- CSS Files -->
 <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
@section('content')
<div class="row">
          <div class="col-md-12" style="padding:40px;">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Books Available</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="bs_table">
                    <thead class=" text-primary">
                      
                      <th>
                        Book Name
                      </th>
                      <th>
                        Book Description
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
@endsection
