<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Tax Invoice</title>
    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <style>
      * {
        box-sizing: border-box;
      }

      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        word-break: break-all;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        font-size: 16px;
      }
      .section{
        width: 1900px;
      }
      .h4-14 h4 {
        font-size: 12px;
        margin-top: 0;
        margin-bottom: 5px;
      }
      .img {
        margin-left: "auto";
        margin-top: "auto";
        height: 30px;
      }
      pre,
      p {
        /* width: 99%; */
        /* overflow: auto; */
        /* bpicklist: 1px solid #aaa; */
        padding: 0;
        margin: 0;
      }
      table {
        font-family: arial, sans-serif;
        width: 100%;
        border-collapse: collapse;
        padding: 1px;
      }
      .hm-p p {
        text-align: left;
        padding: 1px;
        padding: 5px 4px;
      }
      td,
      th {
        text-align: left;
        padding: 8px 6px;
      }
      .table-b td,
      .table-b th {
        border: 1px solid #ddd;
      }
      th {
        /* background-color: #ddd; */
      }
      .hm-p td,
      .hm-p th {
        padding: 3px 0px;
      }
      .cropped {
        float: right;
        margin-bottom: 20px;
        height: 100px; /* height of container */
        overflow: hidden;
      }
      .cropped img {
        width: 400px;
        margin: 8px 0px 0px 80px;
      }
      .main-pd-wrapper {
        box-shadow: 0 0 10px #ddd;
        background-color: #fff;
        border-radius: 10px;
        padding: 15px;
        margin-top:50px; 
      }
      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        font-size: 14px;
      }
     
    </style>
  </head>
  <body>
    <section class="main-pd-wrapper" style="width: 1000px; margin: auto">
      <div style="display: table-header-group">
        <h4 style="text-align: center; margin: 0">
          <b>Tax Invoice</b>
        </h4>

        <table style="width: 100%; table-layout: fixed">
          <tr>
            <td
              style="border-left: 1px solid #ddd; border-right: 1px solid #ddd"
            >
              <div
                style="
                  text-align: center;
                  margin: auto;
                  line-height: 1.5;
                  font-size: 14px;
                  color: #4a4a4a;
                "
              >
              @php
              $setting=DB::table('settings')->where('id',"=",1)->first();
              //dd($setting);
          @endphp
                <img
                  width="220"
                  height="73"
                  viewBox="0 0 272 73"
                  fill="none"
                  src="{{ asset('assets/images/'.$setting->logo) }}"
                >
                  

          
              </div>
            </td>
            <td
              aling="right"
              style="
                text-align: right;
                padding-left: 50px;
                line-height: 1.5;
                color: #323232;
              "
            >
        
              <div>
                <h4 style="margin-top: 5px; margin-bottom: 5px">
                  Bill to/ Ship to
                </h4>
    
                <p style="font-size: 14px">
                    {{ $setting->hospital_name_en}},<br />
                    {{ $setting->hospital_address}}<br />
                  Tel:
                  <a href="tel:01241234568" style="color: #00bb07"
                    >{{ $setting->phone}}</a
                  >
                  <br>
                  Hotline:
                  <a href="tel:01241234568" style="color: #00bb07"
                    >{{ $setting->hotline}}</a>
                </p>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <table
        class="table table-bordered h4-14"
        style="width: 100%; -fs-table-paginate: paginate; margin-top: 15px"
      >
        <thead style="display: table-header-group">
          <tr
            style="
              margin: 0;
              background: #fcbd021f;
              padding: 15px;
              padding-left: 20px;
              -webkit-print-color-adjust: exact;
            "
          >
            <td colspan="6">
              <h3>
                
                   <p style="margin: 5px 0">Invoice No:-{{$invoice_id}}</p>
                
                <p style="margin: 5px 0">Invoice Generated:- {{$bill->invoice_date}}</p>
              </h3>
            </td>

            <td colspan="6">
              <p>Patient's Name:- {{$patient->name}}</p>
              <p style="margin: 5px 0">Address:-{{$patient->address}}</p>
              <p style="margin-bottom: 5px">Mobile: {{$patient->mobile}}</p>
              
            </td>
            
          </tr>
        </tbody>
        <tfoot></tfoot>
      </table>

    </table>
    <h4 style="text-align: center; margin: 20px">
      <b>All Collections</b>
    </h4>

    <table
    class="table table-bordered h4-14"
    style="width: 100%; -fs-table-paginate: paginate; margin-top: 15px"
  >
    <thead style="display: table-header-group">
      <tr
        style="
          margin: 0;
          background: #fcbd021f;
          padding: 15px;
          padding-left: 20px;
          -webkit-print-color-adjust: exact;
        "
      >
    <tr>
      <th style="width: 50px">SI</th>
      <th style="width: 150px"><h4>Amount</h4></th>
      
      <th style="width: 80px"><h4>Discount</h4></th>
      <th style="width: 60px"><h4>Due</h4></th>
      <th style="width: 60px"><h4>date</h4></th>
      <th style="width: 120px"><h4>Pay method</h4></th>
      
    </tr>
  </thead>
  @php
  $i=1;
  $sumpay=0;
  $sumdue=0;
  @endphp
  <tbody>
      @foreach($collection as $row)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$row->pay_amount}}</td>
      @php
      $sumpay=$sumpay+$row->pay_amount;
      @endphp
      <td>{{$row->discount}}</td>
      <td>{{$row->due_amount}}</td>
      @php
      $sumdue=$sumdue+$row->due_amount;
      @endphp
      <td>{{$row->date}}</td>
      <td>{{$row->method}}</td>
  
    </tr>
    @endforeach
  </tbody>
  <tfoot></tfoot>
</table>
     

      <table class="hm-p table-bordered" style="width: 100%; margin-top: 30px">
        <tr>
          <tr style="background: #6fdce4">
            <th>Total Amount:</th>
            <td style="width: 70px; text-align: right; border-right: none">
              <b>{{$bill->total_amount}}</b>
            </td>
            <td colspan="5" style="border-left: none"></td>
          </tr>
          <tr style="background: #e4d66f">
            <th>Total Pay:</th>
            <td style="width: 70px; text-align: right; border-right: none">
              <b>{{$sumpay}}</b>
            </td>
            <td colspan="5" style="border-left: none"></td>
          </tr>
        <tr style="background: #e46f6f">
          <th>Total Due:</th>
          @php
          @endphp
          <td style="width: 70px; text-align: right; border-right: none">
            <b>{{$sumdue}}</b>
          </td>
          <td colspan="5" style="border-left: none"></td>
        </tr>
      </table>

      <table style="width: 100%" cellspacing="0" cellspadding="0" bordar="0">
        <tr>
          <td>
            <h4 style="margin: 10px 0">
             Powerd By Oasic IT.
            </h4>
          
          </td>
          <td>
            @if($sumdue==0)
            
              <h1 style="display:inline-block; margin-left: 600px; text-align: center; font-weight: 1000;color:red;   border:10px solid red;">
             Paid
              </h1>

            @else
            <h1 style="display:inline-block;  margin-left: 600px; text-align: center; font-weight: 1000;color:red;   border:10px solid red;">
              Due
               </h1>
            @endif
           
          </td>
        </tr>
      </table>
    </section>
  </body>
</html>
