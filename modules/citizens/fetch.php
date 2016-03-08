<?php
	
	require_once(ABSCPATH.'modules/citizens/wsdl-functions.php');
	
	global $soap_parameters;
	
	$client = new SoapClient($soap_parameters['wsdl_url'], array('trace' => 1, 'exceptions' => 1, 'cache_wsdl' => 0)); // set trace = 1 for debugging
	
	$client->__setSoapHeaders(soapClientWSSecurityHeader('T2202HM8CKKLP6HSN84C73LLV', 'W8w6zUpVDfEAyhEXXcFG')); // TODO: Change with the correct one
	
	$client->__setLocation($soap_parameters['wsdl_url']);	// we set the location manually, since the one in the WSDL is wrong
	
	$details = '';
	$details_tay = '';
	
	$pAuditRec = array(
		'auditEntityCode' 			=> '0BO1FA73TRS5VTYTBS7QPYHTWM5N7IKKIVCYY99E',
		'auditEntityReason' 		=> '1',
		'auditEndUserApplUser' 		=> 'pdmtest',
		'auditEntityProtocolDate' 	=> '1900-01-01T00:00:00.000+02:00',
		'auditEndUserOsUser' 		=> 'linux',
		'auditServerHostName' 		=> 'localhost',
		'auditUnitCode' 			=> 'pdmIT',
		'auditUnitDescr' 			=> 'testdesc',
		'auditEndUserHostName' 		=> 'lykourgos',
		'auditEntityTransactionId' 	=> '1234567890',
		'auditEntityTransactionDate'=> '2016-01-07T12:30:00.000+02:00',
		'auditServerHostIp' 		=> '127.0.0.1',
		'auditEndUserHostIp' 		=> '84.205.238.152',
		'auditEntityProtocolNo' 	=> 'να_συμπληρωθεί_βάσει_προδιαγραφών',
	);
	
	$pAsOnDate		= '';
	$pCallSeqId_out = '';
	$pErrorRec_out 	= array('errorDescr' => '', 'errorCode' => '');
	
	//================================== AFM Search Details =====================================//
	$pAfm = '010800963'; // TODO: Change with the correct one
	
	$pAithmaFirmAct 	= 	1;
    $pAithmaMembership 	= 	1;
    $pAithmaRelation 	= 	1;
    $pAithmaSymmetoxes 	= 	1;
    $pAithmaSysx 		= 	1;
    $pAithmaBranch 		= 	1;
    $pAithmaBranchAbr 	= 	0;
    $pAithmaFirmAbr 	= 	1;
	
	$pAllDataBasicRec_out = array(	
								'afm' => '',
								'doyDescr' => '',
								'firmDoy' => '',
								'doy' => '',
								'cntCitizenshipDescr' => '',
								'onomasia' => '',
								'countOfBranches' => '',
								'ninJntVentDescr' => '',
								'firmParDescr' => '',
								'facMainActivity' => '',
								'cntResidenceDescr' => '',
								'firmAddressNo' => '',
								'birthDate' => '',
								'ninSaFileNo' => '',
								'postalAddressNo' => '',
								'frmBooksDescr' => '',
								'ninLegalStatusDescr' => '',
								'residenceAddressNo' => '',
								'deactivationFlag' => '',
								'firmAddress' => '',
								'firmZipCode' => '',
								'frmEndAcntPeriod' => '',
								'residenceZipCode' => '',
								'frmBooks' => '',
								'residenceAddress' => '',
								'frmFstStateDescr' => '',
								'postalZipCode' => '',
								'frmExtExciseDescr' => '',
								'INiFlag' => '',
								'stopDate' => '',
								'frmForOriginDescr' => '',
								'postalParDescr' => '',
								'ninLegalStatus' => '',
								'cardKind' => '',
								'deathDate' => '',
								'birthPlace' => '',
								'registDate' => '',
								'cardNo' => '',
								'ninLegalPurpose' => '',
								'assTxpActual' => '',
								'frmVatStatus' => '',
								'indPhone' => '',
								'firmPhone' => '',
								'ninCapitalInfo' => '',
								'ninLegalPurposeDescr' => '',
								'frmOrsStopDescr' => '',
								'frmVatStatusDescr' => '',
								'ninJntVentEndDate' => '',
								'residenceParDescr' => '',
								'frmFirstAcntPrdEnd' => '',
								'firmFlag' => '',
								'mothersFirstName' => '',
								'firmCommerTitle' => '',
								'actMainDescr' => '',
								'postalAddress' => '',
								'ninSharesDescr' => '',
								'ninFPMState' => '',
							);
	
	$pAllDataFirmActTab_out		= array();
	$pAllDataMembershipTab_out	= array();
	$pAllDataRelationTab_out	= array();
	$pAllDataSymmetoxesTab_out	= array();
	$pAllDataSysxTab_out		= array();
	$pAllDataBranchTab_out		= array();
	$pAllDataBranchAbrTab_out	= array();
	$pAllDataFirmAbrRec_out		= array();
		  
	try {	
		$result = $client->rgWsAllDataAfm(
				$pAuditRec,
				$pAfm,
				$pAithmaFirmAct,
				$pAithmaMembership,
				$pAithmaRelation,
				$pAithmaSymmetoxes,
				$pAithmaSysx,
				$pAithmaBranch,
				$pAithmaBranchAbr,
				$pAithmaFirmAbr,
				$pAsOnDate,
				$pAllDataBasicRec_out, // These are the details we are looking for
				//$pAllDataFirmActTab_out,
				//$pAllDataMembershipTab_out,
				//$pAllDataRelationTab_out,
				//$pAllDataSymmetoxesTab_out,
				//$pAllDataSysxTab_out,
				//$pAllDataBranchTab_out,
				//$pAllDataBranchAbrTab_out,
				//$pAllDataFirmAbrRec_out,
				//$pCallSeqId_out,
				$pErrorRec_out
			);
	
	
		if (!$result['pErrorRec_out']->errorCode){
			$details = (array)$result['pAllDataBasicRec_out'];
			$_SESSION['gsis_user'] = $details;
		} else{
			echo 'Request[AFM]: <br /><xmp>'. $client->__getLastRequest(). '</xmp><br /><br /> Error Message: <br />'. $result['pErrorRec_out']->errorCode;
		}
		
	} catch(SoapFault $fault) {
		echo 'Request[AFM]: <br /><xmp>', $client->__getLastRequest(), '</xmp><br /><br /> Fault Message: <br />', $fault->getMessage();
	}
	
	//================================== TAYT Search Details =====================================//
	if($details != ''){
		
		$pTayt = 'Α738249'; 	//TODO: This should be the correct one -> $details ['cardNo']
		$pEidosTayt = 1;
	  
		$pAllDataTaytRec_out = array(
								'afm'=>'',
								'residenceNo'=>'',
								'doyDescr'=>'',
								'doy'=>'',
								'surname'=>'',
								'parResidenceDescr'=>'',
								'cntCitizenshipDescr'=>'',
								'deathDate'=>'',
								'birthPlace'=>'',
								'cardNo'=>'',
								'assTxpActual'=>'',
								'cntResidenceDescr'=>'',
								'fathersSurname'=>'',
								'postalNo'=>'',
								'birthDate'=>'',
								'mothersSurname'=>'',
								'parPostalDescr'=>'',
								'firstName'=>'',
								'parPostal'=>'',
								'deactFlag'=>'',
								'secondSurname'=>'',
								'fathersFirstName'=>'',
								'parResidence'=>'',
								'cardKindDescr'=>'',
								'firmFlag'=>'',
								'cardDate'=>'',
								'cardAuthDescr'=>'',
								'mothersFirstName'=>'',
								'postalAddress'=>'',
								'residenceAddress'=>''
							);
			
		try {	
			$result_tay = $client->rgWsAllDataTayt(
				$pAuditRec,
				$pTayt,
				$pEidosTayt,
				$pAsOnDate,
				$pAllDataTaytRec_out,
				$pCallSeqId_out,
				$pErrorRec_out
			);
	
			if (!$result_tay['pErrorRec_out']->errorCode){
				$details_tay = (array)$result_tay['pAllDataTaytRec_out'];
				$_SESSION['gsis_user_id'] = $details_tay;
			} else{
				echo 'Request[TAY]: <br /><xmp>'. $client->__getLastRequest(). '</xmp><br /><br /> Error Message: <br />'. $result_tay['pErrorRec_out']->errorCode;
			}
			
		} catch(SoapFault $fault) {
			echo 'Request[TAY]: <br /><xmp>', $client->__getLastRequest(), '</xmp><br /><br /> Fault Message: <br />', $fault->getMessage();
		}

	}	
	header("Location:".URL);
	exit();

?>