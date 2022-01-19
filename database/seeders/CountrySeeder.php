<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('name' => 'Afghanistan', 'code' => 'AFG'),
            array('name' => 'Albania', 'code' => 'ALB'),
            array('name' => 'Algeria', 'code' => 'DZA'),
            array('name' => 'American Samoa', 'code' => 'ASM'),
            array('name' => 'Andorra', 'code' => 'AND'),
            array('name' => 'Angola', 'code' => 'AGO'),
            array('name' => 'Anguilla', 'code' => 'AIA'),
            array('name' => 'Antarctica', 'code' => 'ATA'),
            array('name' => 'Antigua and Barbuda', 'code' => 'ATG'),
            array('name' => 'Argentina', 'code' => 'ARG'),
            array('name' => 'Armenia', 'code' => 'ARM'),
            array('name' => 'Aruba', 'code' => 'ABW'),
            array('name' => 'Australia', 'code' => 'AUS'),
            array('name' => 'Austria', 'code' => 'AUT'),
            array('name' => 'Azerbaijan', 'code' => 'AZE'),
            array('name' => 'Bahamas (the)', 'code' => 'BHS'),
            array('name' => 'Bahrain', 'code' => 'BHR'),
            array('name' => 'Bangladesh', 'code' => 'BGD'),
            array('name' => 'Barbados', 'code' => 'BRB'),
            array('name' => 'Belarus', 'code' => 'BLR'),
            array('name' => 'Belgium', 'code' => 'BEL'),
            array('name' => 'Belize', 'code' => 'BLZ'),
            array('name' => 'Benin', 'code' => 'BEN'),
            array('name' => 'Bermuda', 'code' => 'BMU'),
            array('name' => 'Bhutan', 'code' => 'BTN'),
            array('name' => 'Bolivia (Plurinational State of)', 'code' => 'BOL'),
            array('name' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BES'),
            array('name' => 'Bosnia and Herzegovina', 'code' => 'BIH'),
            array('name' => 'Botswana', 'code' => 'BWA'),
            array('name' => 'Bouvet Island', 'code' => 'BVT'),
            array('name' => 'Brazil', 'code' => 'BRA'),
            array('name' => 'British Indian Ocean Territory (the)', 'code' => 'IOT'),
            array('name' => 'Brunei Darussalam', 'code' => 'BRN'),
            array('name' => 'Bulgaria', 'code' => 'BGR'),
            array('name' => 'Burkina Faso', 'code' => 'BFA'),
            array('name' => 'Burundi', 'code' => 'BDI'),
            array('name' => 'Cabo Verde', 'code' => 'CPV'),
            array('name' => 'Cambodia', 'code' => 'KHM'),
            array('name' => 'Cameroon', 'code' => 'CMR'),
            array('name' => 'Canada', 'code' => 'CAN'),
            array('name' => 'Cayman Islands (the)', 'code' => 'CYM'),
            array('name' => 'Central African Republic (the)', 'code' => 'CAF'),
            array('name' => 'Chad', 'code' => 'TCD'),
            array('name' => 'Chile', 'code' => 'CHL'),
            array('name' => 'China', 'code' => 'CHN'),
            array('name' => 'Christmas Island', 'code' => 'CXR'),
            array('name' => 'Cocos (Keeling) Islands (the)', 'code' => 'CCK'),
            array('name' => 'Colombia', 'code' => 'COL'),
            array('name' => 'Comoros (the)', 'code' => 'COM'),
            array('name' => 'Congo (the Democratic Republic of the)', 'code' => 'COD'),
            array('name' => 'Congo (the)', 'code' => 'COG'),
            array('name' => 'Cook Islands (the)', 'code' => 'COK'),
            array('name' => 'Costa Rica', 'code' => 'CRI'),
            array('name' => 'Croatia', 'code' => 'HRV'),
            array('name' => 'Cuba', 'code' => 'CUB'),
            array('name' => 'Curaçao', 'code' => 'CUW'),
            array('name' => 'Cyprus', 'code' => 'CYP'),
            array('name' => 'Czechia', 'code' => 'CZE'),
            array('name' => 'Côte d\'Ivoire', 'code' => 'CIV'),
            array('name' => 'Denmark', 'code' => 'DNK'),
            array('name' => 'Djibouti', 'code' => 'DJI'),
            array('name' => 'Dominica', 'code' => 'DMA'),
            array('name' => 'Dominican Republic (the)', 'code' => 'DOM'),
            array('name' => 'Ecuador', 'code' => 'ECU'),
            array('name' => 'Egypt', 'code' => 'EGY'),
            array('name' => 'El Salvador', 'code' => 'SLV'),
            array('name' => 'Equatorial Guinea', 'code' => 'GNQ'),
            array('name' => 'Eritrea', 'code' => 'ERI'),
            array('name' => 'Estonia', 'code' => 'EST'),
            array('name' => 'Eswatini', 'code' => 'SWZ'),
            array('name' => 'Ethiopia', 'code' => 'ETH'),
            array('name' => 'Falkland Islands (the) [Malvinas]', 'code' => 'FLK'),
            array('name' => 'Faroe Islands (the)', 'code' => 'FRO'),
            array('name' => 'Fiji', 'code' => 'FJI'),
            array('name' => 'Finland', 'code' => 'FIN'),
            array('name' => 'France', 'code' => 'FRA'),
            array('name' => 'French Guiana', 'code' => 'GUF'),
            array('name' => 'French Polynesia', 'code' => 'PYF'),
            array('name' => 'French Southern Territories (the)', 'code' => 'ATF'),
            array('name' => 'Gabon', 'code' => 'GAB'),
            array('name' => 'Gambia (the)', 'code' => 'GMB'),
            array('name' => 'Georgia', 'code' => 'GEO'),
            array('name' => 'Germany', 'code' => 'DEU'),
            array('name' => 'Ghana', 'code' => 'GHA'),
            array('name' => 'Gibraltar', 'code' => 'GIB'),
            array('name' => 'Greece', 'code' => 'GRC'),
            array('name' => 'Greenland', 'code' => 'GRL'),
            array('name' => 'Grenada', 'code' => 'GRD'),
            array('name' => 'Guadeloupe', 'code' => 'GLP'),
            array('name' => 'Guam', 'code' => 'GUM'),
            array('name' => 'Guatemala', 'code' => 'GTM'),
            array('name' => 'Guernsey', 'code' => 'GGY'),
            array('name' => 'Guinea', 'code' => 'GIN'),
            array('name' => 'Guinea-Bissau', 'code' => 'GNB'),
            array('name' => 'Guyana', 'code' => 'GUY'),
            array('name' => 'Haiti', 'code' => 'HTI'),
            array('name' => 'Heard Island and McDonald Islands', 'code' => 'HMD'),
            array('name' => 'Holy See (the)', 'code' => 'VAT'),
            array('name' => 'Honduras', 'code' => 'HND'),
            array('name' => 'Hong Kong', 'code' => 'HKG'),
            array('name' => 'Hungary', 'code' => 'HUN'),
            array('name' => 'Iceland', 'code' => 'ISL'),
            array('name' => 'India', 'code' => 'IND'),
            array('name' => 'Indonesia', 'code' => 'IDN'),
            array('name' => 'Iran (Islamic Republic of)', 'code' => 'IRN'),
            array('name' => 'Iraq', 'code' => 'IRQ'),
            array('name' => 'Ireland', 'code' => 'IRL'),
            array('name' => 'Isle of Man', 'code' => 'IMN'),
            array('name' => 'Israel', 'code' => 'ISR'),
            array('name' => 'Italy', 'code' => 'ITA'),
            array('name' => 'Jamaica', 'code' => 'JAM'),
            array('name' => 'Japan', 'code' => 'JPN'),
            array('name' => 'Jersey', 'code' => 'JEY'),
            array('name' => 'Jordan', 'code' => 'JOR'),
            array('name' => 'Kazakhstan', 'code' => 'KAZ'),
            array('name' => 'Kenya', 'code' => 'KEN'),
            array('name' => 'Kiribati', 'code' => 'KIR'),
            array('name' => 'Korea (the Democratic People\'s Republic of)', 'code' => 'PRK'),
            array('name' => 'Korea (the Republic of)', 'code' => 'KOR'),
            array('name' => 'Kuwait', 'code' => 'KWT'),
            array('name' => 'Kyrgyzstan', 'code' => 'KGZ'),
            array('name' => 'Lao People\'s Democratic Republic (the)', 'code' => 'LAO'),
            array('name' => 'Latvia', 'code' => 'LVA'),
            array('name' => 'Lebanon', 'code' => 'LBN'),
            array('name' => 'Lesotho', 'code' => 'LSO'),
            array('name' => 'Liberia', 'code' => 'LBR'),
            array('name' => 'Libya', 'code' => 'LBY'),
            array('name' => 'Liechtenstein', 'code' => 'LIE'),
            array('name' => 'Lithuania', 'code' => 'LTU'),
            array('name' => 'Luxembourg', 'code' => 'LUX'),
            array('name' => 'Macao', 'code' => 'MAC'),
            array('name' => 'Madagascar', 'code' => 'MDG'),
            array('name' => 'Malawi', 'code' => 'MWI'),
            array('name' => 'Malaysia', 'code' => 'MYS'),
            array('name' => 'Maldives', 'code' => 'MDV'),
            array('name' => 'Mali', 'code' => 'MLI'),
            array('name' => 'Malta', 'code' => 'MLT'),
            array('name' => 'Marshall Islands (the)', 'code' => 'MHL'),
            array('name' => 'Martinique', 'code' => 'MTQ'),
            array('name' => 'Mauritania', 'code' => 'MRT'),
            array('name' => 'Mauritius', 'code' => 'MUS'),
            array('name' => 'Mayotte', 'code' => 'MYT'),
            array('name' => 'Mexico', 'code' => 'MEX'),
            array('name' => 'Micronesia (Federated States of)', 'code' => 'FSM'),
            array('name' => 'Moldova (the Republic of)', 'code' => 'MDA'),
            array('name' => 'Monaco', 'code' => 'MCO'),
            array('name' => 'Mongolia', 'code' => 'MNG'),
            array('name' => 'Montenegro', 'code' => 'MNE'),
            array('name' => 'Montserrat', 'code' => 'MSR'),
            array('name' => 'Morocco', 'code' => 'MAR'),
            array('name' => 'Mozambique', 'code' => 'MOZ'),
            array('name' => 'Myanmar', 'code' => 'MMR'),
            array('name' => 'Namibia', 'code' => 'NAM'),
            array('name' => 'Nauru', 'code' => 'NRU'),
            array('name' => 'Nepal', 'code' => 'NPL'),
            array('name' => 'Netherlands (the)', 'code' => 'NLD'),
            array('name' => 'New Caledonia', 'code' => 'NCL'),
            array('name' => 'New Zealand', 'code' => 'NZL'),
            array('name' => 'Nicaragua', 'code' => 'NIC'),
            array('name' => 'Niger (the)', 'code' => 'NER'),
            array('name' => 'Nigeria', 'code' => 'NGA'),
            array('name' => 'Niue', 'code' => 'NIU'),
            array('name' => 'Norfolk Island', 'code' => 'NFK'),
            array('name' => 'Northern Mariana Islands (the)', 'code' => 'MNP'),
            array('name' => 'Norway', 'code' => 'NOR'),
            array('name' => 'Oman', 'code' => 'OMN'),
            array('name' => 'Pakistan', 'code' => 'PAK'),
            array('name' => 'Palau', 'code' => 'PLW'),
            array('name' => 'Palestine, State of', 'code' => 'PSE'),
            array('name' => 'Panama', 'code' => 'PAN'),
            array('name' => 'Papua New Guinea', 'code' => 'PNG'),
            array('name' => 'Paraguay', 'code' => 'PRY'),
            array('name' => 'Peru', 'code' => 'PER'),
            array('name' => 'Philippines (the)', 'code' => 'PHL'),
            array('name' => 'Pitcairn', 'code' => 'PCN'),
            array('name' => 'Poland', 'code' => 'POL'),
            array('name' => 'Portugal', 'code' => 'PRT'),
            array('name' => 'Puerto Rico', 'code' => 'PRI'),
            array('name' => 'Qatar', 'code' => 'QAT'),
            array('name' => 'Republic of North Macedonia', 'code' => 'MKD'),
            array('name' => 'Romania', 'code' => 'ROU'),
            array('name' => 'Russian Federation (the)', 'code' => 'RUS'),
            array('name' => 'Rwanda', 'code' => 'RWA'),
            array('name' => 'Réunion', 'code' => 'REU'),
            array('name' => 'Saint Barthélemy', 'code' => 'BLM'),
            array('name' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SHN'),
            array('name' => 'Saint Kitts and Nevis', 'code' => 'KNA'),
            array('name' => 'Saint Lucia', 'code' => 'LCA'),
            array('name' => 'Saint Martin (French part)', 'code' => 'MAF'),
            array('name' => 'Saint Pierre and Miquelon', 'code' => 'SPM'),
            array('name' => 'Saint Vincent and the Grenadines', 'code' => 'VCT'),
            array('name' => 'Samoa', 'code' => 'WSM'),
            array('name' => 'San Marino', 'code' => 'SMR'),
            array('name' => 'Sao Tome and Principe', 'code' => 'STP'),
            array('name' => 'Saudi Arabia', 'code' => 'SAU'),
            array('name' => 'Senegal', 'code' => 'SEN'),
            array('name' => 'Serbia', 'code' => 'SRB'),
            array('name' => 'Seychelles', 'code' => 'SYC'),
            array('name' => 'Sierra Leone', 'code' => 'SLE'),
            array('name' => 'Singapore', 'code' => 'SGP'),
            array('name' => 'Sint Maarten (Dutch part)', 'code' => 'SXM'),
            array('name' => 'Slovakia', 'code' => 'SVK'),
            array('name' => 'Slovenia', 'code' => 'SVN'),
            array('name' => 'Solomon Islands', 'code' => 'SLB'),
            array('name' => 'Somalia', 'code' => 'SOM'),
            array('name' => 'South Africa', 'code' => 'ZAF'),
            array('name' => 'South Georgia and the South Sandwich Islands', 'code' => 'SGS'),
            array('name' => 'South Sudan', 'code' => 'SSD'),
            array('name' => 'Spain', 'code' => 'ESP'),
            array('name' => 'Sri Lanka', 'code' => 'LKA'),
            array('name' => 'Sudan (the)', 'code' => 'SDN'),
            array('name' => 'Suriname', 'code' => 'SUR'),
            array('name' => 'Svalbard and Jan Mayen', 'code' => 'SJM'),
            array('name' => 'Sweden', 'code' => 'SWE'),
            array('name' => 'Switzerland', 'code' => 'CHE'),
            array('name' => 'Syrian Arab Republic', 'code' => 'SYR'),
            array('name' => 'Taiwan (Province of China)', 'code' => 'TWN'),
            array('name' => 'Tajikistan', 'code' => 'TJK'),
            array('name' => 'Tanzania, United Republic of', 'code' => 'TZA'),
            array('name' => 'Thailand', 'code' => 'THA'),
            array('name' => 'Timor-Leste', 'code' => 'TLS'),
            array('name' => 'Togo', 'code' => 'TGO'),
            array('name' => 'Tokelau', 'code' => 'TKL'),
            array('name' => 'Tonga', 'code' => 'TON'),
            array('name' => 'Trinidad and Tobago', 'code' => 'TTO'),
            array('name' => 'Tunisia', 'code' => 'TUN'),
            array('name' => 'Turkey', 'code' => 'TUR'),
            array('name' => 'Turkmenistan', 'code' => 'TKM'),
            array('name' => 'Turks and Caicos Islands (the)', 'code' => 'TCA'),
            array('name' => 'Tuvalu', 'code' => 'TUV'),
            array('name' => 'Uganda', 'code' => 'UGA'),
            array('name' => 'Ukraine', 'code' => 'UKR'),
            array('name' => 'United Arab Emirates (the)', 'code' => 'ARE'),
            array('name' => 'United Kingdom of Great Britain and Northern Ireland (the)', 'code' => 'GBR'),
            array('name' => 'United States Minor Outlying Islands (the)', 'code' => 'UMI'),
            array('name' => 'United States of America (the)', 'code' => 'USA'),
            array('name' => 'Uruguay', 'code' => 'URY'),
            array('name' => 'Uzbekistan', 'code' => 'UZB'),
            array('name' => 'Vanuatu', 'code' => 'VUT'),
            array('name' => 'Venezuela (Bolivarian Republic of)', 'code' => 'VEN'),
            array('name' => 'Viet Nam', 'code' => 'VNM'),
            array('name' => 'Virgin Islands (British)', 'code' => 'VGB'),
            array('name' => 'Virgin Islands (U.S.)', 'code' => 'VIR'),
            array('name' => 'Wallis and Futuna', 'code' => 'WLF'),
            array('name' => 'Western Sahara', 'code' => 'ESH'),
            array('name' => 'Yemen', 'code' => 'YEM'),
            array('name' => 'Zambia', 'code' => 'ZMB'),
            array('name' => 'Zimbabwe', 'code' => 'ZWE'),
            array('name' => 'Åland Islands', 'code' => 'ALA')
        );
        DB::table('countries')->insert($countries);
    }
}
