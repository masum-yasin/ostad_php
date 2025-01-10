<?php
// akti string ke encrypt krte hbe
$message ="Bangladesh";
function encrypt($message){
    $splitMessage = str_split($message);
    $newMessage = "";
foreach($splitMessage as $char){
$newMessage .= chr(ord($char) + 1);

}
return $newMessage;
}

echo encrypt($message);

$string = "Cbohmbefti";

function decrypt($string){
    $decrypt = str_split($string);
    $newMessage = "";
   foreach($decrypt as $char){
    $newMessage += chr(ord($char) -1);
   }
   return $newMessage;
}
echo decrypt($string);













@extends('master')

@section('title','Assign class wise fees')

@section('page_specific_css')

@endsection

@section('content')
    <section class="content-header" style="margin-right: 1%;height: 50px">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 style="font-size: 25px;font-weight: bolder;margin-left: -8px">Assign class wise fees</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Assign class wise fees</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <form method="post" action="{{route('store_class_wise_fees')}}">
        {{csrf_field()}}
        <div class="row">

            <div class="form-group col-6" style="padding-top: 10px">
                <div class="col-md-12">
                    <select class="form-control select2" name="year" required="" id="year233" onchange="hideShowDiv()">
                        <option value="">Select a year</option>
                        @foreach($years as $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group col-6" style="padding-top: 10px">
                <div class="col-md-12">
                    <select class="form-control select2" name="class" required="" id="class233" onchange="hideShowDiv()" >
                        <option value="">Select a class</option>
                        @foreach($classes as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>


        <div style="clear:both; height:10px;"></div>

        <div class="card" style="margin-right:1%;margin-left:1%;display: none" id="hideshowMe" >
            <div class="card-body table-responsive p-0" style="height:350px;">
                <table class="table table-hover table-condensed table-striped table-head-fixed text-nowrap table-bordered table-sm">
                    <thead style="background-color:#f1eeee">
                    <tr>
                        <th style="text-align: center;width:8%">SL</th>
                        <th style="text-align: center;width:15%">Check</th>
                        <th>Particulars</th>
                        <th style="text-align: center;width:25%">Amount</th>
                    </tr>
                    </thead>

                    <tbody id="FeesHeadRows_12">

                    </tbody>

                </table>
            </div>
        </div>

        <div style="text-align: center;margin-bottom: 10px;display: none" id="hideSubmitBtn">
            <input type="submit" class="btn btn-primary" style="background-color: red;border-color: red" value="Save class wise fees" disabled id="generateInvoiceBtn">
        </div>

    </form>
    </div>

    <aside class="control-sidebar control-sidebar-dark"></aside>
@endsection

@section('page_specific_script')

    <script type="text/javascript">

        var protocol = window.location.protocol;
        var hostname = window.location.hostname;
        var port = window.location.port;
        var pathname = window.location.pathname;
        pathname = pathname.split("/");
        var domainName = pathname[1];

        if(port){
            var globalURL = protocol + "//" + hostname + ":" + port + "/";
        }else{
            var globalURL = protocol + "//" + hostname + "/";
        }


        $(document).on('change','.enabletext',function(event)
        {
            var str = this.id;
            var id = str.split("_").pop();
            var textid = "amount"+id;

            var valuee = document.getElementById(textid).value;
            $("#"+textid).prop("disabled",  !this.checked);
            $("#"+textid).val(null,  !this.checked);



        });

        function hideShowDiv() {
            var class_id = document.getElementById("class233").value;
            var year_id = document.getElementById("year233").value;

            if(year_id !== "" && class_id !== ""){
                var url = globalURL + "get-assign-particulars";
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: {'year_id' : year_id,'class_id' : class_id},
                    success: function(response){
                        var assigned_particular_size = response.particulars.length;
                        var size = response.all_particulars.length;

                        if (size>0) {

                            $("#FeesHeadRows_12").empty();
                            var i=1;
                            response.all_particulars.forEach(row =>{
                                $('#FeesHeadRows_12').append('<tr>'+
                                    '<td style="text-align: center">'+i+'</td>'+
                                    '<td style="text-align: center">'+
                                    '<input type="checkbox" name="check[]" id="head_'+row.id+'" class="enabletext" value="'+row.id+'" style="width:18px;height: 18px;margin-top: 3px;">'+
                                    '</td>'+
                                    '<td>'+row.fees_head_name+'</td>'+
                                    '<td style="text-align: center;">'+
                                    '<input type="hidden" name="fees_id['+row.id+']" value="'+row.id+'">'+
                                    '<input type="text" name="amount_'+row.id+'" id="amount'+row.id+'" value="" disabled="" class="given_amount" maxlength="10" onkeyup="calculate_intotal()">'+
                                    '</td>'+
                                    '</tr>');
                                i++;
                            });


                            response.particulars.forEach(row =>{

                                var id_assigned ="#head_"+row.fees_head_id;
                                var present_val= $(id_assigned).val();
                                if (present_val == row.fees_head_id) {
                                    $("#head_"+row.fees_head_id).prop( "checked", true );
                                    document.getElementById("amount"+present_val).value = row.amount;

                                    var textid = "amount"+present_val;
                                    var valuee = document.getElementById(textid).value;
                                    $("#"+textid).prop("disabled",  false);
                                    $("#"+textid).val(valuee,  false);

                                }

                            });





                            $("#hideshowMe").show();
                            $("#hideSubmitBtn").show();
                            $("#generateInvoiceBtn").attr("disabled", false);


                        }

                        else{
                            $("#hideshowMe").hide();
                            $("#hideSubmitBtn").hide();
                            $("#FeesHeadRows_12").empty();
                            $("#generateInvoiceBtn").attr("disabled", true);

                        }

                    },

                });

            } //end parameter check

            else{

                $("#hideshowMe").hide();
                $("#hideSubmitBtn").hide();


                $("#FeesHeadRows_12").empty();
                $("#generateInvoiceBtn").attr("disabled", true);
            }
        }


        function calculate_intotal() {
            var i=0;
            var given_amount=[];
            var sum =0;
            $('.given_amount').each(function() {
                given_amount[i]=Number($(this).val());
                sum = sum+given_amount[i];
                if (sum>0) {
                    $("#generateInvoiceBtn").attr("disabled", false);
                }
                document.getElementById("total_sum").value = sum;
                i++;
            });


        }
    </script>

@endsection

?>