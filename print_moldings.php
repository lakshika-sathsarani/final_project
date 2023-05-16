<?php
	function generateRow(){
		$contents = '';
		include_once('config.php');
		$sql = "SELECT base.ifsno, base.tireno, unloading.ustarttime, unloading.uepfno, loading.lstarttime, loading.lepfno
        FROM base
        INNER JOIN unloading ON  base.tireno = unloading.tireno
        INNER JOIN loading ON  unloading.tireno = loading.tireno
        ORDER BY unloading.ustarttime DESC";

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['ifsno']."</td>
                <td>".$row['tireno']."</td>
                <td>".$row['ustarttime']."</td>
                <td>".$row['uepfno']."</td>
                <td>".$row['lstarttime']."</td>
                <td>".$row['lepfno']."</td>  
			</tr>
			";
		}
		

		return $contents;
	}

	require_once('tcpdf/tcpdf.php');
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle("Generated PDF using TCPDF");
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('helvetica');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 10);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->AddPage();
    $content = '';
    $content .= '
      	<h2 align="center">Stellana company</h2>
      	<h4>management information Table - Moldings Section</h4>
      	<table border="1" cellspacing="0" cellpadding="3">
           <tr>
				<th width="20%">IFS no</th>
				<th width="20%">Tire no</th>
				<th width="15%">Unloading start time</th>
                <th width="20%">Unloading epf no</th>
                <th width="15%">Loading start time</th>
                <th width="20%">Loading epf no</th>
           </tr>
      ';
			 
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('moldings.pdf', 'I');


?>
