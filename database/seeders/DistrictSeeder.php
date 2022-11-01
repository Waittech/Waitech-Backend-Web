<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
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
        \App\Models\Location\District::create([
          'id'      => $item->TownID,
          'city_id' => $item->CityID,
          'name'    => $item->TownName,
        ]);
      }
    }

  public function jsonData()
  {
    return '{
	"data":
	[
		{
			"TownID": 1,
			"CityID": 1,
			"TownName": "ALADAĞ"
		},
		{
			"TownID": 2,
			"CityID": 1,
			"TownName": "CEYHAN"
		},
		{
			"TownID": 3,
			"CityID": 1,
			"TownName": "ÇUKUROVA"
		},
		{
			"TownID": 4,
			"CityID": 1,
			"TownName": "FEKE"
		},
		{
			"TownID": 5,
			"CityID": 1,
			"TownName": "İMAMOĞLU"
		},
		{
			"TownID": 6,
			"CityID": 1,
			"TownName": "KARAİSALI"
		},
		{
			"TownID": 7,
			"CityID": 1,
			"TownName": "KARATAŞ"
		},
		{
			"TownID": 8,
			"CityID": 1,
			"TownName": "KOZAN"
		},
		{
			"TownID": 9,
			"CityID": 1,
			"TownName": "POZANTI"
		},
		{
			"TownID": 10,
			"CityID": 1,
			"TownName": "SAİMBEYLİ"
		},
		{
			"TownID": 11,
			"CityID": 1,
			"TownName": "SARIÇAM"
		},
		{
			"TownID": 12,
			"CityID": 1,
			"TownName": "SEYHAN"
		},
		{
			"TownID": 13,
			"CityID": 1,
			"TownName": "TUFANBEYLİ"
		},
		{
			"TownID": 14,
			"CityID": 1,
			"TownName": "YUMURTALIK"
		},
		{
			"TownID": 15,
			"CityID": 1,
			"TownName": "YÜREĞİR"
		},
		{
			"TownID": 16,
			"CityID": 2,
			"TownName": "BESNİ"
		},
		{
			"TownID": 17,
			"CityID": 2,
			"TownName": "ÇELİKHAN"
		},
		{
			"TownID": 18,
			"CityID": 2,
			"TownName": "GERGER"
		},
		{
			"TownID": 19,
			"CityID": 2,
			"TownName": "GÖLBAŞI"
		},
		{
			"TownID": 20,
			"CityID": 2,
			"TownName": "KAHTA"
		},
		{
			"TownID": 21,
			"CityID": 2,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 22,
			"CityID": 2,
			"TownName": "SAMSAT"
		},
		{
			"TownID": 23,
			"CityID": 2,
			"TownName": "SİNCİK"
		},
		{
			"TownID": 24,
			"CityID": 2,
			"TownName": "TUT"
		},
		{
			"TownID": 25,
			"CityID": 3,
			"TownName": "BAŞMAKÇI"
		},
		{
			"TownID": 26,
			"CityID": 3,
			"TownName": "BAYAT"
		},
		{
			"TownID": 27,
			"CityID": 3,
			"TownName": "BOLVADİN"
		},
		{
			"TownID": 28,
			"CityID": 3,
			"TownName": "ÇAY"
		},
		{
			"TownID": 29,
			"CityID": 3,
			"TownName": "ÇOBANLAR"
		},
		{
			"TownID": 30,
			"CityID": 3,
			"TownName": "DAZKIRI"
		},
		{
			"TownID": 31,
			"CityID": 3,
			"TownName": "DİNAR"
		},
		{
			"TownID": 32,
			"CityID": 3,
			"TownName": "EMİRDAĞ"
		},
		{
			"TownID": 33,
			"CityID": 3,
			"TownName": "EVCİLER"
		},
		{
			"TownID": 34,
			"CityID": 3,
			"TownName": "HOCALAR"
		},
		{
			"TownID": 35,
			"CityID": 3,
			"TownName": "İHSANİYE"
		},
		{
			"TownID": 36,
			"CityID": 3,
			"TownName": "İSCEHİSAR"
		},
		{
			"TownID": 37,
			"CityID": 3,
			"TownName": "KIZILÖREN"
		},
		{
			"TownID": 38,
			"CityID": 3,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 39,
			"CityID": 3,
			"TownName": "SANDIKLI"
		},
		{
			"TownID": 40,
			"CityID": 3,
			"TownName": "SİNANPAŞA"
		},
		{
			"TownID": 41,
			"CityID": 3,
			"TownName": "SULTANDAĞI"
		},
		{
			"TownID": 42,
			"CityID": 3,
			"TownName": "ŞUHUT"
		},
		{
			"TownID": 43,
			"CityID": 4,
			"TownName": "DİYADİN"
		},
		{
			"TownID": 44,
			"CityID": 4,
			"TownName": "DOĞUBAYAZIT"
		},
		{
			"TownID": 45,
			"CityID": 4,
			"TownName": "ELEŞKİRT"
		},
		{
			"TownID": 46,
			"CityID": 4,
			"TownName": "HAMUR"
		},
		{
			"TownID": 47,
			"CityID": 4,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 48,
			"CityID": 4,
			"TownName": "PATNOS"
		},
		{
			"TownID": 49,
			"CityID": 4,
			"TownName": "TAŞLIÇAY"
		},
		{
			"TownID": 50,
			"CityID": 4,
			"TownName": "TUTAK"
		},
		{
			"TownID": 51,
			"CityID": 5,
			"TownName": "AĞAÇÖREN"
		},
		{
			"TownID": 52,
			"CityID": 5,
			"TownName": "ESKİL"
		},
		{
			"TownID": 53,
			"CityID": 5,
			"TownName": "GÜLAĞAÇ"
		},
		{
			"TownID": 54,
			"CityID": 5,
			"TownName": "GÜZELYURT"
		},
		{
			"TownID": 55,
			"CityID": 5,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 56,
			"CityID": 5,
			"TownName": "ORTAKÖY"
		},
		{
			"TownID": 57,
			"CityID": 5,
			"TownName": "SARIYAHŞİ"
		},
		{
			"TownID": 58,
			"CityID": 5,
			"TownName": "SULTANHANI"
		},
		{
			"TownID": 59,
			"CityID": 6,
			"TownName": "GÖYNÜCEK"
		},
		{
			"TownID": 60,
			"CityID": 6,
			"TownName": "GÜMÜŞHACIKÖY"
		},
		{
			"TownID": 61,
			"CityID": 6,
			"TownName": "HAMAMÖZÜ"
		},
		{
			"TownID": 62,
			"CityID": 6,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 63,
			"CityID": 6,
			"TownName": "MERZİFON"
		},
		{
			"TownID": 64,
			"CityID": 6,
			"TownName": "SULUOVA"
		},
		{
			"TownID": 65,
			"CityID": 6,
			"TownName": "TAŞOVA"
		},
		{
			"TownID": 66,
			"CityID": 7,
			"TownName": "AKYURT"
		},
		{
			"TownID": 67,
			"CityID": 7,
			"TownName": "ALTINDAĞ"
		},
		{
			"TownID": 68,
			"CityID": 7,
			"TownName": "AYAŞ"
		},
		{
			"TownID": 69,
			"CityID": 7,
			"TownName": "BALA"
		},
		{
			"TownID": 70,
			"CityID": 7,
			"TownName": "BEYPAZARI"
		},
		{
			"TownID": 71,
			"CityID": 7,
			"TownName": "ÇAMLIDERE"
		},
		{
			"TownID": 72,
			"CityID": 7,
			"TownName": "ÇANKAYA"
		},
		{
			"TownID": 73,
			"CityID": 7,
			"TownName": "ÇUBUK"
		},
		{
			"TownID": 74,
			"CityID": 7,
			"TownName": "ELMADAĞ"
		},
		{
			"TownID": 75,
			"CityID": 7,
			"TownName": "ETİMESGUT"
		},
		{
			"TownID": 76,
			"CityID": 7,
			"TownName": "EVREN"
		},
		{
			"TownID": 77,
			"CityID": 7,
			"TownName": "GÖLBAŞI"
		},
		{
			"TownID": 78,
			"CityID": 7,
			"TownName": "GÜDÜL"
		},
		{
			"TownID": 79,
			"CityID": 7,
			"TownName": "HAYMANA"
		},
		{
			"TownID": 80,
			"CityID": 7,
			"TownName": "KAHRAMANKAZAN"
		},
		{
			"TownID": 81,
			"CityID": 7,
			"TownName": "KALECİK"
		},
		{
			"TownID": 82,
			"CityID": 7,
			"TownName": "KEÇİÖREN"
		},
		{
			"TownID": 83,
			"CityID": 7,
			"TownName": "KIZILCAHAMAM"
		},
		{
			"TownID": 84,
			"CityID": 7,
			"TownName": "MAMAK"
		},
		{
			"TownID": 85,
			"CityID": 7,
			"TownName": "NALLIHAN"
		},
		{
			"TownID": 86,
			"CityID": 7,
			"TownName": "POLATLI"
		},
		{
			"TownID": 87,
			"CityID": 7,
			"TownName": "PURSAKLAR"
		},
		{
			"TownID": 88,
			"CityID": 7,
			"TownName": "SİNCAN"
		},
		{
			"TownID": 89,
			"CityID": 7,
			"TownName": "ŞEREFLİKOÇHİSAR"
		},
		{
			"TownID": 90,
			"CityID": 7,
			"TownName": "YENİMAHALLE"
		},
		{
			"TownID": 91,
			"CityID": 8,
			"TownName": "AKSEKİ"
		},
		{
			"TownID": 92,
			"CityID": 8,
			"TownName": "AKSU"
		},
		{
			"TownID": 93,
			"CityID": 8,
			"TownName": "ALANYA"
		},
		{
			"TownID": 94,
			"CityID": 8,
			"TownName": "DEMRE"
		},
		{
			"TownID": 95,
			"CityID": 8,
			"TownName": "DÖŞEMEALTI"
		},
		{
			"TownID": 96,
			"CityID": 8,
			"TownName": "ELMALI"
		},
		{
			"TownID": 97,
			"CityID": 8,
			"TownName": "FİNİKE"
		},
		{
			"TownID": 98,
			"CityID": 8,
			"TownName": "GAZİPAŞA"
		},
		{
			"TownID": 99,
			"CityID": 8,
			"TownName": "GÜNDOĞMUŞ"
		},
		{
			"TownID": 100,
			"CityID": 8,
			"TownName": "İBRADI"
		},
		{
			"TownID": 101,
			"CityID": 8,
			"TownName": "KAŞ"
		},
		{
			"TownID": 102,
			"CityID": 8,
			"TownName": "KEMER"
		},
		{
			"TownID": 103,
			"CityID": 8,
			"TownName": "KEPEZ"
		},
		{
			"TownID": 104,
			"CityID": 8,
			"TownName": "KONYAALTI"
		},
		{
			"TownID": 105,
			"CityID": 8,
			"TownName": "KORKUTELİ"
		},
		{
			"TownID": 106,
			"CityID": 8,
			"TownName": "KUMLUCA"
		},
		{
			"TownID": 107,
			"CityID": 8,
			"TownName": "MANAVGAT"
		},
		{
			"TownID": 108,
			"CityID": 8,
			"TownName": "MURATPAŞA"
		},
		{
			"TownID": 109,
			"CityID": 8,
			"TownName": "SERİK"
		},
		{
			"TownID": 110,
			"CityID": 9,
			"TownName": "ÇILDIR"
		},
		{
			"TownID": 111,
			"CityID": 9,
			"TownName": "DAMAL"
		},
		{
			"TownID": 112,
			"CityID": 9,
			"TownName": "GÖLE"
		},
		{
			"TownID": 113,
			"CityID": 9,
			"TownName": "HANAK"
		},
		{
			"TownID": 114,
			"CityID": 9,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 115,
			"CityID": 9,
			"TownName": "POSOF"
		},
		{
			"TownID": 116,
			"CityID": 10,
			"TownName": "ARDANUÇ"
		},
		{
			"TownID": 117,
			"CityID": 10,
			"TownName": "ARHAVİ"
		},
		{
			"TownID": 118,
			"CityID": 10,
			"TownName": "BORÇKA"
		},
		{
			"TownID": 119,
			"CityID": 10,
			"TownName": "HOPA"
		},
		{
			"TownID": 120,
			"CityID": 10,
			"TownName": "KEMALPAŞA"
		},
		{
			"TownID": 121,
			"CityID": 10,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 122,
			"CityID": 10,
			"TownName": "MURGUL"
		},
		{
			"TownID": 123,
			"CityID": 10,
			"TownName": "ŞAVŞAT"
		},
		{
			"TownID": 124,
			"CityID": 10,
			"TownName": "YUSUFELİ"
		},
		{
			"TownID": 125,
			"CityID": 11,
			"TownName": "BOZDOĞAN"
		},
		{
			"TownID": 126,
			"CityID": 11,
			"TownName": "BUHARKENT"
		},
		{
			"TownID": 127,
			"CityID": 11,
			"TownName": "ÇİNE"
		},
		{
			"TownID": 128,
			"CityID": 11,
			"TownName": "DİDİM"
		},
		{
			"TownID": 129,
			"CityID": 11,
			"TownName": "EFELER"
		},
		{
			"TownID": 130,
			"CityID": 11,
			"TownName": "GERMENCİK"
		},
		{
			"TownID": 131,
			"CityID": 11,
			"TownName": "İNCİRLİOVA"
		},
		{
			"TownID": 132,
			"CityID": 11,
			"TownName": "KARACASU"
		},
		{
			"TownID": 133,
			"CityID": 11,
			"TownName": "KARPUZLU"
		},
		{
			"TownID": 134,
			"CityID": 11,
			"TownName": "KOÇARLI"
		},
		{
			"TownID": 135,
			"CityID": 11,
			"TownName": "KÖŞK"
		},
		{
			"TownID": 136,
			"CityID": 11,
			"TownName": "KUŞADASI"
		},
		{
			"TownID": 137,
			"CityID": 11,
			"TownName": "KUYUCAK"
		},
		{
			"TownID": 138,
			"CityID": 11,
			"TownName": "NAZİLLİ"
		},
		{
			"TownID": 139,
			"CityID": 11,
			"TownName": "SÖKE"
		},
		{
			"TownID": 140,
			"CityID": 11,
			"TownName": "SULTANHİSAR"
		},
		{
			"TownID": 141,
			"CityID": 11,
			"TownName": "YENİPAZAR"
		},
		{
			"TownID": 142,
			"CityID": 12,
			"TownName": "ALTIEYLÜL"
		},
		{
			"TownID": 143,
			"CityID": 12,
			"TownName": "AYVALIK"
		},
		{
			"TownID": 144,
			"CityID": 12,
			"TownName": "BALYA"
		},
		{
			"TownID": 145,
			"CityID": 12,
			"TownName": "BANDIRMA"
		},
		{
			"TownID": 146,
			"CityID": 12,
			"TownName": "BİGADİÇ"
		},
		{
			"TownID": 147,
			"CityID": 12,
			"TownName": "BURHANİYE"
		},
		{
			"TownID": 148,
			"CityID": 12,
			"TownName": "DURSUNBEY"
		},
		{
			"TownID": 149,
			"CityID": 12,
			"TownName": "EDREMİT"
		},
		{
			"TownID": 150,
			"CityID": 12,
			"TownName": "ERDEK"
		},
		{
			"TownID": 151,
			"CityID": 12,
			"TownName": "GÖMEÇ"
		},
		{
			"TownID": 152,
			"CityID": 12,
			"TownName": "GÖNEN"
		},
		{
			"TownID": 153,
			"CityID": 12,
			"TownName": "HAVRAN"
		},
		{
			"TownID": 154,
			"CityID": 12,
			"TownName": "İVRİNDİ"
		},
		{
			"TownID": 155,
			"CityID": 12,
			"TownName": "KARESİ"
		},
		{
			"TownID": 156,
			"CityID": 12,
			"TownName": "KEPSUT"
		},
		{
			"TownID": 157,
			"CityID": 12,
			"TownName": "MANYAS"
		},
		{
			"TownID": 158,
			"CityID": 12,
			"TownName": "MARMARA"
		},
		{
			"TownID": 159,
			"CityID": 12,
			"TownName": "SAVAŞTEPE"
		},
		{
			"TownID": 160,
			"CityID": 12,
			"TownName": "SINDIRGI"
		},
		{
			"TownID": 161,
			"CityID": 12,
			"TownName": "SUSURLUK"
		},
		{
			"TownID": 162,
			"CityID": 13,
			"TownName": "AMASRA"
		},
		{
			"TownID": 163,
			"CityID": 13,
			"TownName": "KURUCAŞİLE"
		},
		{
			"TownID": 164,
			"CityID": 13,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 165,
			"CityID": 13,
			"TownName": "ULUS"
		},
		{
			"TownID": 166,
			"CityID": 14,
			"TownName": "BEŞİRİ"
		},
		{
			"TownID": 167,
			"CityID": 14,
			"TownName": "GERCÜŞ"
		},
		{
			"TownID": 168,
			"CityID": 14,
			"TownName": "HASANKEYF"
		},
		{
			"TownID": 169,
			"CityID": 14,
			"TownName": "KOZLUK"
		},
		{
			"TownID": 170,
			"CityID": 14,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 171,
			"CityID": 14,
			"TownName": "SASON"
		},
		{
			"TownID": 172,
			"CityID": 15,
			"TownName": "AYDINTEPE"
		},
		{
			"TownID": 173,
			"CityID": 15,
			"TownName": "DEMİRÖZÜ"
		},
		{
			"TownID": 174,
			"CityID": 15,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 175,
			"CityID": 16,
			"TownName": "BOZÜYÜK"
		},
		{
			"TownID": 176,
			"CityID": 16,
			"TownName": "GÖLPAZARI"
		},
		{
			"TownID": 177,
			"CityID": 16,
			"TownName": "İNHİSAR"
		},
		{
			"TownID": 178,
			"CityID": 16,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 179,
			"CityID": 16,
			"TownName": "OSMANELİ"
		},
		{
			"TownID": 180,
			"CityID": 16,
			"TownName": "PAZARYERİ"
		},
		{
			"TownID": 181,
			"CityID": 16,
			"TownName": "SÖĞÜT"
		},
		{
			"TownID": 182,
			"CityID": 16,
			"TownName": "YENİPAZAR"
		},
		{
			"TownID": 183,
			"CityID": 17,
			"TownName": "ADAKLI"
		},
		{
			"TownID": 184,
			"CityID": 17,
			"TownName": "GENÇ"
		},
		{
			"TownID": 185,
			"CityID": 17,
			"TownName": "KARLIOVA"
		},
		{
			"TownID": 186,
			"CityID": 17,
			"TownName": "KİĞI"
		},
		{
			"TownID": 187,
			"CityID": 17,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 188,
			"CityID": 17,
			"TownName": "SOLHAN"
		},
		{
			"TownID": 189,
			"CityID": 17,
			"TownName": "YAYLADERE"
		},
		{
			"TownID": 190,
			"CityID": 17,
			"TownName": "YEDİSU"
		},
		{
			"TownID": 191,
			"CityID": 18,
			"TownName": "ADİLCEVAZ"
		},
		{
			"TownID": 192,
			"CityID": 18,
			"TownName": "AHLAT"
		},
		{
			"TownID": 193,
			"CityID": 18,
			"TownName": "GÜROYMAK"
		},
		{
			"TownID": 194,
			"CityID": 18,
			"TownName": "HİZAN"
		},
		{
			"TownID": 195,
			"CityID": 18,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 196,
			"CityID": 18,
			"TownName": "MUTKİ"
		},
		{
			"TownID": 197,
			"CityID": 18,
			"TownName": "TATVAN"
		},
		{
			"TownID": 198,
			"CityID": 19,
			"TownName": "DÖRTDİVAN"
		},
		{
			"TownID": 199,
			"CityID": 19,
			"TownName": "GEREDE"
		},
		{
			"TownID": 200,
			"CityID": 19,
			"TownName": "GÖYNÜK"
		},
		{
			"TownID": 201,
			"CityID": 19,
			"TownName": "KIBRISCIK"
		},
		{
			"TownID": 202,
			"CityID": 19,
			"TownName": "MENGEN"
		},
		{
			"TownID": 203,
			"CityID": 19,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 204,
			"CityID": 19,
			"TownName": "MUDURNU"
		},
		{
			"TownID": 205,
			"CityID": 19,
			"TownName": "SEBEN"
		},
		{
			"TownID": 206,
			"CityID": 19,
			"TownName": "YENİÇAĞA"
		},
		{
			"TownID": 207,
			"CityID": 20,
			"TownName": "AĞLASUN"
		},
		{
			"TownID": 208,
			"CityID": 20,
			"TownName": "ALTINYAYLA"
		},
		{
			"TownID": 209,
			"CityID": 20,
			"TownName": "BUCAK"
		},
		{
			"TownID": 210,
			"CityID": 20,
			"TownName": "ÇAVDIR"
		},
		{
			"TownID": 211,
			"CityID": 20,
			"TownName": "ÇELTİKÇİ"
		},
		{
			"TownID": 212,
			"CityID": 20,
			"TownName": "GÖLHİSAR"
		},
		{
			"TownID": 213,
			"CityID": 20,
			"TownName": "KARAMANLI"
		},
		{
			"TownID": 214,
			"CityID": 20,
			"TownName": "KEMER"
		},
		{
			"TownID": 215,
			"CityID": 20,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 216,
			"CityID": 20,
			"TownName": "TEFENNİ"
		},
		{
			"TownID": 217,
			"CityID": 20,
			"TownName": "YEŞİLOVA"
		},
		{
			"TownID": 218,
			"CityID": 21,
			"TownName": "BÜYÜKORHAN"
		},
		{
			"TownID": 219,
			"CityID": 21,
			"TownName": "GEMLİK"
		},
		{
			"TownID": 220,
			"CityID": 21,
			"TownName": "GÜRSU"
		},
		{
			"TownID": 221,
			"CityID": 21,
			"TownName": "HARMANCIK"
		},
		{
			"TownID": 222,
			"CityID": 21,
			"TownName": "İNEGÖL"
		},
		{
			"TownID": 223,
			"CityID": 21,
			"TownName": "İZNİK"
		},
		{
			"TownID": 224,
			"CityID": 21,
			"TownName": "KARACABEY"
		},
		{
			"TownID": 225,
			"CityID": 21,
			"TownName": "KELES"
		},
		{
			"TownID": 226,
			"CityID": 21,
			"TownName": "KESTEL"
		},
		{
			"TownID": 227,
			"CityID": 21,
			"TownName": "MUDANYA"
		},
		{
			"TownID": 228,
			"CityID": 21,
			"TownName": "MUSTAFAKEMALPAŞA"
		},
		{
			"TownID": 229,
			"CityID": 21,
			"TownName": "NİLÜFER"
		},
		{
			"TownID": 230,
			"CityID": 21,
			"TownName": "ORHANELİ"
		},
		{
			"TownID": 231,
			"CityID": 21,
			"TownName": "ORHANGAZİ"
		},
		{
			"TownID": 232,
			"CityID": 21,
			"TownName": "OSMANGAZİ"
		},
		{
			"TownID": 233,
			"CityID": 21,
			"TownName": "YENİŞEHİR"
		},
		{
			"TownID": 234,
			"CityID": 21,
			"TownName": "YILDIRIM"
		},
		{
			"TownID": 235,
			"CityID": 22,
			"TownName": "AYVACIK"
		},
		{
			"TownID": 236,
			"CityID": 22,
			"TownName": "BAYRAMİÇ"
		},
		{
			"TownID": 237,
			"CityID": 22,
			"TownName": "BİGA"
		},
		{
			"TownID": 238,
			"CityID": 22,
			"TownName": "BOZCAADA"
		},
		{
			"TownID": 239,
			"CityID": 22,
			"TownName": "ÇAN"
		},
		{
			"TownID": 240,
			"CityID": 22,
			"TownName": "ECEABAT"
		},
		{
			"TownID": 241,
			"CityID": 22,
			"TownName": "EZİNE"
		},
		{
			"TownID": 242,
			"CityID": 22,
			"TownName": "GELİBOLU"
		},
		{
			"TownID": 243,
			"CityID": 22,
			"TownName": "GÖKÇEADA"
		},
		{
			"TownID": 244,
			"CityID": 22,
			"TownName": "LAPSEKİ"
		},
		{
			"TownID": 245,
			"CityID": 22,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 246,
			"CityID": 22,
			"TownName": "YENİCE"
		},
		{
			"TownID": 247,
			"CityID": 23,
			"TownName": "ATKARACALAR"
		},
		{
			"TownID": 248,
			"CityID": 23,
			"TownName": "BAYRAMÖREN"
		},
		{
			"TownID": 249,
			"CityID": 23,
			"TownName": "ÇERKEŞ"
		},
		{
			"TownID": 250,
			"CityID": 23,
			"TownName": "ELDİVAN"
		},
		{
			"TownID": 251,
			"CityID": 23,
			"TownName": "ILGAZ"
		},
		{
			"TownID": 252,
			"CityID": 23,
			"TownName": "KIZILIRMAK"
		},
		{
			"TownID": 253,
			"CityID": 23,
			"TownName": "KORGUN"
		},
		{
			"TownID": 254,
			"CityID": 23,
			"TownName": "KURŞUNLU"
		},
		{
			"TownID": 255,
			"CityID": 23,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 256,
			"CityID": 23,
			"TownName": "ORTA"
		},
		{
			"TownID": 257,
			"CityID": 23,
			"TownName": "ŞABANÖZÜ"
		},
		{
			"TownID": 258,
			"CityID": 23,
			"TownName": "YAPRAKLI"
		},
		{
			"TownID": 259,
			"CityID": 24,
			"TownName": "ALACA"
		},
		{
			"TownID": 260,
			"CityID": 24,
			"TownName": "BAYAT"
		},
		{
			"TownID": 261,
			"CityID": 24,
			"TownName": "BOĞAZKALE"
		},
		{
			"TownID": 262,
			"CityID": 24,
			"TownName": "DODURGA"
		},
		{
			"TownID": 263,
			"CityID": 24,
			"TownName": "İSKİLİP"
		},
		{
			"TownID": 264,
			"CityID": 24,
			"TownName": "KARGI"
		},
		{
			"TownID": 265,
			"CityID": 24,
			"TownName": "LAÇİN"
		},
		{
			"TownID": 266,
			"CityID": 24,
			"TownName": "MECİTÖZÜ"
		},
		{
			"TownID": 267,
			"CityID": 24,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 268,
			"CityID": 24,
			"TownName": "OĞUZLAR"
		},
		{
			"TownID": 269,
			"CityID": 24,
			"TownName": "ORTAKÖY"
		},
		{
			"TownID": 270,
			"CityID": 24,
			"TownName": "OSMANCIK"
		},
		{
			"TownID": 271,
			"CityID": 24,
			"TownName": "SUNGURLU"
		},
		{
			"TownID": 272,
			"CityID": 24,
			"TownName": "UĞURLUDAĞ"
		},
		{
			"TownID": 273,
			"CityID": 25,
			"TownName": "ACIPAYAM"
		},
		{
			"TownID": 274,
			"CityID": 25,
			"TownName": "BABADAĞ"
		},
		{
			"TownID": 275,
			"CityID": 25,
			"TownName": "BAKLAN"
		},
		{
			"TownID": 276,
			"CityID": 25,
			"TownName": "BEKİLLİ"
		},
		{
			"TownID": 277,
			"CityID": 25,
			"TownName": "BEYAĞAÇ"
		},
		{
			"TownID": 278,
			"CityID": 25,
			"TownName": "BOZKURT"
		},
		{
			"TownID": 279,
			"CityID": 25,
			"TownName": "BULDAN"
		},
		{
			"TownID": 280,
			"CityID": 25,
			"TownName": "ÇAL"
		},
		{
			"TownID": 281,
			"CityID": 25,
			"TownName": "ÇAMELİ"
		},
		{
			"TownID": 282,
			"CityID": 25,
			"TownName": "ÇARDAK"
		},
		{
			"TownID": 283,
			"CityID": 25,
			"TownName": "ÇİVRİL"
		},
		{
			"TownID": 284,
			"CityID": 25,
			"TownName": "GÜNEY"
		},
		{
			"TownID": 285,
			"CityID": 25,
			"TownName": "HONAZ"
		},
		{
			"TownID": 286,
			"CityID": 25,
			"TownName": "KALE"
		},
		{
			"TownID": 287,
			"CityID": 25,
			"TownName": "MERKEZEFENDİ"
		},
		{
			"TownID": 288,
			"CityID": 25,
			"TownName": "PAMUKKALE"
		},
		{
			"TownID": 289,
			"CityID": 25,
			"TownName": "SARAYKÖY"
		},
		{
			"TownID": 290,
			"CityID": 25,
			"TownName": "SERİNHİSAR"
		},
		{
			"TownID": 291,
			"CityID": 25,
			"TownName": "TAVAS"
		},
		{
			"TownID": 292,
			"CityID": 26,
			"TownName": "BAĞLAR"
		},
		{
			"TownID": 293,
			"CityID": 26,
			"TownName": "BİSMİL"
		},
		{
			"TownID": 294,
			"CityID": 26,
			"TownName": "ÇERMİK"
		},
		{
			"TownID": 295,
			"CityID": 26,
			"TownName": "ÇINAR"
		},
		{
			"TownID": 296,
			"CityID": 26,
			"TownName": "ÇÜNGÜŞ"
		},
		{
			"TownID": 297,
			"CityID": 26,
			"TownName": "DİCLE"
		},
		{
			"TownID": 298,
			"CityID": 26,
			"TownName": "EĞİL"
		},
		{
			"TownID": 299,
			"CityID": 26,
			"TownName": "ERGANİ"
		},
		{
			"TownID": 300,
			"CityID": 26,
			"TownName": "HANİ"
		},
		{
			"TownID": 301,
			"CityID": 26,
			"TownName": "HAZRO"
		},
		{
			"TownID": 302,
			"CityID": 26,
			"TownName": "KAYAPINAR"
		},
		{
			"TownID": 303,
			"CityID": 26,
			"TownName": "KOCAKÖY"
		},
		{
			"TownID": 304,
			"CityID": 26,
			"TownName": "KULP"
		},
		{
			"TownID": 305,
			"CityID": 26,
			"TownName": "LİCE"
		},
		{
			"TownID": 306,
			"CityID": 26,
			"TownName": "SİLVAN"
		},
		{
			"TownID": 307,
			"CityID": 26,
			"TownName": "SUR"
		},
		{
			"TownID": 308,
			"CityID": 26,
			"TownName": "YENİŞEHİR"
		},
		{
			"TownID": 309,
			"CityID": 27,
			"TownName": "AKÇAKOCA"
		},
		{
			"TownID": 310,
			"CityID": 27,
			"TownName": "CUMAYERİ"
		},
		{
			"TownID": 311,
			"CityID": 27,
			"TownName": "ÇİLİMLİ"
		},
		{
			"TownID": 312,
			"CityID": 27,
			"TownName": "GÖLYAKA"
		},
		{
			"TownID": 313,
			"CityID": 27,
			"TownName": "GÜMÜŞOVA"
		},
		{
			"TownID": 314,
			"CityID": 27,
			"TownName": "KAYNAŞLI"
		},
		{
			"TownID": 315,
			"CityID": 27,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 316,
			"CityID": 27,
			"TownName": "YIĞILCA"
		},
		{
			"TownID": 317,
			"CityID": 28,
			"TownName": "ENEZ"
		},
		{
			"TownID": 318,
			"CityID": 28,
			"TownName": "HAVSA"
		},
		{
			"TownID": 319,
			"CityID": 28,
			"TownName": "İPSALA"
		},
		{
			"TownID": 320,
			"CityID": 28,
			"TownName": "KEŞAN"
		},
		{
			"TownID": 321,
			"CityID": 28,
			"TownName": "LALAPAŞA"
		},
		{
			"TownID": 322,
			"CityID": 28,
			"TownName": "MERİÇ"
		},
		{
			"TownID": 323,
			"CityID": 28,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 324,
			"CityID": 28,
			"TownName": "SÜLOĞLU"
		},
		{
			"TownID": 325,
			"CityID": 28,
			"TownName": "UZUNKÖPRÜ"
		},
		{
			"TownID": 326,
			"CityID": 29,
			"TownName": "AĞIN"
		},
		{
			"TownID": 327,
			"CityID": 29,
			"TownName": "ALACAKAYA"
		},
		{
			"TownID": 328,
			"CityID": 29,
			"TownName": "ARICAK"
		},
		{
			"TownID": 329,
			"CityID": 29,
			"TownName": "BASKİL"
		},
		{
			"TownID": 330,
			"CityID": 29,
			"TownName": "KARAKOÇAN"
		},
		{
			"TownID": 331,
			"CityID": 29,
			"TownName": "KEBAN"
		},
		{
			"TownID": 332,
			"CityID": 29,
			"TownName": "KOVANCILAR"
		},
		{
			"TownID": 333,
			"CityID": 29,
			"TownName": "MADEN"
		},
		{
			"TownID": 334,
			"CityID": 29,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 335,
			"CityID": 29,
			"TownName": "PALU"
		},
		{
			"TownID": 336,
			"CityID": 29,
			"TownName": "SİVRİCE"
		},
		{
			"TownID": 337,
			"CityID": 30,
			"TownName": "ÇAYIRLI"
		},
		{
			"TownID": 338,
			"CityID": 30,
			"TownName": "İLİÇ"
		},
		{
			"TownID": 339,
			"CityID": 30,
			"TownName": "KEMAH"
		},
		{
			"TownID": 340,
			"CityID": 30,
			"TownName": "KEMALİYE"
		},
		{
			"TownID": 341,
			"CityID": 30,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 342,
			"CityID": 30,
			"TownName": "OTLUKBELİ"
		},
		{
			"TownID": 343,
			"CityID": 30,
			"TownName": "REFAHİYE"
		},
		{
			"TownID": 344,
			"CityID": 30,
			"TownName": "TERCAN"
		},
		{
			"TownID": 345,
			"CityID": 30,
			"TownName": "ÜZÜMLÜ"
		},
		{
			"TownID": 346,
			"CityID": 31,
			"TownName": "AŞKALE"
		},
		{
			"TownID": 347,
			"CityID": 31,
			"TownName": "AZİZİYE"
		},
		{
			"TownID": 348,
			"CityID": 31,
			"TownName": "ÇAT"
		},
		{
			"TownID": 349,
			"CityID": 31,
			"TownName": "HINIS"
		},
		{
			"TownID": 350,
			"CityID": 31,
			"TownName": "HORASAN"
		},
		{
			"TownID": 351,
			"CityID": 31,
			"TownName": "İSPİR"
		},
		{
			"TownID": 352,
			"CityID": 31,
			"TownName": "KARAÇOBAN"
		},
		{
			"TownID": 353,
			"CityID": 31,
			"TownName": "KARAYAZI"
		},
		{
			"TownID": 354,
			"CityID": 31,
			"TownName": "KÖPRÜKÖY"
		},
		{
			"TownID": 355,
			"CityID": 31,
			"TownName": "NARMAN"
		},
		{
			"TownID": 356,
			"CityID": 31,
			"TownName": "OLTU"
		},
		{
			"TownID": 357,
			"CityID": 31,
			"TownName": "OLUR"
		},
		{
			"TownID": 358,
			"CityID": 31,
			"TownName": "PALANDÖKEN"
		},
		{
			"TownID": 359,
			"CityID": 31,
			"TownName": "PASİNLER"
		},
		{
			"TownID": 360,
			"CityID": 31,
			"TownName": "PAZARYOLU"
		},
		{
			"TownID": 361,
			"CityID": 31,
			"TownName": "ŞENKAYA"
		},
		{
			"TownID": 362,
			"CityID": 31,
			"TownName": "TEKMAN"
		},
		{
			"TownID": 363,
			"CityID": 31,
			"TownName": "TORTUM"
		},
		{
			"TownID": 364,
			"CityID": 31,
			"TownName": "UZUNDERE"
		},
		{
			"TownID": 365,
			"CityID": 31,
			"TownName": "YAKUTİYE"
		},
		{
			"TownID": 366,
			"CityID": 32,
			"TownName": "ALPU"
		},
		{
			"TownID": 367,
			"CityID": 32,
			"TownName": "BEYLİKOVA"
		},
		{
			"TownID": 368,
			"CityID": 32,
			"TownName": "ÇİFTELER"
		},
		{
			"TownID": 369,
			"CityID": 32,
			"TownName": "GÜNYÜZÜ"
		},
		{
			"TownID": 370,
			"CityID": 32,
			"TownName": "HAN"
		},
		{
			"TownID": 371,
			"CityID": 32,
			"TownName": "İNÖNÜ"
		},
		{
			"TownID": 372,
			"CityID": 32,
			"TownName": "MAHMUDİYE"
		},
		{
			"TownID": 373,
			"CityID": 32,
			"TownName": "MİHALGAZİ"
		},
		{
			"TownID": 374,
			"CityID": 32,
			"TownName": "MİHALIÇÇIK"
		},
		{
			"TownID": 375,
			"CityID": 32,
			"TownName": "ODUNPAZARI"
		},
		{
			"TownID": 376,
			"CityID": 32,
			"TownName": "SARICAKAYA"
		},
		{
			"TownID": 377,
			"CityID": 32,
			"TownName": "SEYİTGAZİ"
		},
		{
			"TownID": 378,
			"CityID": 32,
			"TownName": "SİVRİHİSAR"
		},
		{
			"TownID": 379,
			"CityID": 32,
			"TownName": "TEPEBAŞI"
		},
		{
			"TownID": 380,
			"CityID": 33,
			"TownName": "ARABAN"
		},
		{
			"TownID": 381,
			"CityID": 33,
			"TownName": "İSLAHİYE"
		},
		{
			"TownID": 382,
			"CityID": 33,
			"TownName": "KARKAMIŞ"
		},
		{
			"TownID": 383,
			"CityID": 33,
			"TownName": "NİZİP"
		},
		{
			"TownID": 384,
			"CityID": 33,
			"TownName": "NURDAĞI"
		},
		{
			"TownID": 385,
			"CityID": 33,
			"TownName": "OĞUZELİ"
		},
		{
			"TownID": 386,
			"CityID": 33,
			"TownName": "ŞAHİNBEY"
		},
		{
			"TownID": 387,
			"CityID": 33,
			"TownName": "ŞEHİTKAMİL"
		},
		{
			"TownID": 388,
			"CityID": 33,
			"TownName": "YAVUZELİ"
		},
		{
			"TownID": 389,
			"CityID": 34,
			"TownName": "ALUCRA"
		},
		{
			"TownID": 390,
			"CityID": 34,
			"TownName": "BULANCAK"
		},
		{
			"TownID": 391,
			"CityID": 34,
			"TownName": "ÇAMOLUK"
		},
		{
			"TownID": 392,
			"CityID": 34,
			"TownName": "ÇANAKÇI"
		},
		{
			"TownID": 393,
			"CityID": 34,
			"TownName": "DERELİ"
		},
		{
			"TownID": 394,
			"CityID": 34,
			"TownName": "DOĞANKENT"
		},
		{
			"TownID": 395,
			"CityID": 34,
			"TownName": "ESPİYE"
		},
		{
			"TownID": 396,
			"CityID": 34,
			"TownName": "EYNESİL"
		},
		{
			"TownID": 397,
			"CityID": 34,
			"TownName": "GÖRELE"
		},
		{
			"TownID": 398,
			"CityID": 34,
			"TownName": "GÜCE"
		},
		{
			"TownID": 399,
			"CityID": 34,
			"TownName": "KEŞAP"
		},
		{
			"TownID": 400,
			"CityID": 34,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 401,
			"CityID": 34,
			"TownName": "PİRAZİZ"
		},
		{
			"TownID": 402,
			"CityID": 34,
			"TownName": "ŞEBİNKARAHİSAR"
		},
		{
			"TownID": 403,
			"CityID": 34,
			"TownName": "TİREBOLU"
		},
		{
			"TownID": 404,
			"CityID": 34,
			"TownName": "YAĞLIDERE"
		},
		{
			"TownID": 405,
			"CityID": 35,
			"TownName": "KELKİT"
		},
		{
			"TownID": 406,
			"CityID": 35,
			"TownName": "KÖSE"
		},
		{
			"TownID": 407,
			"CityID": 35,
			"TownName": "KÜRTÜN"
		},
		{
			"TownID": 408,
			"CityID": 35,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 409,
			"CityID": 35,
			"TownName": "ŞİRAN"
		},
		{
			"TownID": 410,
			"CityID": 35,
			"TownName": "TORUL"
		},
		{
			"TownID": 411,
			"CityID": 36,
			"TownName": "ÇUKURCA"
		},
		{
			"TownID": 412,
			"CityID": 36,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 413,
			"CityID": 36,
			"TownName": "ŞEMDİNLİ"
		},
		{
			"TownID": 414,
			"CityID": 36,
			"TownName": "YÜKSEKOVA"
		},
		{
			"TownID": 415,
			"CityID": 37,
			"TownName": "ALTINÖZÜ"
		},
		{
			"TownID": 416,
			"CityID": 37,
			"TownName": "ANTAKYA"
		},
		{
			"TownID": 417,
			"CityID": 37,
			"TownName": "ARSUZ"
		},
		{
			"TownID": 418,
			"CityID": 37,
			"TownName": "BELEN"
		},
		{
			"TownID": 419,
			"CityID": 37,
			"TownName": "DEFNE"
		},
		{
			"TownID": 420,
			"CityID": 37,
			"TownName": "DÖRTYOL"
		},
		{
			"TownID": 421,
			"CityID": 37,
			"TownName": "ERZİN"
		},
		{
			"TownID": 422,
			"CityID": 37,
			"TownName": "HASSA"
		},
		{
			"TownID": 423,
			"CityID": 37,
			"TownName": "İSKENDERUN"
		},
		{
			"TownID": 424,
			"CityID": 37,
			"TownName": "KIRIKHAN"
		},
		{
			"TownID": 425,
			"CityID": 37,
			"TownName": "KUMLU"
		},
		{
			"TownID": 426,
			"CityID": 37,
			"TownName": "PAYAS"
		},
		{
			"TownID": 427,
			"CityID": 37,
			"TownName": "REYHANLI"
		},
		{
			"TownID": 428,
			"CityID": 37,
			"TownName": "SAMANDAĞ"
		},
		{
			"TownID": 429,
			"CityID": 37,
			"TownName": "YAYLADAĞI"
		},
		{
			"TownID": 430,
			"CityID": 38,
			"TownName": "ARALIK"
		},
		{
			"TownID": 431,
			"CityID": 38,
			"TownName": "KARAKOYUNLU"
		},
		{
			"TownID": 432,
			"CityID": 38,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 433,
			"CityID": 38,
			"TownName": "TUZLUCA"
		},
		{
			"TownID": 434,
			"CityID": 39,
			"TownName": "AKSU"
		},
		{
			"TownID": 435,
			"CityID": 39,
			"TownName": "ATABEY"
		},
		{
			"TownID": 436,
			"CityID": 39,
			"TownName": "EĞİRDİR"
		},
		{
			"TownID": 437,
			"CityID": 39,
			"TownName": "GELENDOST"
		},
		{
			"TownID": 438,
			"CityID": 39,
			"TownName": "GÖNEN"
		},
		{
			"TownID": 439,
			"CityID": 39,
			"TownName": "KEÇİBORLU"
		},
		{
			"TownID": 440,
			"CityID": 39,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 441,
			"CityID": 39,
			"TownName": "SENİRKENT"
		},
		{
			"TownID": 442,
			"CityID": 39,
			"TownName": "SÜTÇÜLER"
		},
		{
			"TownID": 443,
			"CityID": 39,
			"TownName": "ŞARKİKARAAĞAÇ"
		},
		{
			"TownID": 444,
			"CityID": 39,
			"TownName": "ULUBORLU"
		},
		{
			"TownID": 445,
			"CityID": 39,
			"TownName": "YALVAÇ"
		},
		{
			"TownID": 446,
			"CityID": 39,
			"TownName": "YENİŞARBADEMLİ"
		},
		{
			"TownID": 447,
			"CityID": 40,
			"TownName": "ADALAR"
		},
		{
			"TownID": 448,
			"CityID": 40,
			"TownName": "ARNAVUTKÖY"
		},
		{
			"TownID": 449,
			"CityID": 40,
			"TownName": "ATAŞEHİR"
		},
		{
			"TownID": 450,
			"CityID": 40,
			"TownName": "AVCILAR"
		},
		{
			"TownID": 451,
			"CityID": 40,
			"TownName": "BAĞCILAR"
		},
		{
			"TownID": 452,
			"CityID": 40,
			"TownName": "BAHÇELİEVLER"
		},
		{
			"TownID": 453,
			"CityID": 40,
			"TownName": "BAKIRKÖY"
		},
		{
			"TownID": 454,
			"CityID": 40,
			"TownName": "BAŞAKŞEHİR"
		},
		{
			"TownID": 455,
			"CityID": 40,
			"TownName": "BAYRAMPAŞA"
		},
		{
			"TownID": 456,
			"CityID": 40,
			"TownName": "BEŞİKTAŞ"
		},
		{
			"TownID": 457,
			"CityID": 40,
			"TownName": "BEYKOZ"
		},
		{
			"TownID": 458,
			"CityID": 40,
			"TownName": "BEYLİKDÜZÜ"
		},
		{
			"TownID": 459,
			"CityID": 40,
			"TownName": "BEYOĞLU"
		},
		{
			"TownID": 460,
			"CityID": 40,
			"TownName": "BÜYÜKÇEKMECE"
		},
		{
			"TownID": 461,
			"CityID": 40,
			"TownName": "ÇATALCA"
		},
		{
			"TownID": 462,
			"CityID": 40,
			"TownName": "ÇEKMEKÖY"
		},
		{
			"TownID": 463,
			"CityID": 40,
			"TownName": "ESENLER"
		},
		{
			"TownID": 464,
			"CityID": 40,
			"TownName": "ESENYURT"
		},
		{
			"TownID": 465,
			"CityID": 40,
			"TownName": "EYÜPSULTAN"
		},
		{
			"TownID": 466,
			"CityID": 40,
			"TownName": "FATİH"
		},
		{
			"TownID": 467,
			"CityID": 40,
			"TownName": "GAZİOSMANPAŞA"
		},
		{
			"TownID": 468,
			"CityID": 40,
			"TownName": "GÜNGÖREN"
		},
		{
			"TownID": 469,
			"CityID": 40,
			"TownName": "KADIKÖY"
		},
		{
			"TownID": 470,
			"CityID": 40,
			"TownName": "KAĞITHANE"
		},
		{
			"TownID": 471,
			"CityID": 40,
			"TownName": "KARTAL"
		},
		{
			"TownID": 472,
			"CityID": 40,
			"TownName": "KÜÇÜKÇEKMECE"
		},
		{
			"TownID": 473,
			"CityID": 40,
			"TownName": "MALTEPE"
		},
		{
			"TownID": 474,
			"CityID": 40,
			"TownName": "PENDİK"
		},
		{
			"TownID": 475,
			"CityID": 40,
			"TownName": "SANCAKTEPE"
		},
		{
			"TownID": 476,
			"CityID": 40,
			"TownName": "SARIYER"
		},
		{
			"TownID": 477,
			"CityID": 40,
			"TownName": "SİLİVRİ"
		},
		{
			"TownID": 478,
			"CityID": 40,
			"TownName": "SULTANBEYLİ"
		},
		{
			"TownID": 479,
			"CityID": 40,
			"TownName": "SULTANGAZİ"
		},
		{
			"TownID": 480,
			"CityID": 40,
			"TownName": "ŞİLE"
		},
		{
			"TownID": 481,
			"CityID": 40,
			"TownName": "ŞİŞLİ"
		},
		{
			"TownID": 482,
			"CityID": 40,
			"TownName": "TUZLA"
		},
		{
			"TownID": 483,
			"CityID": 40,
			"TownName": "ÜMRANİYE"
		},
		{
			"TownID": 484,
			"CityID": 40,
			"TownName": "ÜSKÜDAR"
		},
		{
			"TownID": 485,
			"CityID": 40,
			"TownName": "ZEYTİNBURNU"
		},
		{
			"TownID": 486,
			"CityID": 41,
			"TownName": "ALİAĞA"
		},
		{
			"TownID": 487,
			"CityID": 41,
			"TownName": "BALÇOVA"
		},
		{
			"TownID": 488,
			"CityID": 41,
			"TownName": "BAYINDIR"
		},
		{
			"TownID": 489,
			"CityID": 41,
			"TownName": "BAYRAKLI"
		},
		{
			"TownID": 490,
			"CityID": 41,
			"TownName": "BERGAMA"
		},
		{
			"TownID": 491,
			"CityID": 41,
			"TownName": "BEYDAĞ"
		},
		{
			"TownID": 492,
			"CityID": 41,
			"TownName": "BORNOVA"
		},
		{
			"TownID": 493,
			"CityID": 41,
			"TownName": "BUCA"
		},
		{
			"TownID": 494,
			"CityID": 41,
			"TownName": "ÇEŞME"
		},
		{
			"TownID": 495,
			"CityID": 41,
			"TownName": "ÇİĞLİ"
		},
		{
			"TownID": 496,
			"CityID": 41,
			"TownName": "DİKİLİ"
		},
		{
			"TownID": 497,
			"CityID": 41,
			"TownName": "FOÇA"
		},
		{
			"TownID": 498,
			"CityID": 41,
			"TownName": "GAZİEMİR"
		},
		{
			"TownID": 499,
			"CityID": 41,
			"TownName": "GÜZELBAHÇE"
		},
		{
			"TownID": 500,
			"CityID": 41,
			"TownName": "KARABAĞLAR"
		},
		{
			"TownID": 501,
			"CityID": 41,
			"TownName": "KARABURUN"
		},
		{
			"TownID": 502,
			"CityID": 41,
			"TownName": "KARŞIYAKA"
		},
		{
			"TownID": 503,
			"CityID": 41,
			"TownName": "KEMALPAŞA"
		},
		{
			"TownID": 504,
			"CityID": 41,
			"TownName": "KINIK"
		},
		{
			"TownID": 505,
			"CityID": 41,
			"TownName": "KİRAZ"
		},
		{
			"TownID": 506,
			"CityID": 41,
			"TownName": "KONAK"
		},
		{
			"TownID": 507,
			"CityID": 41,
			"TownName": "MENDERES"
		},
		{
			"TownID": 508,
			"CityID": 41,
			"TownName": "MENEMEN"
		},
		{
			"TownID": 509,
			"CityID": 41,
			"TownName": "NARLIDERE"
		},
		{
			"TownID": 510,
			"CityID": 41,
			"TownName": "ÖDEMİŞ"
		},
		{
			"TownID": 511,
			"CityID": 41,
			"TownName": "SEFERİHİSAR"
		},
		{
			"TownID": 512,
			"CityID": 41,
			"TownName": "SELÇUK"
		},
		{
			"TownID": 513,
			"CityID": 41,
			"TownName": "TİRE"
		},
		{
			"TownID": 514,
			"CityID": 41,
			"TownName": "TORBALI"
		},
		{
			"TownID": 515,
			"CityID": 41,
			"TownName": "URLA"
		},
		{
			"TownID": 516,
			"CityID": 42,
			"TownName": "AFŞİN"
		},
		{
			"TownID": 517,
			"CityID": 42,
			"TownName": "ANDIRIN"
		},
		{
			"TownID": 518,
			"CityID": 42,
			"TownName": "ÇAĞLAYANCERİT"
		},
		{
			"TownID": 519,
			"CityID": 42,
			"TownName": "DULKADİROĞLU"
		},
		{
			"TownID": 520,
			"CityID": 42,
			"TownName": "EKİNÖZÜ"
		},
		{
			"TownID": 521,
			"CityID": 42,
			"TownName": "ELBİSTAN"
		},
		{
			"TownID": 522,
			"CityID": 42,
			"TownName": "GÖKSUN"
		},
		{
			"TownID": 523,
			"CityID": 42,
			"TownName": "NURHAK"
		},
		{
			"TownID": 524,
			"CityID": 42,
			"TownName": "ONİKİŞUBAT"
		},
		{
			"TownID": 525,
			"CityID": 42,
			"TownName": "PAZARCIK"
		},
		{
			"TownID": 526,
			"CityID": 42,
			"TownName": "TÜRKOĞLU"
		},
		{
			"TownID": 527,
			"CityID": 43,
			"TownName": "EFLANİ"
		},
		{
			"TownID": 528,
			"CityID": 43,
			"TownName": "ESKİPAZAR"
		},
		{
			"TownID": 529,
			"CityID": 43,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 530,
			"CityID": 43,
			"TownName": "OVACIK"
		},
		{
			"TownID": 531,
			"CityID": 43,
			"TownName": "SAFRANBOLU"
		},
		{
			"TownID": 532,
			"CityID": 43,
			"TownName": "YENİCE"
		},
		{
			"TownID": 533,
			"CityID": 44,
			"TownName": "AYRANCI"
		},
		{
			"TownID": 534,
			"CityID": 44,
			"TownName": "BAŞYAYLA"
		},
		{
			"TownID": 535,
			"CityID": 44,
			"TownName": "ERMENEK"
		},
		{
			"TownID": 536,
			"CityID": 44,
			"TownName": "KAZIMKARABEKİR"
		},
		{
			"TownID": 537,
			"CityID": 44,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 538,
			"CityID": 44,
			"TownName": "SARIVELİLER"
		},
		{
			"TownID": 539,
			"CityID": 45,
			"TownName": "AKYAKA"
		},
		{
			"TownID": 540,
			"CityID": 45,
			"TownName": "ARPAÇAY"
		},
		{
			"TownID": 541,
			"CityID": 45,
			"TownName": "DİGOR"
		},
		{
			"TownID": 542,
			"CityID": 45,
			"TownName": "KAĞIZMAN"
		},
		{
			"TownID": 543,
			"CityID": 45,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 544,
			"CityID": 45,
			"TownName": "SARIKAMIŞ"
		},
		{
			"TownID": 545,
			"CityID": 45,
			"TownName": "SELİM"
		},
		{
			"TownID": 546,
			"CityID": 45,
			"TownName": "SUSUZ"
		},
		{
			"TownID": 547,
			"CityID": 46,
			"TownName": "ABANA"
		},
		{
			"TownID": 548,
			"CityID": 46,
			"TownName": "AĞLI"
		},
		{
			"TownID": 549,
			"CityID": 46,
			"TownName": "ARAÇ"
		},
		{
			"TownID": 550,
			"CityID": 46,
			"TownName": "AZDAVAY"
		},
		{
			"TownID": 551,
			"CityID": 46,
			"TownName": "BOZKURT"
		},
		{
			"TownID": 552,
			"CityID": 46,
			"TownName": "CİDE"
		},
		{
			"TownID": 553,
			"CityID": 46,
			"TownName": "ÇATALZEYTİN"
		},
		{
			"TownID": 554,
			"CityID": 46,
			"TownName": "DADAY"
		},
		{
			"TownID": 555,
			"CityID": 46,
			"TownName": "DEVREKANİ"
		},
		{
			"TownID": 556,
			"CityID": 46,
			"TownName": "DOĞANYURT"
		},
		{
			"TownID": 557,
			"CityID": 46,
			"TownName": "HANÖNÜ"
		},
		{
			"TownID": 558,
			"CityID": 46,
			"TownName": "İHSANGAZİ"
		},
		{
			"TownID": 559,
			"CityID": 46,
			"TownName": "İNEBOLU"
		},
		{
			"TownID": 560,
			"CityID": 46,
			"TownName": "KÜRE"
		},
		{
			"TownID": 561,
			"CityID": 46,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 562,
			"CityID": 46,
			"TownName": "PINARBAŞI"
		},
		{
			"TownID": 563,
			"CityID": 46,
			"TownName": "SEYDİLER"
		},
		{
			"TownID": 564,
			"CityID": 46,
			"TownName": "ŞENPAZAR"
		},
		{
			"TownID": 565,
			"CityID": 46,
			"TownName": "TAŞKÖPRÜ"
		},
		{
			"TownID": 566,
			"CityID": 46,
			"TownName": "TOSYA"
		},
		{
			"TownID": 567,
			"CityID": 47,
			"TownName": "AKKIŞLA"
		},
		{
			"TownID": 568,
			"CityID": 47,
			"TownName": "BÜNYAN"
		},
		{
			"TownID": 569,
			"CityID": 47,
			"TownName": "DEVELİ"
		},
		{
			"TownID": 570,
			"CityID": 47,
			"TownName": "FELAHİYE"
		},
		{
			"TownID": 571,
			"CityID": 47,
			"TownName": "HACILAR"
		},
		{
			"TownID": 572,
			"CityID": 47,
			"TownName": "İNCESU"
		},
		{
			"TownID": 573,
			"CityID": 47,
			"TownName": "KOCASİNAN"
		},
		{
			"TownID": 574,
			"CityID": 47,
			"TownName": "MELİKGAZİ"
		},
		{
			"TownID": 575,
			"CityID": 47,
			"TownName": "ÖZVATAN"
		},
		{
			"TownID": 576,
			"CityID": 47,
			"TownName": "PINARBAŞI"
		},
		{
			"TownID": 577,
			"CityID": 47,
			"TownName": "SARIOĞLAN"
		},
		{
			"TownID": 578,
			"CityID": 47,
			"TownName": "SARIZ"
		},
		{
			"TownID": 579,
			"CityID": 47,
			"TownName": "TALAS"
		},
		{
			"TownID": 580,
			"CityID": 47,
			"TownName": "TOMARZA"
		},
		{
			"TownID": 581,
			"CityID": 47,
			"TownName": "YAHYALI"
		},
		{
			"TownID": 582,
			"CityID": 47,
			"TownName": "YEŞİLHİSAR"
		},
		{
			"TownID": 583,
			"CityID": 48,
			"TownName": "BAHŞİLİ"
		},
		{
			"TownID": 584,
			"CityID": 48,
			"TownName": "BALIŞEYH"
		},
		{
			"TownID": 585,
			"CityID": 48,
			"TownName": "ÇELEBİ"
		},
		{
			"TownID": 586,
			"CityID": 48,
			"TownName": "DELİCE"
		},
		{
			"TownID": 587,
			"CityID": 48,
			"TownName": "KARAKEÇİLİ"
		},
		{
			"TownID": 588,
			"CityID": 48,
			"TownName": "KESKİN"
		},
		{
			"TownID": 589,
			"CityID": 48,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 590,
			"CityID": 48,
			"TownName": "SULAKYURT"
		},
		{
			"TownID": 591,
			"CityID": 48,
			"TownName": "YAHŞİHAN"
		},
		{
			"TownID": 592,
			"CityID": 49,
			"TownName": "BABAESKİ"
		},
		{
			"TownID": 593,
			"CityID": 49,
			"TownName": "DEMİRKÖY"
		},
		{
			"TownID": 594,
			"CityID": 49,
			"TownName": "KOFÇAZ"
		},
		{
			"TownID": 595,
			"CityID": 49,
			"TownName": "LÜLEBURGAZ"
		},
		{
			"TownID": 596,
			"CityID": 49,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 597,
			"CityID": 49,
			"TownName": "PEHLİVANKÖY"
		},
		{
			"TownID": 598,
			"CityID": 49,
			"TownName": "PINARHİSAR"
		},
		{
			"TownID": 599,
			"CityID": 49,
			"TownName": "VİZE"
		},
		{
			"TownID": 600,
			"CityID": 50,
			"TownName": "AKÇAKENT"
		},
		{
			"TownID": 601,
			"CityID": 50,
			"TownName": "AKPINAR"
		},
		{
			"TownID": 602,
			"CityID": 50,
			"TownName": "BOZTEPE"
		},
		{
			"TownID": 603,
			"CityID": 50,
			"TownName": "ÇİÇEKDAĞI"
		},
		{
			"TownID": 604,
			"CityID": 50,
			"TownName": "KAMAN"
		},
		{
			"TownID": 605,
			"CityID": 50,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 606,
			"CityID": 50,
			"TownName": "MUCUR"
		},
		{
			"TownID": 607,
			"CityID": 51,
			"TownName": "ELBEYLİ"
		},
		{
			"TownID": 608,
			"CityID": 51,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 609,
			"CityID": 51,
			"TownName": "MUSABEYLİ"
		},
		{
			"TownID": 610,
			"CityID": 51,
			"TownName": "POLATELİ"
		},
		{
			"TownID": 611,
			"CityID": 52,
			"TownName": "BAŞİSKELE"
		},
		{
			"TownID": 612,
			"CityID": 52,
			"TownName": "ÇAYIROVA"
		},
		{
			"TownID": 613,
			"CityID": 52,
			"TownName": "DARICA"
		},
		{
			"TownID": 614,
			"CityID": 52,
			"TownName": "DERİNCE"
		},
		{
			"TownID": 615,
			"CityID": 52,
			"TownName": "DİLOVASI"
		},
		{
			"TownID": 616,
			"CityID": 52,
			"TownName": "GEBZE"
		},
		{
			"TownID": 617,
			"CityID": 52,
			"TownName": "GÖLCÜK"
		},
		{
			"TownID": 618,
			"CityID": 52,
			"TownName": "İZMİT"
		},
		{
			"TownID": 619,
			"CityID": 52,
			"TownName": "KANDIRA"
		},
		{
			"TownID": 620,
			"CityID": 52,
			"TownName": "KARAMÜRSEL"
		},
		{
			"TownID": 621,
			"CityID": 52,
			"TownName": "KARTEPE"
		},
		{
			"TownID": 622,
			"CityID": 52,
			"TownName": "KÖRFEZ"
		},
		{
			"TownID": 623,
			"CityID": 53,
			"TownName": "AHIRLI"
		},
		{
			"TownID": 624,
			"CityID": 53,
			"TownName": "AKÖREN"
		},
		{
			"TownID": 625,
			"CityID": 53,
			"TownName": "AKŞEHİR"
		},
		{
			"TownID": 626,
			"CityID": 53,
			"TownName": "ALTINEKİN"
		},
		{
			"TownID": 627,
			"CityID": 53,
			"TownName": "BEYŞEHİR"
		},
		{
			"TownID": 628,
			"CityID": 53,
			"TownName": "BOZKIR"
		},
		{
			"TownID": 629,
			"CityID": 53,
			"TownName": "CİHANBEYLİ"
		},
		{
			"TownID": 630,
			"CityID": 53,
			"TownName": "ÇELTİK"
		},
		{
			"TownID": 631,
			"CityID": 53,
			"TownName": "ÇUMRA"
		},
		{
			"TownID": 632,
			"CityID": 53,
			"TownName": "DERBENT"
		},
		{
			"TownID": 633,
			"CityID": 53,
			"TownName": "DEREBUCAK"
		},
		{
			"TownID": 634,
			"CityID": 53,
			"TownName": "DOĞANHİSAR"
		},
		{
			"TownID": 635,
			"CityID": 53,
			"TownName": "EMİRGAZİ"
		},
		{
			"TownID": 636,
			"CityID": 53,
			"TownName": "EREĞLİ"
		},
		{
			"TownID": 637,
			"CityID": 53,
			"TownName": "GÜNEYSINIR"
		},
		{
			"TownID": 638,
			"CityID": 53,
			"TownName": "HADİM"
		},
		{
			"TownID": 639,
			"CityID": 53,
			"TownName": "HALKAPINAR"
		},
		{
			"TownID": 640,
			"CityID": 53,
			"TownName": "HÜYÜK"
		},
		{
			"TownID": 641,
			"CityID": 53,
			"TownName": "ILGIN"
		},
		{
			"TownID": 642,
			"CityID": 53,
			"TownName": "KADINHANI"
		},
		{
			"TownID": 643,
			"CityID": 53,
			"TownName": "KARAPINAR"
		},
		{
			"TownID": 644,
			"CityID": 53,
			"TownName": "KARATAY"
		},
		{
			"TownID": 645,
			"CityID": 53,
			"TownName": "KULU"
		},
		{
			"TownID": 646,
			"CityID": 53,
			"TownName": "MERAM"
		},
		{
			"TownID": 647,
			"CityID": 53,
			"TownName": "SARAYÖNÜ"
		},
		{
			"TownID": 648,
			"CityID": 53,
			"TownName": "SELÇUKLU"
		},
		{
			"TownID": 649,
			"CityID": 53,
			"TownName": "SEYDİŞEHİR"
		},
		{
			"TownID": 650,
			"CityID": 53,
			"TownName": "TAŞKENT"
		},
		{
			"TownID": 651,
			"CityID": 53,
			"TownName": "TUZLUKÇU"
		},
		{
			"TownID": 652,
			"CityID": 53,
			"TownName": "YALIHÜYÜK"
		},
		{
			"TownID": 653,
			"CityID": 53,
			"TownName": "YUNAK"
		},
		{
			"TownID": 654,
			"CityID": 54,
			"TownName": "ALTINTAŞ"
		},
		{
			"TownID": 655,
			"CityID": 54,
			"TownName": "ASLANAPA"
		},
		{
			"TownID": 656,
			"CityID": 54,
			"TownName": "ÇAVDARHİSAR"
		},
		{
			"TownID": 657,
			"CityID": 54,
			"TownName": "DOMANİÇ"
		},
		{
			"TownID": 658,
			"CityID": 54,
			"TownName": "DUMLUPINAR"
		},
		{
			"TownID": 659,
			"CityID": 54,
			"TownName": "EMET"
		},
		{
			"TownID": 660,
			"CityID": 54,
			"TownName": "GEDİZ"
		},
		{
			"TownID": 661,
			"CityID": 54,
			"TownName": "HİSARCIK"
		},
		{
			"TownID": 662,
			"CityID": 54,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 663,
			"CityID": 54,
			"TownName": "PAZARLAR"
		},
		{
			"TownID": 664,
			"CityID": 54,
			"TownName": "SİMAV"
		},
		{
			"TownID": 665,
			"CityID": 54,
			"TownName": "ŞAPHANE"
		},
		{
			"TownID": 666,
			"CityID": 54,
			"TownName": "TAVŞANLI"
		},
		{
			"TownID": 667,
			"CityID": 55,
			"TownName": "AKÇADAĞ"
		},
		{
			"TownID": 668,
			"CityID": 55,
			"TownName": "ARAPGİR"
		},
		{
			"TownID": 669,
			"CityID": 55,
			"TownName": "ARGUVAN"
		},
		{
			"TownID": 670,
			"CityID": 55,
			"TownName": "BATTALGAZİ"
		},
		{
			"TownID": 671,
			"CityID": 55,
			"TownName": "DARENDE"
		},
		{
			"TownID": 672,
			"CityID": 55,
			"TownName": "DOĞANŞEHİR"
		},
		{
			"TownID": 673,
			"CityID": 55,
			"TownName": "DOĞANYOL"
		},
		{
			"TownID": 674,
			"CityID": 55,
			"TownName": "HEKİMHAN"
		},
		{
			"TownID": 675,
			"CityID": 55,
			"TownName": "KALE"
		},
		{
			"TownID": 676,
			"CityID": 55,
			"TownName": "KULUNCAK"
		},
		{
			"TownID": 677,
			"CityID": 55,
			"TownName": "PÜTÜRGE"
		},
		{
			"TownID": 678,
			"CityID": 55,
			"TownName": "YAZIHAN"
		},
		{
			"TownID": 679,
			"CityID": 55,
			"TownName": "YEŞİLYURT"
		},
		{
			"TownID": 680,
			"CityID": 56,
			"TownName": "AHMETLİ"
		},
		{
			"TownID": 681,
			"CityID": 56,
			"TownName": "AKHİSAR"
		},
		{
			"TownID": 682,
			"CityID": 56,
			"TownName": "ALAŞEHİR"
		},
		{
			"TownID": 683,
			"CityID": 56,
			"TownName": "DEMİRCİ"
		},
		{
			"TownID": 684,
			"CityID": 56,
			"TownName": "GÖLMARMARA"
		},
		{
			"TownID": 685,
			"CityID": 56,
			"TownName": "GÖRDES"
		},
		{
			"TownID": 686,
			"CityID": 56,
			"TownName": "KIRKAĞAÇ"
		},
		{
			"TownID": 687,
			"CityID": 56,
			"TownName": "KÖPRÜBAŞI"
		},
		{
			"TownID": 688,
			"CityID": 56,
			"TownName": "KULA"
		},
		{
			"TownID": 689,
			"CityID": 56,
			"TownName": "SALİHLİ"
		},
		{
			"TownID": 690,
			"CityID": 56,
			"TownName": "SARIGÖL"
		},
		{
			"TownID": 691,
			"CityID": 56,
			"TownName": "SARUHANLI"
		},
		{
			"TownID": 692,
			"CityID": 56,
			"TownName": "SELENDİ"
		},
		{
			"TownID": 693,
			"CityID": 56,
			"TownName": "SOMA"
		},
		{
			"TownID": 694,
			"CityID": 56,
			"TownName": "ŞEHZADELER"
		},
		{
			"TownID": 695,
			"CityID": 56,
			"TownName": "TURGUTLU"
		},
		{
			"TownID": 696,
			"CityID": 56,
			"TownName": "YUNUSEMRE"
		},
		{
			"TownID": 697,
			"CityID": 57,
			"TownName": "ARTUKLU"
		},
		{
			"TownID": 698,
			"CityID": 57,
			"TownName": "DARGEÇİT"
		},
		{
			"TownID": 699,
			"CityID": 57,
			"TownName": "DERİK"
		},
		{
			"TownID": 700,
			"CityID": 57,
			"TownName": "KIZILTEPE"
		},
		{
			"TownID": 701,
			"CityID": 57,
			"TownName": "MAZIDAĞI"
		},
		{
			"TownID": 702,
			"CityID": 57,
			"TownName": "MİDYAT"
		},
		{
			"TownID": 703,
			"CityID": 57,
			"TownName": "NUSAYBİN"
		},
		{
			"TownID": 704,
			"CityID": 57,
			"TownName": "ÖMERLİ"
		},
		{
			"TownID": 705,
			"CityID": 57,
			"TownName": "SAVUR"
		},
		{
			"TownID": 706,
			"CityID": 57,
			"TownName": "YEŞİLLİ"
		},
		{
			"TownID": 707,
			"CityID": 58,
			"TownName": "AKDENİZ"
		},
		{
			"TownID": 708,
			"CityID": 58,
			"TownName": "ANAMUR"
		},
		{
			"TownID": 709,
			"CityID": 58,
			"TownName": "AYDINCIK"
		},
		{
			"TownID": 710,
			"CityID": 58,
			"TownName": "BOZYAZI"
		},
		{
			"TownID": 711,
			"CityID": 58,
			"TownName": "ÇAMLIYAYLA"
		},
		{
			"TownID": 712,
			"CityID": 58,
			"TownName": "ERDEMLİ"
		},
		{
			"TownID": 713,
			"CityID": 58,
			"TownName": "GÜLNAR"
		},
		{
			"TownID": 714,
			"CityID": 58,
			"TownName": "MEZİTLİ"
		},
		{
			"TownID": 715,
			"CityID": 58,
			"TownName": "MUT"
		},
		{
			"TownID": 716,
			"CityID": 58,
			"TownName": "SİLİFKE"
		},
		{
			"TownID": 717,
			"CityID": 58,
			"TownName": "TARSUS"
		},
		{
			"TownID": 718,
			"CityID": 58,
			"TownName": "TOROSLAR"
		},
		{
			"TownID": 719,
			"CityID": 58,
			"TownName": "YENİŞEHİR"
		},
		{
			"TownID": 720,
			"CityID": 59,
			"TownName": "BODRUM"
		},
		{
			"TownID": 721,
			"CityID": 59,
			"TownName": "DALAMAN"
		},
		{
			"TownID": 722,
			"CityID": 59,
			"TownName": "DATÇA"
		},
		{
			"TownID": 723,
			"CityID": 59,
			"TownName": "FETHİYE"
		},
		{
			"TownID": 724,
			"CityID": 59,
			"TownName": "KAVAKLIDERE"
		},
		{
			"TownID": 725,
			"CityID": 59,
			"TownName": "KÖYCEĞİZ"
		},
		{
			"TownID": 726,
			"CityID": 59,
			"TownName": "MARMARİS"
		},
		{
			"TownID": 727,
			"CityID": 59,
			"TownName": "MENTEŞE"
		},
		{
			"TownID": 728,
			"CityID": 59,
			"TownName": "MİLAS"
		},
		{
			"TownID": 729,
			"CityID": 59,
			"TownName": "ORTACA"
		},
		{
			"TownID": 730,
			"CityID": 59,
			"TownName": "SEYDİKEMER"
		},
		{
			"TownID": 731,
			"CityID": 59,
			"TownName": "ULA"
		},
		{
			"TownID": 732,
			"CityID": 59,
			"TownName": "YATAĞAN"
		},
		{
			"TownID": 733,
			"CityID": 60,
			"TownName": "BULANIK"
		},
		{
			"TownID": 734,
			"CityID": 60,
			"TownName": "HASKÖY"
		},
		{
			"TownID": 735,
			"CityID": 60,
			"TownName": "KORKUT"
		},
		{
			"TownID": 736,
			"CityID": 60,
			"TownName": "MALAZGİRT"
		},
		{
			"TownID": 737,
			"CityID": 60,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 738,
			"CityID": 60,
			"TownName": "VARTO"
		},
		{
			"TownID": 739,
			"CityID": 61,
			"TownName": "ACIGÖL"
		},
		{
			"TownID": 740,
			"CityID": 61,
			"TownName": "AVANOS"
		},
		{
			"TownID": 741,
			"CityID": 61,
			"TownName": "DERİNKUYU"
		},
		{
			"TownID": 742,
			"CityID": 61,
			"TownName": "GÜLŞEHİR"
		},
		{
			"TownID": 743,
			"CityID": 61,
			"TownName": "HACIBEKTAŞ"
		},
		{
			"TownID": 744,
			"CityID": 61,
			"TownName": "KOZAKLI"
		},
		{
			"TownID": 745,
			"CityID": 61,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 746,
			"CityID": 61,
			"TownName": "ÜRGÜP"
		},
		{
			"TownID": 747,
			"CityID": 62,
			"TownName": "ALTUNHİSAR"
		},
		{
			"TownID": 748,
			"CityID": 62,
			"TownName": "BOR"
		},
		{
			"TownID": 749,
			"CityID": 62,
			"TownName": "ÇAMARDI"
		},
		{
			"TownID": 750,
			"CityID": 62,
			"TownName": "ÇİFTLİK"
		},
		{
			"TownID": 751,
			"CityID": 62,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 752,
			"CityID": 62,
			"TownName": "ULUKIŞLA"
		},
		{
			"TownID": 753,
			"CityID": 63,
			"TownName": "AKKUŞ"
		},
		{
			"TownID": 754,
			"CityID": 63,
			"TownName": "ALTINORDU"
		},
		{
			"TownID": 755,
			"CityID": 63,
			"TownName": "AYBASTI"
		},
		{
			"TownID": 756,
			"CityID": 63,
			"TownName": "ÇAMAŞ"
		},
		{
			"TownID": 757,
			"CityID": 63,
			"TownName": "ÇATALPINAR"
		},
		{
			"TownID": 758,
			"CityID": 63,
			"TownName": "ÇAYBAŞI"
		},
		{
			"TownID": 759,
			"CityID": 63,
			"TownName": "FATSA"
		},
		{
			"TownID": 760,
			"CityID": 63,
			"TownName": "GÖLKÖY"
		},
		{
			"TownID": 761,
			"CityID": 63,
			"TownName": "GÜLYALI"
		},
		{
			"TownID": 762,
			"CityID": 63,
			"TownName": "GÜRGENTEPE"
		},
		{
			"TownID": 763,
			"CityID": 63,
			"TownName": "İKİZCE"
		},
		{
			"TownID": 764,
			"CityID": 63,
			"TownName": "KABADÜZ"
		},
		{
			"TownID": 765,
			"CityID": 63,
			"TownName": "KABATAŞ"
		},
		{
			"TownID": 766,
			"CityID": 63,
			"TownName": "KORGAN"
		},
		{
			"TownID": 767,
			"CityID": 63,
			"TownName": "KUMRU"
		},
		{
			"TownID": 768,
			"CityID": 63,
			"TownName": "MESUDİYE"
		},
		{
			"TownID": 769,
			"CityID": 63,
			"TownName": "PERŞEMBE"
		},
		{
			"TownID": 770,
			"CityID": 63,
			"TownName": "ULUBEY"
		},
		{
			"TownID": 771,
			"CityID": 63,
			"TownName": "ÜNYE"
		},
		{
			"TownID": 772,
			"CityID": 64,
			"TownName": "BAHÇE"
		},
		{
			"TownID": 773,
			"CityID": 64,
			"TownName": "DÜZİÇİ"
		},
		{
			"TownID": 774,
			"CityID": 64,
			"TownName": "HASANBEYLİ"
		},
		{
			"TownID": 775,
			"CityID": 64,
			"TownName": "KADİRLİ"
		},
		{
			"TownID": 776,
			"CityID": 64,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 777,
			"CityID": 64,
			"TownName": "SUMBAS"
		},
		{
			"TownID": 778,
			"CityID": 64,
			"TownName": "TOPRAKKALE"
		},
		{
			"TownID": 779,
			"CityID": 65,
			"TownName": "ARDEŞEN"
		},
		{
			"TownID": 780,
			"CityID": 65,
			"TownName": "ÇAMLIHEMŞİN"
		},
		{
			"TownID": 781,
			"CityID": 65,
			"TownName": "ÇAYELİ"
		},
		{
			"TownID": 782,
			"CityID": 65,
			"TownName": "DEREPAZARI"
		},
		{
			"TownID": 783,
			"CityID": 65,
			"TownName": "FINDIKLI"
		},
		{
			"TownID": 784,
			"CityID": 65,
			"TownName": "GÜNEYSU"
		},
		{
			"TownID": 785,
			"CityID": 65,
			"TownName": "HEMŞİN"
		},
		{
			"TownID": 786,
			"CityID": 65,
			"TownName": "İKİZDERE"
		},
		{
			"TownID": 787,
			"CityID": 65,
			"TownName": "İYİDERE"
		},
		{
			"TownID": 788,
			"CityID": 65,
			"TownName": "KALKANDERE"
		},
		{
			"TownID": 789,
			"CityID": 65,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 790,
			"CityID": 65,
			"TownName": "PAZAR"
		},
		{
			"TownID": 791,
			"CityID": 66,
			"TownName": "ADAPAZARI"
		},
		{
			"TownID": 792,
			"CityID": 66,
			"TownName": "AKYAZI"
		},
		{
			"TownID": 793,
			"CityID": 66,
			"TownName": "ARİFİYE"
		},
		{
			"TownID": 794,
			"CityID": 66,
			"TownName": "ERENLER"
		},
		{
			"TownID": 795,
			"CityID": 66,
			"TownName": "FERİZLİ"
		},
		{
			"TownID": 796,
			"CityID": 66,
			"TownName": "GEYVE"
		},
		{
			"TownID": 797,
			"CityID": 66,
			"TownName": "HENDEK"
		},
		{
			"TownID": 798,
			"CityID": 66,
			"TownName": "KARAPÜRÇEK"
		},
		{
			"TownID": 799,
			"CityID": 66,
			"TownName": "KARASU"
		},
		{
			"TownID": 800,
			"CityID": 66,
			"TownName": "KAYNARCA"
		},
		{
			"TownID": 801,
			"CityID": 66,
			"TownName": "KOCAALİ"
		},
		{
			"TownID": 802,
			"CityID": 66,
			"TownName": "PAMUKOVA"
		},
		{
			"TownID": 803,
			"CityID": 66,
			"TownName": "SAPANCA"
		},
		{
			"TownID": 804,
			"CityID": 66,
			"TownName": "SERDİVAN"
		},
		{
			"TownID": 805,
			"CityID": 66,
			"TownName": "SÖĞÜTLÜ"
		},
		{
			"TownID": 806,
			"CityID": 66,
			"TownName": "TARAKLI"
		},
		{
			"TownID": 807,
			"CityID": 67,
			"TownName": "19 MAYIS"
		},
		{
			"TownID": 808,
			"CityID": 67,
			"TownName": "ALAÇAM"
		},
		{
			"TownID": 809,
			"CityID": 67,
			"TownName": "ASARCIK"
		},
		{
			"TownID": 810,
			"CityID": 67,
			"TownName": "ATAKUM"
		},
		{
			"TownID": 811,
			"CityID": 67,
			"TownName": "AYVACIK"
		},
		{
			"TownID": 812,
			"CityID": 67,
			"TownName": "BAFRA"
		},
		{
			"TownID": 813,
			"CityID": 67,
			"TownName": "CANİK"
		},
		{
			"TownID": 814,
			"CityID": 67,
			"TownName": "ÇARŞAMBA"
		},
		{
			"TownID": 815,
			"CityID": 67,
			"TownName": "HAVZA"
		},
		{
			"TownID": 816,
			"CityID": 67,
			"TownName": "İLKADIM"
		},
		{
			"TownID": 817,
			"CityID": 67,
			"TownName": "KAVAK"
		},
		{
			"TownID": 818,
			"CityID": 67,
			"TownName": "LADİK"
		},
		{
			"TownID": 819,
			"CityID": 67,
			"TownName": "SALIPAZARI"
		},
		{
			"TownID": 820,
			"CityID": 67,
			"TownName": "TEKKEKÖY"
		},
		{
			"TownID": 821,
			"CityID": 67,
			"TownName": "TERME"
		},
		{
			"TownID": 822,
			"CityID": 67,
			"TownName": "VEZİRKÖPRÜ"
		},
		{
			"TownID": 823,
			"CityID": 67,
			"TownName": "YAKAKENT"
		},
		{
			"TownID": 824,
			"CityID": 68,
			"TownName": "BAYKAN"
		},
		{
			"TownID": 825,
			"CityID": 68,
			"TownName": "ERUH"
		},
		{
			"TownID": 826,
			"CityID": 68,
			"TownName": "KURTALAN"
		},
		{
			"TownID": 827,
			"CityID": 68,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 828,
			"CityID": 68,
			"TownName": "PERVARİ"
		},
		{
			"TownID": 829,
			"CityID": 68,
			"TownName": "ŞİRVAN"
		},
		{
			"TownID": 830,
			"CityID": 68,
			"TownName": "TİLLO"
		},
		{
			"TownID": 831,
			"CityID": 69,
			"TownName": "AYANCIK"
		},
		{
			"TownID": 832,
			"CityID": 69,
			"TownName": "BOYABAT"
		},
		{
			"TownID": 833,
			"CityID": 69,
			"TownName": "DİKMEN"
		},
		{
			"TownID": 834,
			"CityID": 69,
			"TownName": "DURAĞAN"
		},
		{
			"TownID": 835,
			"CityID": 69,
			"TownName": "ERFELEK"
		},
		{
			"TownID": 836,
			"CityID": 69,
			"TownName": "GERZE"
		},
		{
			"TownID": 837,
			"CityID": 69,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 838,
			"CityID": 69,
			"TownName": "SARAYDÜZÜ"
		},
		{
			"TownID": 839,
			"CityID": 69,
			"TownName": "TÜRKELİ"
		},
		{
			"TownID": 840,
			"CityID": 70,
			"TownName": "AKINCILAR"
		},
		{
			"TownID": 841,
			"CityID": 70,
			"TownName": "ALTINYAYLA"
		},
		{
			"TownID": 842,
			"CityID": 70,
			"TownName": "DİVRİĞİ"
		},
		{
			"TownID": 843,
			"CityID": 70,
			"TownName": "DOĞANŞAR"
		},
		{
			"TownID": 844,
			"CityID": 70,
			"TownName": "GEMEREK"
		},
		{
			"TownID": 845,
			"CityID": 70,
			"TownName": "GÖLOVA"
		},
		{
			"TownID": 846,
			"CityID": 70,
			"TownName": "GÜRÜN"
		},
		{
			"TownID": 847,
			"CityID": 70,
			"TownName": "HAFİK"
		},
		{
			"TownID": 848,
			"CityID": 70,
			"TownName": "İMRANLI"
		},
		{
			"TownID": 849,
			"CityID": 70,
			"TownName": "KANGAL"
		},
		{
			"TownID": 850,
			"CityID": 70,
			"TownName": "KOYULHİSAR"
		},
		{
			"TownID": 851,
			"CityID": 70,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 852,
			"CityID": 70,
			"TownName": "SUŞEHRİ"
		},
		{
			"TownID": 853,
			"CityID": 70,
			"TownName": "ŞARKIŞLA"
		},
		{
			"TownID": 854,
			"CityID": 70,
			"TownName": "ULAŞ"
		},
		{
			"TownID": 855,
			"CityID": 70,
			"TownName": "YILDIZELİ"
		},
		{
			"TownID": 856,
			"CityID": 70,
			"TownName": "ZARA"
		},
		{
			"TownID": 857,
			"CityID": 71,
			"TownName": "AKÇAKALE"
		},
		{
			"TownID": 858,
			"CityID": 71,
			"TownName": "BİRECİK"
		},
		{
			"TownID": 859,
			"CityID": 71,
			"TownName": "BOZOVA"
		},
		{
			"TownID": 860,
			"CityID": 71,
			"TownName": "CEYLANPINAR"
		},
		{
			"TownID": 861,
			"CityID": 71,
			"TownName": "EYYÜBİYE"
		},
		{
			"TownID": 862,
			"CityID": 71,
			"TownName": "HALFETİ"
		},
		{
			"TownID": 863,
			"CityID": 71,
			"TownName": "HALİLİYE"
		},
		{
			"TownID": 864,
			"CityID": 71,
			"TownName": "HARRAN"
		},
		{
			"TownID": 865,
			"CityID": 71,
			"TownName": "HİLVAN"
		},
		{
			"TownID": 866,
			"CityID": 71,
			"TownName": "KARAKÖPRÜ"
		},
		{
			"TownID": 867,
			"CityID": 71,
			"TownName": "SİVEREK"
		},
		{
			"TownID": 868,
			"CityID": 71,
			"TownName": "SURUÇ"
		},
		{
			"TownID": 869,
			"CityID": 71,
			"TownName": "VİRANŞEHİR"
		},
		{
			"TownID": 870,
			"CityID": 72,
			"TownName": "BEYTÜŞŞEBAP"
		},
		{
			"TownID": 871,
			"CityID": 72,
			"TownName": "CİZRE"
		},
		{
			"TownID": 872,
			"CityID": 72,
			"TownName": "GÜÇLÜKONAK"
		},
		{
			"TownID": 873,
			"CityID": 72,
			"TownName": "İDİL"
		},
		{
			"TownID": 874,
			"CityID": 72,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 875,
			"CityID": 72,
			"TownName": "SİLOPİ"
		},
		{
			"TownID": 876,
			"CityID": 72,
			"TownName": "ULUDERE"
		},
		{
			"TownID": 877,
			"CityID": 73,
			"TownName": "ÇERKEZKÖY"
		},
		{
			"TownID": 878,
			"CityID": 73,
			"TownName": "ÇORLU"
		},
		{
			"TownID": 879,
			"CityID": 73,
			"TownName": "ERGENE"
		},
		{
			"TownID": 880,
			"CityID": 73,
			"TownName": "HAYRABOLU"
		},
		{
			"TownID": 881,
			"CityID": 73,
			"TownName": "KAPAKLI"
		},
		{
			"TownID": 882,
			"CityID": 73,
			"TownName": "MALKARA"
		},
		{
			"TownID": 883,
			"CityID": 73,
			"TownName": "MARMARAEREĞLİSİ"
		},
		{
			"TownID": 884,
			"CityID": 73,
			"TownName": "MURATLI"
		},
		{
			"TownID": 885,
			"CityID": 73,
			"TownName": "SARAY"
		},
		{
			"TownID": 886,
			"CityID": 73,
			"TownName": "SÜLEYMANPAŞA"
		},
		{
			"TownID": 887,
			"CityID": 73,
			"TownName": "ŞARKÖY"
		},
		{
			"TownID": 888,
			"CityID": 74,
			"TownName": "ALMUS"
		},
		{
			"TownID": 889,
			"CityID": 74,
			"TownName": "ARTOVA"
		},
		{
			"TownID": 890,
			"CityID": 74,
			"TownName": "BAŞÇİFTLİK"
		},
		{
			"TownID": 891,
			"CityID": 74,
			"TownName": "ERBAA"
		},
		{
			"TownID": 892,
			"CityID": 74,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 893,
			"CityID": 74,
			"TownName": "NİKSAR"
		},
		{
			"TownID": 894,
			"CityID": 74,
			"TownName": "PAZAR"
		},
		{
			"TownID": 895,
			"CityID": 74,
			"TownName": "REŞADİYE"
		},
		{
			"TownID": 896,
			"CityID": 74,
			"TownName": "SULUSARAY"
		},
		{
			"TownID": 897,
			"CityID": 74,
			"TownName": "TURHAL"
		},
		{
			"TownID": 898,
			"CityID": 74,
			"TownName": "YEŞİLYURT"
		},
		{
			"TownID": 899,
			"CityID": 74,
			"TownName": "ZİLE"
		},
		{
			"TownID": 900,
			"CityID": 75,
			"TownName": "AKÇAABAT"
		},
		{
			"TownID": 901,
			"CityID": 75,
			"TownName": "ARAKLI"
		},
		{
			"TownID": 902,
			"CityID": 75,
			"TownName": "ARSİN"
		},
		{
			"TownID": 903,
			"CityID": 75,
			"TownName": "BEŞİKDÜZÜ"
		},
		{
			"TownID": 904,
			"CityID": 75,
			"TownName": "ÇARŞIBAŞI"
		},
		{
			"TownID": 905,
			"CityID": 75,
			"TownName": "ÇAYKARA"
		},
		{
			"TownID": 906,
			"CityID": 75,
			"TownName": "DERNEKPAZARI"
		},
		{
			"TownID": 907,
			"CityID": 75,
			"TownName": "DÜZKÖY"
		},
		{
			"TownID": 908,
			"CityID": 75,
			"TownName": "HAYRAT"
		},
		{
			"TownID": 909,
			"CityID": 75,
			"TownName": "KÖPRÜBAŞI"
		},
		{
			"TownID": 910,
			"CityID": 75,
			"TownName": "MAÇKA"
		},
		{
			"TownID": 911,
			"CityID": 75,
			"TownName": "OF"
		},
		{
			"TownID": 912,
			"CityID": 75,
			"TownName": "ORTAHİSAR"
		},
		{
			"TownID": 913,
			"CityID": 75,
			"TownName": "SÜRMENE"
		},
		{
			"TownID": 914,
			"CityID": 75,
			"TownName": "ŞALPAZARI"
		},
		{
			"TownID": 915,
			"CityID": 75,
			"TownName": "TONYA"
		},
		{
			"TownID": 916,
			"CityID": 75,
			"TownName": "VAKFIKEBİR"
		},
		{
			"TownID": 917,
			"CityID": 75,
			"TownName": "YOMRA"
		},
		{
			"TownID": 918,
			"CityID": 76,
			"TownName": "ÇEMİŞGEZEK"
		},
		{
			"TownID": 919,
			"CityID": 76,
			"TownName": "HOZAT"
		},
		{
			"TownID": 920,
			"CityID": 76,
			"TownName": "MAZGİRT"
		},
		{
			"TownID": 921,
			"CityID": 76,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 922,
			"CityID": 76,
			"TownName": "NAZIMİYE"
		},
		{
			"TownID": 923,
			"CityID": 76,
			"TownName": "OVACIK"
		},
		{
			"TownID": 924,
			"CityID": 76,
			"TownName": "PERTEK"
		},
		{
			"TownID": 925,
			"CityID": 76,
			"TownName": "PÜLÜMÜR"
		},
		{
			"TownID": 926,
			"CityID": 77,
			"TownName": "BANAZ"
		},
		{
			"TownID": 927,
			"CityID": 77,
			"TownName": "EŞME"
		},
		{
			"TownID": 928,
			"CityID": 77,
			"TownName": "KARAHALLI"
		},
		{
			"TownID": 929,
			"CityID": 77,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 930,
			"CityID": 77,
			"TownName": "SİVASLI"
		},
		{
			"TownID": 931,
			"CityID": 77,
			"TownName": "ULUBEY"
		},
		{
			"TownID": 932,
			"CityID": 78,
			"TownName": "BAHÇESARAY"
		},
		{
			"TownID": 933,
			"CityID": 78,
			"TownName": "BAŞKALE"
		},
		{
			"TownID": 934,
			"CityID": 78,
			"TownName": "ÇALDIRAN"
		},
		{
			"TownID": 935,
			"CityID": 78,
			"TownName": "ÇATAK"
		},
		{
			"TownID": 936,
			"CityID": 78,
			"TownName": "EDREMİT"
		},
		{
			"TownID": 937,
			"CityID": 78,
			"TownName": "ERCİŞ"
		},
		{
			"TownID": 938,
			"CityID": 78,
			"TownName": "GEVAŞ"
		},
		{
			"TownID": 939,
			"CityID": 78,
			"TownName": "GÜRPINAR"
		},
		{
			"TownID": 940,
			"CityID": 78,
			"TownName": "İPEKYOLU"
		},
		{
			"TownID": 941,
			"CityID": 78,
			"TownName": "MURADİYE"
		},
		{
			"TownID": 942,
			"CityID": 78,
			"TownName": "ÖZALP"
		},
		{
			"TownID": 943,
			"CityID": 78,
			"TownName": "SARAY"
		},
		{
			"TownID": 944,
			"CityID": 78,
			"TownName": "TUŞBA"
		},
		{
			"TownID": 945,
			"CityID": 79,
			"TownName": "ALTINOVA"
		},
		{
			"TownID": 946,
			"CityID": 79,
			"TownName": "ARMUTLU"
		},
		{
			"TownID": 947,
			"CityID": 79,
			"TownName": "ÇINARCIK"
		},
		{
			"TownID": 948,
			"CityID": 79,
			"TownName": "ÇİFTLİKKÖY"
		},
		{
			"TownID": 949,
			"CityID": 79,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 950,
			"CityID": 79,
			"TownName": "TERMAL"
		},
		{
			"TownID": 951,
			"CityID": 80,
			"TownName": "AKDAĞMADENİ"
		},
		{
			"TownID": 952,
			"CityID": 80,
			"TownName": "AYDINCIK"
		},
		{
			"TownID": 953,
			"CityID": 80,
			"TownName": "BOĞAZLIYAN"
		},
		{
			"TownID": 954,
			"CityID": 80,
			"TownName": "ÇANDIR"
		},
		{
			"TownID": 955,
			"CityID": 80,
			"TownName": "ÇAYIRALAN"
		},
		{
			"TownID": 956,
			"CityID": 80,
			"TownName": "ÇEKEREK"
		},
		{
			"TownID": 957,
			"CityID": 80,
			"TownName": "KADIŞEHRİ"
		},
		{
			"TownID": 958,
			"CityID": 80,
			"TownName": "MERKEZ"
		},
		{
			"TownID": 959,
			"CityID": 80,
			"TownName": "SARAYKENT"
		},
		{
			"TownID": 960,
			"CityID": 80,
			"TownName": "SARIKAYA"
		},
		{
			"TownID": 961,
			"CityID": 80,
			"TownName": "SORGUN"
		},
		{
			"TownID": 962,
			"CityID": 80,
			"TownName": "ŞEFAATLİ"
		},
		{
			"TownID": 963,
			"CityID": 80,
			"TownName": "YENİFAKILI"
		},
		{
			"TownID": 964,
			"CityID": 80,
			"TownName": "YERKÖY"
		},
		{
			"TownID": 965,
			"CityID": 81,
			"TownName": "ALAPLI"
		},
		{
			"TownID": 966,
			"CityID": 81,
			"TownName": "ÇAYCUMA"
		},
		{
			"TownID": 967,
			"CityID": 81,
			"TownName": "DEVREK"
		},
		{
			"TownID": 968,
			"CityID": 81,
			"TownName": "EREĞLİ"
		},
		{
			"TownID": 969,
			"CityID": 81,
			"TownName": "GÖKÇEBEY"
		},
		{
			"TownID": 970,
			"CityID": 81,
			"TownName": "KİLİMLİ"
		},
		{
			"TownID": 971,
			"CityID": 81,
			"TownName": "KOZLU"
		},
		{
			"TownID": 972,
			"CityID": 81,
			"TownName": "MERKEZ"
		}
	]
}';
  }
}
