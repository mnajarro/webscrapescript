<?php
//require('simple_html_dom.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('max_execution_time', 30000);

/*$munarray=json_decode('[
  { "Admin3Name":"Matatiele" },
  { "Admin3Name":"Mbizana" },
  { "Admin3Name":"Ntabankulu" },
  { "Admin3Name":"Umzimvubu" },
  { "Admin3Name":"Amahlathi" },
  { "Admin3Name":"Great Kei" },
  { "Admin3Name":"Mbhashe" },
  { "Admin3Name":"Mnquma" },
  { "Admin3Name":"Ngqushwa" },
  { "Admin3Name":"Nkonkobe" },
  { "Admin3Name":"Nxuba" },
  { "Admin3Name":"Buffalo City" },
  { "Admin3Name":"Baviaans" },
  { "Admin3Name":"Blue Crane Route" },
  { "Admin3Name":"Camdeboo" },
  { "Admin3Name":"Ikwezi" },
  { "Admin3Name":"Kou-Kamma" },
  { "Admin3Name":"Kouga" },
  { "Admin3Name":"Makana" },
  { "Admin3Name":"Ndlambe" },
  { "Admin3Name":"Sundays River Valley" },
  { "Admin3Name":"Emalahleni" },
  { "Admin3Name":"Engcobo" },
  { "Admin3Name":"Inkwanca" },
  { "Admin3Name":"Intsika Yethu" },
  { "Admin3Name":"Inxuba Yethemba" },
  { "Admin3Name":"Lukanji" },
  { "Admin3Name":"Sakhisizwe" },
  { "Admin3Name":"Tsolwana" },
  { "Admin3Name":"Elundini" },
  { "Admin3Name":"Gariep" },
  { "Admin3Name":"Maletswai" },
  { "Admin3Name":"Senqu" },
  { "Admin3Name":"Nelson Mandela Bay" },
  { "Admin3Name":"King Sabata Dalindyebo" },
  { "Admin3Name":"Mhlontlo" },
  { "Admin3Name":"Ngquza Hill" },
  { "Admin3Name":"Nyandeni" },
  { "Admin3Name":"Port St Johns" },
  { "Admin3Name":"Mafube" },
  { "Admin3Name":"Metsimaholo" },
  { "Admin3Name":"Moqhaka" },
  { "Admin3Name":"Ngwathe" },
  { "Admin3Name":"Masilonyana" },
  { "Admin3Name":"Matjhabeng" },
  { "Admin3Name":"Nala" },
  { "Admin3Name":"Tokologo" },
  { "Admin3Name":"Tswelopele" },
  { "Admin3Name":"Mangaung" },
  { "Admin3Name":"Dihlabeng" },
  { "Admin3Name":"Maluti a Phofung" },
  { "Admin3Name":"Mantsopa" },
  { "Admin3Name":"Nketoana" },
  { "Admin3Name":"Phumelela" },
  { "Admin3Name":"Setsoto" },
  { "Admin3Name":"Kopanong" },
  { "Admin3Name":"Letsemeng" },
  { "Admin3Name":"Mohokare" },
  { "Admin3Name":"Naledi" },
  { "Admin3Name":"City of Johannesburg" },
  { "Admin3Name":"City of Tshwane" },
  { "Admin3Name":"Ekurhuleni" },
  { "Admin3Name":"Lesedi" },
  { "Admin3Name":"Emfuleni" },
  { "Admin3Name":"Midvaal" },
  { "Admin3Name":"Merafong City" },
  { "Admin3Name":"Mogale City" },
  { "Admin3Name":"Randfontein" },
  { "Admin3Name":"Westonaria" },
  { "Admin3Name":"Dannhauser" },
  { "Admin3Name":"Emadlangeni" },
  { "Admin3Name":"Newcastle" },
  { "Admin3Name":"Ethekwini" },
  { "Admin3Name":"KwaDukuza" },
  { "Admin3Name":"Mandeni" },
  { "Admin3Name":"Maphumulo" },
  { "Admin3Name":"Ndwedwe" },
  { "Admin3Name":"Greater Kokstad" },
  { "Admin3Name":"Ingwe" },
  { "Admin3Name":"Kwa Sani" },
  { "Admin3Name":"Ubuhlebezwe" },
  { "Admin3Name":"Umzimkhulu" },
  { "Admin3Name":"Ezingoleni" },
  { "Admin3Name":"Hibiscus Coast" },
  { "Admin3Name":"Umdoni" },
  { "Admin3Name":"UMuziwabantu" },
  { "Admin3Name":"Umzumbe" },
  { "Admin3Name":"Vulamehlo" },
  { "Admin3Name":"Impendle" },
  { "Admin3Name":"Mkhambathini" },
  { "Admin3Name":"Mpofana" },
  { "Admin3Name":"Richmond" },
  { "Admin3Name":"The Msunduzi" },
  { "Admin3Name":"uMngeni" },
  { "Admin3Name":"uMshwathi" },
  { "Admin3Name":"Hlabisa" },
  { "Admin3Name":"Jozini" },
  { "Admin3Name":"Mtubatuba" },
  { "Admin3Name":"The Big 5 False Bay" },
  { "Admin3Name":"Umhlabuyalingana" },
  { "Admin3Name":"Endumeni" },
  { "Admin3Name":"Msinga" },
  { "Admin3Name":"Nqutu" },
  { "Admin3Name":"Umvoti" },
  { "Admin3Name":"Emnambithi/Ladysmith" },
  { "Admin3Name":"Imbabazane" },
  { "Admin3Name":"Indaka" },
  { "Admin3Name":"Okhahlamba" },
  { "Admin3Name":"Umtshezi" },
  { "Admin3Name":"Mfolozi" },
  { "Admin3Name":"Mthonjaneni" },
  { "Admin3Name":"Nkandla" },
  { "Admin3Name":"Ntambanana" },
  { "Admin3Name":"uMhlathuze" },
  { "Admin3Name":"uMlalazi" },
  { "Admin3Name":"Abaqulusi" },
  { "Admin3Name":"eDumbe" },
  { "Admin3Name":"Nongoma" },
  { "Admin3Name":"Ulundi" },
  { "Admin3Name":"UPhongolo" },
  { "Admin3Name":"Aganang" },
  { "Admin3Name":"Blouberg" },
  { "Admin3Name":"Lepele-Nkumpi" },
  { "Admin3Name":"Molemole" },
  { "Admin3Name":"Polokwane" },
  { "Admin3Name":"Ba-Phalaborwa" },
  { "Admin3Name":"Greater Giyani" },
  { "Admin3Name":"Greater Letaba" },
  { "Admin3Name":"Greater Tzaneen" },
  { "Admin3Name":"Maruleng" },
  { "Admin3Name":"Elias Motsoaledi" },
  { "Admin3Name":"Ephraim Mogale" },
  { "Admin3Name":"Fetakgomo" },
  { "Admin3Name":"Greater Tubatse" },
  { "Admin3Name":"Makhuduthamaga" },
  { "Admin3Name":"Makhado" },
  { "Admin3Name":"Musina" },
  { "Admin3Name":"Mutale" },
  { "Admin3Name":"Thulamela" },
  { "Admin3Name":"Bela-Bela" },
  { "Admin3Name":"Lephalale" },
  { "Admin3Name":"Modimolle" },
  { "Admin3Name":"Mogalakwena" },
  { "Admin3Name":"Mookgopong" },
  { "Admin3Name":"Thabazimbi" },
  { "Admin3Name":"Bushbuckridge" },
  { "Admin3Name":"Mbombela" },
  { "Admin3Name":"Nkomazi" },
  { "Admin3Name":"Thaba Chweu" },
  { "Admin3Name":"Umjindi" },
  { "Admin3Name":"Albert Luthuli" },
  { "Admin3Name":"Dipaleseng" },
  { "Admin3Name":"Govan Mbeki" },
  { "Admin3Name":"Lekwa" },
  { "Admin3Name":"Mkhondo" },
  { "Admin3Name":"Msukaligwa" },
  { "Admin3Name":"Pixley Ka Seme" },
  { "Admin3Name":"Dr JS Moroka" },
  { "Admin3Name":"Emakhazeni" },
  { "Admin3Name":"Steve Tshwete" },
  { "Admin3Name":"Thembisile" },
  { "Admin3Name":"Victor Khanye" },
  { "Admin3Name":"Kgetlengrivier" },
  { "Admin3Name":"Madibeng" },
  { "Admin3Name":"Moretele" },
  { "Admin3Name":"Moses Kotane" },
  { "Admin3Name":"Rustenburg" },
  { "Admin3Name":"City of Matlosana" },
  { "Admin3Name":"Maquassi Hills" },
  { "Admin3Name":"Tlokwe City Council" },
  { "Admin3Name":"Ventersdorp" },
  { "Admin3Name":"Greater Taung" },
  { "Admin3Name":"Kagisano/Molopo" },
  { "Admin3Name":"Lekwa-Teemane" },
  { "Admin3Name":"Mamusa" },
  { "Admin3Name":"Ditsobotla" },
  { "Admin3Name":"Mafikeng" },
  { "Admin3Name":"Ramotshere Moiloa" },
  { "Admin3Name":"Ratlou" },
  { "Admin3Name":"Tswaing" },
  { "Admin3Name":"Dikgatlong" },
  { "Admin3Name":"Magareng" },
  { "Admin3Name":"Phokwane" },
  { "Admin3Name":"Sol Plaatjie" },
  { "Admin3Name":"Ga-Segonyana" },
  { "Admin3Name":"Gamagara" },
  { "Admin3Name":"Joe Morolong" },
  { "Admin3Name":"Hantam" },
  { "Admin3Name":"Kamiesberg" },
  { "Admin3Name":"Karoo Hoogland" },
  { "Admin3Name":"Kh√É¬¢i-Ma" },
  { "Admin3Name":"Nama Khoi" },
  { "Admin3Name":"Richtersveld" },
  { "Admin3Name":"Emthanjeni" },
  { "Admin3Name":"Kareeberg" },
  { "Admin3Name":"Renosterberg" },
  { "Admin3Name":"Siyancuma" },
  { "Admin3Name":"Siyathemba" },
  { "Admin3Name":"Thembelihle" },
  { "Admin3Name":"Ubuntu" },
  { "Admin3Name":"Umsobomvu" },
  { "Admin3Name":"!Kheis" },
  { "Admin3Name":"//Khara Hais" },
  { "Admin3Name":"Kai !Garib" },
  { "Admin3Name":"Kgatelopele" },
  { "Admin3Name":"Mier" },
  { "Admin3Name":"Tsantsabane" },
  { "Admin3Name":"Breede Valley" },
  { "Admin3Name":"Drakenstein" },
  { "Admin3Name":"Langeberg" },
  { "Admin3Name":"Stellenbosch" },
  { "Admin3Name":"Witzenberg" },
  { "Admin3Name":"Beaufort West" },
  { "Admin3Name":"Laingsburg" },
  { "Admin3Name":"Prince Albert" },
  { "Admin3Name":"City of Cape Town" },
  { "Admin3Name":"Bitou" },
  { "Admin3Name":"George" },
  { "Admin3Name":"Hessequa" },
  { "Admin3Name":"Kannaland" },
  { "Admin3Name":"Knysna" },
  { "Admin3Name":"Mossel Bay" },
  { "Admin3Name":"Oudtshoorn" },
  { "Admin3Name":"Cape Agulhas" },
  { "Admin3Name":"Overstrand" },
  { "Admin3Name":"Swellendam" },
  { "Admin3Name":"Theewaterskloof" },
  { "Admin3Name":"Bergrivier" },
  { "Admin3Name":"Cederberg" },
  { "Admin3Name":"Matzikama" },
  { "Admin3Name":"Saldanha Bay" },
  { "Admin3Name":"Swartland" }]',true); ####REPLACE WITH GADM NAMES*/
//var_dump($munarray[1]['FIELD1']);
//print_r(count($munarray));
  $munarray=json_decode('[  { "Admin3Name":"Emnambithi-Ladysmith " },
  { "Admin3Name":"kagisanomolopo" },
  { "Admin3Name":"Ratlou" },
  { "Admin3Name":"Tswaing" },
  { "Admin3Name":"Dikgatlong" },
  { "Admin3Name":"Ga-Segonyana" },
  { "Admin3Name":"Joe Morolong " },
  { "Admin3Name":"Kai-ma" },
  { "Admin3Name":"Nama Khoi" },
  { "Admin3Name":"Richtersveld" },
  { "Admin3Name":"Kareeberg" },
  { "Admin3Name":"Siyathemba" },
  { "Admin3Name":"Kheis" },
  { "Admin3Name":"Khara Hais" },
  { "Admin3Name":"Kai Garib" },
  { "Admin3Name":"Kgatelopele" },
  { "Admin3Name":"Mier " },
  { "Admin3Name":"Breede Valley" },
  { "Admin3Name":"Drakenstein" },
  { "Admin3Name":"Langeberg" },
  { "Admin3Name":"Stellenbosch" },
  { "Admin3Name":"Witzenberg" },
  { "Admin3Name":"Beaufort West" },
  { "Admin3Name":"Laingsburg" },
  { "Admin3Name":"Prince Albert" },
  { "Admin3Name":"City of Cape Town" },
  { "Admin3Name":"Bitou" },
  { "Admin3Name":"George" },
  { "Admin3Name":"Hessequa" },
  { "Admin3Name":"Kannaland" },
  { "Admin3Name":"Knysna" },
  { "Admin3Name":"Mossel Bay" },
  { "Admin3Name":"Oudtshoorn" },
  { "Admin3Name":"Cape Agulhas" },
  { "Admin3Name":"Overstrand" },
  { "Admin3Name":"Swellendam" },
  { "Admin3Name":"Theewaterskloof" },
  { "Admin3Name":"Bergrivier" },
  { "Admin3Name":"Cederberg" },
  { "Admin3Name":"Matzikama" },
  { "Admin3Name":"Saldanha Bay" },
  { "Admin3Name":"Swartland" }]',true);
$mun_data_array= array();
for ($x = 0; $x < count($munarray); $x++) {
    //echo "Municipality: ".$munarray[$x]['FIELD1']." <br>";
	$municipality=str_replace(' ', '-', $munarray[$x]['Admin3Name']);

	$html= file_get_contents('http://www.statssa.gov.za/?page_id=993&id='.$municipality.'-municipality');
	//echo file_get_html('http://www.statssa.gov.za/?page_id=993&id=Tokologo-municipality')->plaintext;

	//$html = file_get_html('http://www.statssa.gov.za/?page_id=993&id=Tokologo-municipality');
	//var_dump($html);
	//$datas=$html->find('div[id=2011]');

	$data_doc=new DOMDocument();
	libxml_use_internal_errors(TRUE);
   

	if(!empty($html)){ //if any html is actually returned
		$data_doc->loadHTML($html);
		libxml_clear_errors(); //remove errors for yucky html
		$data_xpath = new DOMXPath($data_doc);
		$data_row = $data_xpath->query('//div[@id="2011"]//td[2]//text()'); #'//div[@id="2011"]//td//text()'
		$data_row2= $data_xpath->query('//div[@id="2011"]//td[1]//text()');
      $data_row3= $data_xpath->query('//div[@id="2011"]//td');
      //print_r($data_row->length);
		if($data_row->length > 0){
         $headerarray=array();
         $valuesarray=array();
         $testarray=array();
   			foreach($data_row2 as $row){
   				
               $headerarray[]=$row->nodeValue;

   			}
            foreach($data_row as $row){
               $valuesarray[]=$row->nodeValue;

            }
            for ($y = 0; $y < $data_row->length; $y++){
                  $testarray= array_combine($headerarray, $valuesarray);
            };
            $testarray['municipality']=$munarray[$x]['Admin3Name'];
         //print_r($testarray);

            $mun_data_array[]=$testarray;
         
		} else { 
		echo " not found:";
		};
		

	} else { 
		echo "not found:";
		};
	
	echo $munarray[$x]['Admin3Name'].": Complete <br><br>";
}; 
//print_r($mun_data_array);

$fp = fopen('SAcensus2011output2.csv', 'w');
fputcsv($fp, array_keys($mun_data_array[0]));

foreach ($mun_data_array as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);
echo "<br> script reached end";
#working from: https://gist.github.com/anchetaWern/6150297
#iterate results into and array instead of printing and copying into table from browser. Also output a csv from this script.
?>