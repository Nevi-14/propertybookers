<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YS83U66LdRM39HMt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gUktjsMrRrNfIfCk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CEnSKlyHc4i8grdh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CM21bT9FJH9apWOh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::isS0JTNF8YtMGXUA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IlZYdeWk5WZelP2t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nsrVdjF955fsNNKZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hjDvp9skX5gDNBVu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JNHXThP7kZ8egPuq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3RE0EF1j4ZKsexJw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ilq5BDr8rK9fmof',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bVjsbE6RsiJwkpQJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CAsAvku1S2algd8p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/manager/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5N41Y7PNWeG8dO5S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qN6wuN1nsrmM6AVM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w57ZCeq1Cjg61b9g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IqdGfe5R3N7FLrUq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HdBcS3ue2qxTT5O2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0rMPH9aY0uda5mZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WI3k9SXCKQm6Mdex',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H5GLKqunr10fDZ8G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4lLRMSzHcs30k2OP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/status/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nvlp762BSUuWK35o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XGc3y9BPwVlwtKRZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PQCi0HASQvGXFVNP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/state/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sTBJ73Aw2mspgNtV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/property/tracker' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracker.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w1BiqOVSpDvunsoT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/property/tracker/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kzrkmU2zSAu3zHWd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/property/tracker/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JNASFjBr9AxYLzwv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/property/tracker/notes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U8Y5jELXhCUTD9aQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VCwKr8uu9CD3VhiD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'appointment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oncehub' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'oncehub',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_local' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y1Fb4d1PCQLsv59I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M3TBBSz1zJvnAc4J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WqauOR6jm4TwKXrm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact/title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GO2jjbHH05bPK5dv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKW2o3pPCmQxCmWz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact/getTitles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::knvrdnNFpNNnECv7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact/storeTitle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aARsmyhD7sXPbiNm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/note' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vCMiQpSHW6Rn1dgj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact/check_email_availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3YEeH06gjKX7vLGW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/check_user_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVpoUAJufnzQRcJ4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lead' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tPOhex34ddwZW5GH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i32XIc4NZXxPhy8H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lead/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HBRDn1fcTiuL5r7Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lead/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GCt1oWY79k8kvhz1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/getTitles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4180k6LWuSuRGPiG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/getSources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EA26Dn5zDfhVtXxP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/storeSource' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9CD5PdH4lUqoJqAp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/getStatuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2e9yiAMXCIBcbLiT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/storeStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::isP3qZ3ep6I5Yxnn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/check_email_availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zex8irdNQJKQxmSS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getCountries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZCa0LroIQ4QONtsb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/taxrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N8Vy7eCjjJ9WkJO0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/taxrate/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kLDUNnoqRwcMMiv3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ibSeUVEa4VkNseSz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/currency/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H2FdIM8zUDM5TCuR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/paymentmode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZF9KaULIj1IvJfxn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/paymentmode/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0lKLN11AH778VTpr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mh43mmKyBBGp9buF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting/logo/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KnvHpFIqUnI4jvwO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kl553lsqx1og5gpg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VdtaSKDhpzOL9AYm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/formfield' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYYwftFVh8CBuMtA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/formfield/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uICIDCEh4fAZNlO8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/create_form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u5Xkp3kyH8n1crSA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/web_forms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vi3EjWGQt3GMx6e6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/web_form/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4aj3B4oJYGeamHBo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::43nK8gqWblbamMIx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/smtp/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::23PufTscuE6oKXBj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/smtp/cron_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gQhma5TaZyZgJ7ve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/productgroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N6HnI3VJzxNMApzQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/productgroup/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EwXTiweqv1LuX3AF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RnIaAmYGZq1KA7Zu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oyEUcok1fc5Vkl5W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y8ZzQYhCg49vVxtW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Pgj19WSb4prv0rW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cVJy8L4nNBbZHbzU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/proposal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wuQD97fpEZPx5vWG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/proposal/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CWPSC6q74EYiGYOd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RJIjuCJbtn8C6bkO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U7C4Y1smUu333SVj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2p0wPhqzSw1IcG5m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getProposalProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::21fThYEkzQC7gZp1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FEIDFYsIEIcTFJTk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r0dWxfBvqrenfgLw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oo5EDU6keEjWvYl9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kj3X59XUIH2S4N7b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wwcCB8IsMqcBL42X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice/confirm_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ee4mBT0uTT40uRHe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RnbIeTjQspzvTnSz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoice/getProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nhkdnhpbBmk6LrvT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoice/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RcBbm7XpDryj0rnI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoice/getInvoiceProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZorsHPQqWe3GLTPu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/estimate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::goYPICrKUVTz6eKu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/estimate/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xfjxyh9t3lwJj3tZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estimate/getProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A15CWC6I25hfQj9G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estimate/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CNgECuTPRqR3AEYz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estimate/getestimateProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yRlqsOMtjTsgvexM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hdgSsyG5RxHZhdgj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4triqdCK5P6hqyeL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sRXkYm4dJx1aLSgT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O3PAWC2rYtMkSMI4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a6tIsdD1AwGlu1xD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jgd6QVVhEhdvAdl4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0p6M76w4s8mkP5wU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pmeNSu9DA0L6cPyv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MkKjoCAallOPo8i7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5yzFbnRxicyPBzGE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reminder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sN1JthoY7QcyDPkg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reminder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x98pgITl1u3ueRHa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reminder/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ePooFjN2i80g41G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reminder/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::20sb5QBSwawX7vR1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reminder/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GYTkI2vJwdAbEklW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::shBMxmde7nwvLv1I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/role/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NSQjbWvFkRcyyjTl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vq8O3UCRnFY6Ia21',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2komSwxaIGtwqCag',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uPsUkk80K9yaQwIb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::blNYZTveZCFqxIhq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YmlcamSQAgqWSk3o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MKlg3Vg8WKOZUbeJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qfBgppnTLtGcTZsM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yniMhkqb6BpZjZCN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UAcxiWmwzi8AkKZa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/profile/update_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0gWHqm4Ya4lQ199B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/proposals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TbYR0NpXhQ3k6MvJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DbfyUzlOa7Uio8an',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/estimates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q9TV2puEMIdFpU4I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3VTLxGSOcCEIKrqR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoice/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PrujXnknAkQPYOTr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/envato' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VUN6cuaLClLlywZL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kQlWJqwpFcuSUaGf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/steps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvyR3LcWOufK6AHx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U9f6Hx4HFK776jKu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i4zNyRki21rbNZa2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|assword/reset/([^/]++)(*:34)|ro(?|p(?|erty/tracker/(?|show/([^/]++)(*:79)|([^/]++)(*:94)|destroy/([^/]++)(*:117)|notes(?|(*:133)|/(?|show/([^/]++)(*:158)|([^/]++)(*:174)|destroy/([^/]++)(*:198))))|osal/(?|e(?|mail/([^/]++)(*:234)|dit/([^/]++)(*:254))|create(?:/([^/]++)(?:/([^/]++))?)?(*:297)|update/([^/]++)(*:320)|destroy/([^/]++)(*:344)|proposal_pdf/([^/]++)(*:373)))|duct/(?|productgroup/(?|([^/]++)(*:415)|destroy/([^/]++)(*:439))|edit/([^/]++)(*:461)|update/([^/]++)(*:484)|destroy/([^/]++)(*:508))|ject/(?|edit/([^/]++)(*:538)|update/([^/]++)(*:561)|destroy/([^/]++)(*:585))))|/t(?|ask/(?|manager/(?|show/([^/]++)(*:632)|([^/]++)(*:648)|destroy/([^/]++)(*:672))|e(?|mail/([^/]++)(*:698)|dit/([^/]++)(*:718))|update/([^/]++)(*:742)|destroy/([^/]++)(*:766))|eam/lead/(?|show/([^/]++)(*:800)|([^/]++)(*:816)|destroy/([^/]++)(*:840)))|/notes/lead/(?|show/([^/]++)(*:878)|([^/]++)(*:894)|destroy/([^/]++)(*:918))|/stat(?|us/lead/(?|show/([^/]++)(*:959)|([^/]++)(*:975)|destroy/([^/]++)(*:999))|e/lead/(?|show/([^/]++)(*:1031)|([^/]++)(*:1048)|destroy/([^/]++)(*:1073)))|/ap(?|pointments/(?|([^/]++)(*:1112)|destroy/([^/]++)(*:1137))|i/(?|customer/note/([^/]++)(*:1174)|get(?|States/([^/]++)(*:1204)|Cities/([^/]++)(*:1228))|office/formfield/([^/]++)(*:1263)))|/c(?|ustomer/(?|create(?:/([^/]++))?(*:1310)|email/([^/]++)(*:1333)|show/([^/]++)(*:1355)|([^/]++)(*:1372)|destroy/([^/]++)(*:1397)|contact(?|(*:1416)|/(?|([^/]++)(*:1437)|makeContactPrimary/([^/]++)(*:1473)|destroy/([^/]++)(*:1498)))|([^/]++)/(?|notes(*:1526)|proposals(*:1544)|invoices(*:1561)|estimates(*:1579)|tasks(*:1593)|media(*:1607)|reminder(*:1624))|import(?|(*:1643)))|ontact/(?|leadCustomer/([^/]++)(*:1685)|title/(?|([^/]++)(*:1711)|destroy/([^/]++)(*:1736)))|lient/(?|password/reset/([^/]++)(*:1779)|estimate/toInvoice/([^/]++)/([^/]++)(*:1824)|invoice/get_details/([^/]++)(*:1861)))|/lead/(?|show/([^/]++)(*:1894)|([^/]++)(*:1911)|destroy/([^/]++)(*:1936)|([^/]++)/(?|proposals(*:1966)|tasks(*:1980)|media(*:1994)|reminders(*:2012))|s(?|ource(?|(*:2034)|/(?|([^/]++)(*:2055)|destroy/([^/]++)(*:2080)))|tatus(?|(*:2099)|/(?|([^/]++)(*:2120)|destroy/([^/]++)(*:2145))))|import(?|(*:2166))|webform/([^/]++)(*:2192))|/office/(?|taxrate/(?|([^/]++)(*:2232)|destroy/([^/]++)(*:2257))|currency/(?|([^/]++)(*:2287)|base/([^/]++)(*:2309)|destroy/([^/]++)(*:2334))|paymentmode/(?|([^/]++)(*:2367)|destroy/([^/]++)(*:2392))|general_setting/(?|terms/([^/]++)(*:2435)|([^/]++)(*:2452)|logo/([^/]++)(*:2474))|formfield/(?|([^/]++)(*:2505)|destroy/([^/]++)(*:2530))|web_form/(?|([^/]++)(*:2560)|destroy/([^/]++)(*:2585))|smtp/(?|([^/]++)(*:2611)|destroy/([^/]++)(*:2636)))|/invoice/(?|e(?|mail/([^/]++)(*:2676)|dit/([^/]++)(*:2697))|create(?:/([^/]++)(?:/([^/]++))?)?(*:2741)|update/([^/]++)(*:2765)|destroy/([^/]++)(*:2790)|get_details/([^/]++)(*:2819)|invoice_pdf/([^/]++)(*:2848))|/estimate/(?|toInvoice/([^/]++)(?|(*:2892)|/([^/]++)(*:2910))|e(?|mail/([^/]++)(*:2937)|dit/([^/]++)(*:2958)|stimate_pdf/([^/]++)(*:2987))|create(?:/([^/]++)(?:/([^/]++))?)?(*:3031)|update/([^/]++)(*:3055)|destroy/([^/]++)(*:3080))|/media/(?|edit/([^/]++)(*:3113)|update/([^/]++)(*:3137)|destroy/([^/]++)(*:3162))|/reminder/(?|e(?|mail/([^/]++)(*:3202)|dit/([^/]++)(*:3223))|update(?|/([^/]++)(*:3251)|Notification/([^/]++)(*:3281))|destroy/([^/]++)(*:3307))|/user/(?|([^/]++)(*:3334)|destroy/([^/]++)(*:3359)|import(?|(*:3377))|profile(?|(*:3397)|/(?|([^/]++)(*:3418)|update_password/([^/]++)(*:3451)))|role(?|(*:3469)|/(?|([^/]++)(*:3490)|de(?|fault/([^/]++)(*:3518)|stroy/([^/]++)(*:3541))|permissions(?|(*:3565)|/(?|([^/]++)(*:3586)|roleid(?|(*:3604)|(?:/([^/]++))?(*:3627)))))))|/form/([^/]++)(*:3656))/?$}sDu',
    ),
    3 => 
    array (
      34 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      79 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chester.show',
          ),
          1 => 
          array (
            0 => 'propertyTracker',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      94 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracker.update',
          ),
          1 => 
          array (
            0 => 'propertyTracker',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGeNyRP7ZrAJBP0u',
          ),
          1 => 
          array (
            0 => 'propertyTracker',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::flWRoXTk8EDDdlXc',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tracker.notes',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trakernotes.show',
          ),
          1 => 
          array (
            0 => 'propertyTrackerNotes',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fMLyvnyf5qZSWxNM',
          ),
          1 => 
          array (
            0 => 'propertyTrackerNotes',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::we1Iyst5KJfiylW6',
          ),
          1 => 
          array (
            0 => 'propertyTrackerNotes',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HXi5DtUlH79bjHum',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yV5MVYicBmKsAxU0',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gvB1X41mbzfoM8qK',
            'relation' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'relation',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eh7Ax42xft5CbUvd',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vRDyUrhOdn1iWLD7',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::neFUWpcS6I9mGdpY',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::puwyOxscIfJFa1Hj',
          ),
          1 => 
          array (
            0 => 'productGroup',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qwk9yAyJJqlzFeS3',
          ),
          1 => 
          array (
            0 => 'productGroup',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AqLfvk8JhkTPtur6',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nXYoZuwi5adlgNwS',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5bNq7fkPOlKXBAKs',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1jumgoRGSka7Rwy0',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WfYlMuoqR8aqWXjg',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3dzcbMzPi5Utyc5u',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iGu4P0RlEsZY4yXM',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BqHZ8SPrFjm1tou2',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sUa7vXEZQPvWIU6z',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gMH3ZfkBRoIaU95u',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iXQ7JGway9NEOzW0',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::83jgo82cfWMzvQsy',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s8OgLDjUxooHX35Y',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ezt4sN34ZiSPLPjO',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::447FZLs3PaS4WkrY',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IIMeogViMa2RU9OE',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wv0tiAxynqYOUp4F',
          ),
          1 => 
          array (
            0 => 'chesterTrackerNotes',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UmPHzGZNsrDwx857',
          ),
          1 => 
          array (
            0 => 'chesterTrackerNotes',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZGWbC0lfuMvr2BoD',
          ),
          1 => 
          array (
            0 => 'chesterTrackerNotes',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OeqWaUZfdqqGiaMr',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mhg2qnIcgCwxBlGw',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FeCP0pleugxpRsPF',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p4hZg9mmi6NxM8sS',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AH8EzNAlDCAt4edi',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6N81nsrhLCuCr76p',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TLc0SZjwoU5KMfek',
          ),
          1 => 
          array (
            0 => 'appointment',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AjErlK41E26jQgmQ',
          ),
          1 => 
          array (
            0 => 'appointment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nwzGaZgltbuGTgAO',
          ),
          1 => 
          array (
            0 => 'note',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.states',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.cities',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NLmcmYwgECG92ifm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wJqXqpW7Jr6YuX3h',
            'lead' => NULL,
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rRdlh49hyYktyMA0',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F8h1sC2HP7dU5ajj',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5qkbu4ffJFtanYSh',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pUpdtPH4g4da4FeZ',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N0CqknzkwRKpynlQ',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::js0BU4vhw89TTeht',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EdXCOLNKjEf0OzSA',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wvVfexKDweFakphB',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rvu1vubg4eqH9f9I',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dMW0cNWyc1DBRprg',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z44VD7A6JaJdM8Cy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s2fw6jAmFYOJGEYn',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lJtDMtEVJjyuJwDx',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::thjgkji8yfMtwiUc',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DURJhoQiYXQhH5SP',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pydmpfsNdlejZcfi',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kIYk8cWTWfcWeMl',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U51EJH6Aisj9gDm2',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lQfnm00IZcxjl0Af',
          ),
          1 => 
          array (
            0 => 'contactTitle',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1JmzvGscFLaV74Jh',
          ),
          1 => 
          array (
            0 => 'contactTitle',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dkE0sogTOFSPOykg',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HprfjUt5meaCm6mi',
          ),
          1 => 
          array (
            0 => 'estimate',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zh20a2KeDOH3xaCy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RbCkmUPNWKS6ittr',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zmuaUHqyjYpayolX',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0VYBGY5gdEQs9aNt',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_proposals',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_tasks',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_media',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_reminders',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::guZwJdG0iKe71ctG',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::USZp60x7PhmabI2H',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cVNAdl6z8fpWOnuJ',
          ),
          1 => 
          array (
            0 => 'leadSource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MU31yjzFx9BVTPfZ',
          ),
          1 => 
          array (
            0 => 'leadSource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9mPSIiD2kpvZctNm',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4OF6m0ZwYAOnnDW',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KrwwzX4w3ooemNqV',
          ),
          1 => 
          array (
            0 => 'leadStatus',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vJK6iwBLDyFEhAAV',
          ),
          1 => 
          array (
            0 => 'leadStatus',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wdpUBpTgyywMLZwU',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N9XSkInz7DiuaGQD',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a1gPpXPepeG2TTQJ',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PHnPcNFXxaD73jCL',
          ),
          1 => 
          array (
            0 => 'taxRate',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BrlqW5cMcsKcIKHS',
          ),
          1 => 
          array (
            0 => 'taxRate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BIxnZWQaWQYly7z2',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ggQHHyku414Lz1Vg',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A9lERpqFevvnVFdJ',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WUmaHFL4ivWIIJEr',
          ),
          1 => 
          array (
            0 => 'paymentMode',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NVzHeE19sNqyXvIy',
          ),
          1 => 
          array (
            0 => 'paymentMode',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kJVnmYpaXJIWtyco',
          ),
          1 => 
          array (
            0 => 'terms',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xlnuGU9NN0myY4cI',
          ),
          1 => 
          array (
            0 => 'company_name',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KcRehR6oakTw2g3f',
          ),
          1 => 
          array (
            0 => 'logo',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mtjGvedOK8Fqd4CS',
          ),
          1 => 
          array (
            0 => 'formfield',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ifzMlXGKJ020zttc',
          ),
          1 => 
          array (
            0 => 'formfield',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::og8vFilNqBqirO2D',
          ),
          1 => 
          array (
            0 => 'web_form',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ve5MtFh0IQIcSbaU',
          ),
          1 => 
          array (
            0 => 'web_form',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u4LXSCpRT7c8WPZH',
          ),
          1 => 
          array (
            0 => 'smtp',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KoTPUEL0lFOJb5DB',
          ),
          1 => 
          array (
            0 => 'smtp',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WUom2U0EzzFIUcaa',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NjlHD3EjpA5sHJW0',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2pi8AmCTXWmjFfLR',
            'relation' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'relation',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ohwlacuDNXzkMcoW',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vebqi9Z6bFCwFpn7',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MtgXFap68yfhTH9I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aCNR3BQV1J6NvcAD',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YCE8pVP5iPNnBUQb',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9CsTCfeB5UaTeZhW',
          ),
          1 => 
          array (
            0 => 'estimate',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DEUrqp0VqI2r45nL',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::drgxCWfoGaXfGX0o',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BmvIYeHuIzvHvqjx',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yZkcbhiJjhKdnIeL',
            'relation' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'relation',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g8GVIFxAWbTdhXnH',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r7TWTqeXuXc8xbZz',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sK8nDBrb3rJg6Hhj',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7O7koH714g444G9B',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zygJtUV7I43lGf8w',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lRI3es4kXfFt7EcG',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9sIqhC3KElWUHlVF',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dLIMuJOBchIaJnDw',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xMTT8bDJzhInnWfz',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::67DUK6Sq3olcI8gL',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cO3EJiWA9N0Gtjtr',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3359 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eIbnh7dH7VzGmYq7',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eIw7yJaYI72NeDwr',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XV6nNrmbC6Jv7XLM',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j64Bpu2ua203Xn7Q',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TpHN08KSZy5h2kcp',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c3f35ugoAJ7cpcUV',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b2TdWgQv7lcJdHcU',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4gnpzZwtwu3k7JYf',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3rwFirCuCCY3HLOm',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I2qT9nxeiZ7KHXdK',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q9Ieela7OsVBBIQ8',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post_role_permissions',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tkBfeOob2N09MDBz',
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x1tvcv8nP8g1vRE3',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions_role_id',
            'role' => NULL,
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YuK2mBgoeCeCd6Ya',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::YS83U66LdRM39HMt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::YS83U66LdRM39HMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gUktjsMrRrNfIfCk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@2HwlA8pPJHoN+ock4zgNNyNiFDi4ALB4GIhnfOHm8Os=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000030d8e67f00000000356aac1c";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gUktjsMrRrNfIfCk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CEnSKlyHc4i8grdh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":609:{@i1i1wT1EimMeqsCSoKiR+3eLJa0eKV38WGYTER93TAA=.a:5:{s:3:"use";a:0:{}s:8:"function";s:396:"function () {
    try {
        \\Illuminate\\Support\\Facades\\DB::connection()->getPdo();
        $logo = \\App\\Models\\SingleRowData::where(\'field_name\',\'logo_file\')->first();
        if($logo != null){
            $logo = $logo->field_value;
        }else{
            $logo = null;
        }
    } catch (\\Exception $e) {
        $logo = null;
    }
    return \\view(\'welcome\',\\compact(\'logo\'));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000030d8e66100000000356aac1c";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CEnSKlyHc4i8grdh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CM21bT9FJH9apWOh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm_counter',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":294:{@26QMt/YdHlnySFiHpI+3iac6eNevEvNLQrTnCSd1Evg=.a:5:{s:3:"use";a:0:{}s:8:"function";s:82:"function(){
    \\session()->put(\'refresh\',true);
    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000030d8e66300000000356aac1c";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CM21bT9FJH9apWOh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::isS0JTNF8YtMGXUA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":628:{@7rzvcmGDI1wB4O7V04Msj9G6IBOKTvBeQjqZBgqO3DU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:415:"function(\\Illuminate\\Http\\Request $request){
    if (! \\in_array($request->lang_code, \\config(\'constants.LOCALES\'))) {
        \\abort(400);
    }
    \\Illuminate\\Support\\Facades\\App::setLocale($request->lang_code);
    \\session()->put(\'applocale\', $request->lang_code);
    $minutes = 9999;
    \\Illuminate\\Support\\Facades\\Cookie::queue("applocale", $request->lang_code, $minutes);
    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000030d8e66500000000356aac1c";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::isS0JTNF8YtMGXUA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IlZYdeWk5WZelP2t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::IlZYdeWk5WZelP2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nsrVdjF955fsNNKZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::nsrVdjF955fsNNKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hjDvp9skX5gDNBVu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@services',
        'controller' => 'App\\Http\\Controllers\\HomePageController@services',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::hjDvp9skX5gDNBVu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JNHXThP7kZ8egPuq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@about',
        'controller' => 'App\\Http\\Controllers\\HomePageController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::JNHXThP7kZ8egPuq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3RE0EF1j4ZKsexJw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@rates',
        'controller' => 'App\\Http\\Controllers\\HomePageController@rates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::3RE0EF1j4ZKsexJw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4ilq5BDr8rK9fmof' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@contact',
        'controller' => 'App\\Http\\Controllers\\HomePageController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::4ilq5BDr8rK9fmof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bVjsbE6RsiJwkpQJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-manager',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@index',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::bVjsbE6RsiJwkpQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5N41Y7PNWeG8dO5S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/manager/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-manager',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@create',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5N41Y7PNWeG8dO5S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CAsAvku1S2algd8p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'task/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-manager',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@store',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CAsAvku1S2algd8p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iGu4P0RlEsZY4yXM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/manager/show/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-manager',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@show',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::iGu4P0RlEsZY4yXM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BqHZ8SPrFjm1tou2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'task/manager/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-manager',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@update',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::BqHZ8SPrFjm1tou2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sUa7vXEZQPvWIU6z' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'task/manager/destroy/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-manager',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::sUa7vXEZQPvWIU6z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qN6wuN1nsrmM6AVM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@index',
        'controller' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qN6wuN1nsrmM6AVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IqdGfe5R3N7FLrUq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@create',
        'controller' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::IqdGfe5R3N7FLrUq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w57ZCeq1Cjg61b9g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@store',
        'controller' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::w57ZCeq1Cjg61b9g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wv0tiAxynqYOUp4F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notes/lead/show/{chesterTrackerNotes}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@show',
        'controller' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wv0tiAxynqYOUp4F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UmPHzGZNsrDwx857' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'notes/lead/{chesterTrackerNotes}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@update',
        'controller' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::UmPHzGZNsrDwx857',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZGWbC0lfuMvr2BoD' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'notes/lead/destroy/{chesterTrackerNotes}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@destroy',
        'controller' => 'App\\Http\\Controllers\\ChesterTrackerNotesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZGWbC0lfuMvr2BoD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HdBcS3ue2qxTT5O2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@index',
        'controller' => 'App\\Http\\Controllers\\TeamController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::HdBcS3ue2qxTT5O2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WI3k9SXCKQm6Mdex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@create',
        'controller' => 'App\\Http\\Controllers\\TeamController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::WI3k9SXCKQm6Mdex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c0rMPH9aY0uda5mZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@store',
        'controller' => 'App\\Http\\Controllers\\TeamController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::c0rMPH9aY0uda5mZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ezt4sN34ZiSPLPjO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/lead/show/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@show',
        'controller' => 'App\\Http\\Controllers\\TeamController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Ezt4sN34ZiSPLPjO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::447FZLs3PaS4WkrY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'team/lead/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\TeamController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::447FZLs3PaS4WkrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IIMeogViMa2RU9OE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'team/lead/destroy/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\TeamController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::IIMeogViMa2RU9OE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H5GLKqunr10fDZ8G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StatusController@index',
        'controller' => 'App\\Http\\Controllers\\StatusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::H5GLKqunr10fDZ8G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nvlp762BSUuWK35o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'status/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StatusController@create',
        'controller' => 'App\\Http\\Controllers\\StatusController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::nvlp762BSUuWK35o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4lLRMSzHcs30k2OP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StatusController@store',
        'controller' => 'App\\Http\\Controllers\\StatusController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::4lLRMSzHcs30k2OP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OeqWaUZfdqqGiaMr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'status/lead/show/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StatusController@show',
        'controller' => 'App\\Http\\Controllers\\StatusController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::OeqWaUZfdqqGiaMr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Mhg2qnIcgCwxBlGw' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'status/lead/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StatusController@update',
        'controller' => 'App\\Http\\Controllers\\StatusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Mhg2qnIcgCwxBlGw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FeCP0pleugxpRsPF' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'status/lead/destroy/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StatusController@destroy',
        'controller' => 'App\\Http\\Controllers\\StatusController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::FeCP0pleugxpRsPF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XGc3y9BPwVlwtKRZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StateController@index',
        'controller' => 'App\\Http\\Controllers\\StateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::XGc3y9BPwVlwtKRZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sTBJ73Aw2mspgNtV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StateController@create',
        'controller' => 'App\\Http\\Controllers\\StateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::sTBJ73Aw2mspgNtV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PQCi0HASQvGXFVNP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StateController@store',
        'controller' => 'App\\Http\\Controllers\\StateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::PQCi0HASQvGXFVNP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p4hZg9mmi6NxM8sS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state/lead/show/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StateController@show',
        'controller' => 'App\\Http\\Controllers\\StateController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::p4hZg9mmi6NxM8sS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AH8EzNAlDCAt4edi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'state/lead/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StateController@update',
        'controller' => 'App\\Http\\Controllers\\StateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::AH8EzNAlDCAt4edi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6N81nsrhLCuCr76p' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'state/lead/destroy/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StateController@destroy',
        'controller' => 'App\\Http\\Controllers\\StateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::6N81nsrhLCuCr76p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tracker.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'property/tracker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@index',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'tracker.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kzrkmU2zSAu3zHWd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'property/tracker/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@create',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kzrkmU2zSAu3zHWd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JNASFjBr9AxYLzwv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'property/tracker/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@sort',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@sort',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::JNASFjBr9AxYLzwv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w1BiqOVSpDvunsoT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'property/tracker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@store',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::w1BiqOVSpDvunsoT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'chester.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'property/tracker/show/{propertyTracker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@show',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'chester.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tracker.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'property/tracker/{propertyTracker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@update',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'tracker.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WGeNyRP7ZrAJBP0u' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'property/tracker/destroy/{propertyTracker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerController@destroy',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::WGeNyRP7ZrAJBP0u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::flWRoXTk8EDDdlXc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'property/tracker/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@index',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::flWRoXTk8EDDdlXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U8Y5jELXhCUTD9aQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'property/tracker/notes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@create',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::U8Y5jELXhCUTD9aQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tracker.notes' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'property/tracker/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@store',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'tracker.notes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trakernotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'property/tracker/notes/show/{propertyTrackerNotes}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@show',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'trakernotes.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fMLyvnyf5qZSWxNM' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'property/tracker/notes/{propertyTrackerNotes}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@update',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::fMLyvnyf5qZSWxNM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::we1Iyst5KJfiylW6' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'property/tracker/notes/destroy/{propertyTrackerNotes}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@destroy',
        'controller' => 'App\\Http\\Controllers\\PropertyTrackerNotesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::we1Iyst5KJfiylW6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VCwKr8uu9CD3VhiD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@index',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::VCwKr8uu9CD3VhiD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'appointment.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@store',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'appointment.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TLc0SZjwoU5KMfek' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'appointments/{appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@update',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::TLc0SZjwoU5KMfek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AjErlK41E26jQgmQ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'appointments/destroy/{appointment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::AjErlK41E26jQgmQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'oncehub' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oncehub',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OnceHubController@index',
        'controller' => 'App\\Http\\Controllers\\OnceHubController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'oncehub',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'upload.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUploadController@store',
        'controller' => 'App\\Http\\Controllers\\FileUploadController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'upload.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y1Fb4d1PCQLsv59I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_local',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUploadController@download_local',
        'controller' => 'App\\Http\\Controllers\\FileUploadController@download_local',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Y1Fb4d1PCQLsv59I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wJqXqpW7Jr6YuX3h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/create/{lead?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@create',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wJqXqpW7Jr6YuX3h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rRdlh49hyYktyMA0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/email/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::rRdlh49hyYktyMA0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M3TBBSz1zJvnAc4J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::M3TBBSz1zJvnAc4J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WqauOR6jm4TwKXrm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@store',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::WqauOR6jm4TwKXrm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::F8h1sC2HP7dU5ajj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/show/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@show',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::F8h1sC2HP7dU5ajj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5qkbu4ffJFtanYSh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@update',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5qkbu4ffJFtanYSh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pUpdtPH4g4da4FeZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/destroy/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::pUpdtPH4g4da4FeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N0CqknzkwRKpynlQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@storeContact',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@storeContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::N0CqknzkwRKpynlQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::js0BU4vhw89TTeht' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/contact/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@updateContact',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@updateContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::js0BU4vhw89TTeht',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EdXCOLNKjEf0OzSA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/contact/makeContactPrimary/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@makeContactPrimary',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@makeContactPrimary',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::EdXCOLNKjEf0OzSA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wvVfexKDweFakphB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/contact/destroy/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@destroyContact',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@destroyContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wvVfexKDweFakphB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U51EJH6Aisj9gDm2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'contact/leadCustomer/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@leadToCustomer',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@leadToCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::U51EJH6Aisj9gDm2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rvu1vubg4eqH9f9I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::rvu1vubg4eqH9f9I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dMW0cNWyc1DBRprg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/proposals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getProposals',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getProposals',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::dMW0cNWyc1DBRprg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z44VD7A6JaJdM8Cy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getInvoices',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getInvoices',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::z44VD7A6JaJdM8Cy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::s2fw6jAmFYOJGEYn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/estimates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getEstimates',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getEstimates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::s2fw6jAmFYOJGEYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lJtDMtEVJjyuJwDx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getTasks',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getTasks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::lJtDMtEVJjyuJwDx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::thjgkji8yfMtwiUc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getMedia',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getMedia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::thjgkji8yfMtwiUc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DURJhoQiYXQhH5SP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getReminder',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getReminder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::DURJhoQiYXQhH5SP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GO2jjbHH05bPK5dv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::GO2jjbHH05bPK5dv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NKW2o3pPCmQxCmWz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@store',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NKW2o3pPCmQxCmWz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lQfnm00IZcxjl0Af' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/title/{contactTitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@update',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::lQfnm00IZcxjl0Af',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1JmzvGscFLaV74Jh' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'contact/title/destroy/{contactTitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::1JmzvGscFLaV74Jh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pydmpfsNdlejZcfi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@import',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::pydmpfsNdlejZcfi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7kIYk8cWTWfcWeMl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@importStore',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::7kIYk8cWTWfcWeMl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::knvrdnNFpNNnECv7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact/getTitles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@getContactTitles',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@getContactTitles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::knvrdnNFpNNnECv7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aARsmyhD7sXPbiNm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact/storeTitle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@storeTitle',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@storeTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::aARsmyhD7sXPbiNm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vCMiQpSHW6Rn1dgj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/note',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@storeNote',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@storeNote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::vCMiQpSHW6Rn1dgj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nwzGaZgltbuGTgAO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/customer/note/{note}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@destroyNote',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@destroyNote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::nwzGaZgltbuGTgAO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3YEeH06gjKX7vLGW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact/check_email_availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@check_email_availability',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@check_email_availability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::3YEeH06gjKX7vLGW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yVpoUAJufnzQRcJ4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/check_user_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@check_user_id',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@check_user_id',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::yVpoUAJufnzQRcJ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tPOhex34ddwZW5GH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@index',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::tPOhex34ddwZW5GH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HBRDn1fcTiuL5r7Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@create',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::HBRDn1fcTiuL5r7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i32XIc4NZXxPhy8H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@store',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::i32XIc4NZXxPhy8H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GCt1oWY79k8kvhz1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@sort',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@sort',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::GCt1oWY79k8kvhz1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RbCkmUPNWKS6ittr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/show/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@show',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::RbCkmUPNWKS6ittr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zmuaUHqyjYpayolX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'lead/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@update',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::zmuaUHqyjYpayolX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0VYBGY5gdEQs9aNt' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lead/destroy/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@destroy',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::0VYBGY5gdEQs9aNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_proposals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/proposals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getProposals',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getProposals',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_proposals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_tasks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getTasks',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getTasks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_tasks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_media' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getMedia',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getMedia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_media',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_reminders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/reminders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getReminders',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getReminders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_reminders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::guZwJdG0iKe71ctG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/source',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@index',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::guZwJdG0iKe71ctG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::USZp60x7PhmabI2H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/source',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@store',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::USZp60x7PhmabI2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cVNAdl6z8fpWOnuJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/source/{leadSource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@update',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::cVNAdl6z8fpWOnuJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MU31yjzFx9BVTPfZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lead/source/destroy/{leadSource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::MU31yjzFx9BVTPfZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9mPSIiD2kpvZctNm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@index',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::9mPSIiD2kpvZctNm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v4OF6m0ZwYAOnnDW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@store',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::v4OF6m0ZwYAOnnDW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KrwwzX4w3ooemNqV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/status/{leadStatus}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@update',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KrwwzX4w3ooemNqV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vJK6iwBLDyFEhAAV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lead/status/destroy/{leadStatus}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::vJK6iwBLDyFEhAAV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wdpUBpTgyywMLZwU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@import',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wdpUBpTgyywMLZwU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N9XSkInz7DiuaGQD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@importStore',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::N9XSkInz7DiuaGQD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4180k6LWuSuRGPiG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lead/getTitles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getTitles',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getTitles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::4180k6LWuSuRGPiG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EA26Dn5zDfhVtXxP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lead/getSources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@getleadSources',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@getleadSources',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::EA26Dn5zDfhVtXxP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9CD5PdH4lUqoJqAp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lead/storeSource',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@storeSource',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@storeSource',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::9CD5PdH4lUqoJqAp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2e9yiAMXCIBcbLiT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lead/getStatuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@getleadStatuses',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@getleadStatuses',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::2e9yiAMXCIBcbLiT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::isP3qZ3ep6I5Yxnn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lead/storeStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@storeStatus',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@storeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::isP3qZ3ep6I5Yxnn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zex8irdNQJKQxmSS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lead/check_email_availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@check_email_availability',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@check_email_availability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::Zex8irdNQJKQxmSS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZCa0LroIQ4QONtsb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getCountries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationController@getCountries',
        'controller' => 'App\\Http\\Controllers\\LocationController@getCountries',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZCa0LroIQ4QONtsb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getStates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationController@getStates',
        'controller' => 'App\\Http\\Controllers\\LocationController@getStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'location.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getCities/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationController@getCities',
        'controller' => 'App\\Http\\Controllers\\LocationController@getCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'location.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N8Vy7eCjjJ9WkJO0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/taxrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::N8Vy7eCjjJ9WkJO0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kLDUNnoqRwcMMiv3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/taxrate/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::kLDUNnoqRwcMMiv3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PHnPcNFXxaD73jCL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/taxrate/{taxRate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::PHnPcNFXxaD73jCL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BrlqW5cMcsKcIKHS' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/taxrate/destroy/{taxRate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::BrlqW5cMcsKcIKHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ibSeUVEa4VkNseSz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ibSeUVEa4VkNseSz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H2FdIM8zUDM5TCuR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/currency/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::H2FdIM8zUDM5TCuR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BIxnZWQaWQYly7z2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::BIxnZWQaWQYly7z2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ggQHHyku414Lz1Vg' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/currency/base/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@baseUpdate',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@baseUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ggQHHyku414Lz1Vg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A9lERpqFevvnVFdJ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/currency/destroy/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::A9lERpqFevvnVFdJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZF9KaULIj1IvJfxn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/paymentmode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ZF9KaULIj1IvJfxn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0lKLN11AH778VTpr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/paymentmode/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::0lKLN11AH778VTpr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WUmaHFL4ivWIIJEr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/paymentmode/{paymentMode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::WUmaHFL4ivWIIJEr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NVzHeE19sNqyXvIy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/paymentmode/destroy/{paymentMode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::NVzHeE19sNqyXvIy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mh43mmKyBBGp9buF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/general_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
          3 => 'password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::mh43mmKyBBGp9buF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KnvHpFIqUnI4jvwO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/general_setting/logo/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::KnvHpFIqUnI4jvwO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Kl553lsqx1og5gpg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/general_setting/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@storeDetails',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@storeDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::Kl553lsqx1og5gpg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VdtaSKDhpzOL9AYm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/general_setting/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@terms',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@terms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::VdtaSKDhpzOL9AYm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kJVnmYpaXJIWtyco' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/general_setting/terms/{terms}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@termsUpdate',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@termsUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::kJVnmYpaXJIWtyco',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xlnuGU9NN0myY4cI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/general_setting/{company_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@updateDetails',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@updateDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::xlnuGU9NN0myY4cI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KcRehR6oakTw2g3f' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/general_setting/logo/{logo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::KcRehR6oakTw2g3f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vYYwftFVh8CBuMtA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/formfield',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::vYYwftFVh8CBuMtA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uICIDCEh4fAZNlO8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/formfield/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::uICIDCEh4fAZNlO8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mtjGvedOK8Fqd4CS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/formfield/{formfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::mtjGvedOK8Fqd4CS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ifzMlXGKJ020zttc' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/formfield/destroy/{formfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ifzMlXGKJ020zttc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u5Xkp3kyH8n1crSA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/create_form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@create',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::u5Xkp3kyH8n1crSA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Vi3EjWGQt3GMx6e6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/web_forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::Vi3EjWGQt3GMx6e6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4aj3B4oJYGeamHBo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/web_form/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::4aj3B4oJYGeamHBo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::og8vFilNqBqirO2D' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/web_form/{web_form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::og8vFilNqBqirO2D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ve5MtFh0IQIcSbaU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/web_form/destroy/{web_form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ve5MtFh0IQIcSbaU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::43nK8gqWblbamMIx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
          3 => 'password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::43nK8gqWblbamMIx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::23PufTscuE6oKXBj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/smtp/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::23PufTscuE6oKXBj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gQhma5TaZyZgJ7ve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/smtp/cron_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@setCronStatus',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@setCronStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::gQhma5TaZyZgJ7ve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u4LXSCpRT7c8WPZH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/smtp/{smtp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::u4LXSCpRT7c8WPZH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KoTPUEL0lFOJb5DB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/smtp/destroy/{smtp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::KoTPUEL0lFOJb5DB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NLmcmYwgECG92ifm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/office/formfield/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@getFormField',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@getFormField',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::NLmcmYwgECG92ifm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N6HnI3VJzxNMApzQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/productgroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@index',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::N6HnI3VJzxNMApzQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EwXTiweqv1LuX3AF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/productgroup/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@store',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::EwXTiweqv1LuX3AF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::puwyOxscIfJFa1Hj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/productgroup/{productGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@update',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::puwyOxscIfJFa1Hj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Qwk9yAyJJqlzFeS3' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/productgroup/destroy/{productGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::Qwk9yAyJJqlzFeS3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RnIaAmYGZq1KA7Zu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\ProductController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::RnIaAmYGZq1KA7Zu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oyEUcok1fc5Vkl5W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\ProductController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::oyEUcok1fc5Vkl5W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y8ZzQYhCg49vVxtW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::Y8ZzQYhCg49vVxtW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AqLfvk8JhkTPtur6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/edit/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::AqLfvk8JhkTPtur6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nXYoZuwi5adlgNwS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/update/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::nXYoZuwi5adlgNwS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5bNq7fkPOlKXBAKs' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/destroy/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::5bNq7fkPOlKXBAKs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7Pgj19WSb4prv0rW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@import',
        'controller' => 'App\\Http\\Controllers\\ProductController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::7Pgj19WSb4prv0rW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cVJy8L4nNBbZHbzU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@importStore',
        'controller' => 'App\\Http\\Controllers\\ProductController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::cVJy8L4nNBbZHbzU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wuQD97fpEZPx5vWG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@index',
        'controller' => 'App\\Http\\Controllers\\ProposalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::wuQD97fpEZPx5vWG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HXi5DtUlH79bjHum' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/email/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\ProposalController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::HXi5DtUlH79bjHum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gvB1X41mbzfoM8qK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/create/{relation?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@create',
        'controller' => 'App\\Http\\Controllers\\ProposalController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::gvB1X41mbzfoM8qK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CWPSC6q74EYiGYOd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'proposal/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@store',
        'controller' => 'App\\Http\\Controllers\\ProposalController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::CWPSC6q74EYiGYOd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yV5MVYicBmKsAxU0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/edit/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@edit',
        'controller' => 'App\\Http\\Controllers\\ProposalController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::yV5MVYicBmKsAxU0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Eh7Ax42xft5CbUvd' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'proposal/update/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@update',
        'controller' => 'App\\Http\\Controllers\\ProposalController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::Eh7Ax42xft5CbUvd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vRDyUrhOdn1iWLD7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'proposal/destroy/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProposalController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::vRDyUrhOdn1iWLD7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::neFUWpcS6I9mGdpY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/proposal_pdf/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@proposal_pdf',
        'controller' => 'App\\Http\\Controllers\\ProposalController@proposal_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::neFUWpcS6I9mGdpY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RJIjuCJbtn8C6bkO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getProduct',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::RJIjuCJbtn8C6bkO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U7C4Y1smUu333SVj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::U7C4Y1smUu333SVj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2p0wPhqzSw1IcG5m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getLeads',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::2p0wPhqzSw1IcG5m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::21fThYEkzQC7gZp1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getProposalProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getProposalProducts',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getProposalProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::21fThYEkzQC7gZp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FEIDFYsIEIcTFJTk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::FEIDFYsIEIcTFJTk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r0dWxfBvqrenfgLw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::r0dWxfBvqrenfgLw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Oo5EDU6keEjWvYl9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'project/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::Oo5EDU6keEjWvYl9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1jumgoRGSka7Rwy0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/edit/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::1jumgoRGSka7Rwy0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WfYlMuoqR8aqWXjg' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'project/update/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::WfYlMuoqR8aqWXjg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3dzcbMzPi5Utyc5u' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'project/destroy/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::3dzcbMzPi5Utyc5u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Kj3X59XUIH2S4N7b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::Kj3X59XUIH2S4N7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WUom2U0EzzFIUcaa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/email/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::WUom2U0EzzFIUcaa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2pi8AmCTXWmjFfLR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/create/{relation?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::2pi8AmCTXWmjFfLR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wwcCB8IsMqcBL42X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::wwcCB8IsMqcBL42X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ee4mBT0uTT40uRHe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice/confirm_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@confirm_payment',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@confirm_payment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::ee4mBT0uTT40uRHe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NjlHD3EjpA5sHJW0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/edit/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::NjlHD3EjpA5sHJW0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ohwlacuDNXzkMcoW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'invoice/update/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::ohwlacuDNXzkMcoW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vebqi9Z6bFCwFpn7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'invoice/destroy/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::vebqi9Z6bFCwFpn7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MtgXFap68yfhTH9I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/get_details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@get_pay_details',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@get_pay_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::MtgXFap68yfhTH9I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RnbIeTjQspzvTnSz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@pay_invoice',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@pay_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::RnbIeTjQspzvTnSz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aCNR3BQV1J6NvcAD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/invoice_pdf/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@invoice_pdf',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@invoice_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::aCNR3BQV1J6NvcAD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nhkdnhpbBmk6LrvT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoice/getProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@getProduct',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::nhkdnhpbBmk6LrvT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RcBbm7XpDryj0rnI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoice/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::RcBbm7XpDryj0rnI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZorsHPQqWe3GLTPu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoice/getInvoiceProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@getInvoiceProducts',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@getInvoiceProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZorsHPQqWe3GLTPu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YCE8pVP5iPNnBUQb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'estimate/toInvoice/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::YCE8pVP5iPNnBUQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::goYPICrKUVTz6eKu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@index',
        'controller' => 'App\\Http\\Controllers\\EstimateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::goYPICrKUVTz6eKu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DEUrqp0VqI2r45nL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/email/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\EstimateController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::DEUrqp0VqI2r45nL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yZkcbhiJjhKdnIeL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/create/{relation?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@create',
        'controller' => 'App\\Http\\Controllers\\EstimateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::yZkcbhiJjhKdnIeL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Xfjxyh9t3lwJj3tZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'estimate/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@store',
        'controller' => 'App\\Http\\Controllers\\EstimateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::Xfjxyh9t3lwJj3tZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::drgxCWfoGaXfGX0o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/edit/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@edit',
        'controller' => 'App\\Http\\Controllers\\EstimateController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::drgxCWfoGaXfGX0o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g8GVIFxAWbTdhXnH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'estimate/update/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@update',
        'controller' => 'App\\Http\\Controllers\\EstimateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::g8GVIFxAWbTdhXnH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9CsTCfeB5UaTeZhW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/toInvoice/{estimate}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::9CsTCfeB5UaTeZhW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r7TWTqeXuXc8xbZz' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'estimate/destroy/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@destroy',
        'controller' => 'App\\Http\\Controllers\\EstimateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::r7TWTqeXuXc8xbZz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BmvIYeHuIzvHvqjx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/estimate_pdf/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@estimate_pdf',
        'controller' => 'App\\Http\\Controllers\\EstimateController@estimate_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::BmvIYeHuIzvHvqjx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A15CWC6I25hfQj9G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estimate/getProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@getProduct',
        'controller' => 'App\\Http\\Controllers\\EstimateController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::A15CWC6I25hfQj9G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CNgECuTPRqR3AEYz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estimate/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\EstimateController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::CNgECuTPRqR3AEYz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yRlqsOMtjTsgvexM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estimate/getestimateProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@getestimateProducts',
        'controller' => 'App\\Http\\Controllers\\EstimateController@getestimateProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::yRlqsOMtjTsgvexM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hdgSsyG5RxHZhdgj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\TaskController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::hdgSsyG5RxHZhdgj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gMH3ZfkBRoIaU95u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/email/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@mailToStaff',
        'controller' => 'App\\Http\\Controllers\\TaskController@mailToStaff',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::gMH3ZfkBRoIaU95u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4triqdCK5P6hqyeL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@create',
        'controller' => 'App\\Http\\Controllers\\TaskController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::4triqdCK5P6hqyeL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sRXkYm4dJx1aLSgT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'task/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\TaskController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::sRXkYm4dJx1aLSgT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iXQ7JGway9NEOzW0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/edit/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::iXQ7JGway9NEOzW0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::83jgo82cfWMzvQsy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'task/update/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@update',
        'controller' => 'App\\Http\\Controllers\\TaskController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::83jgo82cfWMzvQsy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::s8OgLDjUxooHX35Y' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'task/destroy/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::s8OgLDjUxooHX35Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::O3PAWC2rYtMkSMI4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\TaskController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::O3PAWC2rYtMkSMI4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a6tIsdD1AwGlu1xD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@getLeads',
        'controller' => 'App\\Http\\Controllers\\TaskController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::a6tIsdD1AwGlu1xD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jgd6QVVhEhdvAdl4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@index',
        'controller' => 'App\\Http\\Controllers\\MediaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::jgd6QVVhEhdvAdl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0p6M76w4s8mkP5wU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@create',
        'controller' => 'App\\Http\\Controllers\\MediaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::0p6M76w4s8mkP5wU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pmeNSu9DA0L6cPyv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@store',
        'controller' => 'App\\Http\\Controllers\\MediaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::pmeNSu9DA0L6cPyv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sK8nDBrb3rJg6Hhj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media/edit/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@edit',
        'controller' => 'App\\Http\\Controllers\\MediaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::sK8nDBrb3rJg6Hhj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7O7koH714g444G9B' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'media/update/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@update',
        'controller' => 'App\\Http\\Controllers\\MediaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::7O7koH714g444G9B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zygJtUV7I43lGf8w' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'media/destroy/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@destroy',
        'controller' => 'App\\Http\\Controllers\\MediaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::zygJtUV7I43lGf8w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MkKjoCAallOPo8i7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\MediaController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::MkKjoCAallOPo8i7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5yzFbnRxicyPBzGE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@getLeads',
        'controller' => 'App\\Http\\Controllers\\MediaController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::5yzFbnRxicyPBzGE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sN1JthoY7QcyDPkg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@index',
        'controller' => 'App\\Http\\Controllers\\ReminderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::sN1JthoY7QcyDPkg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lRI3es4kXfFt7EcG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder/email/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@mailToStaff',
        'controller' => 'App\\Http\\Controllers\\ReminderController@mailToStaff',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::lRI3es4kXfFt7EcG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::x98pgITl1u3ueRHa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@create',
        'controller' => 'App\\Http\\Controllers\\ReminderController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::x98pgITl1u3ueRHa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9ePooFjN2i80g41G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reminder/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@store',
        'controller' => 'App\\Http\\Controllers\\ReminderController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::9ePooFjN2i80g41G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9sIqhC3KElWUHlVF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder/edit/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@edit',
        'controller' => 'App\\Http\\Controllers\\ReminderController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::9sIqhC3KElWUHlVF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dLIMuJOBchIaJnDw' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'reminder/update/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@update',
        'controller' => 'App\\Http\\Controllers\\ReminderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::dLIMuJOBchIaJnDw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xMTT8bDJzhInnWfz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'reminder/updateNotification/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@updateNotification',
        'controller' => 'App\\Http\\Controllers\\ReminderController@updateNotification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::xMTT8bDJzhInnWfz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::67DUK6Sq3olcI8gL' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'reminder/destroy/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReminderController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::67DUK6Sq3olcI8gL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::20sb5QBSwawX7vR1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reminder/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\ReminderController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::20sb5QBSwawX7vR1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GYTkI2vJwdAbEklW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reminder/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@getLeads',
        'controller' => 'App\\Http\\Controllers\\ReminderController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::GYTkI2vJwdAbEklW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::shBMxmde7nwvLv1I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::shBMxmde7nwvLv1I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cO3EJiWA9N0Gtjtr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cO3EJiWA9N0Gtjtr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eIbnh7dH7VzGmYq7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/destroy/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eIbnh7dH7VzGmYq7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eIw7yJaYI72NeDwr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@import',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eIw7yJaYI72NeDwr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XV6nNrmbC6Jv7XLM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@importStore',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XV6nNrmbC6Jv7XLM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::j64Bpu2ua203Xn7Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@userProfile',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@userProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::j64Bpu2ua203Xn7Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TpHN08KSZy5h2kcp' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@updatePorfile',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@updatePorfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::TpHN08KSZy5h2kcp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c3f35ugoAJ7cpcUV' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/update_password/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@updatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::c3f35ugoAJ7cpcUV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b2TdWgQv7lcJdHcU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::b2TdWgQv7lcJdHcU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NSQjbWvFkRcyyjTl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/role/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NSQjbWvFkRcyyjTl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4gnpzZwtwu3k7JYf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4gnpzZwtwu3k7JYf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3rwFirCuCCY3HLOm' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/role/default/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@default',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@default',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3rwFirCuCCY3HLOm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I2qT9nxeiZ7KHXdK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/role/destroy/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::I2qT9nxeiZ7KHXdK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q9Ieela7OsVBBIQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/role/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@index',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Q9Ieela7OsVBBIQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'post_role_permissions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/role/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@store',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'post_role_permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tkBfeOob2N09MDBz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/role/permissions/{module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@update',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tkBfeOob2N09MDBz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::x1tvcv8nP8g1vRE3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/role/permissions/roleid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@permissionsByUser',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@permissionsByUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::x1tvcv8nP8g1vRE3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions_role_id' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/role/permissions/roleid/{role?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@getPermissionsByUser',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@getPermissionsByUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'permissions_role_id',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Vq8O3UCRnFY6Ia21' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Vq8O3UCRnFY6Ia21',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uPsUkk80K9yaQwIb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::uPsUkk80K9yaQwIb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2komSwxaIGtwqCag' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2komSwxaIGtwqCag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::blNYZTveZCFqxIhq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPasswordEmail',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPasswordEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::blNYZTveZCFqxIhq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dkE0sogTOFSPOykg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@passwordReset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::dkE0sogTOFSPOykg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YmlcamSQAgqWSk3o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@setNewPassword',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@setNewPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::YmlcamSQAgqWSk3o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MKlg3Vg8WKOZUbeJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@home',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::MKlg3Vg8WKOZUbeJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qfBgppnTLtGcTZsM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@logout',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::qfBgppnTLtGcTZsM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yniMhkqb6BpZjZCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@profile',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::yniMhkqb6BpZjZCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UAcxiWmwzi8AkKZa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@profileUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::UAcxiWmwzi8AkKZa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0gWHqm4Ya4lQ199B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/profile/update_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@updatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::0gWHqm4Ya4lQ199B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TbYR0NpXhQ3k6MvJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/proposals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\ProposalController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\ProposalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::TbYR0NpXhQ3k6MvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DbfyUzlOa7Uio8an' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\InvoiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::DbfyUzlOa7Uio8an',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q9TV2puEMIdFpU4I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/estimates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\EstimateController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\EstimateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::Q9TV2puEMIdFpU4I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HprfjUt5meaCm6mi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/estimate/toInvoice/{estimate}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\EstimateController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\Client\\EstimateController@convertToInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::HprfjUt5meaCm6mi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3VTLxGSOcCEIKrqR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\MediaController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\MediaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::3VTLxGSOcCEIKrqR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zh20a2KeDOH3xaCy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoice/get_details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\InvoiceController@get_pay_details',
        'controller' => 'App\\Http\\Controllers\\Client\\InvoiceController@get_pay_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::Zh20a2KeDOH3xaCy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PrujXnknAkQPYOTr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/invoice/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\InvoiceController@pay_invoice',
        'controller' => 'App\\Http\\Controllers\\Client\\InvoiceController@pay_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::PrujXnknAkQPYOTr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YuK2mBgoeCeCd6Ya' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'form/{token}',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@getForm',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@getForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::YuK2mBgoeCeCd6Ya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a1gPpXPepeG2TTQJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/webform/{token}',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@webToLeadForm',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@webToLeadForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::a1gPpXPepeG2TTQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VUN6cuaLClLlywZL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'envato',
      'action' => 
      array (
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":255:{@wY4LSFFtafSfupDnaAH/ca2yApM9xoeEk6O6Ttm13wI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:43:"function(){
    return \\view(\'envato\');
  }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000030d8e74300000000356aac1c";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::VUN6cuaLClLlywZL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kQlWJqwpFcuSUaGf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":870:{@R0fivuXRwa0WUQzmdShy8+WI6AjC/QIT7lVTw+6KJpE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:657:"function(){

  if (\\file_exists(\\STORAGE_PATH(\'INSTALLED\'))) {
      \\abort(\'403\', \'You have already initialized the installation process, delete the "INSTALLED" file from the app folder and try again.\');
  }else{
      \\file_put_contents(\\BASE_PATH(".env"), "APP_NAME=\'DevPremier CRM\' 
      APP_ENV=local
      APP_KEY=base64:RGNjN09HSjh2WWprU2I3MjQ4eElJR1FSQjZOZkVtODM=
      APP_DEBUG=true
      APP_LOG_LEVEL=debug
      APP_URL=http://localhost:8000");
      $artisan_op = [];
      \\array_push($artisan_op, \'.env generated in the root directory with default content!\');
      
      return \\view(\'installation.install\', \\compact(\'artisan_op\'));
  }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000030d8e74600000000356aac1c";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kQlWJqwpFcuSUaGf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UvyR3LcWOufK6AHx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/steps',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\InstallController@install_steps',
        'controller' => 'App\\Http\\Controllers\\InstallController@install_steps',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::UvyR3LcWOufK6AHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U9f6Hx4HFK776jKu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/submit',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\InstallController@save_install_steps',
        'controller' => 'App\\Http\\Controllers\\InstallController@save_install_steps',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::U9f6Hx4HFK776jKu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i4zNyRki21rbNZa2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\InstallController@save_install_final',
        'controller' => 'App\\Http\\Controllers\\InstallController@save_install_final',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::i4zNyRki21rbNZa2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
