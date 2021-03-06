<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();

        $countries = [
            ['name' => 'Afghanistan', 'code' => 'AF', 
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'],
            ['name' => 'Åland Islands', 'code' => 'AX',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'],
            ['name' => 'Albania', 'code' => 'AL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Algeria', 'code' => 'DZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'American Samoa', 'code' => 'AS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Andorra', 'code' => 'AD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Angola', 'code' => 'AO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Anguilla', 'code' => 'AI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Antarctica', 'code' => 'AQ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Antigua and Barbuda', 'code' => 'AG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Argentina', 'code' => 'AR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Armenia', 'code' => 'AM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Aruba', 'code' => 'AW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Australia', 'code' => 'AU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Austria', 'code' => 'AT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Azerbaijan', 'code' => 'AZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bahamas', 'code' => 'BS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bahrain', 'code' => 'BH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bangladesh', 'code' => 'BD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Barbados', 'code' => 'BB',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Belarus', 'code' => 'BY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Belgium', 'code' => 'BE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Belize', 'code' => 'BZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Benin', 'code' => 'BJ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bermuda', 'code' => 'BM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bhutan', 'code' => 'BT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bolivia, Plurinational State of', 'code' => 'BO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bosnia and Herzegovina', 'code' => 'BA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Botswana', 'code' => 'BW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bouvet Island', 'code' => 'BV',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Brazil', 'code' => 'BR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'British Indian Ocean Territory', 'code' => 'IO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Brunei Darussalam', 'code' => 'BN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Bulgaria', 'code' => 'BG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Burkina Faso', 'code' => 'BF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Burundi', 'code' => 'BI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cambodia', 'code' => 'KH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cameroon', 'code' => 'CM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Canada', 'code' => 'CA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cape Verde', 'code' => 'CV',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cayman Islands', 'code' => 'KY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Central African Republic', 'code' => 'CF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Chad', 'code' => 'TD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Chile', 'code' => 'CL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'China', 'code' => 'CN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Christmas Island', 'code' => 'CX',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cocos (Keeling) Islands', 'code' => 'CC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Colombia', 'code' => 'CO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Comoros', 'code' => 'KM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Congo', 'code' => 'CG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Congo, the Democratic Republic of the', 'code' => 'CD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cook Islands', 'code' => 'CK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Costa Rica', 'code' => 'CR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Côte d\'Ivoire', 'code' => 'CI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Croatia', 'code' => 'HR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cuba', 'code' => 'CU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Curaçao', 'code' => 'CW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Cyprus', 'code' => 'CY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Czech Republic', 'code' => 'CZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Denmark', 'code' => 'DK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Djibouti', 'code' => 'DJ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Dominica', 'code' => 'DM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Dominican Republic', 'code' => 'DO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Ecuador', 'code' => 'EC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Egypt', 'code' => 'EG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'El Salvador', 'code' => 'SV',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Equatorial Guinea', 'code' => 'GQ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Eritrea', 'code' => 'ER',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Estonia', 'code' => 'EE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Ethiopia', 'code' => 'ET',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Falkland Islands (Malvinas)', 'code' => 'FK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Faroe Islands', 'code' => 'FO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Fiji', 'code' => 'FJ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Finland', 'code' => 'FI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'France', 'code' => 'FR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'French Guiana', 'code' => 'GF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'French Polynesia', 'code' => 'PF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'French Southern Territories', 'code' => 'TF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Gabon', 'code' => 'GA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Gambia', 'code' => 'GM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Georgia', 'code' => 'GE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Germany', 'code' => 'DE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Ghana', 'code' => 'GH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Gibraltar', 'code' => 'GI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Greece', 'code' => 'GR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Greenland', 'code' => 'GL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Grenada', 'code' => 'GD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guadeloupe', 'code' => 'GP',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guam', 'code' => 'GU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guatemala', 'code' => 'GT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guernsey', 'code' => 'GG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guinea', 'code' => 'GN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guinea-Bissau', 'code' => 'GW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Guyana', 'code' => 'GY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Haiti', 'code' => 'HT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Heard Island and McDonald Mcdonald Islands', 'code' => 'HM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Holy See (Vatican City State)', 'code' => 'VA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Honduras', 'code' => 'HN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Hong Kong', 'code' => 'HK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Hungary', 'code' => 'HU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Iceland', 'code' => 'IS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'India', 'code' => 'IN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Indonesia', 'code' => 'ID',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Iran, Islamic Republic of', 'code' => 'IR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Iraq', 'code' => 'IQ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Ireland', 'code' => 'IE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Isle of Man', 'code' => 'IM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Israel', 'code' => 'IL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Italy', 'code' => 'IT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Jamaica', 'code' => 'JM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Japan', 'code' => 'JP',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Jersey', 'code' => 'JE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Jordan', 'code' => 'JO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Kazakhstan', 'code' => 'KZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Kenya', 'code' => 'KE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Kiribati', 'code' => 'KI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Korea, Democratic People\'s Republic of', 'code' => 'KP',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Korea, Republic of', 'code' => 'KR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Kuwait', 'code' => 'KW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Kyrgyzstan', 'code' => 'KG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Lao People\'s Democratic Republic', 'code' => 'LA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Latvia', 'code' => 'LV',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Lebanon', 'code' => 'LB',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Lesotho', 'code' => 'LS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Liberia', 'code' => 'LR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Libya', 'code' => 'LY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Liechtenstein', 'code' => 'LI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Lithuania', 'code' => 'LT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Luxembourg', 'code' => 'LU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Macao', 'code' => 'MO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Madagascar', 'code' => 'MG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Malawi', 'code' => 'MW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Malaysia', 'code' => 'MY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Maldives', 'code' => 'MV',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mali', 'code' => 'ML',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Malta', 'code' => 'MT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Marshall Islands', 'code' => 'MH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Martinique', 'code' => 'MQ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mauritania', 'code' => 'MR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mauritius', 'code' => 'MU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mayotte', 'code' => 'YT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mexico', 'code' => 'MX',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Micronesia, Federated States of', 'code' => 'FM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Moldova, Republic of', 'code' => 'MD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Monaco', 'code' => 'MC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mongolia', 'code' => 'MN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Montenegro', 'code' => 'ME',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Montserrat', 'code' => 'MS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Morocco', 'code' => 'MA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Mozambique', 'code' => 'MZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Myanmar', 'code' => 'MM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Namibia', 'code' => 'NA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Nauru', 'code' => 'NR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Nepal', 'code' => 'NP',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Netherlands', 'code' => 'NL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'New Caledonia', 'code' => 'NC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'New Zealand', 'code' => 'NZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Nicaragua', 'code' => 'NI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Niger', 'code' => 'NE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Nigeria', 'code' => 'NG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Niue', 'code' => 'NU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Norfolk Island', 'code' => 'NF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Northern Mariana Islands', 'code' => 'MP',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Norway', 'code' => 'NO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Oman', 'code' => 'OM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Pakistan', 'code' => 'PK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Palau', 'code' => 'PW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Palestine, State of', 'code' => 'PS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Panama', 'code' => 'PA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Papua New Guinea', 'code' => 'PG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Paraguay', 'code' => 'PY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Peru', 'code' => 'PE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Philippines', 'code' => 'PH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Pitcairn', 'code' => 'PN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Poland', 'code' => 'PL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Portugal', 'code' => 'PT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Puerto Rico', 'code' => 'PR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Qatar', 'code' => 'QA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Réunion', 'code' => 'RE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Romania', 'code' => 'RO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Russian Federation', 'code' => 'RU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Rwanda', 'code' => 'RW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Barthélemy', 'code' => 'BL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Kitts and Nevis', 'code' => 'KN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Lucia', 'code' => 'LC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Martin (French part)', 'code' => 'MF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Pierre and Miquelon', 'code' => 'PM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saint Vincent and the Grenadines', 'code' => 'VC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Samoa', 'code' => 'WS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'San Marino', 'code' => 'SM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Sao Tome and Principe', 'code' => 'ST',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Saudi Arabia', 'code' => 'SA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Senegal', 'code' => 'SN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Serbia', 'code' => 'RS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Seychelles', 'code' => 'SC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Sierra Leone', 'code' => 'SL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Singapore', 'code' => 'SG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Sint Maarten (Dutch part)', 'code' => 'SX',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Slovakia', 'code' => 'SK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Slovenia', 'code' => 'SI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Solomon Islands', 'code' => 'SB',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Somalia', 'code' => 'SO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'South Africa', 'code' => 'ZA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'South Sudan', 'code' => 'SS',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Spain', 'code' => 'ES',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Sri Lanka', 'code' => 'LK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Sudan', 'code' => 'SD',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Suriname', 'code' => 'SR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Svalbard and Jan Mayen', 'code' => 'SJ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Swaziland', 'code' => 'SZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Sweden', 'code' => 'SE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Switzerland', 'code' => 'CH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Syrian Arab Republic', 'code' => 'SY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Taiwan', 'code' => 'TW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Tajikistan', 'code' => 'TJ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Tanzania, United Republic of', 'code' => 'TZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Thailand', 'code' => 'TH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Timor-Leste', 'code' => 'TL',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Togo', 'code' => 'TG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Tokelau', 'code' => 'TK',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Tonga', 'code' => 'TO',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Trinidad and Tobago', 'code' => 'TT',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Tunisia', 'code' => 'TN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Turkey', 'code' => 'TR',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Turkmenistan', 'code' => 'TM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Turks and Caicos Islands', 'code' => 'TC',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Tuvalu', 'code' => 'TV',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Uganda', 'code' => 'UG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Ukraine', 'code' => 'UA',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'United Arab Emirates', 'code' => 'AE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'United Kingdom', 'code' => 'GB',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'United States', 'code' => 'US',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'United States Minor Outlying Islands', 'code' => 'UM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Uruguay', 'code' => 'UY',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Uzbekistan', 'code' => 'UZ',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Vanuatu', 'code' => 'VU',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Venezuela, Bolivarian Republic of', 'code' => 'VE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Viet Nam', 'code' => 'VN',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Virgin Islands, British', 'code' => 'VG',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Virgin Islands, U.S.', 'code' => 'VI',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Wallis and Futuna', 'code' => 'WF',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Western Sahara', 'code' => 'EH',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Yemen', 'code' => 'YE',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Zambia', 'code' => 'ZM',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
            ['name' => 'Zimbabwe', 'code' => 'ZW',
             'vital_info' => 'THIS IS A STRING, IT WILL BE REPLACED BY AN ARRAY'], 
        ];

        DB::table('countries')->insert($countries);
    }
}
