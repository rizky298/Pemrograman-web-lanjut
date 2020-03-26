@extends('layout.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Dashboard
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <center>
          <h3 class="box-title"><font size="6"><b>PEMROGRAMAN WEB LANJUT</b></font></h3>
            </center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <h2>
        <font face="Times New Roman"><b>BIODATA</b> 
        </h2>
        <font face="Times New Roman"> Nama  : Rizky Kurniawan<br>
        <font face="Times New Roman"> NIM   : 1815051058<br>
        <font face="Times New Roman"> Kelas : PTI 4 D<br>
        
            
       
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <b>PROGRAM STUDI : PENDIDIKAN TEKNIK INFORMATIKA</b>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection