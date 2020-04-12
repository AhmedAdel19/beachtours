<?php
    $width3 = "width:1660px";
    $width1 = "width:114px;";
    $width2 = "width:114px;";

    if(count($fields) <= 11){
        $width3 = "width:1860px";
        $width1="width:145px;";
        $width2="width:145px;";
    }
    if(count($fields) <= 13){
        $width3 = "width:2900px";
       // $width3 = "width:1660px";
       // $width1="width:145px;";
        //$width2="width:145px;";
    }
    if (count($fields)   == 5){
        $width3 = "width:2000px";
    }
    if(count($fields) <= 6 && count($fields)> 3){
        $width1="width:200px;";
        $width2="width:200px;";
    }
    if(count($fields) == 6 ){
        $width3 = "width:1560px";
        $width1="width:200px;";
        $width2="width:200px;";
    }
    if(count($fields)  >= 24){
        $width3 = "width:10px;";
        $width1 = "width:90px;";
        $width2="width:90px;";
    }
    if(count($fields)  == 21){
        //tours
        $width3 = "width:65px;";
        $width1 = "width:112px;";
        $width2="width:111px;";
    }
    if(count($fields) == 18 ){
        $width3 = "width:500px;";
        $width1="width:82px;";
        $width2="width:82px;";
    }
    if(count($fields) == 16 ){
        $width3 = "width:400px;";
        $width1="width:102px;";
        $width2="width:102px;";
    }
    if ($title == "Hotel"){
        $width1 = "width:115px;";
        $width2="width:115px;";
    }
    if(count($fields) <= 3){
        $width1="width:10px;";
        $width2="width:10px;";
        $width3 = "width:1460px;";
    }
    if(count($fields) == 4){
        $width1="width:10px;";
        $width2="width:10px;";
        $width3 = "width:2060px;";
    }
?>
<div style="<?php echo $width3 ?> !important; ;">
<?php
    $content = $title;
    $content .= '<table  class="tbl table">';
    $content .= '<tr>';
    foreach($fields as $f )
    {
        if($f['download'] =='1') $content .= '<th style="'.$width1.'background:#f9f9f9;word-wrap: break-word"">'. $f['label'] . '</th>';
    }
    $content .= '</tr>';

    foreach ($rows as $row)
    {
        $content .= '<tr>';
        foreach($fields as $f )
        {
            if($f['download'] =='1'):
                $content .= '<td style="'.$width2.' word-wrap: break-word"> '. SiteHelpers::formatRows($row->{$f['field']},$f,$row) . '</td>';
            endif;
        }
        $content .= '</tr>';
    }
    $content .= '</table>';
    echo $content;
    ?>
</div>
<style>

    .tbl{
        width : 50% !important;
        border: 1px solid #000;
    }
    body {
        color: #34495e;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: Arial, sans-serif;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .table {  border: 1px solid #EBEBEB; width: 90%;}
    .table   tr  th {
    <?php if ($title == "Hotel"){?>
        font-size: 20px;

    <?php
        }
        ?>
    }
    .table   tr  td {
        border-top: 1px solid #e7eaec;
        line-height: 1.42857;
        vertical-align: top;
        font-size: 20px;
    }
</style>