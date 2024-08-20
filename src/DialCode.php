<?php

declare(strict_types=1);

enum DialCode: string
{
	
	const LIST = [
		00420 => '+420'
	];

	public static function cases(): array
	{
		return [
			Country::Afghanistan->value => '0093',
			Country::Albania->value => '00355',
			Country::Algeria->value => '00213',
			Country::AmericanSamoa->value => '00684',
			Country::USVirginIslands->value => '00340',
			Country::Andorra->value => '00376',
			Country::Angola->value => '00244',
			Country::Anguilla->value => '00264',
			Country::Antarctica->value => '00672',
			Country::AntiguaAndBarbuda->value => '00268',
			Country::Argentina->value => '0054',
			Country::Armenia->value => '00374',
			Country::Aruba->value => '00297',
			Country::Australia->value => '0061',
			Country::Azerbaijan->value => '00994',
			Country::Bahamas->value => '00242',
			Country::Bahrain->value => '00973',
			Country::Bangladesh->value => '00880',
			Country::Barbados->value => '00246',
			Country::Belgium->value => '0032',
			Country::Belize->value => '00501',
			Country::Belarus->value => '00375',
			Country::Benin->value => '00229',
			Country::Bermuda->value => '00441',
			Country::Bhutan->value => '00975',
			Country::Bolivia->value => '00591',
			Country::BosniaAndHerzegovina->value => '00387',
			Country::Botswana->value => '00267',
			Country::Brazil->value => '0055',
			Country::BritishIndianOceanTerritory->value => '00246',
			Country::BritishVirginIslands->value => '00284',
			Country::Brunei->value => '00673',
			Country::Bulgaria->value => '00359',
			Country::BurkinaFaso->value => '00226',
			Country::Burundi->value => '00257',
			Country::Chile->value => '0056',
			Country::Croatia->value => '00385',
			Country::CookIslands->value => '00682',
			Country::Curacao->value => '00599',
			Country::Chad->value => '00235',
			Country::Montenegro->value => '00382',
			Country::CzechRepublic->value => '00420',
			Country::China->value => '0086',
			Country::Denmark->value => '0045',
			Country::DemocraticRepublicOfTheCongo->value => '00243',
			Country::Dominica->value => '00767',
			Country::DominicanRepublic->value => '00809, 00829, 00849',
			Country::Djibouti->value => '00253',
			Country::Egypt->value => '0020',
			Country::Ecuador->value => '00593',
			Country::ElSalvador->value => '00503',
			Country::Eritrea->value => '00291',
			Country::Estonia->value => '00372',
			Country::Ethiopia->value => '00251',
			Country::FaroeIslands->value => '00298',
			Country::FalklandIslands->value => '00500',
			Country::Fiji->value => '00679',
			Country::Philippines->value => '0063',
			Country::Finland->value => '00358',
			Country::France->value => '0033',
			Country::FrenchPolynesia->value => '00689',
			Country::Gabon->value => '00241',
			Country::Gambia->value => '00220',
			Country::Ghana->value => '00233',
			Country::Gibraltar->value => '00350',
			Country::Grenada->value => '00473',
			Country::Greenland->value => '00299',
			Country::Georgia->value => '00995',
			Country::Guam->value => '00671',
			Country::Guatemala->value => '00502',
			Country::Guernsey->value => '0044',
			Country::Guinea->value => '00224',
			Country::GuineaBissau->value => '00245',
			Country::Guyana->value => '00592',
			Country::Haiti->value => '00509',
			Country::Honduras->value => '00504',
			Country::HongKong->value => '00852',
			Country::India->value => '0091',
			Country::Indonesia->value => '0062',
			Country::Iraq->value => '00964',
			Country::Iran->value => '0098',
			Country::Ireland->value => '00353',
			Country::Iceland->value => '00354',
			Country::Italy->value => '0039',
			Country::Israel->value => '00972',
			Country::Jamaica->value => '00876',
			Country::Japan->value => '0081',
			Country::Yemen->value => '00967',
			Country::Jersey->value => '0044',
			Country::SouthAfrica->value => '0027',
			Country::SouthKorea->value => '0082',
			Country::SouthSudan->value => '00211',
			Country::Jordan->value => '00962',
			Country::CaymanIslands->value => '00345',
			Country::Cambodia->value => '00855',
			Country::Cameroon->value => '00237',
			Country::Canada->value => '001',
			Country::CapeVerde->value => '00238',
			Country::Qatar->value => '00974',
			Country::Kazakhstan->value => '007',
			Country::Kenya->value => '00254',
			Country::Kiribati->value => '00686',
			Country::CocosIslands->value => '0061',
			Country::Colombia->value => '0057',
			Country::Comoros->value => '00269',
			Country::RepublicOfTheCongo->value => '00242',
			Country::Kosovo->value => '00383',
			Country::CostaRica->value => '00506',
			Country::Cuba->value => '0053',
			Country::Kuwait->value => '00965',
			Country::Cyprus->value => '00357',
			Country::Kyrgyzstan->value => '00996',
			Country::Laos->value => '00856',
			Country::Lesotho->value => '00266',
			Country::Lebanon->value => '00961',
			Country::Liberia->value => '00231',
			Country::Libya->value => '00218',
			Country::Liechtenstein->value => '00423',
			Country::Lithuania->value => '00370',
			Country::Latvia->value => '00371',
			Country::Luxembourg->value => '00352',
			Country::Macau->value => '00853',
			Country::Madagascar->value => '00261',
			Country::Hungary->value => '0036',
			Country::Macedonia->value => '00389',
			Country::Malaysia->value => '0060',
			Country::Malawi->value => '00265',
			Country::Maldives->value => '00960',
			Country::Mali->value => '00223',
			Country::Malta->value => '00356',
			Country::IsleOfMan->value => '0044',
			Country::Morocco->value => '00212',
			Country::MarshallIslands->value => '00692',
			Country::Mauritania->value => '00222',
			Country::Mauritius->value => '00230',
			Country::Mayotte->value => '00262',
			Country::Mexico->value => '0052',
			Country::Micronesia->value => '00691',
			Country::Moldova->value => '00373',
			Country::Monaco->value => '00377',
			Country::Mongolia->value => '00976',
			Country::Montserrat->value => '00664',
			Country::Mozambique->value => '00258',
			Country::Myanmar->value => '0095',
			Country::Namibia->value => '00264',
			Country::Nauru->value => '00674',
			Country::Germany->value => '0049',
			Country::Nepal->value => '00977',
			Country::Niger->value => '00227',
			Country::Nigeria->value => '00234',
			Country::Nicaragua->value => '00505',
			Country::Niue->value => '00683',
			Country::NetherlandsAntilles->value => '00599',
			Country::Netherlands->value => '0031',
			Country::Norway->value => '0047',
			Country::NewCaledonia->value => '00687',
			Country::NewZealand->value => '0064',
			Country::Oman->value => '00968',
			Country::Pakistan->value => '0092',
			Country::Palau->value => '00680',
			Country::Palestine->value => '00970',
			Country::Panama->value => '00507',
			Country::PapuaNewGuinea->value => '00675',
			Country::Paraguay->value => '00595',
			Country::Peru->value => '0051',
			Country::Pitcairn->value => '0064',
			Country::IvoryCoast->value => '00225',
			Country::Poland->value => '0048',
			Country::PuertoRico->value => '00787, 00939',
			Country::Portugal->value => '00351',
			Country::Austria->value => '0043',
			Country::Reunion->value => '00262',
			Country::EquatorialGuinea->value => '00240',
			Country::Romania->value => '0040',
			Country::Russia->value => '007',
			Country::Rwanda->value => '00250',
			Country::Greece->value => '0030',
			Country::SaintPierreAndMiquelon->value => '00508',
			Country::Samoa->value => '00685',
			Country::SanMarino->value => '00378',
			Country::SaudiArabia->value => '00966',
			Country::Senegal->value => '00221',
			Country::NorthKorea->value => '00850',
			Country::NorthernMarianaIslands->value => '00670',
			Country::Seychelles->value => '00248',
			Country::SierraLeone->value => '00232',
			Country::Singapore->value => '0065',
			Country::SintMaarten->value => '005721',
			Country::Slovakia->value => '00421',
			Country::Slovenia->value => '00386',
			Country::SolomonIslands->value => '00677',
			Country::Somalia->value => '00252',
			Country::UnitedArabEmirates->value => '00971',
			Country::UnitedKingdom->value => '0044',
			Country::UnitedStates->value => '001',
			Country::Serbia->value => '00381',
			Country::SriLanka->value => '0094',
			Country::CentralAfricanRepublic->value => '00236',
			Country::Sudan->value => '00249',
			Country::Suriname->value => '00597',
			Country::SaintHelena->value => '00290',
			Country::SaintLucia->value => '001758',
			Country::SaintBarthelemy->value => '00590',
			Country::SaintKittsAndNevis->value => '001869',
			Country::SaintMartin->value => '00590',
			Country::SaoTomeAndPrincipe->value => '00239',
			Country::SaintVincentAndTheGrenadines->value => '001784',
			Country::Swaziland->value => '00268',
			Country::Syria->value => '00963',
			Country::Spain->value => '0034',
			Country::SvalbardAndJanMayen->value => '0047',
			Country::Sweden->value => '0046',
			Country::Switzerland->value => '0041',
			Country::Tajikistan->value => '00992',
			Country::Tanzania->value => '00255',
			Country::Taiwan->value => '00886',
			Country::Thailand->value => '0066',
			Country::Togo->value => '00228',
			Country::Tokelau->value => '00690',
			Country::Tonga->value => '00676',
			Country::TrinidadAndTobago->value => '001868',
			Country::Tunisia->value => '00216',
			Country::Turkey->value => '0090',
			Country::Turkmenistan->value => '00993',
			Country::TurksAndCaicosIslands->value => '001649',
			Country::Tuvalu->value => '00688',
			Country::Uganda->value => '00256',
			Country::Ukraine->value => '00380',
			Country::Uruguay->value => '00598',
			Country::Uzbekistan->value => '00998',
			Country::ChristmasIsland->value => '0061',
			Country::Vanuatu->value => '00278',
			Country::Vatican->value => '00379',
			Country::Venezuela->value => '0058',
			Country::Vietnam->value => '0084',
			Country::EastTimor->value => '00670',
			Country::WallisAndFutuna->value => '00681',
			Country::Zambia->value => '00260',
			Country::WesternSahara->value => '00212',
			Country::Zimbabwe->value => '00263',
		];
	}

	public function getInternationalPrefix00(): string
	{
		return match ($this) {
			Country::Afghanistan => '0093',
			Country::Albania => '00355',
			Country::Algeria => '00213',
			Country::AmericanSamoa => '00684',
			Country::USVirginIslands => '00340',
			Country::Andorra => '00376',
			Country::Angola => '00244',
			Country::Anguilla => '00264',
			Country::Antarctica => '00672',
			Country::AntiguaAndBarbuda => '00268',
			Country::Argentina => '0054',
			Country::Armenia => '00374',
			Country::Aruba => '00297',
			Country::Australia => '0061',
			Country::Azerbaijan => '00994',
			Country::Bahamas => '00242',
			Country::Bahrain => '00973',
			Country::Bangladesh => '00880',
			Country::Barbados => '00246',
			Country::Belgium => '0032',
			Country::Belize => '00501',
			Country::Belarus => '00375',
			Country::Benin => '00229',
			Country::Bermuda => '00441',
			Country::Bhutan => '00975',
			Country::Bolivia => '00591',
			Country::BosniaAndHerzegovina => '00387',
			Country::Botswana => '00267',
			Country::Brazil => '0055',
			Country::BritishIndianOceanTerritory => '00246',
			Country::BritishVirginIslands => '00284',
			Country::Brunei => '00673',
			Country::Bulgaria => '00359',
			Country::BurkinaFaso => '00226',
			Country::Burundi => '00257',
			Country::Chile => '0056',
			Country::Croatia => '00385',
			Country::CookIslands => '00682',
			Country::Curacao => '00599',
			Country::Chad => '00235',
			Country::Montenegro => '00382',
			Country::CzechRepublic => '00420',
			Country::China => '0086',
			Country::Denmark => '0045',
			Country::DemocraticRepublicOfTheCongo => '00243',
			Country::Dominica => '00767',
			Country::DominicanRepublic => '00809, 00829, 00849',
			Country::Djibouti => '00253',
			Country::Egypt => '0020',
			Country::Ecuador => '00593',
			Country::ElSalvador => '00503',
			Country::Eritrea => '00291',
			Country::Estonia => '00372',
			Country::Ethiopia => '00251',
			Country::FaroeIslands => '00298',
			Country::FalklandIslands => '00500',
			Country::Fiji => '00679',
			Country::Philippines => '0063',
			Country::Finland => '00358',
			Country::France => '0033',
			Country::FrenchPolynesia => '00689',
			Country::Gabon => '00241',
			Country::Gambia => '00220',
			Country::Ghana => '00233',
			Country::Gibraltar => '00350',
			Country::Grenada => '00473',
			Country::Greenland => '00299',
			Country::Georgia => '00995',
			Country::Guam => '00671',
			Country::Guatemala => '00502',
			Country::Guernsey => '0044',
			Country::Guinea => '00224',
			Country::GuineaBissau => '00245',
			Country::Guyana => '00592',
			Country::Haiti => '00509',
			Country::Honduras => '00504',
			Country::HongKong => '00852',
			Country::India => '0091',
			Country::Indonesia => '0062',
			Country::Iraq => '00964',
			Country::Iran => '0098',
			Country::Ireland => '00353',
			Country::Iceland => '00354',
			Country::Italy => '0039',
			Country::Israel => '00972',
			Country::Jamaica => '00876',
			Country::Japan => '0081',
			Country::Yemen => '00967',
			Country::Jersey => '0044',
			Country::SouthAfrica => '0027',
			Country::SouthKorea => '0082',
			Country::SouthSudan => '00211',
			Country::Jordan => '00962',
			Country::CaymanIslands => '00345',
			Country::Cambodia => '00855',
			Country::Cameroon => '00237',
			Country::Canada => '001',
			Country::CapeVerde => '00238',
			Country::Qatar => '00974',
			Country::Kazakhstan => '007',
			Country::Kenya => '00254',
			Country::Kiribati => '00686',
			Country::CocosIslands => '0061',
			Country::Colombia => '0057',
			Country::Comoros => '00269',
			Country::RepublicOfTheCongo => '00242',
			Country::Kosovo => '00383',
			Country::CostaRica => '00506',
			Country::Cuba => '0053',
			Country::Kuwait => '00965',
			Country::Cyprus => '00357',
			Country::Kyrgyzstan => '00996',
			Country::Laos => '00856',
			Country::Lesotho => '00266',
			Country::Lebanon => '00961',
			Country::Liberia => '00231',
			Country::Libya => '00218',
			Country::Liechtenstein => '00423',
			Country::Lithuania => '00370',
			Country::Latvia => '00371',
			Country::Luxembourg => '00352',
			Country::Macau => '00853',
			Country::Madagascar => '00261',
			Country::Hungary => '0036',
			Country::Macedonia => '00389',
			Country::Malaysia => '0060',
			Country::Malawi => '00265',
			Country::Maldives => '00960',
			Country::Mali => '00223',
			Country::Malta => '00356',
			Country::IsleOfMan => '0044',
			Country::Morocco => '00212',
			Country::MarshallIslands => '00692',
			Country::Mauritania => '00222',
			Country::Mauritius => '00230',
			Country::Mayotte => '00262',
			Country::Mexico => '0052',
			Country::Micronesia => '00691',
			Country::Moldova => '00373',
			Country::Monaco => '00377',
			Country::Mongolia => '00976',
			Country::Montserrat => '00664',
			Country::Mozambique => '00258',
			Country::Myanmar => '0095',
			Country::Namibia => '00264',
			Country::Nauru => '00674',
			Country::Germany => '0049',
			Country::Nepal => '00977',
			Country::Niger => '00227',
			Country::Nigeria => '00234',
			Country::Nicaragua => '00505',
			Country::Niue => '00683',
			Country::NetherlandsAntilles => '00599',
			Country::Netherlands => '0031',
			Country::Norway => '0047',
			Country::NewCaledonia => '00687',
			Country::NewZealand => '0064',
			Country::Oman => '00968',
			Country::Pakistan => '0092',
			Country::Palau => '00680',
			Country::Palestine => '00970',
			Country::Panama => '00507',
			Country::PapuaNewGuinea => '00675',
			Country::Paraguay => '00595',
			Country::Peru => '0051',
			Country::Pitcairn => '0064',
			Country::IvoryCoast => '00225',
			Country::Poland => '0048',
			Country::PuertoRico => '00787, 00939',
			Country::Portugal => '00351',
			Country::Austria => '0043',
			Country::Reunion => '00262',
			Country::EquatorialGuinea => '00240',
			Country::Romania => '0040',
			Country::Russia => '007',
			Country::Rwanda => '00250',
			Country::Greece => '0030',
			Country::SaintPierreAndMiquelon => '00508',
			Country::Samoa => '00685',
			Country::SanMarino => '00378',
			Country::SaudiArabia => '00966',
			Country::Senegal => '00221',
			Country::NorthKorea => '00850',
			Country::NorthernMarianaIslands => '00670',
			Country::Seychelles => '00248',
			Country::SierraLeone => '00232',
			Country::Singapore => '0065',
			Country::SintMaarten => '005721',
			Country::Slovakia => '00421',
			Country::Slovenia => '00386',
			Country::SolomonIslands => '00677',
			Country::Somalia => '00252',
			Country::UnitedArabEmirates => '00971',
			Country::UnitedKingdom => '0044',
			Country::UnitedStates => '001',
			Country::Serbia => '00381',
			Country::SriLanka => '0094',
			Country::CentralAfricanRepublic => '00236',
			Country::Sudan => '00249',
			Country::Suriname => '00597',
			Country::SaintHelena => '00290',
			Country::SaintLucia => '001758',
			Country::SaintBarthelemy => '00590',
			Country::SaintKittsAndNevis => '001869',
			Country::SaintMartin => '00590',
			Country::SaoTomeAndPrincipe => '00239',
			Country::SaintVincentAndTheGrenadines => '001784',
			Country::Swaziland => '00268',
			Country::Syria => '00963',
			Country::Spain => '0034',
			Country::SvalbardAndJanMayen => '0047',
			Country::Sweden => '0046',
			Country::Switzerland => '0041',
			Country::Tajikistan => '00992',
			Country::Tanzania => '00255',
			Country::Taiwan => '00886',
			Country::Thailand => '0066',
			Country::Togo => '00228',
			Country::Tokelau => '00690',
			Country::Tonga => '00676',
			Country::TrinidadAndTobago => '001868',
			Country::Tunisia => '00216',
			Country::Turkey => '0090',
			Country::Turkmenistan => '00993',
			Country::TurksAndCaicosIslands => '001649',
			Country::Tuvalu => '00688',
			Country::Uganda => '00256',
			Country::Ukraine => '00380',
			Country::Uruguay => '00598',
			Country::Uzbekistan => '00998',
			Country::ChristmasIsland => '0061',
			Country::Vanuatu => '00278',
			Country::Vatican => '00379',
			Country::Venezuela => '0058',
			Country::Vietnam => '0084',
			Country::EastTimor => '00670',
			Country::WallisAndFutuna => '00681',
			Country::Zambia => '00260',
			Country::WesternSahara => '00212',
			Country::Zimbabwe => '00263',
		};
	}

}
