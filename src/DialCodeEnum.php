<?php

declare(strict_types=1);

/**
 * @author Jan Galek
 */
enum DialCodeEnum: string implements Enum
{
    case Afghanistan = 'AF0093';
    case Albania = 'AL00355';
    case Algeria = 'DZ00213';
    case AmericanSamoa = 'AS00684';
    case USVirginIslands = 'VI00340';
    case Andorra = 'AD00376';
    case Angola = 'AO00244';
    case Anguilla = 'AI00264';
    case Antarctica = 'AQ00672';
    case AntiguaAndBarbuda = 'AG00268';
    case Argentina = 'AR0054';
    case Armenia = 'AM00374';
    case Aruba = 'AW00297';
    case Australia = 'AU0061';
    case Azerbaijan = 'AZ00994';
    case Bahamas = 'BS00242';
    case Bahrain = 'BH00973';
    case Bangladesh = 'BD00880';
    case Barbados = 'BB00246';
    case Belgium = 'BE0032';
    case Belize = 'BZ00501';
    case Belarus = 'BY00375';
    case Benin = 'BJ00229';
    case Bermuda = 'BM00441';
    case Bhutan = 'BT00975';
    case Bolivia = 'BO00591';
    case BosniaAndHerzegovina = 'BA00387';
    case Botswana = 'BW00267';
    case Brazil = 'BR0055';
    case BritishIndianOceanTerritory = 'IO00246';
    case BritishVirginIslands = 'VG00284';
    case Brunei = 'BN00673';
    case Bulgaria = 'BG00359';
    case BurkinaFaso = 'BF00226';
    case Burundi = 'BI00257';
    case Chile = 'CL0056';
    case Croatia = 'HR00385';
    case CookIslands = 'CK00682';
    case Curacao = 'CW00599';
    case Chad = 'TD00235';
    case Montenegro = 'ME00382';
    case CzechRepublic = 'CZ00420';
    case China = 'CN0086';
    case Denmark = 'DK0045';
    case DemocraticRepublicOfTheCongo = 'CD00243';
    case Dominica = 'DM00767';
    case DominicanRepublic = 'DO00809; DO00829; DO00849';
    case Djibouti = 'DJ00253';
    case Egypt = 'EG0020';
    case Ecuador = 'EC00593';
    case ElSalvador = 'SV00503';
    case Eritrea = 'ER00291';
    case Estonia = 'EE00372';
    case Ethiopia = 'ET00251';
    case FaroeIslands = 'FO00298';
    case FalklandIslands = 'FK00500';
    case Fiji = 'FJ00679';
    case Philippines = 'PH0063';
    case Finland = 'FI00358';
    case France = 'FR0033';
    case FrenchPolynesia = 'PF00689';
    case Gabon = 'GA00241';
    case Gambia = 'GM00220';
    case Ghana = 'GH00233';
    case Gibraltar = 'GI00350';
    case Grenada = 'GD00473';
    case Greenland = 'GL00299';
    case Georgia = 'GE00995';
    case Guam = 'GU00671';
    case Guatemala = 'GT00502';
    case Guernsey = 'GG0044';
    case Guinea = 'GN00224';
    case GuineaBissau = 'GW00245';
    case Guyana = 'GY00592';
    case Haiti = 'HT00509';
    case Honduras = 'HN00504';
    case HongKong = 'HK00852';
    case India = 'IN0091';
    case Indonesia = 'ID0062';
    case Iraq = 'IQ00964';
    case Iran = 'IR0098';
    case Ireland = 'IE00353';
    case Iceland = 'IS00354';
    case Italy = 'IT0039';
    case Israel = 'IL00972';
    case Jamaica = 'JM00876';
    case Japan = 'JP0081';
    case Yemen = 'YE00967';
    case Jersey = 'JE0044';
    case SouthAfrica = 'ZA0027';
    case SouthKorea = 'KR0082';
    case SouthSudan = 'SS00211';
    case Jordan = 'JO00962';
    case CaymanIslands = 'KY00345';
    case Cambodia = 'KH00855';
    case Cameroon = 'CM00237';
    case Canada = 'CA001';
    case CapeVerde = 'CV00238';
    case Qatar = 'QA00974';
    case Kazakhstan = 'KZ007';
    case Kenya = 'KE00254';
    case Kiribati = 'KI00686';
    case CocosIslands = 'CC0061';
    case Colombia = 'CO0057';
    case Comoros = 'KM00269';
    case RepublicOfTheCongo = 'CG00242';
    case Kosovo = 'XK00383';
    case CostaRica = 'CR00506';
    case Cuba = 'CU0053';
    case Kuwait = 'KW00965';
    case Cyprus = 'CY00357';
    case Kyrgyzstan = 'KG00996';
    case Laos = 'LA00856';
    case Lesotho = 'LS00266';
    case Lebanon = 'LB00961';
    case Liberia = 'LR00231';
    case Libya = 'LY00218';
    case Liechtenstein = 'LI00423';
    case Lithuania = 'LT00370';
    case Latvia = 'LV00371';
    case Luxembourg = 'LU00352';
    case Macau = 'MO00853';
    case Madagascar = 'MG00261';
    case Hungary = 'HU0036';
    case Macedonia = 'MK00389';
    case Malaysia = 'MY0060';
    case Malawi = 'MW00265';
    case Maldives = 'MV00960';
    case Mali = 'ML00223';
    case Malta = 'MT00356';
    case IsleOfMan = 'IM0044';
    case Morocco = 'MA00212';
    case MarshallIslands = 'MH00692';
    case Mauritania = 'MR00222';
    case Mauritius = 'MU00230';
    case Mayotte = 'YT00262';
    case Mexico = 'MX0052';
    case Micronesia = 'FM00691';
    case Moldova = 'MD00373';
    case Monaco = 'MC00377';
    case Mongolia = 'MN00976';
    case Montserrat = 'MS00664';
    case Mozambique = 'MZ00258';
    case Myanmar = 'MM0095';
    case Namibia = 'NA00264';
    case Nauru = 'NR00674';
    case Germany = 'DE0049';
    case Nepal = 'NP00977';
    case Niger = 'NE00227';
    case Nigeria = 'NG00234';
    case Nicaragua = 'NI00505';
    case Niue = 'NU00683';
    case NetherlandsAntilles = 'AN00599';
    case Netherlands = 'NL0031';
    case Norway = 'NO0047';
    case NewCaledonia = 'NC00687';
    case NewZealand = 'NZ0064';
    case Oman = 'OM00968';
    case Pakistan = 'PK0092';
    case Palau = 'PW00680';
    case Palestine = 'PS00970';
    case Panama = 'PA00507';
    case PapuaNewGuinea = 'PG00675';
    case Paraguay = 'PY00595';
    case Peru = 'PE0051';
    case Pitcairn = 'PN0064';
    case IvoryCoast = 'CI00225';
    case Poland = 'PL0048';
    case PuertoRico = 'PR00787; PR00939';
    case Portugal = 'PT00351';
    case Austria = 'AT0043';
    case Reunion = 'RE00262';
    case EquatorialGuinea = 'GQ00240';
    case Romania = 'RO0040';
    case Russia = 'RU007';
    case Rwanda = 'RW00250';
    case Greece = 'GR0030';
    case SaintPierreAndMiquelon = 'PM00508';
    case Samoa = 'WS00685';
    case SanMarino = 'SM00378';
    case SaudiArabia = 'SA00966';
    case Senegal = 'SN00221';
    case NorthKorea = 'KP00850';
    case NorthernMarianaIslands = 'MP00670';
    case Seychelles = 'SC00248';
    case SierraLeone = 'SL00232';
    case Singapore = 'SG0065';
    case SintMaarten = 'SX005721';
    case Slovakia = 'SK00421';
    case Slovenia = 'SI00386';
    case SolomonIslands = 'SB00677';
    case Somalia = 'SO00252';
    case UnitedArabEmirates = 'AE00971';
    case UnitedKingdom = 'GB0044';
    case UnitedStates = 'US001';
    case Serbia = 'RS00381';
    case SriLanka = 'LK0094';
    case CentralAfricanRepublic = 'CF00236';
    case Sudan = 'SD00249';
    case Suriname = 'SR00597';
    case SaintHelena = 'SH00290';
    case SaintLucia = 'LC001758';
    case SaintKittsAndNevis = 'KN001869';
    case SaintVincentAndTheGrenadines = 'VC001784';
    case Eswatini = 'SZ00268';
    case Syria = 'SY00963';
    case Tanzania = 'TZ00255';
    case Thailand = 'TH0066';
    case Taiwan = 'TW00886';
    case EastTimor = 'TL00670';
    case Togo = 'TG00228';
    case Tokelau = 'TK00690';
    case Tonga = 'TO00676';
    case TrinidadAndTobago = 'TT001868';
    case Tunisia = 'TN00216';
    case Turkey = 'TR0090';
    case Turkmenistan = 'TM00993';
    case TurksAndCaicosIslands = 'TC001649';
    case Tuvalu = 'TV00688';
    case Uganda = 'UG00256';
    case Ukraine = 'UA00380';
    case Uruguay = 'UY00598';
    case Uzbekistan = 'UZ00998';
    case Vanuatu = 'VU00678';
    case VaticanCity = 'VA00379';
    case Venezuela = 'VE0058';
    case Vietnam = 'VN0084';
    case WallisAndFutuna = 'WF00681';
    case Zambia = 'ZM00260';
    case Zimbabwe = 'ZW00263';


    public function getValue(): string
    {
        return substr($this->value, 2);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function list(): array
    {
        $cases = self::cases();
        $result = [];
        foreach ($cases as $item) { $result[$item->name] = $item->getValue(); }
        return $result;
    }

    public static function listPlus(): array
    {
        $cases = self::cases();
        $result = [];
        foreach ($cases as $item) { $result[] = '+' . ltrim($item->getValue(), '0'); }
        return $result;
    }

	/**
	 * @desc Replacing from method
	 * @param int|string $value
	 * @return static
	 */
	public static function create(int|string $value): static
	{
		static::validate($value);
		return self::from($value);
	}

	/**
	 * @desc Replacing tryFrom method
	 * @param int|string $value
	 * @return static|null
	 */
	public static function tryCreate(int|string $value): ?static
	{
		static::validate($value);
		return self::tryFrom($value);
	}

	public static function validate(int|string $value): void
	{
		return;
	}
}
