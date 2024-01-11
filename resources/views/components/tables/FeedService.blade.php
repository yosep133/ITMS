<div class="row">
    <div class="col-12">
      <div class="alert alert-primary" role="alert" id="processAlert" style="display: none">
        <span id="spAlert"> <strong>on Process</strong> Feed Service Running </span>
      </div>
      <div class="card mb-4">
          <div class="card-header pb-0 p-3">
              <h6>Authors table</h6> 
              <form data-action = "http://localhost:8083/api/feed/allProcess" method="POST" 
                  enctype="multipart/form-data" id="processall">
                @method('post')  
                @csrf
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                      <input type=date  class=form-control id="tanggal" name="mydate" />
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-primary mb-0 submit-form" href="javascript:;" id="btnprocess"><i
                                class="fas fa-plus"></i>&nbsp;&nbsp;Process</button>
                    </div>
                </div>
              </form>
            </div>
          <div class="card-body p-3">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">                      
                </div>
            </div>
        </div> 
      </div>
    </div>
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Projects table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Daily Feed</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                  </td>
                  <td>
                    <span id=progStatus1 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent1" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar1" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>                
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Monthly Feed</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                  </td>
                  <td>
                    <span id=progStatus2 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent2" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar2" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>                
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Daily Transaction</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$5,000</p>
                  </td>
                  <td>
                    <span id=progStatus3 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent3" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar3" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Branch</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$3,400</p>
                  </td>
                  <td>
                    <span id=progStatus4 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent4" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar4" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Mobile Transaction</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$1,000</p>
                  </td>
                  <td>
                    <span id=progStatus5 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent5" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar5" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Client Transaction</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$14,000</p>
                  </td>
                  <td>
                    <span id=progStatus6 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent6" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar6" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Detail Transaction</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                  </td>
                  <td>
                    <span id=progStatus7 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent7" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar7" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Nego Transaction</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                  </td>
                  <td>
                    <span id=progStatus8 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent8" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar8" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Komisi Interest</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                  </td>
                  <td>
                    <span id=progStatus9 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent9" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar9" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Process Client Name</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                  </td>
                  <td>
                    <span id=progStatus10 class="text-xs font-weight-bold">ready</span>
                  </td>
                  <td class="align-middle text-center">
                    <div  class="d-flex align-items-center justify-content-center">
                      <span id="spanPercent10" class="me-2 text-xs font-weight-bold">0%</span>
                      <div>
                        <div class="progress">
                          <div id="progressBar10" class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                  </td>
                </tr>                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.socket.io/4.7.2/socket.io.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
      document.addEventListener('livewire:load', function(){

        var socket = io.connect('http://localhost:3000');
        socket.on('new-message', function (data) {
          // console.log(data);
          data = jQuery.parseJSON(data);
          var status = "";
            document.getElementById('btnprocess').disable=false;

          // cek processname 
          if ( data.procName == "startProgress") {
            // disable button 
              $('#btnprocess').attr("disabled","disable");
          } else if ( data.procName == "endProgress") {
            // enable button 
              $('#btnprocess').removeAttr("disabled");
              $('#processAlert').hide();
          } else {
            if (parseInt(data.procValue)<100) {
              status = "working";
            } else {
              status = "done";
              data.procValue = 100;
              document.getElementById('progressBar'+data.procName).classList.remove('bg-gradient-info');
              document.getElementById('progressBar'+data.procName).classList.add('bg-gradient-success');
            }
            console.log('progStatus'+data.procName);
            document.getElementById('progStatus'+data.procName).innerHTML = status;          
            document.getElementById('progressBar'+data.procName).style.width = data.procValue+'%';
            document.getElementById('spanPercent'+data.procName).innerHTML = data.procValue+'%';
          }
        })
        
        $(".submit-form").click(function (e) {
          var url = $('#processall').attr('data-action');
          var data = $('#processall').serialize();
            console.log('test submit '+url);

            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var mydate = ($('#tanggal').val()).replace('-','').replace('-','')   ;
            if (mydate.trim().length === 0) {
              // alert('date empty');
              $('#processAlert').text("Date Empty");
              $('#processAlert').show();
              return "";
            } else {              
              $('#processAlert').text("Feed Service Running").wrapInner("<strong />");
              $('#processAlert').show();
            }
            var formData = new FormData();
            formData.append('mydate',mydate);
            console.log(mydate);
            $.ajax({
              url : url,
              method : 'POST',
              headers: {
                  Authorization: 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwODMvYXBpL2xvZ2luIiwiaWF0IjoxNzA0NDQxNjQ1LCJleHAiOjE3MDQ0NDUyNDUsIm5iZiI6MTcwNDQ0MTY0NSwianRpIjoiNXFVS2Y4T2dJQ0FTdkJPMyIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0._q3SxtKm7vl3EN7YpVaOOzLOXiLqq7fYnIpdb_xob0Q',
              },
              traditional : true,
              data : formData,
              dataType : 'JSON',
              contentType : false,
              cache : false,
              processData : false,
              success:function(response)
              {
                // $(form).trigger("reset");
                var x = document.getElementById('processAlert');
                // alert(response.state);
               x.style.diplay ="show";
                setTimeout(() => {
                  x.style.diplay ="none";
                }, 1000);
              },
              error:function(xhr, status, error){ 
                // console.log(xhr);        
                console.log(error);
                alert(error);     
              }
            })
        });
        
        $("#tanggal").change(function (e) {
            // get query 
        });
      })
      
    </script> 
  </div>
