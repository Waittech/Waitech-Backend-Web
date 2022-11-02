<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = json_decode($this->jsonData());
      foreach ($data->data as $item) {
        \App\Models\Location\Country::create([
          'id'           => $item->CountryID,
          'code_alpha_2' => $item->BinaryCode,
          'code_alpha_3' => $item->TripleCode,
          'phone_code'   => $item->PhoneCode,
          'name'         => ['en' => $item->CountryName, 'tr' => $item->CountryName],
        ]);
      }
    }

  public function jsonData()
  {
    return '{
	"data":
	[
		{
			"CountryID": 37,
			"BinaryCode": "CA",
			"TripleCode": "CAN",
			"CountryName": "Canada",
			"PhoneCode": "1"
		},
		{
			"CountryID": 221,
			"BinaryCode": "US",
			"TripleCode": "USA",
			"CountryName": "United States",
			"PhoneCode": "1"
		},
		{
			"CountryID": 62,
			"BinaryCode": "EG",
			"TripleCode": "EGY",
			"CountryName": "Egypt",
			"PhoneCode": "20"
		},
		{
			"CountryID": 142,
			"BinaryCode": "MA",
			"TripleCode": "MAR",
			"CountryName": "Morocco",
			"PhoneCode": "212"
		},
		{
			"CountryID": 3,
			"BinaryCode": "DZ",
			"TripleCode": "DZA",
			"CountryName": "Algeria",
			"PhoneCode": "213"
		},
		{
			"CountryID": 211,
			"BinaryCode": "TN",
			"TripleCode": "TUN",
			"CountryName": "Tunisia",
			"PhoneCode": "216"
		},
		{
			"CountryID": 119,
			"BinaryCode": "LY",
			"TripleCode": "LBY",
			"CountryName": "Libya",
			"PhoneCode": "218"
		},
		{
			"CountryID": 77,
			"BinaryCode": "GM",
			"TripleCode": "GMB",
			"CountryName": "Gambia",
			"PhoneCode": "220"
		},
		{
			"CountryID": 184,
			"BinaryCode": "SN",
			"TripleCode": "SEN",
			"CountryName": "Senegal",
			"PhoneCode": "221"
		},
		{
			"CountryID": 133,
			"BinaryCode": "MR",
			"TripleCode": "MRT",
			"CountryName": "Mauritania",
			"PhoneCode": "222"
		},
		{
			"CountryID": 129,
			"BinaryCode": "ML",
			"TripleCode": "MLI",
			"CountryName": "Mali",
			"PhoneCode": "223"
		},
		{
			"CountryID": 104,
			"BinaryCode": "CI",
			"TripleCode": "CIV",
			"CountryName": "Ivory Coast",
			"PhoneCode": "225"
		},
		{
			"CountryID": 33,
			"BinaryCode": "BF",
			"TripleCode": "BFA",
			"CountryName": "Burkina Faso",
			"PhoneCode": "226"
		},
		{
			"CountryID": 153,
			"BinaryCode": "NE",
			"TripleCode": "NER",
			"CountryName": "Niger",
			"PhoneCode": "227"
		},
		{
			"CountryID": 207,
			"BinaryCode": "TG",
			"TripleCode": "TGO",
			"CountryName": "Togo",
			"PhoneCode": "228"
		},
		{
			"CountryID": 23,
			"BinaryCode": "BJ",
			"TripleCode": "BEN",
			"CountryName": "Benin",
			"PhoneCode": "229"
		},
		{
			"CountryID": 134,
			"BinaryCode": "MU",
			"TripleCode": "MUS",
			"CountryName": "Mauritius",
			"PhoneCode": "230"
		},
		{
			"CountryID": 118,
			"BinaryCode": "LR",
			"TripleCode": "LBR",
			"CountryName": "Liberia",
			"PhoneCode": "231"
		},
		{
			"CountryID": 187,
			"BinaryCode": "SL",
			"TripleCode": "SLE",
			"CountryName": "Sierra Leone",
			"PhoneCode": "232"
		},
		{
			"CountryID": 80,
			"BinaryCode": "GH",
			"TripleCode": "GHA",
			"CountryName": "Ghana",
			"PhoneCode": "233"
		},
		{
			"CountryID": 154,
			"BinaryCode": "NG",
			"TripleCode": "NGA",
			"CountryName": "Nigeria",
			"PhoneCode": "234"
		},
		{
			"CountryID": 41,
			"BinaryCode": "TD",
			"TripleCode": "TCD",
			"CountryName": "Chad",
			"PhoneCode": "235"
		},
		{
			"CountryID": 40,
			"BinaryCode": "CF",
			"TripleCode": "CAF",
			"CountryName": "Central African Republic",
			"PhoneCode": "236"
		},
		{
			"CountryID": 36,
			"BinaryCode": "CM",
			"TripleCode": "CMR",
			"CountryName": "Cameroon",
			"PhoneCode": "237"
		},
		{
			"CountryID": 38,
			"BinaryCode": "CV",
			"TripleCode": "CPV",
			"CountryName": "Cape Verde",
			"PhoneCode": "238"
		},
		{
			"CountryID": 169,
			"BinaryCode": "PT",
			"TripleCode": "PRT",
			"CountryName": "Portugal",
			"PhoneCode": "239"
		},
		{
			"CountryID": 182,
			"BinaryCode": "ST",
			"TripleCode": "STP",
			"CountryName": "Sao Tome and Principe",
			"PhoneCode": "239"
		},
		{
			"CountryID": 64,
			"BinaryCode": "GQ",
			"TripleCode": "GNQ",
			"CountryName": "Equatorial Guinea",
			"PhoneCode": "240"
		},
		{
			"CountryID": 76,
			"BinaryCode": "GA",
			"TripleCode": "GAB",
			"CountryName": "Gabon",
			"PhoneCode": "241"
		},
		{
			"CountryID": 16,
			"BinaryCode": "BS",
			"TripleCode": "BHS",
			"CountryName": "Bahamas",
			"PhoneCode": "242"
		},
		{
			"CountryID": 48,
			"BinaryCode": "CD",
			"TripleCode": "COD",
			"CountryName": "Congo [DRC]",
			"PhoneCode": "242"
		},
		{
			"CountryID": 6,
			"BinaryCode": "AO",
			"TripleCode": "AGO",
			"CountryName": "Angola",
			"PhoneCode": "244"
		},
		{
			"CountryID": 89,
			"BinaryCode": "GW",
			"TripleCode": "GNB",
			"CountryName": "Guinea-Bissau",
			"PhoneCode": "245"
		},
		{
			"CountryID": 19,
			"BinaryCode": "BB",
			"TripleCode": "BRB",
			"CountryName": "Barbados",
			"PhoneCode": "246"
		},
		{
			"CountryID": 186,
			"BinaryCode": "SC",
			"TripleCode": "SYC",
			"CountryName": "Seychelles",
			"PhoneCode": "248"
		},
		{
			"CountryID": 197,
			"BinaryCode": "SD",
			"TripleCode": "SDN",
			"CountryName": "Sudan",
			"PhoneCode": "249"
		},
		{
			"CountryID": 175,
			"BinaryCode": "RW",
			"TripleCode": "RWA",
			"CountryName": "Rwanda",
			"PhoneCode": "250"
		},
		{
			"CountryID": 67,
			"BinaryCode": "ET",
			"TripleCode": "ETH",
			"CountryName": "Ethiopia",
			"PhoneCode": "251"
		},
		{
			"CountryID": 192,
			"BinaryCode": "SO",
			"TripleCode": "SOM",
			"CountryName": "Somalia",
			"PhoneCode": "252"
		},
		{
			"CountryID": 57,
			"BinaryCode": "DJ",
			"TripleCode": "DJI",
			"CountryName": "Djibouti",
			"PhoneCode": "253"
		},
		{
			"CountryID": 109,
			"BinaryCode": "KE",
			"TripleCode": "KEN",
			"CountryName": "Kenya",
			"PhoneCode": "254"
		},
		{
			"CountryID": 205,
			"BinaryCode": "TZ",
			"TripleCode": "TZA",
			"CountryName": "Tanzania",
			"PhoneCode": "255"
		},
		{
			"CountryID": 217,
			"BinaryCode": "UG",
			"TripleCode": "UGA",
			"CountryName": "Uganda",
			"PhoneCode": "256"
		},
		{
			"CountryID": 34,
			"BinaryCode": "BI",
			"TripleCode": "BDI",
			"CountryName": "Burundi",
			"PhoneCode": "257"
		},
		{
			"CountryID": 143,
			"BinaryCode": "MZ",
			"TripleCode": "MOZ",
			"CountryName": "Mozambique",
			"PhoneCode": "258"
		},
		{
			"CountryID": 230,
			"BinaryCode": "ZM",
			"TripleCode": "ZMB",
			"CountryName": "Zambia",
			"PhoneCode": "260"
		},
		{
			"CountryID": 125,
			"BinaryCode": "MG",
			"TripleCode": "MDG",
			"CountryName": "Madagascar",
			"PhoneCode": "261"
		},
		{
			"CountryID": 172,
			"BinaryCode": "RE",
			"TripleCode": "REU",
			"CountryName": "R",
			"PhoneCode": "262"
		},
		{
			"CountryID": 231,
			"BinaryCode": "ZW",
			"TripleCode": "ZWE",
			"CountryName": "Zimbabwe",
			"PhoneCode": "263"
		},
		{
			"CountryID": 7,
			"BinaryCode": "AI",
			"TripleCode": "AIA",
			"CountryName": "Anguilla",
			"PhoneCode": "264"
		},
		{
			"CountryID": 145,
			"BinaryCode": "NA",
			"TripleCode": "NAM",
			"CountryName": "Namibia",
			"PhoneCode": "264"
		},
		{
			"CountryID": 126,
			"BinaryCode": "MW",
			"TripleCode": "MWI",
			"CountryName": "Malawi",
			"PhoneCode": "265"
		},
		{
			"CountryID": 117,
			"BinaryCode": "LS",
			"TripleCode": "LSO",
			"CountryName": "Lesotho",
			"PhoneCode": "266"
		},
		{
			"CountryID": 28,
			"BinaryCode": "BW",
			"TripleCode": "BWA",
			"CountryName": "Botswana",
			"PhoneCode": "267"
		},
		{
			"CountryID": 9,
			"BinaryCode": "AG",
			"TripleCode": "ATG",
			"CountryName": "Antigua and Barbuda",
			"PhoneCode": "268"
		},
		{
			"CountryID": 199,
			"BinaryCode": "SZ",
			"TripleCode": "SWZ",
			"CountryName": "Swaziland",
			"PhoneCode": "268"
		},
		{
			"CountryID": 47,
			"BinaryCode": "KM",
			"TripleCode": "COM",
			"CountryName": "Comoros",
			"PhoneCode": "269"
		},
		{
			"CountryID": 135,
			"BinaryCode": "YT",
			"TripleCode": "MYT",
			"CountryName": "Mayotte",
			"PhoneCode": "269"
		},
		{
			"CountryID": 193,
			"BinaryCode": "ZA",
			"TripleCode": "ZAF",
			"CountryName": "South Africa",
			"PhoneCode": "27"
		},
		{
			"CountryID": 30,
			"BinaryCode": "VG",
			"TripleCode": "VGB",
			"CountryName": "British Virgin Islands",
			"PhoneCode": "284"
		},
		{
			"CountryID": 176,
			"BinaryCode": "SH",
			"TripleCode": "SHN",
			"CountryName": "Saint Helena",
			"PhoneCode": "290"
		},
		{
			"CountryID": 65,
			"BinaryCode": "ER",
			"TripleCode": "ERI",
			"CountryName": "Eritrea",
			"PhoneCode": "291"
		},
		{
			"CountryID": 12,
			"BinaryCode": "AW",
			"TripleCode": "ABW",
			"CountryName": "Aruba",
			"PhoneCode": "297"
		},
		{
			"CountryID": 69,
			"BinaryCode": "FO",
			"TripleCode": "FRO",
			"CountryName": "Faroe Islands",
			"PhoneCode": "298"
		},
		{
			"CountryID": 83,
			"BinaryCode": "GL",
			"TripleCode": "GRL",
			"CountryName": "Greenland",
			"PhoneCode": "299"
		},
		{
			"CountryID": 82,
			"BinaryCode": "GR",
			"TripleCode": "GRC",
			"CountryName": "Greece",
			"PhoneCode": "30"
		},
		{
			"CountryID": 148,
			"BinaryCode": "NL",
			"TripleCode": "NLD",
			"CountryName": "Netherlands",
			"PhoneCode": "31"
		},
		{
			"CountryID": 21,
			"BinaryCode": "BE",
			"TripleCode": "BEL",
			"CountryName": "Belgium",
			"PhoneCode": "32"
		},
		{
			"CountryID": 72,
			"BinaryCode": "FR",
			"TripleCode": "FRA",
			"CountryName": "France",
			"PhoneCode": "33"
		},
		{
			"CountryID": 195,
			"BinaryCode": "ES",
			"TripleCode": "ESP",
			"CountryName": "Spain",
			"PhoneCode": "34"
		},
		{
			"CountryID": 216,
			"BinaryCode": "VI",
			"TripleCode": "VIR",
			"CountryName": "U.S. Virgin Islands",
			"PhoneCode": "340"
		},
		{
			"CountryID": 39,
			"BinaryCode": "KY",
			"TripleCode": "CYM",
			"CountryName": "Cayman Islands",
			"PhoneCode": "345"
		},
		{
			"CountryID": 81,
			"BinaryCode": "GI",
			"TripleCode": "GIB",
			"CountryName": "Gibraltar",
			"PhoneCode": "350"
		},
		{
			"CountryID": 168,
			"BinaryCode": "PL",
			"TripleCode": "POL",
			"CountryName": "Poland",
			"PhoneCode": "351"
		},
		{
			"CountryID": 122,
			"BinaryCode": "LU",
			"TripleCode": "LUX",
			"CountryName": "Luxembourg",
			"PhoneCode": "352"
		},
		{
			"CountryID": 100,
			"BinaryCode": "IE",
			"TripleCode": "IRL",
			"CountryName": "Ireland",
			"PhoneCode": "353"
		},
		{
			"CountryID": 95,
			"BinaryCode": "IS",
			"TripleCode": "ISL",
			"CountryName": "Iceland",
			"PhoneCode": "354"
		},
		{
			"CountryID": 2,
			"BinaryCode": "AL",
			"TripleCode": "ALB",
			"CountryName": "Albania",
			"PhoneCode": "355"
		},
		{
			"CountryID": 130,
			"BinaryCode": "MT",
			"TripleCode": "MLT",
			"CountryName": "Malta",
			"PhoneCode": "356"
		},
		{
			"CountryID": 54,
			"BinaryCode": "CY",
			"TripleCode": "CYP",
			"CountryName": "Cyprus",
			"PhoneCode": "357"
		},
		{
			"CountryID": 71,
			"BinaryCode": "FI",
			"TripleCode": "FIN",
			"CountryName": "Finland",
			"PhoneCode": "358"
		},
		{
			"CountryID": 32,
			"BinaryCode": "BG",
			"TripleCode": "BGR",
			"CountryName": "Bulgaria",
			"PhoneCode": "359"
		},
		{
			"CountryID": 94,
			"BinaryCode": "HU",
			"TripleCode": "HUN",
			"CountryName": "Hungary",
			"PhoneCode": "36"
		},
		{
			"CountryID": 121,
			"BinaryCode": "LT",
			"TripleCode": "LTU",
			"CountryName": "Lithuania",
			"PhoneCode": "370"
		},
		{
			"CountryID": 115,
			"BinaryCode": "LV",
			"TripleCode": "LVA",
			"CountryName": "Latvia",
			"PhoneCode": "371"
		},
		{
			"CountryID": 66,
			"BinaryCode": "EE",
			"TripleCode": "EST",
			"CountryName": "Estonia",
			"PhoneCode": "372"
		},
		{
			"CountryID": 138,
			"BinaryCode": "MD",
			"TripleCode": "MDA",
			"CountryName": "Moldova",
			"PhoneCode": "373"
		},
		{
			"CountryID": 11,
			"BinaryCode": "AM",
			"TripleCode": "ARM",
			"CountryName": "Armenia",
			"PhoneCode": "374"
		},
		{
			"CountryID": 20,
			"BinaryCode": "BY",
			"TripleCode": "BLR",
			"CountryName": "Belarus",
			"PhoneCode": "375"
		},
		{
			"CountryID": 5,
			"BinaryCode": "AD",
			"TripleCode": "AND",
			"CountryName": "Andorra",
			"PhoneCode": "376"
		},
		{
			"CountryID": 139,
			"BinaryCode": "MC",
			"TripleCode": "MCO",
			"CountryName": "Monaco",
			"PhoneCode": "377"
		},
		{
			"CountryID": 181,
			"BinaryCode": "SM",
			"TripleCode": "SMR",
			"CountryName": "San Marino",
			"PhoneCode": "378"
		},
		{
			"CountryID": 218,
			"BinaryCode": "UA",
			"TripleCode": "UKR",
			"CountryName": "Ukraine",
			"PhoneCode": "380"
		},
		{
			"CountryID": 111,
			"BinaryCode": "XK",
			"TripleCode": "XKX",
			"CountryName": "Kosovo",
			"PhoneCode": "381"
		},
		{
			"CountryID": 185,
			"BinaryCode": "RS",
			"TripleCode": "SRB",
			"CountryName": "Serbia",
			"PhoneCode": "381"
		},
		{
			"CountryID": 51,
			"BinaryCode": "CR",
			"TripleCode": "CRI",
			"CountryName": "Costa Rica",
			"PhoneCode": "385"
		},
		{
			"CountryID": 190,
			"BinaryCode": "SI",
			"TripleCode": "SVN",
			"CountryName": "Slovenia",
			"PhoneCode": "386"
		},
		{
			"CountryID": 27,
			"BinaryCode": "BA",
			"TripleCode": "BIH",
			"CountryName": "Bosnia and Herzegovina",
			"PhoneCode": "387"
		},
		{
			"CountryID": 124,
			"BinaryCode": "MK",
			"TripleCode": "MKD",
			"CountryName": "Macedonia",
			"PhoneCode": "389"
		},
		{
			"CountryID": 103,
			"BinaryCode": "IT",
			"TripleCode": "ITA",
			"CountryName": "Italy",
			"PhoneCode": "39"
		},
		{
			"CountryID": 225,
			"BinaryCode": "VA",
			"TripleCode": "VAT",
			"CountryName": "Vatican City",
			"PhoneCode": "39"
		},
		{
			"CountryID": 173,
			"BinaryCode": "RO",
			"TripleCode": "ROU",
			"CountryName": "Romania",
			"PhoneCode": "40"
		},
		{
			"CountryID": 201,
			"BinaryCode": "CH",
			"TripleCode": "CHE",
			"CountryName": "Switzerland",
			"PhoneCode": "41"
		},
		{
			"CountryID": 55,
			"BinaryCode": "CZ",
			"TripleCode": "CZE",
			"CountryName": "Czech Republic",
			"PhoneCode": "420"
		},
		{
			"CountryID": 189,
			"BinaryCode": "SK",
			"TripleCode": "SVK",
			"CountryName": "Slovakia",
			"PhoneCode": "421"
		},
		{
			"CountryID": 120,
			"BinaryCode": "LI",
			"TripleCode": "LIE",
			"CountryName": "Liechtenstein",
			"PhoneCode": "423"
		},
		{
			"CountryID": 14,
			"BinaryCode": "AT",
			"TripleCode": "AUT",
			"CountryName": "Austria",
			"PhoneCode": "43"
		},
		{
			"CountryID": 101,
			"BinaryCode": "IM",
			"TripleCode": "IMN",
			"CountryName": "Isle of Man",
			"PhoneCode": "44"
		},
		{
			"CountryID": 220,
			"BinaryCode": "GB",
			"TripleCode": "GBR",
			"CountryName": "United Kingdom",
			"PhoneCode": "44"
		},
		{
			"CountryID": 24,
			"BinaryCode": "BM",
			"TripleCode": "BMU",
			"CountryName": "Bermuda",
			"PhoneCode": "441"
		},
		{
			"CountryID": 56,
			"BinaryCode": "DK",
			"TripleCode": "DNK",
			"CountryName": "Denmark",
			"PhoneCode": "45"
		},
		{
			"CountryID": 200,
			"BinaryCode": "SE",
			"TripleCode": "SWE",
			"CountryName": "Sweden",
			"PhoneCode": "46"
		},
		{
			"CountryID": 158,
			"BinaryCode": "NO",
			"TripleCode": "NOR",
			"CountryName": "Norway",
			"PhoneCode": "47"
		},
		{
			"CountryID": 84,
			"BinaryCode": "GD",
			"TripleCode": "GRD",
			"CountryName": "Grenada",
			"PhoneCode": "473"
		},
		{
			"CountryID": 167,
			"BinaryCode": "PN",
			"TripleCode": "PCN",
			"CountryName": "Pitcairn Islands",
			"PhoneCode": "48"
		},
		{
			"CountryID": 79,
			"BinaryCode": "DE",
			"TripleCode": "DEU",
			"CountryName": "Germany",
			"PhoneCode": "49"
		},
		{
			"CountryID": 68,
			"BinaryCode": "FK",
			"TripleCode": "FLK",
			"CountryName": "Falkland Islands",
			"PhoneCode": "500"
		},
		{
			"CountryID": 22,
			"BinaryCode": "BZ",
			"TripleCode": "BLZ",
			"CountryName": "Belize",
			"PhoneCode": "501"
		},
		{
			"CountryID": 87,
			"BinaryCode": "GT",
			"TripleCode": "GTM",
			"CountryName": "Guatemala",
			"PhoneCode": "502"
		},
		{
			"CountryID": 63,
			"BinaryCode": "SV",
			"TripleCode": "SLV",
			"CountryName": "El Salvador",
			"PhoneCode": "503"
		},
		{
			"CountryID": 92,
			"BinaryCode": "HN",
			"TripleCode": "HND",
			"CountryName": "Honduras",
			"PhoneCode": "504"
		},
		{
			"CountryID": 152,
			"BinaryCode": "NI",
			"TripleCode": "NIC",
			"CountryName": "Nicaragua",
			"PhoneCode": "505"
		},
		{
			"CountryID": 50,
			"BinaryCode": "CK",
			"TripleCode": "COK",
			"CountryName": "Cook Islands",
			"PhoneCode": "506"
		},
		{
			"CountryID": 162,
			"BinaryCode": "PA",
			"TripleCode": "PAN",
			"CountryName": "Panama",
			"PhoneCode": "507"
		},
		{
			"CountryID": 179,
			"BinaryCode": "PM",
			"TripleCode": "SPM",
			"CountryName": "Saint Pierre and Miquelon",
			"PhoneCode": "508"
		},
		{
			"CountryID": 91,
			"BinaryCode": "HT",
			"TripleCode": "HTI",
			"CountryName": "Haiti",
			"PhoneCode": "509"
		},
		{
			"CountryID": 165,
			"BinaryCode": "PE",
			"TripleCode": "PER",
			"CountryName": "Peru",
			"PhoneCode": "51"
		},
		{
			"CountryID": 136,
			"BinaryCode": "MX",
			"TripleCode": "MEX",
			"CountryName": "Mexico",
			"PhoneCode": "52"
		},
		{
			"CountryID": 52,
			"BinaryCode": "HR",
			"TripleCode": "HRV",
			"CountryName": "Croatia",
			"PhoneCode": "53"
		},
		{
			"CountryID": 10,
			"BinaryCode": "AR",
			"TripleCode": "ARG",
			"CountryName": "Argentina",
			"PhoneCode": "54"
		},
		{
			"CountryID": 29,
			"BinaryCode": "BR",
			"TripleCode": "BRA",
			"CountryName": "Brazil",
			"PhoneCode": "55"
		},
		{
			"CountryID": 42,
			"BinaryCode": "CL",
			"TripleCode": "CHL",
			"CountryName": "Chile",
			"PhoneCode": "56"
		},
		{
			"CountryID": 60,
			"BinaryCode": "TL",
			"TripleCode": "TLS",
			"CountryName": "East Timor",
			"PhoneCode": "56"
		},
		{
			"CountryID": 46,
			"BinaryCode": "CO",
			"TripleCode": "COL",
			"CountryName": "Colombia",
			"PhoneCode": "57"
		},
		{
			"CountryID": 226,
			"BinaryCode": "VE",
			"TripleCode": "VEN",
			"CountryName": "Venezuela",
			"PhoneCode": "58"
		},
		{
			"CountryID": 85,
			"BinaryCode": "GP",
			"TripleCode": "GLP",
			"CountryName": "Guadeloupe",
			"PhoneCode": "590"
		},
		{
			"CountryID": 26,
			"BinaryCode": "BO",
			"TripleCode": "BOL",
			"CountryName": "Bolivia",
			"PhoneCode": "591"
		},
		{
			"CountryID": 90,
			"BinaryCode": "GY",
			"TripleCode": "GUY",
			"CountryName": "Guyana",
			"PhoneCode": "592"
		},
		{
			"CountryID": 61,
			"BinaryCode": "EC",
			"TripleCode": "ECU",
			"CountryName": "Ecuador",
			"PhoneCode": "593"
		},
		{
			"CountryID": 74,
			"BinaryCode": "PF",
			"TripleCode": "PYF",
			"CountryName": "French Polynesia",
			"PhoneCode": "594"
		},
		{
			"CountryID": 88,
			"BinaryCode": "GN",
			"TripleCode": "GIN",
			"CountryName": "Guinea",
			"PhoneCode": "594"
		},
		{
			"CountryID": 164,
			"BinaryCode": "PY",
			"TripleCode": "PRY",
			"CountryName": "Paraguay",
			"PhoneCode": "595"
		},
		{
			"CountryID": 73,
			"BinaryCode": "GF",
			"TripleCode": "GUF",
			"CountryName": "French Guiana",
			"PhoneCode": "596"
		},
		{
			"CountryID": 198,
			"BinaryCode": "SR",
			"TripleCode": "SUR",
			"CountryName": "Suriname",
			"PhoneCode": "597"
		},
		{
			"CountryID": 222,
			"BinaryCode": "UY",
			"TripleCode": "URY",
			"CountryName": "Uruguay",
			"PhoneCode": "598"
		},
		{
			"CountryID": 53,
			"BinaryCode": "CU",
			"TripleCode": "CUB",
			"CountryName": "Cuba",
			"PhoneCode": "599"
		},
		{
			"CountryID": 149,
			"BinaryCode": "AN",
			"TripleCode": "ANT",
			"CountryName": "Netherlands Antilles",
			"PhoneCode": "599"
		},
		{
			"CountryID": 127,
			"BinaryCode": "MY",
			"TripleCode": "MYS",
			"CountryName": "Malaysia",
			"PhoneCode": "60"
		},
		{
			"CountryID": 13,
			"BinaryCode": "AU",
			"TripleCode": "AUS",
			"CountryName": "Australia",
			"PhoneCode": "61"
		},
		{
			"CountryID": 44,
			"BinaryCode": "CX",
			"TripleCode": "CXR",
			"CountryName": "Christmas Island",
			"PhoneCode": "61"
		},
		{
			"CountryID": 45,
			"BinaryCode": "CC",
			"TripleCode": "CCK",
			"CountryName": "Cocos [Keeling] Islands",
			"PhoneCode": "61"
		},
		{
			"CountryID": 97,
			"BinaryCode": "ID",
			"TripleCode": "IDN",
			"CountryName": "Indonesia",
			"PhoneCode": "62"
		},
		{
			"CountryID": 166,
			"BinaryCode": "PH",
			"TripleCode": "PHL",
			"CountryName": "Philippines",
			"PhoneCode": "63"
		},
		{
			"CountryID": 151,
			"BinaryCode": "NZ",
			"TripleCode": "NZL",
			"CountryName": "New Zealand",
			"PhoneCode": "64"
		},
		{
			"CountryID": 214,
			"BinaryCode": "TC",
			"TripleCode": "TCA",
			"CountryName": "Turks and Caicos Islands",
			"PhoneCode": "649"
		},
		{
			"CountryID": 188,
			"BinaryCode": "SG",
			"TripleCode": "SGP",
			"CountryName": "Singapore",
			"PhoneCode": "65"
		},
		{
			"CountryID": 206,
			"BinaryCode": "TH",
			"TripleCode": "THA",
			"CountryName": "Thailand",
			"PhoneCode": "66"
		},
		{
			"CountryID": 141,
			"BinaryCode": "MS",
			"TripleCode": "MSR",
			"CountryName": "Montserrat",
			"PhoneCode": "664"
		},
		{
			"CountryID": 132,
			"BinaryCode": "MQ",
			"TripleCode": "MTQ",
			"CountryName": "Martinique",
			"PhoneCode": "670"
		},
		{
			"CountryID": 86,
			"BinaryCode": "GU",
			"TripleCode": "GUM",
			"CountryName": "Guam",
			"PhoneCode": "671"
		},
		{
			"CountryID": 8,
			"BinaryCode": "AQ",
			"TripleCode": "ATA",
			"CountryName": "Antarctica",
			"PhoneCode": "672"
		},
		{
			"CountryID": 156,
			"BinaryCode": "NF",
			"TripleCode": "NFK",
			"CountryName": "Norfolk Island",
			"PhoneCode": "672"
		},
		{
			"CountryID": 31,
			"BinaryCode": "BN",
			"TripleCode": "BRN",
			"CountryName": "Brunei",
			"PhoneCode": "673"
		},
		{
			"CountryID": 146,
			"BinaryCode": "NR",
			"TripleCode": "NRU",
			"CountryName": "Nauru",
			"PhoneCode": "674"
		},
		{
			"CountryID": 163,
			"BinaryCode": "PG",
			"TripleCode": "PNG",
			"CountryName": "Papua New Guinea",
			"PhoneCode": "675"
		},
		{
			"CountryID": 209,
			"BinaryCode": "TO",
			"TripleCode": "TON",
			"CountryName": "Tonga",
			"PhoneCode": "676"
		},
		{
			"CountryID": 191,
			"BinaryCode": "SB",
			"TripleCode": "SLB",
			"CountryName": "Solomon Islands",
			"PhoneCode": "677"
		},
		{
			"CountryID": 224,
			"BinaryCode": "VU",
			"TripleCode": "VUT",
			"CountryName": "Vanuatu",
			"PhoneCode": "678"
		},
		{
			"CountryID": 70,
			"BinaryCode": "FJ",
			"TripleCode": "FJI",
			"CountryName": "Fiji",
			"PhoneCode": "679"
		},
		{
			"CountryID": 161,
			"BinaryCode": "PW",
			"TripleCode": "PLW",
			"CountryName": "Palau",
			"PhoneCode": "680"
		},
		{
			"CountryID": 228,
			"BinaryCode": "WF",
			"TripleCode": "WLF",
			"CountryName": "Wallis and Futuna",
			"PhoneCode": "681"
		},
		{
			"CountryID": 49,
			"BinaryCode": "CG",
			"TripleCode": "COG",
			"CountryName": "Congo [Republic]",
			"PhoneCode": "682"
		},
		{
			"CountryID": 155,
			"BinaryCode": "NU",
			"TripleCode": "NIU",
			"CountryName": "Niue",
			"PhoneCode": "683"
		},
		{
			"CountryID": 4,
			"BinaryCode": "AS",
			"TripleCode": "ASM",
			"CountryName": "American Samoa",
			"PhoneCode": "684"
		},
		{
			"CountryID": 110,
			"BinaryCode": "KI",
			"TripleCode": "KIR",
			"CountryName": "Kiribati",
			"PhoneCode": "686"
		},
		{
			"CountryID": 150,
			"BinaryCode": "NC",
			"TripleCode": "NCL",
			"CountryName": "New Caledonia",
			"PhoneCode": "687"
		},
		{
			"CountryID": 215,
			"BinaryCode": "TV",
			"TripleCode": "TUV",
			"CountryName": "Tuvalu",
			"PhoneCode": "688"
		},
		{
			"CountryID": 75,
			"BinaryCode": "TF",
			"TripleCode": "ATF",
			"CountryName": "French Southern Territories",
			"PhoneCode": "689"
		},
		{
			"CountryID": 208,
			"BinaryCode": "TK",
			"TripleCode": "TKL",
			"CountryName": "Tokelau",
			"PhoneCode": "690"
		},
		{
			"CountryID": 137,
			"BinaryCode": "FM",
			"TripleCode": "FSM",
			"CountryName": "Micronesia",
			"PhoneCode": "691"
		},
		{
			"CountryID": 131,
			"BinaryCode": "MH",
			"TripleCode": "MHL",
			"CountryName": "Marshall Islands",
			"PhoneCode": "692"
		},
		{
			"CountryID": 108,
			"BinaryCode": "KZ",
			"TripleCode": "KAZ",
			"CountryName": "Kazakhstan",
			"PhoneCode": "7"
		},
		{
			"CountryID": 174,
			"BinaryCode": "RU",
			"TripleCode": "RUS",
			"CountryName": "Russia",
			"PhoneCode": "7"
		},
		{
			"CountryID": 178,
			"BinaryCode": "LC",
			"TripleCode": "LCA",
			"CountryName": "Saint Lucia",
			"PhoneCode": "758"
		},
		{
			"CountryID": 58,
			"BinaryCode": "DM",
			"TripleCode": "DMA",
			"CountryName": "Dominica",
			"PhoneCode": "767"
		},
		{
			"CountryID": 180,
			"BinaryCode": "VC",
			"TripleCode": "VCT",
			"CountryName": "Saint Vincent and the Grenadines",
			"PhoneCode": "784"
		},
		{
			"CountryID": 170,
			"BinaryCode": "PR",
			"TripleCode": "PRI",
			"CountryName": "Puerto Rico",
			"PhoneCode": "787"
		},
		{
			"CountryID": 59,
			"BinaryCode": "DO",
			"TripleCode": "DOM",
			"CountryName": "Dominican Republic",
			"PhoneCode": "809"
		},
		{
			"CountryID": 106,
			"BinaryCode": "JP",
			"TripleCode": "JPN",
			"CountryName": "Japan",
			"PhoneCode": "81"
		},
		{
			"CountryID": 194,
			"BinaryCode": "KR",
			"TripleCode": "KOR",
			"CountryName": "South Korea",
			"PhoneCode": "82"
		},
		{
			"CountryID": 227,
			"BinaryCode": "VN",
			"TripleCode": "VNM",
			"CountryName": "Vietnam",
			"PhoneCode": "84"
		},
		{
			"CountryID": 157,
			"BinaryCode": "KP",
			"TripleCode": "PRK",
			"CountryName": "North Korea",
			"PhoneCode": "850"
		},
		{
			"CountryID": 93,
			"BinaryCode": "HK",
			"TripleCode": "HKG",
			"CountryName": "Hong Kong",
			"PhoneCode": "852"
		},
		{
			"CountryID": 123,
			"BinaryCode": "MO",
			"TripleCode": "MAC",
			"CountryName": "Macau",
			"PhoneCode": "853"
		},
		{
			"CountryID": 35,
			"BinaryCode": "KH",
			"TripleCode": "KHM",
			"CountryName": "Cambodia",
			"PhoneCode": "855"
		},
		{
			"CountryID": 114,
			"BinaryCode": "LA",
			"TripleCode": "LAO",
			"CountryName": "Laos",
			"PhoneCode": "856"
		},
		{
			"CountryID": 43,
			"BinaryCode": "CN",
			"TripleCode": "CHN",
			"CountryName": "China",
			"PhoneCode": "86"
		},
		{
			"CountryID": 210,
			"BinaryCode": "TT",
			"TripleCode": "TTO",
			"CountryName": "Trinidad and Tobago",
			"PhoneCode": "868"
		},
		{
			"CountryID": 177,
			"BinaryCode": "KN",
			"TripleCode": "KNA",
			"CountryName": "Saint Kitts and Nevis",
			"PhoneCode": "869"
		},
		{
			"CountryID": 105,
			"BinaryCode": "JM",
			"TripleCode": "JAM",
			"CountryName": "Jamaica",
			"PhoneCode": "876"
		},
		{
			"CountryID": 18,
			"BinaryCode": "BD",
			"TripleCode": "BGD",
			"CountryName": "Bangladesh",
			"PhoneCode": "880"
		},
		{
			"CountryID": 203,
			"BinaryCode": "TW",
			"TripleCode": "TWN",
			"CountryName": "Taiwan",
			"PhoneCode": "886"
		},
		{
			"CountryID": 212,
			"BinaryCode": "TR",
			"TripleCode": "TUR",
			"CountryName": "Turkey",
			"PhoneCode": "90"
		},
		{
			"CountryID": 232,
			"BinaryCode": "CY",
			"TripleCode": "CYP",
			"CountryName": "KKTC",
			"PhoneCode": "90"
		},
		{
			"CountryID": 96,
			"BinaryCode": "IN",
			"TripleCode": "IND",
			"CountryName": "India",
			"PhoneCode": "91"
		},
		{
			"CountryID": 160,
			"BinaryCode": "PK",
			"TripleCode": "PAK",
			"CountryName": "Pakistan",
			"PhoneCode": "92"
		},
		{
			"CountryID": 1,
			"BinaryCode": "AF",
			"TripleCode": "AFG",
			"CountryName": "Afghanistan",
			"PhoneCode": "93"
		},
		{
			"CountryID": 196,
			"BinaryCode": "LK",
			"TripleCode": "LKA",
			"CountryName": "Sri Lanka",
			"PhoneCode": "94"
		},
		{
			"CountryID": 144,
			"BinaryCode": "MM",
			"TripleCode": "MMR",
			"CountryName": "Myanmar [Burma]",
			"PhoneCode": "95"
		},
		{
			"CountryID": 128,
			"BinaryCode": "MV",
			"TripleCode": "MDV",
			"CountryName": "Maldives",
			"PhoneCode": "960"
		},
		{
			"CountryID": 116,
			"BinaryCode": "LB",
			"TripleCode": "LBN",
			"CountryName": "Lebanon",
			"PhoneCode": "961"
		},
		{
			"CountryID": 107,
			"BinaryCode": "JO",
			"TripleCode": "JOR",
			"CountryName": "Jordan",
			"PhoneCode": "962"
		},
		{
			"CountryID": 202,
			"BinaryCode": "SY",
			"TripleCode": "SYR",
			"CountryName": "Syria",
			"PhoneCode": "963"
		},
		{
			"CountryID": 99,
			"BinaryCode": "IQ",
			"TripleCode": "IRQ",
			"CountryName": "Iraq",
			"PhoneCode": "964"
		},
		{
			"CountryID": 112,
			"BinaryCode": "KW",
			"TripleCode": "KWT",
			"CountryName": "Kuwait",
			"PhoneCode": "965"
		},
		{
			"CountryID": 183,
			"BinaryCode": "SA",
			"TripleCode": "SAU",
			"CountryName": "Saudi Arabia",
			"PhoneCode": "966"
		},
		{
			"CountryID": 229,
			"BinaryCode": "YE",
			"TripleCode": "YEM",
			"CountryName": "Yemen",
			"PhoneCode": "967"
		},
		{
			"CountryID": 159,
			"BinaryCode": "OM",
			"TripleCode": "OMN",
			"CountryName": "Oman",
			"PhoneCode": "968"
		},
		{
			"CountryID": 219,
			"BinaryCode": "AE",
			"TripleCode": "ARE",
			"CountryName": "United Arab Emirates",
			"PhoneCode": "971"
		},
		{
			"CountryID": 102,
			"BinaryCode": "IL",
			"TripleCode": "ISR",
			"CountryName": "Israel",
			"PhoneCode": "972"
		},
		{
			"CountryID": 17,
			"BinaryCode": "BH",
			"TripleCode": "BHR",
			"CountryName": "Bahrain",
			"PhoneCode": "973"
		},
		{
			"CountryID": 171,
			"BinaryCode": "QA",
			"TripleCode": "QAT",
			"CountryName": "Qatar",
			"PhoneCode": "974"
		},
		{
			"CountryID": 25,
			"BinaryCode": "BT",
			"TripleCode": "BTN",
			"CountryName": "Bhutan",
			"PhoneCode": "975"
		},
		{
			"CountryID": 140,
			"BinaryCode": "MN",
			"TripleCode": "MNG",
			"CountryName": "Mongolia",
			"PhoneCode": "976"
		},
		{
			"CountryID": 147,
			"BinaryCode": "NP",
			"TripleCode": "NPL",
			"CountryName": "Nepal",
			"PhoneCode": "977"
		},
		{
			"CountryID": 98,
			"BinaryCode": "IR",
			"TripleCode": "IRN",
			"CountryName": "Iran",
			"PhoneCode": "98"
		},
		{
			"CountryID": 204,
			"BinaryCode": "TJ",
			"TripleCode": "TJK",
			"CountryName": "Tajikistan",
			"PhoneCode": "992"
		},
		{
			"CountryID": 213,
			"BinaryCode": "TM",
			"TripleCode": "TKM",
			"CountryName": "Turkmenistan",
			"PhoneCode": "993"
		},
		{
			"CountryID": 15,
			"BinaryCode": "AZ",
			"TripleCode": "AZE",
			"CountryName": "Azerbaijan",
			"PhoneCode": "994"
		},
		{
			"CountryID": 78,
			"BinaryCode": "GE",
			"TripleCode": "GEO",
			"CountryName": "Georgia",
			"PhoneCode": "995"
		},
		{
			"CountryID": 113,
			"BinaryCode": "KG",
			"TripleCode": "KGZ",
			"CountryName": "Kyrgyzstan",
			"PhoneCode": "996"
		},
		{
			"CountryID": 223,
			"BinaryCode": "UZ",
			"TripleCode": "UZB",
			"CountryName": "Uzbekistan",
			"PhoneCode": "998"
		}
	]
}';
  }
}
