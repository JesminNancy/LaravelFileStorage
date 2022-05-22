@extends('layout.app')

@section('title', 'Home')

@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6 mt-5">
      <div class="card text-center">
        <div class="card-header">
          <h6>Laravel Ajax File Upload</h6>
        </div>
        <div class="card-body p-3">
          <input id="FileId" class="form-control my-3" type="file">
          <button onclick="onUpload()" id="uploadId" class="btn btn-block btn-primary my-3">Upload</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script type="text/javascript">

    function onUpload(){
      
      let spinner= "<div class='spinner-border text-danger' role='status'></div>";
      $('#uploadId').html(spinner);
     let myFile= document.getElementById("FileId").files[0];
     let myFileName=myFile.name;
     let myFileSize=myFile.size;
     let myFileFormat=myFileName.split('.').pop();
     
     let FileData= new FormData();
     FileData.append('FileKey',myFile);
     let config={headers:{'content-type' : 'multipart/form-data'}}
     
     let url='/fileUp';
      
   axios.post(url,FileData,config)
  .then(function (response) {
    
    if(response.status==200){
      
      $('#uploadId').html('Upload Success');
      setTimeout(function()  {
        $('#uploadId').html('Upload'); 
      }, 3000);
    
    }else{
      $('#uploadId').html('Upload Fail');
      setTimeout(function()  {
        $('#uploadId').html('Upload'); 
      }, 3000);
    }
    
  })
  .catch(function (error) {
    $('#uploadId').html('Upload Fail');
    setTimeout(function()  {
        $('#uploadId').html('Upload'); 
      }, 3000);
  });
}

</script>

@endsection