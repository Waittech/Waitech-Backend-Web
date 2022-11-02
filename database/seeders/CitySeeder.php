<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
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
        \App\Models\Location\City::create([
          'id'         => $item->CityID,
          'country_id' => $item->CountryID,
          'plate_code' => $item->PlateNo,
          'phone_code' => $item->PhoneCode,
          'name'       => $item->CityName,
        ]);
      }
    }

  public function jsonData()
  {
    return '{
	"data":
	[
		{
			"CityID": 1,
			"CountryID": 212,
			"CityName": "ADANA",
			"PlateNo": "1",
			"PhoneCode": "322"
		},
		{
			"CityID": 2,
			"CountryID": 212,
			"CityName": "ADIYAMAN",
			"PlateNo": "2",
			"PhoneCode": "416"
		},
		{
			"CityID": 3,
			"CountryID": 212,
			"CityName": "AFYONKARAHİSAR",
			"PlateNo": "3",
			"PhoneCode": "272"
		},
		{
			"CityID": 4,
			"CountryID": 212,
			"CityName": "AĞRI",
			"PlateNo": "4",
			"PhoneCode": "472"
		},
		{
			"CityID": 5,
			"CountryID": 212,
			"CityName": "AKSARAY",
			"PlateNo": "68",
			"PhoneCode": "382"
		},
		{
			"CityID": 6,
			"CountryID": 212,
			"CityName": "AMASYA",
			"PlateNo": "5",
			"PhoneCode": "358"
		},
		{
			"CityID": 7,
			"CountryID": 212,
			"CityName": "ANKARA",
			"PlateNo": "6",
			"PhoneCode": "312"
		},
		{
			"CityID": 8,
			"CountryID": 212,
			"CityName": "ANTALYA",
			"PlateNo": "7",
			"PhoneCode": "242"
		},
		{
			"CityID": 9,
			"CountryID": 212,
			"CityName": "ARDAHAN",
			"PlateNo": "75",
			"PhoneCode": "478"
		},
		{
			"CityID": 10,
			"CountryID": 212,
			"CityName": "ARTVİN",
			"PlateNo": "8",
			"PhoneCode": "466"
		},
		{
			"CityID": 11,
			"CountryID": 212,
			"CityName": "AYDIN",
			"PlateNo": "9",
			"PhoneCode": "256"
		},
		{
			"CityID": 12,
			"CountryID": 212,
			"CityName": "BALIKESİR",
			"PlateNo": "10",
			"PhoneCode": "266"
		},
		{
			"CityID": 13,
			"CountryID": 212,
			"CityName": "BARTIN",
			"PlateNo": "74",
			"PhoneCode": "378"
		},
		{
			"CityID": 14,
			"CountryID": 212,
			"CityName": "BATMAN",
			"PlateNo": "72",
			"PhoneCode": "488"
		},
		{
			"CityID": 15,
			"CountryID": 212,
			"CityName": "BAYBURT",
			"PlateNo": "69",
			"PhoneCode": "458"
		},
		{
			"CityID": 16,
			"CountryID": 212,
			"CityName": "BİLECİK",
			"PlateNo": "11",
			"PhoneCode": "228"
		},
		{
			"CityID": 17,
			"CountryID": 212,
			"CityName": "BİNGÖL",
			"PlateNo": "12",
			"PhoneCode": "426"
		},
		{
			"CityID": 18,
			"CountryID": 212,
			"CityName": "BİTLİS",
			"PlateNo": "13",
			"PhoneCode": "434"
		},
		{
			"CityID": 19,
			"CountryID": 212,
			"CityName": "BOLU",
			"PlateNo": "14",
			"PhoneCode": "374"
		},
		{
			"CityID": 20,
			"CountryID": 212,
			"CityName": "BURDUR",
			"PlateNo": "15",
			"PhoneCode": "248"
		},
		{
			"CityID": 21,
			"CountryID": 212,
			"CityName": "BURSA",
			"PlateNo": "16",
			"PhoneCode": "224"
		},
		{
			"CityID": 22,
			"CountryID": 212,
			"CityName": "ÇANAKKALE",
			"PlateNo": "17",
			"PhoneCode": "286"
		},
		{
			"CityID": 23,
			"CountryID": 212,
			"CityName": "ÇANKIRI",
			"PlateNo": "18",
			"PhoneCode": "376"
		},
		{
			"CityID": 24,
			"CountryID": 212,
			"CityName": "ÇORUM",
			"PlateNo": "19",
			"PhoneCode": "364"
		},
		{
			"CityID": 25,
			"CountryID": 212,
			"CityName": "DENİZLİ",
			"PlateNo": "20",
			"PhoneCode": "258"
		},
		{
			"CityID": 26,
			"CountryID": 212,
			"CityName": "DİYARBAKIR",
			"PlateNo": "21",
			"PhoneCode": "412"
		},
		{
			"CityID": 27,
			"CountryID": 212,
			"CityName": "DÜZCE",
			"PlateNo": "81",
			"PhoneCode": "380"
		},
		{
			"CityID": 28,
			"CountryID": 212,
			"CityName": "EDİRNE",
			"PlateNo": "22",
			"PhoneCode": "284"
		},
		{
			"CityID": 29,
			"CountryID": 212,
			"CityName": "ELAZIĞ",
			"PlateNo": "23",
			"PhoneCode": "424"
		},
		{
			"CityID": 30,
			"CountryID": 212,
			"CityName": "ERZİNCAN",
			"PlateNo": "24",
			"PhoneCode": "446"
		},
		{
			"CityID": 31,
			"CountryID": 212,
			"CityName": "ERZURUM",
			"PlateNo": "25",
			"PhoneCode": "442"
		},
		{
			"CityID": 32,
			"CountryID": 212,
			"CityName": "ESKİŞEHİR",
			"PlateNo": "26",
			"PhoneCode": "222"
		},
		{
			"CityID": 33,
			"CountryID": 212,
			"CityName": "GAZİANTEP",
			"PlateNo": "27",
			"PhoneCode": "342"
		},
		{
			"CityID": 34,
			"CountryID": 212,
			"CityName": "GİRESUN",
			"PlateNo": "28",
			"PhoneCode": "454"
		},
		{
			"CityID": 35,
			"CountryID": 212,
			"CityName": "GÜMÜŞHANE",
			"PlateNo": "29",
			"PhoneCode": "456"
		},
		{
			"CityID": 36,
			"CountryID": 212,
			"CityName": "HAKKARİ",
			"PlateNo": "30",
			"PhoneCode": "438"
		},
		{
			"CityID": 37,
			"CountryID": 212,
			"CityName": "HATAY",
			"PlateNo": "31",
			"PhoneCode": "326"
		},
		{
			"CityID": 38,
			"CountryID": 212,
			"CityName": "IĞDIR",
			"PlateNo": "76",
			"PhoneCode": "476"
		},
		{
			"CityID": 39,
			"CountryID": 212,
			"CityName": "ISPARTA",
			"PlateNo": "32",
			"PhoneCode": "246"
		},
		{
			"CityID": 40,
			"CountryID": 212,
			"CityName": "İSTANBUL",
			"PlateNo": "34",
			"PhoneCode": "212-216"
		},
		{
			"CityID": 41,
			"CountryID": 212,
			"CityName": "İZMİR",
			"PlateNo": "35",
			"PhoneCode": "232"
		},
		{
			"CityID": 42,
			"CountryID": 212,
			"CityName": "KAHRAMANMARAŞ",
			"PlateNo": "46",
			"PhoneCode": "344"
		},
		{
			"CityID": 43,
			"CountryID": 212,
			"CityName": "KARABÜK",
			"PlateNo": "78",
			"PhoneCode": "370"
		},
		{
			"CityID": 44,
			"CountryID": 212,
			"CityName": "KARAMAN",
			"PlateNo": "70",
			"PhoneCode": "338"
		},
		{
			"CityID": 45,
			"CountryID": 212,
			"CityName": "KARS",
			"PlateNo": "36",
			"PhoneCode": "474"
		},
		{
			"CityID": 46,
			"CountryID": 212,
			"CityName": "KASTAMONU",
			"PlateNo": "37",
			"PhoneCode": "366"
		},
		{
			"CityID": 47,
			"CountryID": 212,
			"CityName": "KAYSERİ",
			"PlateNo": "38",
			"PhoneCode": "352"
		},
		{
			"CityID": 48,
			"CountryID": 212,
			"CityName": "KIRIKKALE",
			"PlateNo": "71",
			"PhoneCode": "318"
		},
		{
			"CityID": 49,
			"CountryID": 212,
			"CityName": "KIRKLARELİ",
			"PlateNo": "39",
			"PhoneCode": "288"
		},
		{
			"CityID": 50,
			"CountryID": 212,
			"CityName": "KIRŞEHİR",
			"PlateNo": "40",
			"PhoneCode": "386"
		},
		{
			"CityID": 51,
			"CountryID": 212,
			"CityName": "KİLİS",
			"PlateNo": "79",
			"PhoneCode": "348"
		},
		{
			"CityID": 52,
			"CountryID": 212,
			"CityName": "KOCAELİ",
			"PlateNo": "41",
			"PhoneCode": "262"
		},
		{
			"CityID": 53,
			"CountryID": 212,
			"CityName": "KONYA",
			"PlateNo": "42",
			"PhoneCode": "332"
		},
		{
			"CityID": 54,
			"CountryID": 212,
			"CityName": "KÜTAHYA",
			"PlateNo": "43",
			"PhoneCode": "274"
		},
		{
			"CityID": 55,
			"CountryID": 212,
			"CityName": "MALATYA",
			"PlateNo": "44",
			"PhoneCode": "422"
		},
		{
			"CityID": 56,
			"CountryID": 212,
			"CityName": "MANİSA",
			"PlateNo": "45",
			"PhoneCode": "236"
		},
		{
			"CityID": 57,
			"CountryID": 212,
			"CityName": "MARDİN",
			"PlateNo": "47",
			"PhoneCode": "482"
		},
		{
			"CityID": 58,
			"CountryID": 212,
			"CityName": "MERSİN",
			"PlateNo": "33",
			"PhoneCode": "324"
		},
		{
			"CityID": 59,
			"CountryID": 212,
			"CityName": "MUĞLA",
			"PlateNo": "48",
			"PhoneCode": "252"
		},
		{
			"CityID": 60,
			"CountryID": 212,
			"CityName": "MUŞ",
			"PlateNo": "49",
			"PhoneCode": "436"
		},
		{
			"CityID": 61,
			"CountryID": 212,
			"CityName": "NEVŞEHİR",
			"PlateNo": "50",
			"PhoneCode": "384"
		},
		{
			"CityID": 62,
			"CountryID": 212,
			"CityName": "NİĞDE",
			"PlateNo": "51",
			"PhoneCode": "388"
		},
		{
			"CityID": 63,
			"CountryID": 212,
			"CityName": "ORDU",
			"PlateNo": "52",
			"PhoneCode": "452"
		},
		{
			"CityID": 64,
			"CountryID": 212,
			"CityName": "OSMANİYE",
			"PlateNo": "80",
			"PhoneCode": "328"
		},
		{
			"CityID": 65,
			"CountryID": 212,
			"CityName": "RİZE",
			"PlateNo": "53",
			"PhoneCode": "464"
		},
		{
			"CityID": 66,
			"CountryID": 212,
			"CityName": "SAKARYA",
			"PlateNo": "54",
			"PhoneCode": "264"
		},
		{
			"CityID": 67,
			"CountryID": 212,
			"CityName": "SAMSUN",
			"PlateNo": "55",
			"PhoneCode": "362"
		},
		{
			"CityID": 68,
			"CountryID": 212,
			"CityName": "SİİRT",
			"PlateNo": "56",
			"PhoneCode": "484"
		},
		{
			"CityID": 69,
			"CountryID": 212,
			"CityName": "SİNOP",
			"PlateNo": "57",
			"PhoneCode": "368"
		},
		{
			"CityID": 70,
			"CountryID": 212,
			"CityName": "SİVAS",
			"PlateNo": "58",
			"PhoneCode": "346"
		},
		{
			"CityID": 71,
			"CountryID": 212,
			"CityName": "ŞANLIURFA",
			"PlateNo": "63",
			"PhoneCode": "414"
		},
		{
			"CityID": 72,
			"CountryID": 212,
			"CityName": "ŞIRNAK",
			"PlateNo": "73",
			"PhoneCode": "486"
		},
		{
			"CityID": 73,
			"CountryID": 212,
			"CityName": "TEKİRDAĞ",
			"PlateNo": "59",
			"PhoneCode": "282"
		},
		{
			"CityID": 74,
			"CountryID": 212,
			"CityName": "TOKAT",
			"PlateNo": "60",
			"PhoneCode": "356"
		},
		{
			"CityID": 75,
			"CountryID": 212,
			"CityName": "TRABZON",
			"PlateNo": "61",
			"PhoneCode": "462"
		},
		{
			"CityID": 76,
			"CountryID": 212,
			"CityName": "TUNCELİ",
			"PlateNo": "62",
			"PhoneCode": "428"
		},
		{
			"CityID": 77,
			"CountryID": 212,
			"CityName": "UŞAK",
			"PlateNo": "64",
			"PhoneCode": "276"
		},
		{
			"CityID": 78,
			"CountryID": 212,
			"CityName": "VAN",
			"PlateNo": "65",
			"PhoneCode": "432"
		},
		{
			"CityID": 79,
			"CountryID": 212,
			"CityName": "YALOVA",
			"PlateNo": "77",
			"PhoneCode": "226"
		},
		{
			"CityID": 80,
			"CountryID": 212,
			"CityName": "YOZGAT",
			"PlateNo": "66",
			"PhoneCode": "354"
		},
		{
			"CityID": 81,
			"CountryID": 212,
			"CityName": "ZONGULDAK",
			"PlateNo": "67",
			"PhoneCode": "372"
		}
	]
}';
  }
}
