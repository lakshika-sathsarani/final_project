<?php
	function generateRow(){
		$contents = '';
		include_once('config.php');
		$sql = "SELECT base.ifsno, base.tireno, base.starttime, base.epfno, cushion.cstarttime, cushion.cepfno, tread.finishtime, tread.tepfno
        FROM base
        INNER JOIN cushion ON  base.tireno = cushion.tireno
        INNER JOIN tread ON  cushion.tireno = tread.tireno
        ORDER BY base.starttime DESC";

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['ifsno']."</td>
				<td>".$row['tireno']."</td>
				<td>".$row['starttime']."</td>
				<td>".$row['epfno']."</td>
                <td>".$row['cstarttime']."</td>
                <td>".$row['cepfno']."</td>
				<td>".$row['finishtime']."</td>
                <td>".$row['tepfno']."</td>
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
      	<h4>management information Table - Blaking Section</h4>
      	<table border="1" cellspacing="0" cellpadding="3">
           <tr>
				<th width="10%">IFS no</th>
				<th width="10%">Tire no</th>
				<th width="15%">Base start time</th>
                <th width="15%">Base epf no</th>
                <th width="15%">Cushion start time</th>
                <th width="15%">Cushion epf no</th>
                <th width="15%">Tread finish time</th>
                <th width="15%">Tread epf no</th>
           </tr>
      ';
			 
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('blanking.pdf', 'I');


?>
