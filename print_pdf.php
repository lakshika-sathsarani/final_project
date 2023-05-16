<?php
	function generateRow(){
		$contents = '';
		include_once('config.php');
		$sql = "SELECT * FROM base";

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['ifsno']."</td>
				<td>".$row['tireno']."</td>
				<td>".$row['starttime']."</td>
        <td>".$row['epfno']."</td>
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
      	<h4>management information Table - Base Section</h4>
      	<table border="1" cellspacing="0" cellpadding="3">
           <tr>
        <th width="5%">ID</th>
				<th width="20%">IFSno</th>
				<th width="20%">Tireno</th>
				<th width="25%">Starttime</th>
        <th width="20%">EPFno</th>
           </tr>
      ';
			 
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('base.pdf', 'I');


?>
