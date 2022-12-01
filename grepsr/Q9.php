<!-- 
9. Reverse the “Specialties” order and remove all ‘null’ or empty key strings, from JSON
below
array 1

{"addresses": [{"accepting_new_patients": true, "address_string":
"1213 15th Ave W, Williston, ND 58801", "city": "Williston",
"languages": [], "office_name": "", "pcp": null, "pcp_id": null,
"phones": [{"type": "phone", "value": "(701) 572-7651"}], "state":
"ND", "street_line_1": "1213 15th Ave W", "street_line_2": "",
"zip": "58801"}],

array 2

"group_affiliations": [],

array 3

"hospital_affiliations":[],

array 4

"networks": [{"name": "TieredChoice Network", "tier": ""}],

array 5

"provider": {"accepting_new_patients": null, "facility_name": "CHI
St. Alexius Health Williston Medical Center Primary Care",
"facility_type": "Clinic", "first_name": null, "gender": null,
"last_name": null, "license_number": "", "middle_name": null, "npi":
null, "pcp": null, "pcp_id": null, "provider_type": "facility",
"rating": {"scale": null, "score": null}, "site_uid":
"ed83060feb270049a4a3bf978dc4acb3", "suffix": null, "title": null,
"unparsed_name": "CHI St. Alexius Health Williston Medical Center
Primary Care"},

array 6

"specialties": [{"name": "Family Medicine"},
{"name": "Internal Medicine"}, {"name": "Mental / Chemical Health
Care"}, {"name": "Obstetrics & Gynecology"}, {"name": "Pain
Medicine"}, {"name": "Pediatrics"}, {"name": "Radiation Oncology"},
{"name": "Urgent Care"}, {"name": "Urology"}]}
Please provide code and output.

{"addresses": [{"accepting_new_patients": true, "address_string":"1213 15th Ave W, Williston, ND 58801", "city": "Williston","languages": [], "office_name": "", "pcp": null, "pcp_id": null,"phones": [{"type": "phone", "value": "(701) 572-7651"}], "state":"ND", "street_line_1": "1213 15th Ave W", "street_line_2": "","zip": "58801"}], "group_affiliations": [], "hospital_affiliations":[], "networks": [{"name": "TieredChoice Network", "tier": ""}],"provider": {"accepting_new_patients": null, "facility_name": "CHISt. Alexius Health Williston Medical Center Primary Care","facility_type": "Clinic", "first_name": null, "gender": null,"last_name": null, "license_number": "", "middle_name": null, "npi":null, "pcp": null, "pcp_id": null, "provider_type": "facility","rating": {"scale": null, "score": null}, "site_uid":"ed83060feb270049a4a3bf978dc4acb3", "suffix": null, "title": null,"unparsed_name": "CHI St. Alexius Health Williston Medical CenterPrimary Care"}, "specialties": [{"name": "Family Medicine"},{"name": "Internal Medicine"}, {"name": "Mental / Chemical HealthCare"}, {"name": "Obstetrics & Gynecology"}, {"name": "PainMedicine"}, {"name": "Pediatrics"}, {"name": "Radiation Oncology"},{"name": "Urgent Care"}, {"name": "Urology"}]}
 -->


<!-- $str = file_get_contents('data.json');

$json = json_decode($str,true);

foreach ($json as $abc){

    print_r ($abc);
    echo "<br><br>"; 

echo var_dump ($json);
print_r (($json));

for ($i=0; $i<=count($json); $i++){
    print_r ($json[$i]);
    echo "<br>";
}
echo "<br><br>";
}

echo "<br>";
$json_array = json_decode($json,true);
print_r($json_array); -->




<?php 

$str = file_get_contents('data.json');

$data = json_decode($str, false);

// unset($data->specialties);

foreach ($data as $data_key=> $data_value){

    if ($data_key == "specialties"){
      $data->specialties = array_reverse($data_value);
    }

    foreach($data_value as $inner_key=>$inner_value){
        if($inner_value == null || $inner_value == ""){
          // echo var_dump($inner_key);
          unset($data->$data_key->$inner_key);
        }
    }

      
}

  echo var_dump(json_encode($data));

?>



