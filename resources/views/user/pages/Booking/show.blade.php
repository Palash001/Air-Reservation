@extends('user.layouts.app')

@section('title','Flight COnfirm details')

@section('main-content')

  <div class="row">

    <div class="col-lg-12">

      <h1 class="text-center">Show Book </h1>

      <hr>

    <div class="col-lg-10 offset-1">

      <div class="row">

        <div class="col-lg-8">

        </div> <!--end of col lg 8-->

        <div class="col-lg-2">

          <strong> Adddress </strong>
          <address> New Street,<br> Broklyn <br> United States </address>
          <h2 class="text text-uppercase text-info">Balancesheet</h2>
         </div> <!--end fo col lg 2-->
         <hr>

         <div class="col-lg-8">

           <table>
             <tr>
               <th> Name </th>
               <td>:{{$bookDetail->name}} </td>
              </tr>

              <tr>
                <th> Email </th>
                <td>:{{$bookDetail->email}} </td>
               </tr>

               <tr>
                 <th> Address </th>
                 <td>:{{$bookDetail->address}} </td>
                </tr>

                <tr>
                  <th> Phone </th>
                  <td>:{{$bookDetail->phone}} </td>
                 </tr>

            </table>

         </div> <!--end of col lg 8-->

         <div class="col-lg-4">

           <table>

             <tr>
               <th> Book No</th>
               <td>:{{$bookDetail->b_no}} </td>
              </tr>

              <tr>
                <th> Date </th>
                <td>:{{$bookDetail->created_at}} </td>
               </tr>

           </table>

         </div> <!--end of lg 4-->

         <div class="col-lg-12">
           <hr>
           <table width="100%">

             <thead style="background-color:darkcyan,color:white;" >

                <tr>
                  <th style="padding:5px;"> Sl </th>
                  <th style="padding:5px;"> Class Type </th>
                  <th style="padding:5px;"> Child </th>
                  <th style="padding:5px;"> Adult </th>

                  <!-- <th style="padding:5px;"> Total Person </th> -->
                </tr>

             </thead>

             <tbody>
               <tr>
               <td> 1 </td>
               <td> {{$bookDetail->class_type}} </td>
               <td> {{$bookDetail->child}} </td>
               <td> {{$bookDetail->adult}} </td>

             </tr>

             </tbody>

           </table>

         </div> <!--end of col lg 12-->

         <hr>

         <div class="col-lg-8"> </div>

         <div class="col-lg-4">

           <hr>

           <table>

             <tr style="border-top: 3px solid gray">

                 <th><h5 class="text-uppercase"> Total Fare </h5></th>
                 <td>  <h5 class="text text-uppercase text-info">: <span class="text-secondary">$</span> {{$bookDetail->total_fare}} </h5></td>


             </tr>

           </table>

         </div> <!--end of col lg 4-->

      </div> <!--end of 2nd row-->

  </div><!--end of col offset-->

  </div> <!--end of col-->

   </div> <!--end of row-->

@endsection
