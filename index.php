<?php 
$arr = array('one','two','three','four','five');
$html = "<div style='background:red;color:black;'>";
foreach($arr as $value){
    $html .= $value.'<br />';
}
$html .= "</div>"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           <!DOCTYPE html>
<html>
<head>
<title>PDF</title>
<style>
@page {
    margin: 0px 0px 0px 0px !important;
    padding: 0px 0px 0px 0px !important;
}
</style>
</head>
<body>
<style>
table th, table td{
    padding:5px 3px!important;
}
</style>
<h1 class="text-center"><b>INVOICE</b></h1>
<table class="table">
    <colgroup>
        <col width="50%">
        <col width="50%">
    </colgroup>
    <tr>
        <td>
       <img src="<?php //echo validate_image($_settings->info('logo')) ?>" class="img-thumbnail" style="height:75px;width:75px;object-fit:contain" alt="">
        <p>Bill From: <u><?php  ?></u></p>
        <p>Address: <u><?php  ?></u></p>
        <p>Tel: <u><?php  ?></u></p>
        <p>E-Mail: <u><?php  ?></u></p>
        <p>Tax ID: <u><?php  ?></u></p>
        <p>Attn: <u><?php  ?></u></p>

        </td>
        <td>
        <p><b>Invoice Date:</b> <?php echo date("F d, Y",strtotime()) ?></p>
        <p>Bill To: <u><?php ?></u></p>
        
        <p><b>Tel:</b> <?php ?></p>
        </td>
    </tr>
</table>
<hr>
<table class="table table-bordered">
    <colgroup>
        <col width="10%">
        <col width="15%">
        <col width="35%">
        <col width="15%">
        <col width="15%">
    </colgroup>
    <thead>
        <tr >
            <th class="text-center">SR NO.</th>
            <th class="text-center">Lot NO.</th>
            <th class="text-center">Description</th>
            <th class="text-center">On/Memo</th>
        
             <th rowspan="2">pcs</th>
            <th class="text-center">Cost</th>
            <th class="text-center">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // foreach($memodetails as $row){
                // pr($row);die;
        ?>
        <tr>
            <td class="text-center"><?php ?></td>
            <td class="text-center"><?php  ?></td>
            <td class="">
            <p class="m-0"><small><b>Category:</b> <?php ?></small></p>
            <p class="m-0"><small><b>Name:</b> <?php  ?></small></p>
            <div>
                <?php  ?>
            </div>
            </td>
            <td class="text-right"><?php // echo number_format($row['price']) ?></td>
            <td class="text-right"><?php // echo number_format($row['total']) ?></td>
        </tr>
        <?php // } ?>
    </tbody>
    <tfoot>
        <tr class="bg-foot" style="background-color:#95b3e8 !important;">
            <th class="text-right" colspan="4">Sub Total</th>
            <th class="text-right" id="sub_total"><?php //echo number_format($sub_total) ?></th>
        </tr>
        <tr class="bg-foot" style="background-color:#95b3e8 !important;">
            <th class="text-right" colspan="4">Tax Rate</th>
            <th class="text-right" id="tax_rate"><?php //echo $tax_rate ?>%</th>
        </tr>
        <tr class="bg-foot" style="background-color:#95b3e8 !important;">
            <th class="text-right" colspan="4">Tax</th>
            <th class="text-right" id="tax"><?php //echo number_format($sub_total * ($tax_rate/100) ) ?></th>
        </tr>
        <tr class="bg-foot" style="background-color:#95b3e8 !important;">
            <th class="text-right" colspan="4">Grand Total</th>
            <th class="text-right" id="gtotal"><?php //echo number_format($total_amount) ?></th>
        </tr>
    </tfoot>
</table>
<hr>
<p><b>Remarks:</b></p>

<!-- <?php // pr($memodetails); ?> -->
</body>
</html>
    
  </div>
</div>
<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>
</body>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
</html>
