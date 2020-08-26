<?php return array (
  'app' => 
  array (
    'debug' => true,
    'url' => 'http://localhost',
    'timezone' => 'UTC',
    'locale' => 'ar',
    'fallback_locale' => 'en',
    'key' => 'lfidIcf2y4dAY6nX10mwAMLqj4BGifF4',
    'cipher' => 'AES-256-CBC',
    'log' => 'daily',
    'providers' => 
    array (
      0 => 'Illuminate\\Foundation\\Providers\\ArtisanServiceProvider',
      1 => 'Illuminate\\Auth\\AuthServiceProvider',
      2 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      3 => 'Illuminate\\Bus\\BusServiceProvider',
      4 => 'Illuminate\\Cache\\CacheServiceProvider',
      5 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      6 => 'Illuminate\\Routing\\ControllerServiceProvider',
      7 => 'Illuminate\\Cookie\\CookieServiceProvider',
      8 => 'Illuminate\\Database\\DatabaseServiceProvider',
      9 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      10 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      11 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      12 => 'Illuminate\\Hashing\\HashServiceProvider',
      13 => 'Illuminate\\Mail\\MailServiceProvider',
      14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      15 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      16 => 'Illuminate\\Queue\\QueueServiceProvider',
      17 => 'Illuminate\\Redis\\RedisServiceProvider',
      18 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      19 => 'Illuminate\\Session\\SessionServiceProvider',
      20 => 'Illuminate\\Translation\\TranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'App\\Providers\\ViewServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'driver' => 'eloquent',
    'model' => 'App\\User',
    'table' => 'users',
    'password' => 
    array (
      'email' => 'emails.password',
      'table' => 'password_resets',
      'expire' => 60,
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\Users\\Mohamed Aabed\\Downloads\\library-management-system-master\\library-management-system-master\\storage\\framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'compile' => 
  array (
    'files' => 
    array (
    ),
    'providers' => 
    array (
    ),
  ),
  'database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'C:\\Users\\Mohamed Aabed\\Downloads\\library-management-system-master\\library-management-system-master\\database\\database.sqlite',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'database' => 'ucasl',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => false,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'database' => 'ucasl',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'database' => 'ucasl',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'cluster' => false,
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\Mohamed Aabed\\Downloads\\library-management-system-master\\library-management-system-master\\storage\\app',
      ),
      'ftp' => 
      array (
        'driver' => 'ftp',
        'host' => 'ftp.example.com',
        'username' => 'your-username',
        'password' => 'your-password',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'your-key',
        'secret' => 'your-secret',
        'region' => 'your-region',
        'bucket' => 'your-bucket',
      ),
      'rackspace' => 
      array (
        'driver' => 'rackspace',
        'username' => 'your-username',
        'key' => 'your-key',
        'container' => 'your-container',
        'endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
        'region' => 'IAD',
        'url_type' => 'publicURL',
      ),
    ),
  ),
  'lms' => 
  array (
    'juniorMemberAgeLimit' => 12,
    'fullMemberBorrowLimit' => 3,
    'juniorMemberBorrowLimit' => 3,
    'bookCopyStatus' => 
    array (
      0 => 'On Loan',
      1 => 'Available',
      2 => 'Lost',
      3 => 'Damaged',
      4 => 'Withdrawn',
    ),
    'shelfNames' => 
    array (
      0 => 'Shelf 1',
      1 => 'Shelf 2',
      2 => 'Shelf 3',
      3 => 'Shelf 4',
      4 => 'Shelf 5',
      5 => 'Shelf 6',
      6 => 'Shelf 7',
      7 => 'Shelf 8',
    ),
    'shelfRackLevel' => 
    array (
      0 => '01',
      1 => '02',
      2 => '03',
      3 => '04',
      4 => '05',
      5 => '06',
      6 => '07',
      7 => '08',
      8 => '09',
      9 => '10',
    ),
    'countries' => 
    array (
      0 => 
      array (
        'code' => 'US',
        'name' => 'United States',
      ),
      1 => 
      array (
        'code' => 'CA',
        'name' => 'Canada',
      ),
      2 => 
      array (
        'code' => 'AU',
        'name' => 'Australia',
      ),
      3 => 
      array (
        'code' => 'FR',
        'name' => 'France',
      ),
      4 => 
      array (
        'code' => 'DE',
        'name' => 'Germany',
      ),
      5 => 
      array (
        'code' => 'IS',
        'name' => 'Iceland',
      ),
      6 => 
      array (
        'code' => 'IE',
        'name' => 'Ireland',
      ),
      7 => 
      array (
        'code' => 'IT',
        'name' => 'Italy',
      ),
      8 => 
      array (
        'code' => 'ES',
        'name' => 'Spain',
      ),
      9 => 
      array (
        'code' => 'SE',
        'name' => 'Sweden',
      ),
      10 => 
      array (
        'code' => 'AT',
        'name' => 'Austria',
      ),
      11 => 
      array (
        'code' => 'BE',
        'name' => 'Belgium',
      ),
      12 => 
      array (
        'code' => 'FI',
        'name' => 'Finland',
      ),
      13 => 
      array (
        'code' => 'CZ',
        'name' => 'Czech Republic',
      ),
      14 => 
      array (
        'code' => 'DK',
        'name' => 'Denmark',
      ),
      15 => 
      array (
        'code' => 'NO',
        'name' => 'Norway',
      ),
      16 => 
      array (
        'code' => 'GB',
        'name' => 'United Kingdom',
      ),
      17 => 
      array (
        'code' => 'CH',
        'name' => 'Switzerland',
      ),
      18 => 
      array (
        'code' => 'NZ',
        'name' => 'New Zealand',
      ),
      19 => 
      array (
        'code' => 'RU',
        'name' => 'Russian Federation',
      ),
      20 => 
      array (
        'code' => 'PT',
        'name' => 'Portugal',
      ),
      21 => 
      array (
        'code' => 'NL',
        'name' => 'Netherlands',
      ),
      22 => 
      array (
        'code' => 'IM',
        'name' => 'Isle of Man',
      ),
      23 => 
      array (
        'code' => 'AF',
        'name' => 'Afghanistan',
      ),
      24 => 
      array (
        'code' => 'AX',
        'name' => 'Aland Islands ',
      ),
      25 => 
      array (
        'code' => 'AL',
        'name' => 'Albania',
      ),
      26 => 
      array (
        'code' => 'DZ',
        'name' => 'Algeria',
      ),
      27 => 
      array (
        'code' => 'AS',
        'name' => 'American Samoa',
      ),
      28 => 
      array (
        'code' => 'AD',
        'name' => 'Andorra',
      ),
      29 => 
      array (
        'code' => 'AO',
        'name' => 'Angola',
      ),
      30 => 
      array (
        'code' => 'AI',
        'name' => 'Anguilla',
      ),
      31 => 
      array (
        'code' => 'AQ',
        'name' => 'Antarctica',
      ),
      32 => 
      array (
        'code' => 'AG',
        'name' => 'Antigua and Barbuda',
      ),
      33 => 
      array (
        'code' => 'AR',
        'name' => 'Argentina',
      ),
      34 => 
      array (
        'code' => 'AM',
        'name' => 'Armenia',
      ),
      35 => 
      array (
        'code' => 'AW',
        'name' => 'Aruba',
      ),
      36 => 
      array (
        'code' => 'AZ',
        'name' => 'Azerbaijan',
      ),
      37 => 
      array (
        'code' => 'BS',
        'name' => 'Bahamas',
      ),
      38 => 
      array (
        'code' => 'BH',
        'name' => 'Bahrain',
      ),
      39 => 
      array (
        'code' => 'BD',
        'name' => 'Bangladesh',
      ),
      40 => 
      array (
        'code' => 'BB',
        'name' => 'Barbados',
      ),
      41 => 
      array (
        'code' => 'BY',
        'name' => 'Belarus',
      ),
      42 => 
      array (
        'code' => 'BZ',
        'name' => 'Belize',
      ),
      43 => 
      array (
        'code' => 'BJ',
        'name' => 'Benin',
      ),
      44 => 
      array (
        'code' => 'BM',
        'name' => 'Bermuda',
      ),
      45 => 
      array (
        'code' => 'BT',
        'name' => 'Bhutan',
      ),
      46 => 
      array (
        'code' => 'BO',
        'name' => 'Bolivia, Plurinational State of',
      ),
      47 => 
      array (
        'code' => 'BQ',
        'name' => 'Bonaire, Sint Eustatius and Saba',
      ),
      48 => 
      array (
        'code' => 'BA',
        'name' => 'Bosnia and Herzegovina',
      ),
      49 => 
      array (
        'code' => 'BW',
        'name' => 'Botswana',
      ),
      50 => 
      array (
        'code' => 'BV',
        'name' => 'Bouvet Island',
      ),
      51 => 
      array (
        'code' => 'BR',
        'name' => 'Brazil',
      ),
      52 => 
      array (
        'code' => 'IO',
        'name' => 'British Indian Ocean Territory',
      ),
      53 => 
      array (
        'code' => 'BN',
        'name' => 'Brunei Darussalam',
      ),
      54 => 
      array (
        'code' => 'BG',
        'name' => 'Bulgaria',
      ),
      55 => 
      array (
        'code' => 'BF',
        'name' => 'Burkina Faso',
      ),
      56 => 
      array (
        'code' => 'BI',
        'name' => 'Burundi',
      ),
      57 => 
      array (
        'code' => 'KH',
        'name' => 'Cambodia',
      ),
      58 => 
      array (
        'code' => 'CM',
        'name' => 'Cameroon',
      ),
      59 => 
      array (
        'code' => 'CV',
        'name' => 'Cape Verde',
      ),
      60 => 
      array (
        'code' => 'KY',
        'name' => 'Cayman Islands',
      ),
      61 => 
      array (
        'code' => 'CF',
        'name' => 'Central African Republic',
      ),
      62 => 
      array (
        'code' => 'TD',
        'name' => 'Chad',
      ),
      63 => 
      array (
        'code' => 'CL',
        'name' => 'Chile',
      ),
      64 => 
      array (
        'code' => 'CN',
        'name' => 'China',
      ),
      65 => 
      array (
        'code' => 'CX',
        'name' => 'Christmas Island',
      ),
      66 => 
      array (
        'code' => 'CC',
        'name' => 'Cocos (Keeling) Islands',
      ),
      67 => 
      array (
        'code' => 'CO',
        'name' => 'Colombia',
      ),
      68 => 
      array (
        'code' => 'KM',
        'name' => 'Comoros',
      ),
      69 => 
      array (
        'code' => 'CG',
        'name' => 'Congo',
      ),
      70 => 
      array (
        'code' => 'CD',
        'name' => 'Congo, the Democratic Republic of the',
      ),
      71 => 
      array (
        'code' => 'CK',
        'name' => 'Cook Islands',
      ),
      72 => 
      array (
        'code' => 'CR',
        'name' => 'Costa Rica',
      ),
      73 => 
      array (
        'code' => 'CI',
        'name' => 'Cote d\'Ivoire',
      ),
      74 => 
      array (
        'code' => 'HR',
        'name' => 'Croatia',
      ),
      75 => 
      array (
        'code' => 'CU',
        'name' => 'Cuba',
      ),
      76 => 
      array (
        'code' => 'CW',
        'name' => 'Curaçao',
      ),
      77 => 
      array (
        'code' => 'CY',
        'name' => 'Cyprus',
      ),
      78 => 
      array (
        'code' => 'DJ',
        'name' => 'Djibouti',
      ),
      79 => 
      array (
        'code' => 'DM',
        'name' => 'Dominica',
      ),
      80 => 
      array (
        'code' => 'DO',
        'name' => 'Dominican Republic',
      ),
      81 => 
      array (
        'code' => 'EC',
        'name' => 'Ecuador',
      ),
      82 => 
      array (
        'code' => 'EG',
        'name' => 'Egypt',
      ),
      83 => 
      array (
        'code' => 'SV',
        'name' => 'El Salvador',
      ),
      84 => 
      array (
        'code' => 'GQ',
        'name' => 'Equatorial Guinea',
      ),
      85 => 
      array (
        'code' => 'ER',
        'name' => 'Eritrea',
      ),
      86 => 
      array (
        'code' => 'EE',
        'name' => 'Estonia',
      ),
      87 => 
      array (
        'code' => 'ET',
        'name' => 'Ethiopia',
      ),
      88 => 
      array (
        'code' => 'FK',
        'name' => 'Falkland Islands (Malvinas)',
      ),
      89 => 
      array (
        'code' => 'FO',
        'name' => 'Faroe Islands',
      ),
      90 => 
      array (
        'code' => 'FJ',
        'name' => 'Fiji',
      ),
      91 => 
      array (
        'code' => 'GF',
        'name' => 'French Guiana',
      ),
      92 => 
      array (
        'code' => 'PF',
        'name' => 'French Polynesia',
      ),
      93 => 
      array (
        'code' => 'TF',
        'name' => 'French Southern Territories',
      ),
      94 => 
      array (
        'code' => 'GA',
        'name' => 'Gabon',
      ),
      95 => 
      array (
        'code' => 'GM',
        'name' => 'Gambia',
      ),
      96 => 
      array (
        'code' => 'GE',
        'name' => 'Georgia',
      ),
      97 => 
      array (
        'code' => 'GH',
        'name' => 'Ghana',
      ),
      98 => 
      array (
        'code' => 'GI',
        'name' => 'Gibraltar',
      ),
      99 => 
      array (
        'code' => 'GR',
        'name' => 'Greece',
      ),
      100 => 
      array (
        'code' => 'GL',
        'name' => 'Greenland',
      ),
      101 => 
      array (
        'code' => 'GD',
        'name' => 'Grenada',
      ),
      102 => 
      array (
        'code' => 'GP',
        'name' => 'Guadeloupe',
      ),
      103 => 
      array (
        'code' => 'GU',
        'name' => 'Guam',
      ),
      104 => 
      array (
        'code' => 'GT',
        'name' => 'Guatemala',
      ),
      105 => 
      array (
        'code' => 'GG',
        'name' => 'Guernsey',
      ),
      106 => 
      array (
        'code' => 'GN',
        'name' => 'Guinea',
      ),
      107 => 
      array (
        'code' => 'GW',
        'name' => 'Guinea-Bissau',
      ),
      108 => 
      array (
        'code' => 'GY',
        'name' => 'Guyana',
      ),
      109 => 
      array (
        'code' => 'HT',
        'name' => 'Haiti',
      ),
      110 => 
      array (
        'code' => 'HM',
        'name' => 'Heard Island and McDonald Islands',
      ),
      111 => 
      array (
        'code' => 'VA',
        'name' => 'Holy See (Vatican City State)',
      ),
      112 => 
      array (
        'code' => 'HN',
        'name' => 'Honduras',
      ),
      113 => 
      array (
        'code' => 'HK',
        'name' => 'Hong Kong',
      ),
      114 => 
      array (
        'code' => 'HU',
        'name' => 'Hungary',
      ),
      115 => 
      array (
        'code' => 'IN',
        'name' => 'India',
      ),
      116 => 
      array (
        'code' => 'ID',
        'name' => 'Indonesia',
      ),
      117 => 
      array (
        'code' => 'IR',
        'name' => 'Iran, Islamic Republic of',
      ),
      118 => 
      array (
        'code' => 'IQ',
        'name' => 'Iraq',
      ),
      119 => 
      array (
        'code' => '',
        'name' => '',
      ),
      120 => 
      array (
        'code' => 'JM',
        'name' => 'Jamaica',
      ),
      121 => 
      array (
        'code' => 'JP',
        'name' => 'Japan',
      ),
      122 => 
      array (
        'code' => 'JE',
        'name' => 'Jersey',
      ),
      123 => 
      array (
        'code' => 'JO',
        'name' => 'Jordan',
      ),
      124 => 
      array (
        'code' => 'KZ',
        'name' => 'Kazakhstan',
      ),
      125 => 
      array (
        'code' => 'KE',
        'name' => 'Kenya',
      ),
      126 => 
      array (
        'code' => 'KI',
        'name' => 'Kiribati',
      ),
      127 => 
      array (
        'code' => 'KP',
        'name' => 'Korea, Democratic People\'s Republic of',
      ),
      128 => 
      array (
        'code' => 'KR',
        'name' => 'Korea, Republic of',
      ),
      129 => 
      array (
        'code' => 'KW',
        'name' => 'Kuwait',
      ),
      130 => 
      array (
        'code' => 'KG',
        'name' => 'Kyrgyzstan',
      ),
      131 => 
      array (
        'code' => 'LA',
        'name' => 'Lao People\'s Democratic Republic',
      ),
      132 => 
      array (
        'code' => 'LV',
        'name' => 'Latvia',
      ),
      133 => 
      array (
        'code' => 'LB',
        'name' => 'Lebanon',
      ),
      134 => 
      array (
        'code' => 'LS',
        'name' => 'Lesotho',
      ),
      135 => 
      array (
        'code' => 'LR',
        'name' => 'Liberia',
      ),
      136 => 
      array (
        'code' => 'LY',
        'name' => 'Libyan Arab Jamahiriya',
      ),
      137 => 
      array (
        'code' => 'LI',
        'name' => 'Liechtenstein',
      ),
      138 => 
      array (
        'code' => 'LT',
        'name' => 'Lithuania',
      ),
      139 => 
      array (
        'code' => 'LU',
        'name' => 'Luxembourg',
      ),
      140 => 
      array (
        'code' => 'MO',
        'name' => 'Macao',
      ),
      141 => 
      array (
        'code' => 'MK',
        'name' => 'Macedonia',
      ),
      142 => 
      array (
        'code' => 'MG',
        'name' => 'Madagascar',
      ),
      143 => 
      array (
        'code' => 'MW',
        'name' => 'Malawi',
      ),
      144 => 
      array (
        'code' => 'MY',
        'name' => 'Malaysia',
      ),
      145 => 
      array (
        'code' => 'MV',
        'name' => 'Maldives',
      ),
      146 => 
      array (
        'code' => 'ML',
        'name' => 'Mali',
      ),
      147 => 
      array (
        'code' => 'MT',
        'name' => 'Malta',
      ),
      148 => 
      array (
        'code' => 'MH',
        'name' => 'Marshall Islands',
      ),
      149 => 
      array (
        'code' => 'MQ',
        'name' => 'Martinique',
      ),
      150 => 
      array (
        'code' => 'MR',
        'name' => 'Mauritania',
      ),
      151 => 
      array (
        'code' => 'MU',
        'name' => 'Mauritius',
      ),
      152 => 
      array (
        'code' => 'YT',
        'name' => 'Mayotte',
      ),
      153 => 
      array (
        'code' => 'MX',
        'name' => 'Mexico',
      ),
      154 => 
      array (
        'code' => 'FM',
        'name' => 'Micronesia, Federated States of',
      ),
      155 => 
      array (
        'code' => 'MD',
        'name' => 'Moldova, Republic of',
      ),
      156 => 
      array (
        'code' => 'MC',
        'name' => 'Monaco',
      ),
      157 => 
      array (
        'code' => 'MN',
        'name' => 'Mongolia',
      ),
      158 => 
      array (
        'code' => 'ME',
        'name' => 'Montenegro',
      ),
      159 => 
      array (
        'code' => 'MS',
        'name' => 'Montserrat',
      ),
      160 => 
      array (
        'code' => 'MA',
        'name' => 'Morocco',
      ),
      161 => 
      array (
        'code' => 'MZ',
        'name' => 'Mozambique',
      ),
      162 => 
      array (
        'code' => 'MM',
        'name' => 'Myanmar',
      ),
      163 => 
      array (
        'code' => 'NA',
        'name' => 'Namibia',
      ),
      164 => 
      array (
        'code' => 'NR',
        'name' => 'Nauru',
      ),
      165 => 
      array (
        'code' => 'NP',
        'name' => 'Nepal',
      ),
      166 => 
      array (
        'code' => 'NC',
        'name' => 'New Caledonia',
      ),
      167 => 
      array (
        'code' => 'NI',
        'name' => 'Nicaragua',
      ),
      168 => 
      array (
        'code' => 'NE',
        'name' => 'Niger',
      ),
      169 => 
      array (
        'code' => 'NG',
        'name' => 'Nigeria',
      ),
      170 => 
      array (
        'code' => 'NU',
        'name' => 'Niue',
      ),
      171 => 
      array (
        'code' => 'NF',
        'name' => 'Norfolk Island',
      ),
      172 => 
      array (
        'code' => 'MP',
        'name' => 'Northern Mariana Islands',
      ),
      173 => 
      array (
        'code' => 'OM',
        'name' => 'Oman',
      ),
      174 => 
      array (
        'code' => 'PK',
        'name' => 'Pakistan',
      ),
      175 => 
      array (
        'code' => 'PW',
        'name' => 'Palau',
      ),
      176 => 
      array (
        'code' => 'PS',
        'name' => 'Palestinian Territory, Occupied',
      ),
      177 => 
      array (
        'code' => 'PA',
        'name' => 'Panama',
      ),
      178 => 
      array (
        'code' => 'PG',
        'name' => 'Papua New Guinea',
      ),
      179 => 
      array (
        'code' => 'PY',
        'name' => 'Paraguay',
      ),
      180 => 
      array (
        'code' => 'PE',
        'name' => 'Peru',
      ),
      181 => 
      array (
        'code' => 'PH',
        'name' => 'Philippines',
      ),
      182 => 
      array (
        'code' => 'PN',
        'name' => 'Pitcairn',
      ),
      183 => 
      array (
        'code' => 'PL',
        'name' => 'Poland',
      ),
      184 => 
      array (
        'code' => 'PR',
        'name' => 'Puerto Rico',
      ),
      185 => 
      array (
        'code' => 'QA',
        'name' => 'Qatar',
      ),
      186 => 
      array (
        'code' => 'RE',
        'name' => 'Reunion',
      ),
      187 => 
      array (
        'code' => 'RO',
        'name' => 'Romania',
      ),
      188 => 
      array (
        'code' => 'RW',
        'name' => 'Rwanda',
      ),
      189 => 
      array (
        'code' => 'BL',
        'name' => 'Saint Barthélemy',
      ),
      190 => 
      array (
        'code' => 'SH',
        'name' => 'Saint Helena',
      ),
      191 => 
      array (
        'code' => 'KN',
        'name' => 'Saint Kitts and Nevis',
      ),
      192 => 
      array (
        'code' => 'LC',
        'name' => 'Saint Lucia',
      ),
      193 => 
      array (
        'code' => 'MF',
        'name' => 'Saint Martin (French part)',
      ),
      194 => 
      array (
        'code' => 'PM',
        'name' => 'Saint Pierre and Miquelon',
      ),
      195 => 
      array (
        'code' => 'VC',
        'name' => 'Saint Vincent and the Grenadines',
      ),
      196 => 
      array (
        'code' => 'WS',
        'name' => 'Samoa',
      ),
      197 => 
      array (
        'code' => 'SM',
        'name' => 'San Marino',
      ),
      198 => 
      array (
        'code' => 'ST',
        'name' => 'Sao Tome and Principe',
      ),
      199 => 
      array (
        'code' => 'SA',
        'name' => 'Saudi Arabia',
      ),
      200 => 
      array (
        'code' => 'SN',
        'name' => 'Senegal',
      ),
      201 => 
      array (
        'code' => 'RS',
        'name' => 'Serbia',
      ),
      202 => 
      array (
        'code' => 'SC',
        'name' => 'Seychelles',
      ),
      203 => 
      array (
        'code' => 'SL',
        'name' => 'Sierra Leone',
      ),
      204 => 
      array (
        'code' => 'SG',
        'name' => 'Singapore',
      ),
      205 => 
      array (
        'code' => 'SX',
        'name' => 'Sint Maarten (Dutch part)',
      ),
      206 => 
      array (
        'code' => 'SK',
        'name' => 'Slovakia',
      ),
      207 => 
      array (
        'code' => 'SI',
        'name' => 'Slovenia',
      ),
      208 => 
      array (
        'code' => 'SB',
        'name' => 'Solomon Islands',
      ),
      209 => 
      array (
        'code' => 'SO',
        'name' => 'Somalia',
      ),
      210 => 
      array (
        'code' => 'ZA',
        'name' => 'South Africa',
      ),
      211 => 
      array (
        'code' => 'GS',
        'name' => 'South Georgia and the South Sandwich Islands',
      ),
      212 => 
      array (
        'code' => 'LK',
        'name' => 'Sri Lanka',
      ),
      213 => 
      array (
        'code' => 'SD',
        'name' => 'Sudan',
      ),
      214 => 
      array (
        'code' => 'SR',
        'name' => 'Suriname',
      ),
      215 => 
      array (
        'code' => 'SJ',
        'name' => 'Svalbard and Jan Mayen',
      ),
      216 => 
      array (
        'code' => 'SZ',
        'name' => 'Swaziland',
      ),
      217 => 
      array (
        'code' => 'SY',
        'name' => 'Syrian Arab Republic',
      ),
      218 => 
      array (
        'code' => 'TW',
        'name' => 'Taiwan, Province of China',
      ),
      219 => 
      array (
        'code' => 'TJ',
        'name' => 'Tajikistan',
      ),
      220 => 
      array (
        'code' => 'TZ',
        'name' => 'Tanzania, United Republic of',
      ),
      221 => 
      array (
        'code' => 'TH',
        'name' => 'Thailand',
      ),
      222 => 
      array (
        'code' => 'TL',
        'name' => 'Timor-Leste',
      ),
      223 => 
      array (
        'code' => 'TG',
        'name' => 'Togo',
      ),
      224 => 
      array (
        'code' => 'TK',
        'name' => 'Tokelau',
      ),
      225 => 
      array (
        'code' => 'TO',
        'name' => 'Tonga',
      ),
      226 => 
      array (
        'code' => 'TT',
        'name' => 'Trinidad and Tobago',
      ),
      227 => 
      array (
        'code' => 'TN',
        'name' => 'Tunisia',
      ),
      228 => 
      array (
        'code' => 'TR',
        'name' => 'Turkey',
      ),
      229 => 
      array (
        'code' => 'TM',
        'name' => 'Turkmenistan',
      ),
      230 => 
      array (
        'code' => 'TC',
        'name' => 'Turks and Caicos Islands',
      ),
      231 => 
      array (
        'code' => 'TV',
        'name' => 'Tuvalu',
      ),
      232 => 
      array (
        'code' => 'UG',
        'name' => 'Uganda',
      ),
      233 => 
      array (
        'code' => 'UA',
        'name' => 'Ukraine',
      ),
      234 => 
      array (
        'code' => 'AE',
        'name' => 'United Arab Emirates',
      ),
      235 => 
      array (
        'code' => 'UM',
        'name' => 'United States Minor Outlying Islands',
      ),
      236 => 
      array (
        'code' => 'UY',
        'name' => 'Uruguay',
      ),
      237 => 
      array (
        'code' => 'UZ',
        'name' => 'Uzbekistan',
      ),
      238 => 
      array (
        'code' => 'VU',
        'name' => 'Vanuatu',
      ),
      239 => 
      array (
        'code' => 'VE',
        'name' => 'Venezuela, Bolivarian Republic of',
      ),
      240 => 
      array (
        'code' => 'VN',
        'name' => 'Viet Nam',
      ),
      241 => 
      array (
        'code' => 'VG',
        'name' => 'Virgin Islands, British',
      ),
      242 => 
      array (
        'code' => 'VI',
        'name' => 'Virgin Islands, U.S.',
      ),
      243 => 
      array (
        'code' => 'WF',
        'name' => 'Wallis and Futuna',
      ),
      244 => 
      array (
        'code' => 'EH',
        'name' => 'Western Sahara',
      ),
      245 => 
      array (
        'code' => 'YE',
        'name' => 'Yemen',
      ),
      246 => 
      array (
        'code' => 'ZM',
        'name' => 'Zambia',
      ),
      247 => 
      array (
        'code' => 'ZW',
        'name' => 'Zimbabwe',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'stmp.gmail.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'abedmohamed38@gmail.com',
      'name' => NULL,
    ),
    'encryption' => 'tls',
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'expire' => 60,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'ttr' => 60,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'queue' => 'your-queue-url',
        'region' => 'us-east-1',
      ),
      'iron' => 
      array (
        'driver' => 'iron',
        'host' => 'mq-aws-us-east-1.iron.io',
        'token' => 'your-token',
        'project' => 'your-project-id',
        'queue' => 'your-queue-name',
        'encrypt' => true,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'mandrill' => 
    array (
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\Users\\Mohamed Aabed\\Downloads\\library-management-system-master\\library-management-system-master\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\Users\\Mohamed Aabed\\Downloads\\library-management-system-master\\library-management-system-master\\resources\\views',
    ),
    'compiled' => 'C:\\Users\\Mohamed Aabed\\Downloads\\library-management-system-master\\library-management-system-master\\storage\\framework\\views',
  ),
);
