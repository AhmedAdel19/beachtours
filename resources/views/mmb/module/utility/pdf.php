<div style="width:1760px !important; ;">
    <?php
    $content = $title;
    $content .= '<table  class="tbl table">';
    $content .= '<tr>';
    foreach($fields as $f )
    {
        if($f['download'] =='1') $content .= '<th style="width:100px;background:#f9f9f9;">'. $f['label'] . '</th>';
    }
    $content .= '</tr>';

    foreach ($rows as $row)
    {
        $content .= '<tr>';
        foreach($fields as $f )
        {
            if($f['download'] =='1'):
                $content .= '<td style="width:80px; word-wrap: break-word"> '. SiteHelpers::formatRows($row->{$f['field']},$f,$row) . '</td>';
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
        width : 100% !important;
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
    .table   tr  th {  }
    .table   tr  td {
        border-top: 1px solid #e7eaec;
        line-height: 1.42857;
        vertical-align: top;
    }

</style>