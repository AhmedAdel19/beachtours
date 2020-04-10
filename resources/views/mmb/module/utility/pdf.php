<div style="">
<?php

	$content = $title;
	$content .= '<table  class="table">';
	$content .= '<tr>';
	foreach($fields as $f )
	{
		if($f['download'] =='1') $content .= '<th style="background:#f9f9f9;">'. $f['label'] . '</th>';
	}
	$content .= '</tr>';

	foreach ($rows as $row)
	{
		$content .= '<tr>';
		foreach($fields as $f )
		{
			if($f['download'] =='1'):
				$content .= '<td> '. SiteHelpers::formatRows($row->{$f['field']},$f,$row) . '</td>';
			endif;
		}
		$content .= '</tr>';
	}
	$content .= '</table>';
	echo $content;
?>
</div>
<style>
body {
font-size: 10px;
color: #34495e;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: Arial, sans-serif;
  overflow-x: hidden;
  overflow-y: auto;
}

.table {  border: 1px solid #EBEBEB; width: 100%;}
.table   tr  th {
    padding:20px;
    font-size: 9px;
    overflow: hidden;
}
.table   tr  td {
  border-top: 1px solid #e7eaec;
  line-height: 1.42857;
  font-size:11px;
    padding: 12px;
    overflow-x: hidden;
    overflow-y: auto;
    text-align: center;
    vertical-align: middle;

}
</style>
<script type="application/javascript">
    window.print();
</script>