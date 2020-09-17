<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../css/modal.css" rel="stylesheet" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
         <div class="logo">
           <a href="http://www.creative-tim.com" class="simple-text logo-normal">
             Library Management
           </a>
         </div>
         <div class="sidebar-wrapper" id="sidebar-wrapper">
           <ul class="nav">
             <!-- <li>
               <a href="">
                 <i class="now-ui-icons design_app"></i>
                 <p>Dashboard</p>
               </a>
              </li> -->
              <li>
                <a href="/books">
                  <i class="now-ui-icons education_atom"></i>
                  <p>Books</p>
                </a>
              </li>
              <li>
                <a href="/dashboard">
                  <i class="now-ui-icons education_atom"></i>
                  <p>User-Profile</p>
                </a>
              </li>
           </ul>
         </div>
     </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                   </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      
    <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Registered Roles</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="user_table">
                    <thead class=" text-primary">
                    
                      <th>
                        NAME
                      </th>
                      <th>
                        EMAIL
                      </th>
                      <th>
                        Role
                      </th>
                      <th style="text-align:center;">
                        ACTION
                      </th>
                      <th>
                      </th>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--Edit  Modal -->
    <div class="modal fade" id="myModal" role="dialog">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title"></h4>
            </div>
          <div class="modal-body">
              <form method="post" id="sample_form" class="form-horizontal">
                @csrf
                 <div class="form-group">
                     <label class="control-label col-md-4" >Name : </label>
                     <div class="col-md-8">
                       <input type="text" name="name" id="name" class="form-control" />
                    </div>
                 </div>
                 <div class="form-group">
                     <label class="control-label col-md-4">Email : </label>
                      <div class="col-md-8">
                         <input type="text" name="email" id="email" class="form-control" />
                      </div>
                </div>
               <div class="form-group">
                      <label class="control-label col-md-4">Role : </label>
                     <div class="col-md-8">
                       <input type="text" name="usertype" id="usertype" class="form-control" />
                     </div>
               </div>
              <br />
              <div class="form-group"> 
                 <input type="hidden" name="hidden_id" id="hidden_id" />
                 <input type="submit" name="action_button" id="action_button" class="btn btn-warning" style="margin-left:150px;" value="Add" />
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

      <!-- Delete Modal -->
    
    <div id="confirmModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4  style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
         </div>
       </div>
    </div> 

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
   $(document).ready( function () {
    // $('#myTable').DataTable({
    //   processing: true,
    //   serverSide: true,
     
    //   ajax: '{!! route('get.users')  !!}',
    //   columns: [
    //     {data:'id',name: 'id'},
    //     {data:'name',name: 'name'},
    //     {data:'email',name: 'email'},
    //     {data:'usertype',name: 'usertype'},
    //     {data: 'action', name: 'action', orderable: false, searchable: false},
    //     {data: 'delete', name: 'delete', orderable: false, searchable: false}
        
    //   ]
    // });
  
      $('#user_table').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('dashboard.index') }}",
          },
          columns: [
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'usertype',
            name: 'usertype'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false
          }
          ]
      });

     $('#sample_form').on('submit', function(event){
       event.preventDefault();
      var action_url = "{{ route('dashboard.update') }}";
      $.ajax({
      url: action_url,
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      success:function(data)
      {
        var html = '';
        // console.log(data);
      if(data.errors)
      {
          html = '<div class="alert alert-danger">';
         for(var count = 0; count < data.errors.length; count++)
      {
          html += '<p>' + data.errors[count] + '</p>';
      }
         html += '</div>';
      }
       if(data.success)
       {
         html = '<div class="alert alert-success">' + data.success + '</div>';
         $('#sample_form')[0].reset();
         $('#user_table').DataTable().ajax.reload();
       }
         $('#form_result').html(html);
      }
      });
   });

   $(document).on('click', '.edit', function(){
    var id = $(this).attr('id');
    // console.log(id);
    $('#form_result').html('');
    $.ajax({
    url :"/dashboard/"+id+"/edit",
    dataType:"json",
    success:function(data)
    {
     $('#name').val(data.result.name);
     $('#email').val(data.result.email);
     $('#usertype').val(data.result.usertype);
     $('#hidden_id').val(id);
     $('.modal-title').text('Edit Record');
     $('#action_button').val('Edit');
     $('#action').val('Edit');
    }
   })
  });
  var user_id;
  $(document).on('click', '.delete', function(){
    user_id = $(this).attr('id');
    //  console.log(user_id);
    $.ajax({
      url:"/dashboard/destroy/"+user_id,
      success:function(data)
      {
        alert("Delete Record")
        $('#user_table').DataTable().ajax.reload();
      }
      })
  });
  
});
</script>
  @yields('scripts')
</body>

</html>
