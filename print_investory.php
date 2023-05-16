<?php
	function generateRow(){
		$contents = '';
		include_once('config.php');
        $sql = "SELECT base.ifsno, base.tireno, base.starttime, base.epfno, cushion.cstarttime, cushion.cepfno, tread.finishtime, tread.tepfno, unloading.ustarttime, unloading.uepfno, loading.lstarttime, loading.lepfno, quality.visualinspectionchecklist, quality.hardness, quality.ultrasonictestresults
        FROM base
        INNER JOIN cushion ON  base.tireno = cushion.tireno
        INNER JOIN tread ON  cushion.tireno = tread.tireno
        INNER JOIN unloading ON  base.tireno = unloading.tireno
        INNER JOIN loading ON  unloading.tireno = loading.tireno
        INNER JOIN quality ON  base.tireno = quality.tireno
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
                <td>".$row['ustarttime']."</td>
                <td>".$row['uepfno']."</td>
                <td>".$row['lstarttime']."</td>
                <td>".$row['lepfno']."</td>
                <td>".$row['visualinspectionchecklist']."</td>
                <td>".$row['hardness']."</td>
                <td>".$row['ultrasonictestresults']."</td>  
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
      	<h4>management information Table - Investory Section</h4>
      	<table border="1" cellspacing="0" cellpadding="3">
           <tr>
				<th width="8%">IFS no</th>
				<th width="8%">Tire no</th>
				<th width="10%">Base start time</th>
                <th width="5%">Base epf no</th>
                <th width="10%">Cushion start time</th>
                <th width="5%">Cushion epf no</th>
                <th width="10%">Tread finish time</th>
                <th width="5%">Tread epf no</th>
                <th width="10%">Unloading start time</th>
                <th width="5%">Unloading epf no</th>
                <th width="10%">Loading start time</th>
                <th width="5%">Loading epf no</th>
                <th width="5%">Visual inspection check list</th>
                <th width="5%">Hardness</th>
                <th width="5%">Ultrasonic test results</th>
           </tr>
      ';
			 
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('investory.pdf', 'I');


?>
