@extends('layouts.admin-default')
<style>
  .setting-card-body-inner table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 3000px;
    border-collapse: collapse;
    border-top-left-radius: 1em;
    border-top-right-radius: 1em;
    overflow: hidden;
    margin-bottom: 10px;
  }
  .setting-card-body-inner table tr th{
    background-color: #012245;
    color: white;
  }
  
  .setting-card-body-inner table tr th, .setting-card-body-inner table tr td {
    text-align: left;
    padding: 8px;
    border: 1px solid #E4E4E4;
    border-top: 0px;
    border-left: 0px;
  }
  .setting-card-body-inner table tr th:last-of-type, .setting-card-body-inner table tr td:last-of-type {
    border-right: 0px

  }
  .setting-card-body-inner::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}
.setting-card-body-inner::-webkit-scrollbar-track {
    background-color: #ebebeb !important;
    -webkit-border-radius: 10px !important;
    border-radius: 10px !important;
}
.setting-card-body-inner::-webkit-scrollbar-thumb {
  border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}

 
  /* .setting-card-body-inner table tr:nth-child(even){background-color: #f2f2f2} */
  </style>

@section('content')
@include('includes.admin-navbar')
<!-- ===================== Right Sidebar ===================== -->
<div class="right-sidebar">
  <div class="container-fluid">
    <div class="setting-heading">
     <h1>Settings</h1>
    </div>
    <div class="setting-section p-4">
     <div class="setting-section-heading">
         <h1>Operator Network</h1>
     </div>
     <div id="main">
       <div class="container-fluid px-0">
     <div class="accordion" id="faq">
                         <div class="card setting-card">
                             <div class="card-header setting-card-header" id="faqhead1">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
                                 aria-expanded="true" aria-controls="faq1">Roshan</a>
                             </div>
     
                             <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                 <div class="card-body setting-card-body">
                                   <div class="setting-card-body-inner" style="overflow-x:auto;">
                                     <table>
                                       <tr>
                                         <th>Month Month Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                         <th>Month</th>
                                         <th>Savings</th>
                                       </tr>
                                       <tr>
                                         <td>January</td>
                                         <td>$100</td>
                                       </tr>
                                       <tr>
                                         <td>February</td>
                                         <td>$80</td>
                                       </tr>
                                     </table>
                                   </div>
                                   
                                 </div>
                             </div>
                         </div>
                         <div class="card setting-card">
                             <div class="card-header setting-card-header" id="faqhead2">
                                 <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                 aria-expanded="true" aria-controls="faq2">Etisalat Afghanistan</a>
                             </div>
     
                             <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                 <div class="card-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                     moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                     Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                     shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                     proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                     aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                 </div>
                             </div>
                         </div>
                         
                         
                     </div>
         </div>
       </div>
   
 
    </div>
 </div>
</div>
@endsection
@section('javascriptwork')

@endsection