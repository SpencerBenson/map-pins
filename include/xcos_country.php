<?

if ( !defined('ABSPATH') ) die('-1');	// no direct access

class xcos_country {
	
	public static function getCoutryName($code,$langdomain='mappins') {
		$ac=self::getCountries($langdomain);	// fake domain to get the default english description
		return $ac[$code];
	}
	
	public static function getCountries($langdomain='mappins') {
		return array(
		  "AU" => __("Australia",$langdomain),
		  "AF" => __("Afghanistan",$langdomain),
		  "AL" => __("Albania",$langdomain),
		  "DZ" => __("Algeria",$langdomain),
		  "AS" => __("American Samoa",$langdomain),
		  "AD" => __("Andorra",$langdomain),
		  "AO" => __("Angola",$langdomain),
		  "AI" => __("Anguilla",$langdomain),
		  "AQ" => __("Antarctica",$langdomain),
		  "AG" => __("Antigua & Barbuda",$langdomain),
		  "AR" => __("Argentina",$langdomain),
		  "AM" => __("Armenia",$langdomain),
		  "AW" => __("Aruba",$langdomain),
		  "AT" => __("Austria",$langdomain),
		  "AZ" => __("Azerbaijan",$langdomain),
		  "BS" => __("Bahamas",$langdomain),
		  "BH" => __("Bahrain",$langdomain),
		  "BD" => __("Bangladesh",$langdomain),
		  "BB" => __("Barbados",$langdomain),
		  "BY" => __("Belarus",$langdomain),
		  "BE" => __("Belgium",$langdomain),
		  "BZ" => __("Belize",$langdomain),
		  "BJ" => __("Benin",$langdomain),
		  "BM" => __("Bermuda",$langdomain),
		  "BT" => __("Bhutan",$langdomain),
		  "BO" => __("Bolivia",$langdomain),
		  "BA" => __("Bosnia/Hercegovina",$langdomain),
		  "BW" => __("Botswana",$langdomain),
		  "BV" => __("Bouvet Island",$langdomain),
		  "BR" => __("Brazil",$langdomain),
		  "IO" => __("British Indian Ocean Territory",$langdomain),
		  "BN" => __("Brunei Darussalam",$langdomain),
		  "BG" => __("Bulgaria",$langdomain),
		  "BF" => __("Burkina Faso",$langdomain),
		  "BI" => __("Burundi",$langdomain),
		  "KH" => __("Cambodia",$langdomain),
		  "CM" => __("Cameroon",$langdomain),
		  "CA" => __("Canada",$langdomain),
		  "CV" => __("Cape Verde",$langdomain),
		  "KY" => __("Cayman Is",$langdomain),
		  "CF" => __("Central African Republic",$langdomain),
		  "TD" => __("Chad",$langdomain),
		  "CL" => __("Chile",$langdomain),
		  "CN" => __("China, People's Republic of",$langdomain),
		  "CX" => __("Christmas Island",$langdomain),
		  "CC" => __("Cocos Islands",$langdomain),
		  "CO" => __("Colombia",$langdomain),
		  "KM" => __("Comoros",$langdomain),
		  "CG" => __("Congo",$langdomain),
		  "CD" => __("Congo, Democratic Republic",$langdomain),
		  "CK" => __("Cook Islands",$langdomain),
		  "CR" => __("Costa Rica",$langdomain),
		  "CI" => __("Cote d'Ivoire",$langdomain),
		  "HR" => __("Croatia",$langdomain),
		  "CU" => __("Cuba",$langdomain),
		  "CY" => __("Cyprus",$langdomain),
		  "CZ" => __("Czech Republic",$langdomain),
		  "DK" => __("Denmark",$langdomain),
		  "DJ" => __("Djibouti",$langdomain),
		  "DM" => __("Dominica",$langdomain),
		  "DO" => __("Dominican Republic",$langdomain),
		  "TP" => __("East Timor",$langdomain),
		  "EC" => __("Ecuador",$langdomain),
		  "EG" => __("Egypt",$langdomain),
		  "SV" => __("El Salvador",$langdomain),
		  "GQ" => __("Equatorial Guinea",$langdomain),
		  "ER" => __("Eritrea",$langdomain),
		  "EE" => __("Estonia",$langdomain),
		  "ET" => __("Ethiopia",$langdomain),
		  "FK" => __("Falkland Islands",$langdomain),
		  "FO" => __("Faroe Islands",$langdomain),
		  "FJ" => __("Fiji",$langdomain),
		  "FI" => __("Finland",$langdomain),
		  "FR" => __("France",$langdomain),
		  "FX" => __("France, Metropolitan",$langdomain),
		  "GF" => __("French Guiana",$langdomain),
		  "PF" => __("French Polynesia",$langdomain),
		  "TF" => __("French South Territories",$langdomain),
		  "GA" => __("Gabon",$langdomain),
		  "GM" => __("Gambia",$langdomain),
		  "GE" => __("Georgia",$langdomain),
		  "DE" => __("Germany",$langdomain),
		  "GH" => __("Ghana",$langdomain),
		  "GI" => __("Gibraltar",$langdomain),
		  "GR" => __("Greece",$langdomain),
		  "GL" => __("Greenland",$langdomain),
		  "GD" => __("Grenada",$langdomain),
		  "GP" => __("Guadeloupe",$langdomain),
		  "GU" => __("Guam",$langdomain),
		  "GT" => __("Guatemala",$langdomain),
		  "GN" => __("Guinea",$langdomain),
		  "GW" => __("Guinea-Bissau",$langdomain),
		  "GY" => __("Guyana",$langdomain),
		  "HT" => __("Haiti",$langdomain),
		  "HM" => __("Heard Island And Mcdonald Island",$langdomain),
		  "HN" => __("Honduras",$langdomain),
		  "HK" => __("Hong Kong",$langdomain),
		  "HU" => __("Hungary",$langdomain),
		  "IS" => __("Iceland",$langdomain),
		  "IN" => __("India",$langdomain),
		  "ID" => __("Indonesia",$langdomain),
		  "IR" => __("Iran",$langdomain),
		  "IQ" => __("Iraq",$langdomain),
		  "IE" => __("Ireland",$langdomain),
		  "IL" => __("Israel",$langdomain),
		  "IT" => __("Italy",$langdomain),
		  "JM" => __("Jamaica",$langdomain),
		  "JP" => __("Japan",$langdomain),
		  "JT" => __("Johnston Island",$langdomain),
		  "JO" => __("Jordan",$langdomain),
		  "KZ" => __("Kazakhstan",$langdomain),
		  "KE" => __("Kenya",$langdomain),
		  "KI" => __("Kiribati",$langdomain),
		  "KP" => __("Korea, Democratic Peoples Republic",$langdomain),
		  "KR" => __("Korea, Republic of",$langdomain),
		  "KW" => __("Kuwait",$langdomain),
		  "KG" => __("Kyrgyzstan",$langdomain),
		  "LA" => __("Lao People's Democratic Republic",$langdomain),
		  "LV" => __("Latvia",$langdomain),
		  "LB" => __("Lebanon",$langdomain),
		  "LS" => __("Lesotho",$langdomain),
		  "LR" => __("Liberia",$langdomain),
		  "LY" => __("Libyan Arab Jamahiriya",$langdomain),
		  "LI" => __("Liechtenstein",$langdomain),
		  "LT" => __("Lithuania",$langdomain),
		  "LU" => __("Luxembourg",$langdomain),
		  "MO" => __("Macau",$langdomain),
		  "MK" => __("Macedonia",$langdomain),
		  "MG" => __("Madagascar",$langdomain),
		  "MW" => __("Malawi",$langdomain),
		  "MY" => __("Malaysia",$langdomain),
		  "MV" => __("Maldives",$langdomain),
		  "ML" => __("Mali",$langdomain),
		  "MT" => __("Malta",$langdomain),
		  "MH" => __("Marshall Islands",$langdomain),
		  "MQ" => __("Martinique",$langdomain),
		  "MR" => __("Mauritania",$langdomain),
		  "MU" => __("Mauritius",$langdomain),
		  "YT" => __("Mayotte",$langdomain),
		  "MX" => __("Mexico",$langdomain),
		  "FM" => __("Micronesia",$langdomain),
		  "MD" => __("Moldavia",$langdomain),
		  "MC" => __("Monaco",$langdomain),
		  "MN" => __("Mongolia",$langdomain),
		  "MS" => __("Montserrat",$langdomain),
		  "MA" => __("Morocco",$langdomain),
		  "MZ" => __("Mozambique",$langdomain),
		  "MM" => __("Union Of Myanmar",$langdomain),
		  "NA" => __("Namibia",$langdomain),
		  "NR" => __("Nauru Island",$langdomain),
		  "NP" => __("Nepal",$langdomain),
		  "NL" => __("Netherlands",$langdomain),
		  "AN" => __("Netherlands Antilles",$langdomain),
		  "NC" => __("New Caledonia",$langdomain),
		  "NZ" => __("New Zealand",$langdomain),
		  "NI" => __("Nicaragua",$langdomain),
		  "NE" => __("Niger",$langdomain),
		  "NG" => __("Nigeria",$langdomain),
		  "NU" => __("Niue",$langdomain),
		  "NF" => __("Norfolk Island",$langdomain),
		  "MP" => __("Mariana Islands, Northern",$langdomain),
		  "NO" => __("Norway",$langdomain),
		  "OM" => __("Oman",$langdomain),
		  "PK" => __("Pakistan",$langdomain),
		  "PW" => __("Palau Islands",$langdomain),
		  "PS" => __("Palestine",$langdomain),
		  "PA" => __("Panama",$langdomain),
		  "PG" => __("Papua New Guinea",$langdomain),
		  "PY" => __("Paraguay",$langdomain),
		  "PE" => __("Peru",$langdomain),
		  "PH" => __("Philippines",$langdomain),
		  "PN" => __("Pitcairn",$langdomain),
		  "PL" => __("Poland",$langdomain),
		  "PT" => __("Portugal",$langdomain),
		  "PR" => __("Puerto Rico",$langdomain),
		  "QA" => __("Qatar",$langdomain),
		  "RE" => __("Reunion Island",$langdomain),
		  "RO" => __("Romania",$langdomain),
		  "RU" => __("Russian Federation",$langdomain),
		  "RW" => __("Rwanda",$langdomain),
		  "WS" => __("Samoa",$langdomain),
		  "SH" => __("St Helena",$langdomain),
		  "KN" => __("St Kitts & Nevis",$langdomain),
		  "LC" => __("St Lucia",$langdomain),
		  "PM" => __("St Pierre & Miquelon",$langdomain),
		  "VC" => __("St Vincent",$langdomain),
		  "SM" => __("San Marino",$langdomain),
		  "ST" => __("Sao Tome & Principe",$langdomain),
		  "SA" => __("Saudi Arabia",$langdomain),
		  "SN" => __("Senegal",$langdomain),
		  "SC" => __("Seychelles",$langdomain),
		  "SL" => __("Sierra Leone",$langdomain),
		  "SG" => __("Singapore",$langdomain),
		  "SK" => __("Slovakia",$langdomain),
		  "SI" => __("Slovenia",$langdomain),
		  "SB" => __("Solomon Islands",$langdomain),
		  "SO" => __("Somalia",$langdomain),
		  "ZA" => __("South Africa",$langdomain),
		  "GS" => __("South Georgia and South Sandwich",$langdomain),
		  "ES" => __("Spain",$langdomain),
		  "LK" => __("Sri Lanka",$langdomain),
		  "XX" => __("Stateless Persons",$langdomain),
		  "SD" => __("Sudan",$langdomain),
		  "SR" => __("Suriname",$langdomain),
		  "SJ" => __("Svalbard and Jan Mayen",$langdomain),
		  "SZ" => __("Swaziland",$langdomain),
		  "SE" => __("Sweden",$langdomain),
		  "CH" => __("Switzerland",$langdomain),
		  "SY" => __("Syrian Arab Republic",$langdomain),
		  "TW" => __("Taiwan, Republic of China",$langdomain),
		  "TJ" => __("Tajikistan",$langdomain),
		  "TZ" => __("Tanzania",$langdomain),
		  "TH" => __("Thailand",$langdomain),
		  "TL" => __("Timor Leste",$langdomain),
		  "TG" => __("Togo",$langdomain),
		  "TK" => __("Tokelau",$langdomain),
		  "TO" => __("Tonga",$langdomain),
		  "TT" => __("Trinidad & Tobago",$langdomain),
		  "TN" => __("Tunisia",$langdomain),
		  "TR" => __("Turkey",$langdomain),
		  "TM" => __("Turkmenistan",$langdomain),
		  "TC" => __("Turks And Caicos Islands",$langdomain),
		  "TV" => __("Tuvalu",$langdomain),
		  "UG" => __("Uganda",$langdomain),
		  "UA" => __("Ukraine",$langdomain),
		  "AE" => __("United Arab Emirates",$langdomain),
		  "GB" => __("United Kingdom",$langdomain),
		  "UM" => __("US Minor Outlying Islands",$langdomain),
		  "US" => __("USA",$langdomain),
		  "HV" => __("Upper Volta",$langdomain),
		  "UY" => __("Uruguay",$langdomain),
		  "UZ" => __("Uzbekistan",$langdomain),
		  "VU" => __("Vanuatu",$langdomain),
		  "VA" => __("Vatican City State",$langdomain),
		  "VE" => __("Venezuela",$langdomain),
		  "VN" => __("Vietnam",$langdomain),
		  "VG" => __("Virgin Islands (British)",$langdomain),
		  "VI" => __("Virgin Islands (US)",$langdomain),
		  "WF" => __("Wallis And Futuna Islands",$langdomain),
		  "EH" => __("Western Sahara",$langdomain),
		  "YE" => __("Yemen Arab Rep.",$langdomain),
		  "YD" => __("Yemen Democratic",$langdomain),
		  "YU" => __("Yugoslavia",$langdomain),
		  "ZR" => __("Zaire",$langdomain),
		  "ZM" => __("Zambia",$langdomain),
		  "ZW" => __("Zimbabwe",$langdomain)
		);
	}
}