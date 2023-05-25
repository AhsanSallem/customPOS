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
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
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
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
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
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
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
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
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
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
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
            '_route' => 'passport.authorizations.approve',
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
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
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
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
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
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
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
            '_route' => 'passport.clients.store',
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
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
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
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
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
            '_route' => 'passport.personal.tokens.store',
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
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
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8udJGhCM9AOdojf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
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
            '_route' => 'generated::iX3GC2gGzw1chu8s',
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
      '/install-start' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.index',
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
      '/install/check-server' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.checkServer',
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
      '/install/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.details',
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
      '/install/post-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.postDetails',
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
      '/install/install-alternate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.installAlternate',
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
      '/install/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.success',
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
      '/install/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.updateConfirmation',
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
            '_route' => 'install.update',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rAmDklcQ6iYKcaft',
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
            '_route' => 'generated::fEu54U41okbPl7IY',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
            '_route' => 'generated::cJqPvTLAFey9pykW',
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
            '_route' => 'generated::g23pyRaqIAgKxVko',
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
      '/business/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.getRegister',
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
            '_route' => 'business.postRegister',
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
      '/business/register/check-username' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.postCheckUsername',
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
      '/business/register/check-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.postCheckEmail',
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
      '/service-staff-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lqFELECNcqibpBju',
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
      '/purchase-requisition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-requisition.index',
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
            '_route' => 'purchase-requisition.store',
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
      '/purchase-requisition/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-requisition.create',
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
      '/get-requisition-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-requisition-products',
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
      '/home/get-totals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WgPua6Tmn2qZkxOn',
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
      '/home/product-stock-alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VTnGpVB8qNzGb5qL',
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
      '/home/purchase-payment-dues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CaozJYItXiq4aZr4',
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
      '/home/sales-payment-dues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8YBOkdpaFmhhMaD2',
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
      '/attach-medias-to-model' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attach.medias.to.model',
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
      '/calendar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calendar',
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
      '/test-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GAUMSiPEqe9pV9ew',
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
      '/test-sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hyeeQJSoN5koryDc',
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
      '/business/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.getBusinessSettings',
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
      '/business/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.postBusinessSettings',
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
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.getProfile',
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
      '/user/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.updateProfile',
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
      '/user/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.updatePassword',
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
      '/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.index',
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
            '_route' => 'brands.store',
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
      '/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.create',
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
      '/payment-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-account.index',
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
            '_route' => 'payment-account.store',
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
      '/payment-account/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-account.create',
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
      '/tax-rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax-rates.index',
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
            '_route' => 'tax-rates.store',
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
      '/tax-rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax-rates.create',
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
      '/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.index',
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
            '_route' => 'units.store',
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
      '/units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.create',
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
      '/ledger-discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ledger-discount.store',
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
      '/check-mobile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u1RFfNSeNKHuwMq7',
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
      '/contacts/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HCQTzylEXD28fyVB',
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
      '/contacts/ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X1wFPE9rHkbPagQF',
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
      '/contacts/send-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ai2YagbM4qJqC6jH',
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
      '/contacts/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.import',
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
            '_route' => 'generated::UuCP9O8B3NSQ9psn',
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
      '/contacts/check-contacts-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9YGg62kqyT2df1k5',
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
      '/contacts/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NqkDTcC1C4BG1Did',
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
      '/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.index',
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
            '_route' => 'contacts.store',
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
      '/contacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.create',
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
      '/taxonomies-ajax-index-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hhYNMUcCyBVPsxpw',
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
      '/taxonomies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxonomies.index',
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
            '_route' => 'taxonomies.store',
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
      '/taxonomies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxonomies.create',
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
      '/variation-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variation-templates.index',
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
            '_route' => 'variation-templates.store',
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
      '/variation-templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variation-templates.create',
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
      '/products/download-excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RaaU3pNZRf2ArhcE',
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
      '/products/mass-deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cl9tYBLuqu70utnP',
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
      '/products/save-selling-prices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tPQ1yNN9yHiImieb',
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
      '/products/mass-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::weuQ1Sp7j9f6AXVn',
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
      '/products/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tY224mT10eFSbLqn',
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
      '/products/list-no-variation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uhO6P8o8Hcuu84sz',
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
      '/products/bulk-edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DuPPGFIpKKzHOvqC',
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
      '/products/bulk-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jINFhk1dUj2AnLpE',
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
      '/products/bulk-update-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5xNVEAbdITWAApdE',
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
      '/products/get_sub_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cguGFqjGGbOnMSoT',
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
      '/products/get_sub_units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::itET5ypV8hnrP0KT',
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
      '/products/product_form_part' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X1rWXzSA6PzYQ5Zo',
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
      '/products/get_product_variation_row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U7K3tsLQ4ebTzVfy',
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
      '/products/get_variation_template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GwSmGyA6FQ6lcKV0',
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
      '/products/get_variation_value_row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JdqS2CS2flg0q3Nx',
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
      '/products/check_product_sku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oHo3bHJuewROxW7D',
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
      '/products/validate_variation_skus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4HV7O3ruEWAhBqYS',
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
      '/products/quick_add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L4N2zsEpRPLq7zBI',
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
      '/products/save_quick_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NvBiugwONnKXcRLt',
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
      '/products/get-combo-product-entry-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dOzORXmCUwru6iQ2',
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
      '/products/toggle-woocommerce-sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qp9GRJVMZylXTVSu',
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
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.index',
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
            '_route' => 'products.store',
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
      '/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.create',
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
      '/sells/pos/get-types-of-service-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6xocB7JE3nbs8EdG',
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
      '/sells/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a9pw6x677jc4AyJR',
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
      '/sells/drafts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::my8xdBDzw0IoOqe4',
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
      '/sells/quotations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HtZiJ5Ve6EnlcKT8',
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
      '/sells/draft-dt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qwl8NFOmCyJVXTKC',
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
      '/sells' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sells.index',
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
            '_route' => 'sells.store',
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
      '/sells/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sells.create',
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
      '/import-purchase-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::juUj71EafI7xt9Nr',
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
      '/purchases/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n9jUmxvzKSvL57oL',
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
      '/purchases/get_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIW3scgN4UaRTJZN',
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
      '/purchases/get_suppliers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cXvPERpErG4kTm2t',
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
      '/purchases/get_purchase_entry_row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PWWRLbKZxcSzWeKk',
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
      '/purchases/check_ref_number' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jrxhelBHY9qM08tw',
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
      '/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.index',
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
            '_route' => 'purchases.store',
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
      '/purchases/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.create',
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
      '/import-sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TzqDZCecJ7LdMysV',
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
            '_route' => 'generated::sZ0qbf6MHcozrbQR',
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
      '/import-sales/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CGArytvJEzDFHv46',
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
      '/sells/pos/get_payment_row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UunU9XnrvESm9hFA',
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
      '/sells/pos/get-reward-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HPRqCeIj6fsXJqcX',
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
      '/sells/pos/get-recent-transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vyqo06ghhUS1rD0O',
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
      '/sells/pos/get-product-suggestion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PEie8DjhooDxYLLD',
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
      '/reset-mapping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sDJSc5jWhAYrnHrJ',
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
      '/pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.index',
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
            '_route' => 'pos.store',
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
      '/pos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.create',
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
      '/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
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
            '_route' => 'roles.store',
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
      '/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
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
      '/users' => 
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
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
      '/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
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
      '/group-taxes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group-taxes.index',
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
            '_route' => 'group-taxes.store',
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
      '/group-taxes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group-taxes.create',
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
      '/barcodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barcodes.index',
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
            '_route' => 'barcodes.store',
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
      '/barcodes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barcodes.create',
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
      '/invoice-schemes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-schemes.index',
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
            '_route' => 'invoice-schemes.store',
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
      '/invoice-schemes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-schemes.create',
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
      '/labels/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1RGcnEuTrXgfB2HL',
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
      '/labels/add-product-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hYrzPAvzsbTglAqp',
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
      '/labels/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::quF8GlZlNWlsJMfT',
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
      '/reports/gst-purchase-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a4j4ywdZaBhhbSPW',
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
      '/reports/gst-sales-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KRwQ56alEsrtRZb5',
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
      '/reports/get-stock-by-sell-price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SZOsJohXOn3HH32u',
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
      '/reports/purchase-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6EBI2uuuefp1SB62',
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
      '/reports/sale-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wbWI2BIHU4Pop3im',
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
      '/reports/service-staff-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::veUoGDLGNCKvAiJN',
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
      '/reports/service-staff-line-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2O98HFfEJolUjB9A',
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
      '/reports/table-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5VntK5ficckHmLLi',
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
      '/reports/profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7IXJ3RbD0SFkKItw',
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
      '/reports/get-opening-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vmdLxUopg83U9WqZ',
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
      '/reports/purchase-sell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l9pbKS40kxnluacf',
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
      '/reports/customer-supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b6KTHzQzQVdH1Cu6',
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
      '/reports/stock-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MEOzeuPt9SWCoBhw',
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
      '/reports/stock-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OqITC19XcJQj1E7s',
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
      '/reports/tax-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ENvnRYPi9WBSx7GR',
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
      '/reports/tax-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::frWRQTLKxSO4XdTk',
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
      '/reports/trending-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UfFaK2SyYJxFmy6y',
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
      '/reports/expense-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::INQJ3iAMR1NPWkvV',
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
      '/reports/stock-adjustment-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qZS5O6PXzwXWftag',
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
      '/reports/register-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVVPHmk8DXKeaz7O',
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
      '/reports/sales-representative-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p0QbucjSHiP6UCBg',
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
      '/reports/sales-representative-total-expense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CupBokgDUsnbW7On',
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
      '/reports/sales-representative-total-sell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7uQapf6a4zwm97NA',
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
      '/reports/sales-representative-total-commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cmmsUuIAoI0Jz1JR',
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
      '/reports/stock-expiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tr0wcTiqrYZYAbe6',
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
      '/reports/stock-expiry-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateStockExpiryReport',
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
      '/reports/customer-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UXXxS9qmPAm3rb9o',
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
      '/reports/product-purchase-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2DuxR7Atv1wEbHrJ',
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
      '/reports/product-sell-grouped-by' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ZJ96kUnKXrR8cQ0',
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
      '/reports/product-sell-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hjA6SfRPL88w0HdE',
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
      '/reports/product-sell-report-with-purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::70z17R7bnh2hkQOY',
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
      '/reports/product-sell-grouped-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SW3MOLiTe8vb1l36',
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
      '/reports/lot-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::We23nNQuGbf4iByK',
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
      '/reports/purchase-payment-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ofuycvyXyj5r08t7',
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
      '/reports/sell-payment-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YNDreGDmSABE8lT3',
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
      '/reports/product-stock-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HBhA4MetVcFF5wAY',
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
      '/reports/adjust-product-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tf0F9Ab5HycQims9',
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
      '/reports/items-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qmBgfbK5JHozgSwN',
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
      '/reports/get-stock-value' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5zx3JpwmJBbNMGP2',
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
      '/business-location/check-location-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fO4nxi12gxI6eo0',
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
      '/business-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business-location.index',
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
            '_route' => 'business-location.store',
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
      '/business-location/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business-location.create',
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
      '/invoice-layouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-layouts.index',
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
            '_route' => 'invoice-layouts.store',
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
      '/invoice-layouts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-layouts.create',
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
      '/get-expense-sub-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7JZXUrmVF7mT9pEP',
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
      '/expense-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense-categories.index',
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
            '_route' => 'expense-categories.store',
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
      '/expense-categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense-categories.create',
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
      '/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.index',
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
            '_route' => 'expenses.store',
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
      '/expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.create',
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
      '/payments/pay-contact-due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::slrR0Mr8tjWhxQxt',
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
      '/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.index',
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
            '_route' => 'payments.store',
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
      '/payments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.create',
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
      '/printers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'printers.index',
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
            '_route' => 'printers.store',
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
      '/printers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'printers.create',
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
      '/stock-adjustments/get_product_row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K10rX6sXqt23BrsW',
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
      '/stock-adjustments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-adjustments.index',
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
            '_route' => 'stock-adjustments.store',
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
      '/stock-adjustments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-adjustments.create',
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
      '/cash-register/register-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fFd55PrmkptFtkSY',
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
      '/cash-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash-register.index',
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
            '_route' => 'cash-register.store',
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
      '/cash-register/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash-register.create',
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
      '/import-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mV6p68B5M8z44C8J',
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
      '/import-products/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ORCWY3VRI4rAq2U2',
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
      '/sales-commission-agents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales-commission-agents.index',
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
            '_route' => 'sales-commission-agents.store',
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
      '/sales-commission-agents/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales-commission-agents.create',
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
      '/stock-transfers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-transfers.index',
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
            '_route' => 'stock-transfers.store',
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
      '/stock-transfers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-transfers.create',
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
      '/opening-stock/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::58SM2kriCNXluOq7',
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
      '/customer-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-group.index',
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
            '_route' => 'customer-group.store',
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
      '/customer-group/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-group.create',
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
      '/import-opening-stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sYu9JCOUtC80wgMT',
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
      '/import-opening-stock/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nzOvuhpIar1vqMBb',
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
      '/sell-return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell-return.index',
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
            '_route' => 'sell-return.store',
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
      '/sell-return/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell-return.create',
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
      '/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backup.index',
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
            '_route' => 'backup.store',
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
      '/backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backup.create',
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
      '/export-selling-price-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5NOhDa0fgBrf9lbz',
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
      '/import-selling-price-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4jfJwEuKMfRCMz3q',
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
      '/selling-price-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'selling-price-group.index',
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
            '_route' => 'selling-price-group.store',
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
      '/selling-price-group/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'selling-price-group.create',
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
      '/notification-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification-templates.index',
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
            '_route' => 'notification-templates.store',
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
      '/notification/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xwNs77KslCEQvuHQ',
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
      '/purchase-return/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H4MT8H5BCPowuTwD',
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
      '/purchase-return/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bkBM4H99phMLliWY',
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
      '/purchase-return/get_product_row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uzNJW8yZYWcNcoaG',
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
      '/purchase-return/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TNtV12p81f3VmzqT',
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
      '/purchase-return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-return.index',
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
            '_route' => 'purchase-return.store',
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
      '/discount/mass-deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4uVtwEOePotR6P8',
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
      '/discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount.index',
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
            '_route' => 'discount.store',
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
      '/discount/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount.create',
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
      '/account/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.index',
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
            '_route' => 'account.store',
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
      '/account/account/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.create',
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
      '/account/fund-transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O5aMznZNsMIh1JNF',
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
      '/account/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H2UVNrmA1bbBUWhV',
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
      '/account/balance-sheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FC8NeJZfjglDkVVe',
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
      '/account/trial-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8HlDHpLrIHAaVmOw',
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
      '/account/payment-account-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hss8MTzu7KVkYe5D',
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
      '/account/link-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yoLCdw3KaJpLLeID',
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
      '/account/cash-flow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kSadHsjKRAwtPLOA',
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
      '/account-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-types.index',
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
            '_route' => 'account-types.store',
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
      '/account-types/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-types.create',
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
      '/modules/tables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.index',
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
            '_route' => 'tables.store',
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
      '/modules/tables/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.create',
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
      '/modules/modifiers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifiers.index',
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
            '_route' => 'modifiers.store',
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
      '/modules/modifiers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifiers.create',
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
      '/modules/add-selected-modifiers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f2awHYcpMKhOOk2E',
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
      '/modules/kitchen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lMFgTkbaYfKH5eJ8',
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
      '/modules/refresh-orders-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZIF3raz1VfENKCWJ',
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
      '/modules/refresh-line-orders-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d4drqgstMIv7ds2F',
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
      '/modules/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uT3gaOO8lDILg7VU',
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
      '/modules/data/get-pos-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::opZV9jNt5LLtNBIj',
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
      '/modules/print-line-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::83ueQEVZ7afZv9nF',
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
      '/bookings/get-todays-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sXffgjds812a3UL9',
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
      '/bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bookings.index',
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
            '_route' => 'bookings.store',
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
      '/bookings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bookings.create',
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
      '/types-of-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types-of-service.index',
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
            '_route' => 'types-of-service.store',
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
      '/types-of-service/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types-of-service.create',
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
      '/shipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2rCbVNhU5zCrvnpF',
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
      '/upload-module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9wKMWD0Kg79RNPC5',
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
      '/manage-modules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manage-modules.index',
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
      '/warranties' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warranties.index',
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
            '_route' => 'warranties.store',
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
      '/warranties/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warranties.create',
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
      '/get-document-note-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JuQnxnAYC7f923Xp',
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
      '/post-document-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JbeOGbD615asv3Q6',
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
      '/note-documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'note-documents.index',
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
            '_route' => 'note-documents.store',
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
      '/note-documents/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'note-documents.create',
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
      '/purchase-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-order.index',
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
            '_route' => 'purchase-order.store',
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
      '/purchase-order/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-order.create',
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
      '/sales-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales-order.index',
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
      '/get-sales-order-lines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IgPXzu5jKSXAdjRt',
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
      '/reports/activity-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fo0REpA22QEdyWjp',
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
      '/load-more-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0lLwFHCWJ7hugbRl',
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
      '/get-total-unread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1IvkHfLDsbqEJvr2',
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
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/o(?|auth/(?|tokens/([^/]++)(*:109)|clients/([^/]++)(?|(*:136))|personal\\-access\\-tokens/([^/]++)(*:178))|pening\\-stock/add/([^/]++)(*:213))|/p(?|a(?|ssword/reset/([^/]++)(*:252)|y(?|/([^/]++)(*:273)|ment(?|\\-account/([^/]++)(?|(*:309)|/edit(*:322)|(*:330))|s/(?|show\\-child\\-payments/([^/]++)(*:374)|view\\-payment/([^/]++)(*:404)|add_payment/([^/]++)(*:432)|pay\\-contact\\-due/([^/]++)(*:466)|([^/]++)(?|(*:485)|/edit(*:498)|(*:506)))))|use\\-resume\\-service\\-staff\\-timer/([^/]++)(*:561))|os/(?|payment/([^/]++)(*:592)|([^/]++)(?|(*:611)|/edit(*:624)|(*:632)))|urchase(?|\\-(?|re(?|quisition/([^/]++)(?|(*:683))|turn/(?|edit/([^/]++)(*:713)|add/([^/]++)(*:733)|([^/]++)(?|(*:752)|/edit(*:765)|(*:773))))|order/([^/]++)(?|(*:801)|/edit(*:814)|(*:822)))|s/(?|([^/]++)(?|/edit(*:853)|(*:861))|print/([^/]++)(*:884)|([^/]++)(*:900)))|r(?|oducts/(?|stock\\-history/([^/]++)(*:947)|a(?|ctivate/([^/]++)(*:975)|dd\\-selling\\-prices/([^/]++)(*:1011))|view(?|\\-product\\-group\\-price/([^/]++)(*:1060)|/([^/]++)(*:1078))|get\\-product\\-to\\-edit/([^/]++)(*:1119)|([^/]++)(?|(*:1139)|/edit(*:1153)|(*:1162)))|inters/([^/]++)(?|(*:1191)|/edit(*:1205)|(*:1214))))|/invoice(?|/([^/]++)(*:1246)|\\-(?|schemes/(?|set_default/([^/]++)(*:1291)|([^/]++)(?|(*:1311)|/edit(*:1325)|(*:1334)))|layouts/([^/]++)(?|(*:1364)|/edit(*:1378)|(*:1387))))|/quote/([^/]++)(*:1414)|/c(?|on(?|firm\\-payment/([^/]++)(*:1455)|tacts/(?|payments/([^/]++)(*:1490)|update\\-status/([^/]++)(*:1522)|stock\\-report/([^/]++)(*:1553)|([^/]++)(?|(*:1573)|/edit(*:1587)|(*:1596))))|ash\\-register/(?|close\\-register(?|(?:/([^/]++))?(*:1657)|(*:1666))|([^/]++)(?|(*:1687)|/edit(*:1701)|(*:1710)))|ustomer\\-group/([^/]++)(?|(*:1747)|/edit(*:1761)|(*:1770)))|/m(?|a(?|rk\\-as\\-available/([^/]++)(*:1816)|nage\\-modules/(?|destroy/([^/]++)(*:1858)|([^/]++)(*:1875)))|odules/(?|tables/([^/]++)(?|(*:1914)|/edit(*:1928)|(*:1937))|modifiers/([^/]++)(?|(*:1968)|/edit(*:1982)|(*:1991))|product\\-modifiers/(?|([^/]++)/(?|edit(*:2039)|update(*:2054))|product\\-row/([^/]++)(*:2085))|kitchen/mark\\-as\\-cooked/([^/]++)(*:2128)|orders/mark\\-(?|as\\-served/([^/]++)(*:2172)|line\\-order\\-as\\-served/([^/]++)(*:2213))))|/g(?|et\\-(?|purchase\\-(?|requisition(?|s/([^/]++)(*:2274)|\\-lines/([^/]++)(*:2299))|order(?|s/([^/]++)(*:2327)|\\-lines/([^/]++)(*:2352)))|contact\\-due/([^/]++)(*:2384)|sales\\-orders/([^/]++)(*:2415))|roup\\-taxes/([^/]++)(?|(*:2448)|/edit(*:2462)|(*:2471)))|/s(?|ign\\-in\\-as\\-user/([^/]++)(*:2513)|ell(?|s/(?|duplicate/([^/]++)(*:2551)|convert\\-to\\-(?|draft/([^/]++)(*:2590)|proforma/([^/]++)(*:2616))|([^/]++)(?|/edit(*:2642)|(*:2651))|copy\\-quotation/([^/]++)(*:2685)|pos/get(?|_product_row/([^/]++)/([^/]++)(*:2734)|\\-featured\\-products/([^/]++)(*:2772))|edit\\-shipping/([^/]++)(*:2805)|update\\-shipping/([^/]++)(*:2839)|([^/]++)(?|(*:2859)|/print(*:2874))|invoice\\-url/([^/]++)(*:2905))|\\-return/(?|([^/]++)(?|(*:2938)|/edit(*:2952)|(*:2961))|get\\-product\\-row(*:2988)|print/([^/]++)(*:3011)|add/([^/]++)(*:3032))|ing\\-price\\-group/(?|activate\\-deactivate/([^/]++)(*:3092)|([^/]++)(?|(*:3112)|/edit(*:3126)|(*:3135))))|tock\\-(?|adjustments/(?|remove\\-expired\\-stock/([^/]++)(*:3202)|([^/]++)(?|(*:3222)|/edit(*:3236)|(*:3245)))|transfers/(?|print/([^/]++)(*:3283)|update\\-status/([^/]++)(*:3315)|([^/]++)(?|(*:3335)|/edit(*:3349)|(*:3358))))|ales\\-commission\\-agents/([^/]++)(?|(*:3406)|/edit(*:3420)|(*:3429))|how\\-notification/([^/]++)(*:3465))|/b(?|rands/([^/]++)(?|(*:3497)|/edit(*:3511)|(*:3520))|a(?|rcodes/(?|set_default/([^/]++)(*:3564)|([^/]++)(?|(*:3584)|/edit(*:3598)|(*:3607)))|ckup/d(?|ownload/([^/]++)(*:3643)|elete/([^/]++)(*:3666)))|usiness\\-location/(?|activate\\-deactivate/([^/]++)(*:3727)|([^/]++)(?|/(?|settings(?|(*:3762))|edit(*:3776))|(*:3786)))|ookings/([^/]++)(?|(*:3816)|/edit(*:3830)|(*:3839)))|/t(?|ax(?|\\-rates/([^/]++)(?|(*:3879)|/edit(*:3893)|(*:3902))|onomies/([^/]++)(?|(*:3931)|/edit(*:3945)|(*:3954)))|oggle\\-subscription/([^/]++)(*:3993)|ypes\\-of\\-service/([^/]++)(?|(*:4031)|/edit(*:4045)|(*:4054)))|/u(?|nits/([^/]++)(?|(*:4086)|/edit(*:4100)|(*:4109))|ser(?|s/([^/]++)(?|(*:4138)|/edit(*:4152)|(*:4161))|\\-location/([^/]++)(*:4190))|pdate\\-(?|purchase\\-orders/([^/]++)/status(*:4242)|sales\\-orders/([^/]++)/status(*:4280)))|/ledger\\-discount/([^/]++)(?|/edit(*:4325)|(*:4334))|/v(?|a(?|riation\\-templates/([^/]++)(?|(*:4383)|/edit(*:4397)|(*:4406))|lidate\\-invoice\\-to\\-return/([^/]++)(*:4452))|iew\\-media/([^/]++)(*:4481))|/d(?|elete\\-media/([^/]++)(*:4517)|iscount/(?|activate/([^/]++)(*:4554)|([^/]++)(?|(*:4574)|/edit(*:4588)|(*:4597)))|ashboard\\-configurator/([^/]++)(?|/edit(*:4647)|(*:4656))|ownload\\-(?|p(?|urchase\\-order/([^/]++)/pdf(*:4709)|acking\\-list/([^/]++)/pdf(*:4743))|sells/([^/]++)/pdf(*:4771)|quotation/([^/]++)/pdf(*:4802)))|/r(?|e(?|vert\\-sale\\-import/([^/]++)(*:4849)|ports/(?|stock\\-expiry\\-edit\\-modal/([^/]++)(*:4902)|get\\-profit(?:/([^/]++))?(*:4936)))|oles/([^/]++)(?|(*:4963)|/edit(*:4977)|(*:4986)))|/e(?|xpense(?|\\-categories/([^/]++)(?|(*:5035)|/edit(*:5049)|(*:5058))|s/([^/]++)(?|(*:5081)|/edit(*:5095)|(*:5104)))|dit\\-(?|purchase\\-orders/([^/]++)/status(*:5155)|sales\\-orders/([^/]++)/status(*:5193)))|/not(?|ification/get\\-template/([^/]++)/([^/]++)(*:5252)|e\\-documents/([^/]++)(?|(*:5285)|/edit(*:5299)|(*:5308)))|/account(?|/(?|ac(?|count/([^/]++)(?|(*:5356)|/edit(*:5370)|(*:5379))|tivate/([^/]++)(*:5404))|fund\\-transfer/([^/]++)(*:5437)|de(?|posit/([^/]++)(*:5465)|lete\\-account\\-transaction/([^/]++)(*:5509))|close/([^/]++)(*:5533)|edit\\-account\\-transaction/([^/]++)(*:5577)|update\\-account\\-transaction/([^/]++)(*:5623)|get\\-account\\-balance/([^/]++)(*:5662)|link\\-account/([^/]++)(*:5693))|\\-types/([^/]++)(?|(*:5722)|/edit(*:5736)|(*:5745)))|/warranties/([^/]++)(?|(*:5779)|/edit(*:5793)|(*:5802)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
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
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
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
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
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
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
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
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
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
      213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kpOpV6J7h28CII0m',
          ),
          1 => 
          array (
            0 => 'product_id',
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
      252 => 
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
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice_payment',
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
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-account.show',
          ),
          1 => 
          array (
            0 => 'payment_account',
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
      322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-account.edit',
          ),
          1 => 
          array (
            0 => 'payment_account',
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
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-account.update',
          ),
          1 => 
          array (
            0 => 'payment_account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment-account.destroy',
          ),
          1 => 
          array (
            0 => 'payment_account',
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
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::awSRwiaDBWvUKxS1',
          ),
          1 => 
          array (
            0 => 'payment_id',
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
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sbmKgPEO6BSeqN1W',
          ),
          1 => 
          array (
            0 => 'payment_id',
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
      432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FbtQm1HkmApTjS9U',
          ),
          1 => 
          array (
            0 => 'transaction_id',
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
      466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wr8DvIB8hmbN35vS',
          ),
          1 => 
          array (
            0 => 'contact_id',
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
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
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
      498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.edit',
          ),
          1 => 
          array (
            0 => 'payment',
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
      506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.update',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payments.destroy',
          ),
          1 => 
          array (
            0 => 'payment',
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
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nSjj8icmwf5xE9xG',
          ),
          1 => 
          array (
            0 => 'user_id',
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
      592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit-pos-payment',
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
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.show',
          ),
          1 => 
          array (
            0 => 'po',
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
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.edit',
          ),
          1 => 
          array (
            0 => 'po',
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
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.update',
          ),
          1 => 
          array (
            0 => 'po',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pos.destroy',
          ),
          1 => 
          array (
            0 => 'po',
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
      683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-requisition.show',
          ),
          1 => 
          array (
            0 => 'purchase_requisition',
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
          0 => 
          array (
            '_route' => 'purchase-requisition.destroy',
          ),
          1 => 
          array (
            0 => 'purchase_requisition',
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
      713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FiDVOBPgtSM4nxgE',
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
      733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oiQFFfXMIcnsWksp',
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
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-return.show',
          ),
          1 => 
          array (
            0 => 'purchase_return',
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
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-return.edit',
          ),
          1 => 
          array (
            0 => 'purchase_return',
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
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-return.update',
          ),
          1 => 
          array (
            0 => 'purchase_return',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-return.destroy',
          ),
          1 => 
          array (
            0 => 'purchase_return',
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
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-order.show',
          ),
          1 => 
          array (
            0 => 'purchase_order',
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
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-order.edit',
          ),
          1 => 
          array (
            0 => 'purchase_order',
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
      822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-order.update',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-order.destroy',
          ),
          1 => 
          array (
            0 => 'purchase_order',
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
      853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.edit',
          ),
          1 => 
          array (
            0 => 'purchase',
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
      861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.update',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.destroy',
          ),
          1 => 
          array (
            0 => 'purchase',
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
      884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4vpDroYwCnaoxJiH',
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
      900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nj8CDlBJp9SQmYSy',
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
      947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4qjGgMV45UQhF0Z9',
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
      975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::la4wubdLOrh6x1DC',
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
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hHQJaGYaxxrOYJht',
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
      1060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P8xBzHHAwpWfOcJh',
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
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PppDnWkSPCOAjXSZ',
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
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mMzsIuQC32EWPxgt',
          ),
          1 => 
          array (
            0 => 'product_id',
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
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.show',
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
      1153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.destroy',
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
      1191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'printers.show',
          ),
          1 => 
          array (
            0 => 'printer',
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
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'printers.edit',
          ),
          1 => 
          array (
            0 => 'printer',
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
      1214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'printers.update',
          ),
          1 => 
          array (
            0 => 'printer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'printers.destroy',
          ),
          1 => 
          array (
            0 => 'printer',
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
      1246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show_invoice',
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
      1291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ExSZ0BFdmDXlGcfc',
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
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-schemes.show',
          ),
          1 => 
          array (
            0 => 'invoice_scheme',
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
      1325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-schemes.edit',
          ),
          1 => 
          array (
            0 => 'invoice_scheme',
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
      1334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-schemes.update',
          ),
          1 => 
          array (
            0 => 'invoice_scheme',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-schemes.destroy',
          ),
          1 => 
          array (
            0 => 'invoice_scheme',
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
      1364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-layouts.show',
          ),
          1 => 
          array (
            0 => 'invoice_layout',
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
      1378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-layouts.edit',
          ),
          1 => 
          array (
            0 => 'invoice_layout',
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
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-layouts.update',
          ),
          1 => 
          array (
            0 => 'invoice_layout',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'invoice-layouts.destroy',
          ),
          1 => 
          array (
            0 => 'invoice_layout',
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
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show_quote',
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
      1455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confirm_payment',
          ),
          1 => 
          array (
            0 => 'id',
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
      1490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oM6A0B1Rx5EOtEFG',
          ),
          1 => 
          array (
            0 => 'contact_id',
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
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d1aNSWD6kwtKCXgj',
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
      1553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sKGlutrsFDJ5yeFp',
          ),
          1 => 
          array (
            0 => 'supplier_id',
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
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.show',
          ),
          1 => 
          array (
            0 => 'contact',
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
      1587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.edit',
          ),
          1 => 
          array (
            0 => 'contact',
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
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.destroy',
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
      1657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dhG3x8xDC2og1Ej8',
            'id' => NULL,
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
      1666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Czv2AwaYtPybNuvY',
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
      1687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash-register.show',
          ),
          1 => 
          array (
            0 => 'cash_register',
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
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash-register.edit',
          ),
          1 => 
          array (
            0 => 'cash_register',
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
      1710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash-register.update',
          ),
          1 => 
          array (
            0 => 'cash_register',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cash-register.destroy',
          ),
          1 => 
          array (
            0 => 'cash_register',
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
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-group.show',
          ),
          1 => 
          array (
            0 => 'customer_group',
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
      1761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-group.edit',
          ),
          1 => 
          array (
            0 => 'customer_group',
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
      1770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-group.update',
          ),
          1 => 
          array (
            0 => 'customer_group',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer-group.destroy',
          ),
          1 => 
          array (
            0 => 'customer_group',
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
      1816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wm5b71Ghl8q4436Q',
          ),
          1 => 
          array (
            0 => 'user_id',
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
      1858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OH8u2UUjiGM4zzEq',
          ),
          1 => 
          array (
            0 => 'module_name',
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
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manage-modules.update',
          ),
          1 => 
          array (
            0 => 'manage_module',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.show',
          ),
          1 => 
          array (
            0 => 'table',
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
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.edit',
          ),
          1 => 
          array (
            0 => 'table',
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
      1937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.update',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tables.destroy',
          ),
          1 => 
          array (
            0 => 'table',
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
      1968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifiers.show',
          ),
          1 => 
          array (
            0 => 'modifier',
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
      1982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifiers.edit',
          ),
          1 => 
          array (
            0 => 'modifier',
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
      1991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifiers.update',
          ),
          1 => 
          array (
            0 => 'modifier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modifiers.destroy',
          ),
          1 => 
          array (
            0 => 'modifier',
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
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MSOCwQaMCD5y8D4H',
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
          5 => false,
          6 => NULL,
        ),
      ),
      2054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R5LTErw5l9IRJOPJ',
          ),
          1 => 
          array (
            0 => 'id',
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
      2085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EnuG5WqiyOYrxjMH',
          ),
          1 => 
          array (
            0 => 'product_id',
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
      2128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WrpR3YUkrSx5KynB',
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
      2172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVUesojTJpx2m9cR',
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
      2213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T1FTIzrCHtPaJyZi',
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
      2274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q25B9OY0d4bisHYt',
          ),
          1 => 
          array (
            0 => 'location_id',
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
      2299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7dz3O0dh8JrIAgya',
          ),
          1 => 
          array (
            0 => 'purchase_requisition_id',
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
      2327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UQnWjoIfwFCZMbUL',
          ),
          1 => 
          array (
            0 => 'contact_id',
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
      2352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h174WnU1nKrpeZGH',
          ),
          1 => 
          array (
            0 => 'purchase_order_id',
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
      2384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JyfhiQKNxpXIGHT2',
          ),
          1 => 
          array (
            0 => 'contact_id',
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
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mZSsoX307lcPj6JA',
          ),
          1 => 
          array (
            0 => 'customer_id',
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
      2448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group-taxes.show',
          ),
          1 => 
          array (
            0 => 'group_tax',
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
      2462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group-taxes.edit',
          ),
          1 => 
          array (
            0 => 'group_tax',
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
      2471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group-taxes.update',
          ),
          1 => 
          array (
            0 => 'group_tax',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'group-taxes.destroy',
          ),
          1 => 
          array (
            0 => 'group_tax',
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
      2513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sign-in-as-user',
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
      2551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IADwo6llg1naTtkf',
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
      2590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::73aVwMLxool2eLg0',
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
      2616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L5x8Yej6INRPbY2D',
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
      2642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sells.edit',
          ),
          1 => 
          array (
            0 => 'sell',
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
      2651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sells.update',
          ),
          1 => 
          array (
            0 => 'sell',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sells.destroy',
          ),
          1 => 
          array (
            0 => 'sell',
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
      2685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yhvef27o3aeXPjT6',
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
      2734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IzXSB0fFynTr0D5w',
          ),
          1 => 
          array (
            0 => 'variation_id',
            1 => 'location_id',
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
      2772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HKceTRAQJnuIUwCg',
          ),
          1 => 
          array (
            0 => 'location_id',
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
      2805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4n71nSUe70XNJy9s',
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
      2839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::teOeXwJS2lRPIQkJ',
          ),
          1 => 
          array (
            0 => 'id',
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
      2859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PNNxb1gEuPQPWSID',
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
      2874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell.printInvoice',
          ),
          1 => 
          array (
            0 => 'transaction_id',
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
      2905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kQbza4fHgUbZNOaB',
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
      2938 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell-return.show',
          ),
          1 => 
          array (
            0 => 'sell_return',
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
      2952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell-return.edit',
          ),
          1 => 
          array (
            0 => 'sell_return',
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
      2961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell-return.update',
          ),
          1 => 
          array (
            0 => 'sell_return',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sell-return.destroy',
          ),
          1 => 
          array (
            0 => 'sell_return',
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
      2988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HRiWj97Yo1nDy7j8',
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
      3011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gvQFo5XgvmbX21Ir',
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
      3032 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Bbphms0f5ellWAx',
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
      3092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJlPya5fB3ahKMgc',
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
      3112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'selling-price-group.show',
          ),
          1 => 
          array (
            0 => 'selling_price_group',
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
      3126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'selling-price-group.edit',
          ),
          1 => 
          array (
            0 => 'selling_price_group',
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
      3135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'selling-price-group.update',
          ),
          1 => 
          array (
            0 => 'selling_price_group',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'selling-price-group.destroy',
          ),
          1 => 
          array (
            0 => 'selling_price_group',
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
            '_route' => 'generated::hxL6uSx75YkZktuO',
          ),
          1 => 
          array (
            0 => 'purchase_line_id',
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
      3222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-adjustments.show',
          ),
          1 => 
          array (
            0 => 'stock_adjustment',
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
      3236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-adjustments.edit',
          ),
          1 => 
          array (
            0 => 'stock_adjustment',
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
      3245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-adjustments.update',
          ),
          1 => 
          array (
            0 => 'stock_adjustment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stock-adjustments.destroy',
          ),
          1 => 
          array (
            0 => 'stock_adjustment',
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
      3283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RqwmrtAILUhN1AiM',
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
      3315 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gpHPibvZKaKZEr3B',
          ),
          1 => 
          array (
            0 => 'id',
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
      3335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-transfers.show',
          ),
          1 => 
          array (
            0 => 'stock_transfer',
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
      3349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-transfers.edit',
          ),
          1 => 
          array (
            0 => 'stock_transfer',
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
      3358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-transfers.update',
          ),
          1 => 
          array (
            0 => 'stock_transfer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stock-transfers.destroy',
          ),
          1 => 
          array (
            0 => 'stock_transfer',
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
      3406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales-commission-agents.show',
          ),
          1 => 
          array (
            0 => 'sales_commission_agent',
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
      3420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales-commission-agents.edit',
          ),
          1 => 
          array (
            0 => 'sales_commission_agent',
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
      3429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales-commission-agents.update',
          ),
          1 => 
          array (
            0 => 'sales_commission_agent',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales-commission-agents.destroy',
          ),
          1 => 
          array (
            0 => 'sales_commission_agent',
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
      3465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcWgO5HhYOx0GWYC',
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
      3497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
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
      3511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
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
      3520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
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
      3564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H5VApSOY27f5EklE',
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
      3584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barcodes.show',
          ),
          1 => 
          array (
            0 => 'barcode',
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
      3598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barcodes.edit',
          ),
          1 => 
          array (
            0 => 'barcode',
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
      3607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barcodes.update',
          ),
          1 => 
          array (
            0 => 'barcode',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'barcodes.destroy',
          ),
          1 => 
          array (
            0 => 'barcode',
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
      3643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hGjSNzWfJmG9nUp1',
          ),
          1 => 
          array (
            0 => 'file_name',
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
      3666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ejBPn8kK6kBtQEym',
          ),
          1 => 
          array (
            0 => 'file_name',
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
      3727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kZHribs86eZBeSmh',
          ),
          1 => 
          array (
            0 => 'location_id',
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
      3762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.settings',
          ),
          1 => 
          array (
            0 => 'location_id',
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
            '_route' => 'location.settings_update',
          ),
          1 => 
          array (
            0 => 'location_id',
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
      3776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business-location.edit',
          ),
          1 => 
          array (
            0 => 'business_location',
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
      3786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business-location.show',
          ),
          1 => 
          array (
            0 => 'business_location',
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
          0 => 
          array (
            '_route' => 'business-location.update',
          ),
          1 => 
          array (
            0 => 'business_location',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'business-location.destroy',
          ),
          1 => 
          array (
            0 => 'business_location',
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
      3816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bookings.show',
          ),
          1 => 
          array (
            0 => 'booking',
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
      3830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bookings.edit',
          ),
          1 => 
          array (
            0 => 'booking',
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
      3839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bookings.update',
          ),
          1 => 
          array (
            0 => 'booking',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bookings.destroy',
          ),
          1 => 
          array (
            0 => 'booking',
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
      3879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax-rates.show',
          ),
          1 => 
          array (
            0 => 'tax_rate',
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
      3893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax-rates.edit',
          ),
          1 => 
          array (
            0 => 'tax_rate',
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
      3902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax-rates.update',
          ),
          1 => 
          array (
            0 => 'tax_rate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tax-rates.destroy',
          ),
          1 => 
          array (
            0 => 'tax_rate',
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
      3931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxonomies.show',
          ),
          1 => 
          array (
            0 => 'taxonomy',
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
      3945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxonomies.edit',
          ),
          1 => 
          array (
            0 => 'taxonomy',
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
      3954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxonomies.update',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'taxonomies.destroy',
          ),
          1 => 
          array (
            0 => 'taxonomy',
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
      3993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qytmkBqfUewRW1FN',
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
      4031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types-of-service.show',
          ),
          1 => 
          array (
            0 => 'types_of_service',
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
      4045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types-of-service.edit',
          ),
          1 => 
          array (
            0 => 'types_of_service',
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
      4054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types-of-service.update',
          ),
          1 => 
          array (
            0 => 'types_of_service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'types-of-service.destroy',
          ),
          1 => 
          array (
            0 => 'types_of_service',
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
      4086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.show',
          ),
          1 => 
          array (
            0 => 'unit',
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
      4100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.edit',
          ),
          1 => 
          array (
            0 => 'unit',
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
      4109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
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
      4138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
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
      4152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
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
      4161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
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
      4190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::339ixDsnGxFw7L26',
          ),
          1 => 
          array (
            0 => 'latlng',
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
      4242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SL8iKl7CMtIfymLB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xez5eUDYcDp3vORv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ledger-discount.edit',
          ),
          1 => 
          array (
            0 => 'ledger_discount',
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
      4334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ledger-discount.update',
          ),
          1 => 
          array (
            0 => 'ledger_discount',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ledger-discount.destroy',
          ),
          1 => 
          array (
            0 => 'ledger_discount',
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
      4383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variation-templates.show',
          ),
          1 => 
          array (
            0 => 'variation_template',
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
      4397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variation-templates.edit',
          ),
          1 => 
          array (
            0 => 'variation_template',
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
      4406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variation-templates.update',
          ),
          1 => 
          array (
            0 => 'variation_template',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'variation-templates.destroy',
          ),
          1 => 
          array (
            0 => 'variation_template',
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
      4452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZjCCfvLWlWNSTMw7',
          ),
          1 => 
          array (
            0 => 'invoice_no',
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
      4481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wfFhwTOzc8OoC8pL',
          ),
          1 => 
          array (
            0 => 'model_id',
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
      4517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pxGTUGPzVQhjm51C',
          ),
          1 => 
          array (
            0 => 'media_id',
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
      4554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::95KhH0Jn65GRRLBC',
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
      4574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount.show',
          ),
          1 => 
          array (
            0 => 'discount',
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
      4588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount.edit',
          ),
          1 => 
          array (
            0 => 'discount',
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
      4597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount.update',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discount.destroy',
          ),
          1 => 
          array (
            0 => 'discount',
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
      4647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard-configurator.edit',
          ),
          1 => 
          array (
            0 => 'dashboard_configurator',
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
      4656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard-configurator.update',
          ),
          1 => 
          array (
            0 => 'dashboard_configurator',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchaseOrder.downloadPdf',
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
          5 => false,
          6 => NULL,
        ),
      ),
      4743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'packing.downloadPdf',
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
          5 => false,
          6 => NULL,
        ),
      ),
      4771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell.downloadPdf',
          ),
          1 => 
          array (
            0 => 'transaction_id',
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
      4802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotation.downloadPdf',
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
          5 => false,
          6 => NULL,
        ),
      ),
      4849 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5BguY4qkERTMDBXd',
          ),
          1 => 
          array (
            0 => 'batch',
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
      4902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xUAlD5UxUTuonrI9',
          ),
          1 => 
          array (
            0 => 'purchase_line_id',
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
      4936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ka9VDT4MpVpFUtmr',
            'by' => NULL,
          ),
          1 => 
          array (
            0 => 'by',
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
      4963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.show',
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
      4977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      4986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
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
      5035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense-categories.show',
          ),
          1 => 
          array (
            0 => 'expense_category',
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
      5049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense-categories.edit',
          ),
          1 => 
          array (
            0 => 'expense_category',
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
      5058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense-categories.update',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expense-categories.destroy',
          ),
          1 => 
          array (
            0 => 'expense_category',
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
      5081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.show',
          ),
          1 => 
          array (
            0 => 'expense',
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
      5095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.edit',
          ),
          1 => 
          array (
            0 => 'expense',
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
      5104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.update',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expense',
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
      5155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4rBGmPtKhX0UZlBF',
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
          5 => false,
          6 => NULL,
        ),
      ),
      5193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hv4XJYzp63ZCnswx',
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
          5 => false,
          6 => NULL,
        ),
      ),
      5252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QLy6BYIQM5u4txIu',
          ),
          1 => 
          array (
            0 => 'transaction_id',
            1 => 'template_for',
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
      5285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'note-documents.show',
          ),
          1 => 
          array (
            0 => 'note_document',
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
      5299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'note-documents.edit',
          ),
          1 => 
          array (
            0 => 'note_document',
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
      5308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'note-documents.update',
          ),
          1 => 
          array (
            0 => 'note_document',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'note-documents.destroy',
          ),
          1 => 
          array (
            0 => 'note_document',
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
      5356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.show',
          ),
          1 => 
          array (
            0 => 'account',
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
      5370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.edit',
          ),
          1 => 
          array (
            0 => 'account',
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
      5379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.update',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'account.destroy',
          ),
          1 => 
          array (
            0 => 'account',
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
      5404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VRn4JN7N3VSTagPw',
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
      5437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eyl6JyX7n7LjyV2W',
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
      5465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KXCt8txIW3BAF3kY',
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
      5509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwTSowBLUnZ67See',
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
      5533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kQp9DkKPT7cqolYf',
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
      5577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XKdrGNc6Fethipd6',
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
      5623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Yoy4kjIHb4tFIpk',
          ),
          1 => 
          array (
            0 => 'id',
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
      5662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HV9gnunUrHzhKhKk',
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
      5693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gVcJLqsB83KT6jC1',
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
      5722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-types.show',
          ),
          1 => 
          array (
            0 => 'account_type',
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
      5736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-types.edit',
          ),
          1 => 
          array (
            0 => 'account_type',
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
      5745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-types.update',
          ),
          1 => 
          array (
            0 => 'account_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'account-types.destroy',
          ),
          1 => 
          array (
            0 => 'account_type',
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
      5779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warranties.show',
          ),
          1 => 
          array (
            0 => 'warranty',
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
      5793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warranties.edit',
          ),
          1 => 
          array (
            0 => 'warranty',
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
      5802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warranties.update',
          ),
          1 => 
          array (
            0 => 'warranty',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warranties.destroy',
          ),
          1 => 
          array (
            0 => 'warranty',
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
        2 => 
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
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8udJGhCM9AOdojf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::p8udJGhCM9AOdojf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iX3GC2gGzw1chu8s' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008e30000000000000000";}";s:4:"hash";s:44:"+kxY6UD9J8r7/02+Tz5rFtIs9cvOAOHFtIYMeq9PKFE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::iX3GC2gGzw1chu8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install-start',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.checkServer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/check-server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@checkServer',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@checkServer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.checkServer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@details',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.postDetails' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/post-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@postDetails',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@postDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.postDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.installAlternate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/install-alternate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@installAlternate',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@installAlternate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.installAlternate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@success',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@success',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.updateConfirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@updateConfirmation',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@updateConfirmation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.updateConfirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@update',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rAmDklcQ6iYKcaft' => 
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
          1 => 'setData',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
        return \\view(\'welcome\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008ef0000000000000000";}";s:4:"hash";s:44:"En/BuZYTMu1LnqsNF06UZlyD+JXkpye1WJVcqsNXEYk=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rAmDklcQ6iYKcaft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'generated::fEu54U41okbPl7IY' => 
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fEu54U41okbPl7IY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJqPvTLAFey9pykW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cJqPvTLAFey9pykW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'generated::g23pyRaqIAgKxVko' => 
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
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g23pyRaqIAgKxVko',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.getRegister' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@getRegister',
        'controller' => 'App\\Http\\Controllers\\BusinessController@getRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'business.getRegister',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.postRegister' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@postRegister',
        'controller' => 'App\\Http\\Controllers\\BusinessController@postRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'business.postRegister',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.postCheckUsername' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/register/check-username',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@postCheckUsername',
        'controller' => 'App\\Http\\Controllers\\BusinessController@postCheckUsername',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'business.postCheckUsername',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.postCheckEmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/register/check-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@postCheckEmail',
        'controller' => 'App\\Http\\Controllers\\BusinessController@postCheckEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'business.postCheckEmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'show_invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@showInvoice',
        'controller' => 'App\\Http\\Controllers\\SellPosController@showInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'show_invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'show_quote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quote/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@showInvoice',
        'controller' => 'App\\Http\\Controllers\\SellPosController@showInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'show_quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice_payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pay/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@invoicePayment',
        'controller' => 'App\\Http\\Controllers\\SellPosController@invoicePayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'invoice_payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confirm_payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@confirmPayment',
        'controller' => 'App\\Http\\Controllers\\SellPosController@confirmPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confirm_payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit-pos-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@edit',
        'controller' => 'App\\Http\\Controllers\\SellPosController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit-pos-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lqFELECNcqibpBju' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service-staff-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@showServiceStaffAvailibility',
        'controller' => 'App\\Http\\Controllers\\SellPosController@showServiceStaffAvailibility',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lqFELECNcqibpBju',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nSjj8icmwf5xE9xG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pause-resume-service-staff-timer/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@pauseResumeServiceStaffTimer',
        'controller' => 'App\\Http\\Controllers\\SellPosController@pauseResumeServiceStaffTimer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nSjj8icmwf5xE9xG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wm5b71Ghl8q4436Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mark-as-available/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@markAsAvailable',
        'controller' => 'App\\Http\\Controllers\\SellPosController@markAsAvailable',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Wm5b71Ghl8q4436Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-requisition.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-requisition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-requisition.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-requisition.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-requisition/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-requisition.create',
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@create',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-requisition.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-requisition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-requisition.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-requisition.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-requisition/{purchase_requisition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-requisition.show',
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-requisition.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'purchase-requisition/{purchase_requisition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-requisition.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-requisition-products' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-requisition-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@getRequisitionProducts',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@getRequisitionProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-requisition-products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q25B9OY0d4bisHYt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-purchase-requisitions/{location_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@getPurchaseRequisitions',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@getPurchaseRequisitions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::q25B9OY0d4bisHYt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7dz3O0dh8JrIAgya' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-purchase-requisition-lines/{purchase_requisition_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseRequisitionController@getPurchaseRequisitionLines',
        'controller' => 'App\\Http\\Controllers\\PurchaseRequisitionController@getPurchaseRequisitionLines',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7dz3O0dh8JrIAgya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sign-in-as-user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sign-in-as-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ManageUserController@signInAsUser',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@signInAsUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sign-in-as-user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
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
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'generated::WgPua6Tmn2qZkxOn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/get-totals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getTotals',
        'controller' => 'App\\Http\\Controllers\\HomeController@getTotals',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WgPua6Tmn2qZkxOn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VTnGpVB8qNzGb5qL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/product-stock-alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getProductStockAlert',
        'controller' => 'App\\Http\\Controllers\\HomeController@getProductStockAlert',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VTnGpVB8qNzGb5qL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaozJYItXiq4aZr4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/purchase-payment-dues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getPurchasePaymentDues',
        'controller' => 'App\\Http\\Controllers\\HomeController@getPurchasePaymentDues',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CaozJYItXiq4aZr4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8YBOkdpaFmhhMaD2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/sales-payment-dues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getSalesPaymentDues',
        'controller' => 'App\\Http\\Controllers\\HomeController@getSalesPaymentDues',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8YBOkdpaFmhhMaD2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attach.medias.to.model' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'attach-medias-to-model',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@attachMediasToGivenModel',
        'controller' => 'App\\Http\\Controllers\\HomeController@attachMediasToGivenModel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'attach.medias.to.model',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calendar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'calendar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getCalendar',
        'controller' => 'App\\Http\\Controllers\\HomeController@getCalendar',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'calendar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GAUMSiPEqe9pV9ew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'test-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@testEmailConfiguration',
        'controller' => 'App\\Http\\Controllers\\BusinessController@testEmailConfiguration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GAUMSiPEqe9pV9ew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hyeeQJSoN5koryDc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'test-sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@testSmsConfiguration',
        'controller' => 'App\\Http\\Controllers\\BusinessController@testSmsConfiguration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hyeeQJSoN5koryDc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.getBusinessSettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@getBusinessSettings',
        'controller' => 'App\\Http\\Controllers\\BusinessController@getBusinessSettings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'business.getBusinessSettings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.postBusinessSettings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessController@postBusinessSettings',
        'controller' => 'App\\Http\\Controllers\\BusinessController@postBusinessSettings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'business.postBusinessSettings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.getProfile' => 
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
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@getProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.getProfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.updateProfile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.updateProfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.updatePassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\UserController@updatePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.updatePassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.index',
        'uses' => 'App\\Http\\Controllers\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\BrandController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.create',
        'uses' => 'App\\Http\\Controllers\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\BrandController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.store',
        'uses' => 'App\\Http\\Controllers\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\BrandController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.show',
        'uses' => 'App\\Http\\Controllers\\BrandController@show',
        'controller' => 'App\\Http\\Controllers\\BrandController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.edit',
        'uses' => 'App\\Http\\Controllers\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\BrandController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.update',
        'uses' => 'App\\Http\\Controllers\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\BrandController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'brands.destroy',
        'uses' => 'App\\Http\\Controllers\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\BrandController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.index',
        'uses' => 'PaymentAccountController@index',
        'controller' => 'PaymentAccountController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-account/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.create',
        'uses' => 'PaymentAccountController@create',
        'controller' => 'PaymentAccountController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.store',
        'uses' => 'PaymentAccountController@store',
        'controller' => 'PaymentAccountController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-account/{payment_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.show',
        'uses' => 'PaymentAccountController@show',
        'controller' => 'PaymentAccountController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-account/{payment_account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.edit',
        'uses' => 'PaymentAccountController@edit',
        'controller' => 'PaymentAccountController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payment-account/{payment_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.update',
        'uses' => 'PaymentAccountController@update',
        'controller' => 'PaymentAccountController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-account.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payment-account/{payment_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payment-account.destroy',
        'uses' => 'PaymentAccountController@destroy',
        'controller' => 'PaymentAccountController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.index',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@index',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax-rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.create',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@create',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tax-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.store',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@store',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax-rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.show',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@show',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax-rates/{tax_rate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.edit',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@edit',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'tax-rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.update',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@update',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax-rates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'tax-rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tax-rates.destroy',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.index',
        'uses' => 'App\\Http\\Controllers\\UnitController@index',
        'controller' => 'App\\Http\\Controllers\\UnitController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.create',
        'uses' => 'App\\Http\\Controllers\\UnitController@create',
        'controller' => 'App\\Http\\Controllers\\UnitController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.store',
        'uses' => 'App\\Http\\Controllers\\UnitController@store',
        'controller' => 'App\\Http\\Controllers\\UnitController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.show',
        'uses' => 'App\\Http\\Controllers\\UnitController@show',
        'controller' => 'App\\Http\\Controllers\\UnitController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'units/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.edit',
        'uses' => 'App\\Http\\Controllers\\UnitController@edit',
        'controller' => 'App\\Http\\Controllers\\UnitController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.update',
        'uses' => 'App\\Http\\Controllers\\UnitController@update',
        'controller' => 'App\\Http\\Controllers\\UnitController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'units.destroy',
        'uses' => 'App\\Http\\Controllers\\UnitController@destroy',
        'controller' => 'App\\Http\\Controllers\\UnitController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ledger-discount.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ledger-discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'ledger-discount.store',
        'uses' => 'App\\Http\\Controllers\\LedgerDiscountController@store',
        'controller' => 'App\\Http\\Controllers\\LedgerDiscountController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ledger-discount.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ledger-discount/{ledger_discount}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'ledger-discount.edit',
        'uses' => 'App\\Http\\Controllers\\LedgerDiscountController@edit',
        'controller' => 'App\\Http\\Controllers\\LedgerDiscountController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ledger-discount.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'ledger-discount/{ledger_discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'ledger-discount.update',
        'uses' => 'App\\Http\\Controllers\\LedgerDiscountController@update',
        'controller' => 'App\\Http\\Controllers\\LedgerDiscountController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ledger-discount.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'ledger-discount/{ledger_discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'ledger-discount.destroy',
        'uses' => 'App\\Http\\Controllers\\LedgerDiscountController@destroy',
        'controller' => 'App\\Http\\Controllers\\LedgerDiscountController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u1RFfNSeNKHuwMq7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check-mobile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@checkMobile',
        'controller' => 'App\\Http\\Controllers\\ContactController@checkMobile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u1RFfNSeNKHuwMq7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JyfhiQKNxpXIGHT2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-contact-due/{contact_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@getContactDue',
        'controller' => 'App\\Http\\Controllers\\ContactController@getContactDue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JyfhiQKNxpXIGHT2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oM6A0B1Rx5EOtEFG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/payments/{contact_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@getContactPayments',
        'controller' => 'App\\Http\\Controllers\\ContactController@getContactPayments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oM6A0B1Rx5EOtEFG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HCQTzylEXD28fyVB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@contactMap',
        'controller' => 'App\\Http\\Controllers\\ContactController@contactMap',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HCQTzylEXD28fyVB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d1aNSWD6kwtKCXgj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/update-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\ContactController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d1aNSWD6kwtKCXgj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sKGlutrsFDJ5yeFp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/stock-report/{supplier_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@getSupplierStockReport',
        'controller' => 'App\\Http\\Controllers\\ContactController@getSupplierStockReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sKGlutrsFDJ5yeFp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X1wFPE9rHkbPagQF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@getLedger',
        'controller' => 'App\\Http\\Controllers\\ContactController@getLedger',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::X1wFPE9rHkbPagQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ai2YagbM4qJqC6jH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contacts/send-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@sendLedger',
        'controller' => 'App\\Http\\Controllers\\ContactController@sendLedger',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ai2YagbM4qJqC6jH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.import' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@getImportContacts',
        'controller' => 'App\\Http\\Controllers\\ContactController@getImportContacts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contacts.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UuCP9O8B3NSQ9psn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contacts/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@postImportContacts',
        'controller' => 'App\\Http\\Controllers\\ContactController@postImportContacts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UuCP9O8B3NSQ9psn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9YGg62kqyT2df1k5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contacts/check-contacts-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@checkContactId',
        'controller' => 'App\\Http\\Controllers\\ContactController@checkContactId',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9YGg62kqyT2df1k5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NqkDTcC1C4BG1Did' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\ContactController@getCustomers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NqkDTcC1C4BG1Did',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.index',
        'uses' => 'App\\Http\\Controllers\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\ContactController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.create',
        'uses' => 'App\\Http\\Controllers\\ContactController@create',
        'controller' => 'App\\Http\\Controllers\\ContactController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.store',
        'uses' => 'App\\Http\\Controllers\\ContactController@store',
        'controller' => 'App\\Http\\Controllers\\ContactController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.show',
        'uses' => 'App\\Http\\Controllers\\ContactController@show',
        'controller' => 'App\\Http\\Controllers\\ContactController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts/{contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.edit',
        'uses' => 'App\\Http\\Controllers\\ContactController@edit',
        'controller' => 'App\\Http\\Controllers\\ContactController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.update',
        'uses' => 'App\\Http\\Controllers\\ContactController@update',
        'controller' => 'App\\Http\\Controllers\\ContactController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'contacts.destroy',
        'uses' => 'App\\Http\\Controllers\\ContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\ContactController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hhYNMUcCyBVPsxpw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxonomies-ajax-index-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@getTaxonomyIndexPage',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@getTaxonomyIndexPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hhYNMUcCyBVPsxpw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxonomies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.index',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@index',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxonomies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.create',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@create',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'taxonomies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.store',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@store',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxonomies/{taxonomy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.show',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@show',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxonomies/{taxonomy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.edit',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@edit',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'taxonomies/{taxonomy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.update',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@update',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxonomies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'taxonomies/{taxonomy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'taxonomies.destroy',
        'uses' => 'App\\Http\\Controllers\\TaxonomyController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaxonomyController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'variation-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.index',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'variation-templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.create',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@create',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'variation-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.store',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'variation-templates/{variation_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.show',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'variation-templates/{variation_template}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.edit',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@edit',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'variation-templates/{variation_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.update',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variation-templates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'variation-templates/{variation_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'variation-templates.destroy',
        'uses' => 'App\\Http\\Controllers\\VariationTemplateController@destroy',
        'controller' => 'App\\Http\\Controllers\\VariationTemplateController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RaaU3pNZRf2ArhcE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/download-excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@downloadExcel',
        'controller' => 'App\\Http\\Controllers\\ProductController@downloadExcel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RaaU3pNZRf2ArhcE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4qjGgMV45UQhF0Z9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/stock-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@productStockHistory',
        'controller' => 'App\\Http\\Controllers\\ProductController@productStockHistory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4qjGgMV45UQhF0Z9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pxGTUGPzVQhjm51C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete-media/{media_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@deleteMedia',
        'controller' => 'App\\Http\\Controllers\\ProductController@deleteMedia',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pxGTUGPzVQhjm51C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cl9tYBLuqu70utnP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/mass-deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@massDeactivate',
        'controller' => 'App\\Http\\Controllers\\ProductController@massDeactivate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cl9tYBLuqu70utnP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::la4wubdLOrh6x1DC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/activate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@activate',
        'controller' => 'App\\Http\\Controllers\\ProductController@activate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::la4wubdLOrh6x1DC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P8xBzHHAwpWfOcJh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/view-product-group-price/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@viewGroupPrice',
        'controller' => 'App\\Http\\Controllers\\ProductController@viewGroupPrice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::P8xBzHHAwpWfOcJh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hHQJaGYaxxrOYJht' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/add-selling-prices/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@addSellingPrices',
        'controller' => 'App\\Http\\Controllers\\ProductController@addSellingPrices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hHQJaGYaxxrOYJht',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tPQ1yNN9yHiImieb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/save-selling-prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@saveSellingPrices',
        'controller' => 'App\\Http\\Controllers\\ProductController@saveSellingPrices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tPQ1yNN9yHiImieb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::weuQ1Sp7j9f6AXVn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/mass-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@massDestroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@massDestroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::weuQ1Sp7j9f6AXVn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PppDnWkSPCOAjXSZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@view',
        'controller' => 'App\\Http\\Controllers\\ProductController@view',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PppDnWkSPCOAjXSZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tY224mT10eFSbLqn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getProducts',
        'controller' => 'App\\Http\\Controllers\\ProductController@getProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tY224mT10eFSbLqn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uhO6P8o8Hcuu84sz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/list-no-variation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getProductsWithoutVariations',
        'controller' => 'App\\Http\\Controllers\\ProductController@getProductsWithoutVariations',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uhO6P8o8Hcuu84sz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DuPPGFIpKKzHOvqC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/bulk-edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@bulkEdit',
        'controller' => 'App\\Http\\Controllers\\ProductController@bulkEdit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DuPPGFIpKKzHOvqC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jINFhk1dUj2AnLpE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/bulk-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@bulkUpdate',
        'controller' => 'App\\Http\\Controllers\\ProductController@bulkUpdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jINFhk1dUj2AnLpE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5xNVEAbdITWAApdE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/bulk-update-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@updateProductLocation',
        'controller' => 'App\\Http\\Controllers\\ProductController@updateProductLocation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5xNVEAbdITWAApdE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mMzsIuQC32EWPxgt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/get-product-to-edit/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getProductToEdit',
        'controller' => 'App\\Http\\Controllers\\ProductController@getProductToEdit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mMzsIuQC32EWPxgt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cguGFqjGGbOnMSoT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/get_sub_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getSubCategories',
        'controller' => 'App\\Http\\Controllers\\ProductController@getSubCategories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cguGFqjGGbOnMSoT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::itET5ypV8hnrP0KT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/get_sub_units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getSubUnits',
        'controller' => 'App\\Http\\Controllers\\ProductController@getSubUnits',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::itET5ypV8hnrP0KT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X1rWXzSA6PzYQ5Zo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/product_form_part',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getProductVariationFormPart',
        'controller' => 'App\\Http\\Controllers\\ProductController@getProductVariationFormPart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::X1rWXzSA6PzYQ5Zo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U7K3tsLQ4ebTzVfy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/get_product_variation_row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getProductVariationRow',
        'controller' => 'App\\Http\\Controllers\\ProductController@getProductVariationRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U7K3tsLQ4ebTzVfy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GwSmGyA6FQ6lcKV0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/get_variation_template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getVariationTemplate',
        'controller' => 'App\\Http\\Controllers\\ProductController@getVariationTemplate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GwSmGyA6FQ6lcKV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JdqS2CS2flg0q3Nx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/get_variation_value_row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getVariationValueRow',
        'controller' => 'App\\Http\\Controllers\\ProductController@getVariationValueRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JdqS2CS2flg0q3Nx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oHo3bHJuewROxW7D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/check_product_sku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@checkProductSku',
        'controller' => 'App\\Http\\Controllers\\ProductController@checkProductSku',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oHo3bHJuewROxW7D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4HV7O3ruEWAhBqYS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/validate_variation_skus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@validateVaritionSkus',
        'controller' => 'App\\Http\\Controllers\\ProductController@validateVaritionSkus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4HV7O3ruEWAhBqYS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L4N2zsEpRPLq7zBI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/quick_add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@quickAdd',
        'controller' => 'App\\Http\\Controllers\\ProductController@quickAdd',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L4N2zsEpRPLq7zBI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NvBiugwONnKXcRLt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/save_quick_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@saveQuickProduct',
        'controller' => 'App\\Http\\Controllers\\ProductController@saveQuickProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NvBiugwONnKXcRLt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dOzORXmCUwru6iQ2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/get-combo-product-entry-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getComboProductEntryRow',
        'controller' => 'App\\Http\\Controllers\\ProductController@getComboProductEntryRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dOzORXmCUwru6iQ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qp9GRJVMZylXTVSu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/toggle-woocommerce-sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@toggleWooCommerceSync',
        'controller' => 'App\\Http\\Controllers\\ProductController@toggleWooCommerceSync',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qp9GRJVMZylXTVSu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.index',
        'uses' => 'App\\Http\\Controllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\ProductController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.create',
        'uses' => 'App\\Http\\Controllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\ProductController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.store',
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.show',
        'uses' => 'App\\Http\\Controllers\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\ProductController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.edit',
        'uses' => 'App\\Http\\Controllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.update',
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'products.destroy',
        'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qytmkBqfUewRW1FN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'toggle-subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@toggleRecurringInvoices',
        'controller' => 'App\\Http\\Controllers\\SellPosController@toggleRecurringInvoices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qytmkBqfUewRW1FN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6xocB7JE3nbs8EdG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sells/pos/get-types-of-service-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getTypesOfServiceDetails',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getTypesOfServiceDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6xocB7JE3nbs8EdG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a9pw6x677jc4AyJR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@listSubscriptions',
        'controller' => 'App\\Http\\Controllers\\SellPosController@listSubscriptions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::a9pw6x677jc4AyJR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IADwo6llg1naTtkf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/duplicate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@duplicateSell',
        'controller' => 'App\\Http\\Controllers\\SellController@duplicateSell',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IADwo6llg1naTtkf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::my8xdBDzw0IoOqe4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/drafts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@getDrafts',
        'controller' => 'App\\Http\\Controllers\\SellController@getDrafts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::my8xdBDzw0IoOqe4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::73aVwMLxool2eLg0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/convert-to-draft/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\SellPosController@convertToInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::73aVwMLxool2eLg0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L5x8Yej6INRPbY2D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/convert-to-proforma/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@convertToProforma',
        'controller' => 'App\\Http\\Controllers\\SellPosController@convertToProforma',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L5x8Yej6INRPbY2D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtZiJ5Ve6EnlcKT8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@getQuotations',
        'controller' => 'App\\Http\\Controllers\\SellController@getQuotations',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HtZiJ5Ve6EnlcKT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qwl8NFOmCyJVXTKC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/draft-dt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@getDraftDatables',
        'controller' => 'App\\Http\\Controllers\\SellController@getDraftDatables',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Qwl8NFOmCyJVXTKC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sells.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sells.index',
        'uses' => 'App\\Http\\Controllers\\SellController@index',
        'controller' => 'App\\Http\\Controllers\\SellController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sells.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sells.create',
        'uses' => 'App\\Http\\Controllers\\SellController@create',
        'controller' => 'App\\Http\\Controllers\\SellController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sells.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sells',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sells.store',
        'uses' => 'App\\Http\\Controllers\\SellController@store',
        'controller' => 'App\\Http\\Controllers\\SellController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sells.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/{sell}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sells.edit',
        'uses' => 'App\\Http\\Controllers\\SellController@edit',
        'controller' => 'App\\Http\\Controllers\\SellController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sells.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sells/{sell}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sells.update',
        'uses' => 'App\\Http\\Controllers\\SellController@update',
        'controller' => 'App\\Http\\Controllers\\SellController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sells.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sells/{sell}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sells.destroy',
        'uses' => 'App\\Http\\Controllers\\SellController@destroy',
        'controller' => 'App\\Http\\Controllers\\SellController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yhvef27o3aeXPjT6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/copy-quotation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@copyQuotation',
        'controller' => 'App\\Http\\Controllers\\SellPosController@copyQuotation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Yhvef27o3aeXPjT6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::juUj71EafI7xt9Nr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import-purchase-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@importPurchaseProducts',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@importPurchaseProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::juUj71EafI7xt9Nr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n9jUmxvzKSvL57oL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n9jUmxvzKSvL57oL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIW3scgN4UaRTJZN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/get_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@getProducts',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@getProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oIW3scgN4UaRTJZN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cXvPERpErG4kTm2t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/get_suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@getSuppliers',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@getSuppliers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cXvPERpErG4kTm2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PWWRLbKZxcSzWeKk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/get_purchase_entry_row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@getPurchaseEntryRow',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@getPurchaseEntryRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PWWRLbKZxcSzWeKk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jrxhelBHY9qM08tw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/check_ref_number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@checkRefNumber',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@checkRefNumber',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jrxhelBHY9qM08tw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchases.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchases.create',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@create',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchases.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/{purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchases.edit',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchases.update',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchases.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TzqDZCecJ7LdMysV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'import-sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportSalesController@index',
        'controller' => 'App\\Http\\Controllers\\ImportSalesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TzqDZCecJ7LdMysV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CGArytvJEzDFHv46' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import-sales/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportSalesController@preview',
        'controller' => 'App\\Http\\Controllers\\ImportSalesController@preview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CGArytvJEzDFHv46',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sZ0qbf6MHcozrbQR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import-sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportSalesController@import',
        'controller' => 'App\\Http\\Controllers\\ImportSalesController@import',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sZ0qbf6MHcozrbQR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5BguY4qkERTMDBXd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'revert-sale-import/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportSalesController@revertSaleImport',
        'controller' => 'App\\Http\\Controllers\\ImportSalesController@revertSaleImport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5BguY4qkERTMDBXd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IzXSB0fFynTr0D5w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/pos/get_product_row/{variation_id}/{location_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getProductRow',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getProductRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IzXSB0fFynTr0D5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UunU9XnrvESm9hFA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sells/pos/get_payment_row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getPaymentRow',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getPaymentRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UunU9XnrvESm9hFA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HPRqCeIj6fsXJqcX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sells/pos/get-reward-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getRewardDetails',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getRewardDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HPRqCeIj6fsXJqcX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vyqo06ghhUS1rD0O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/pos/get-recent-transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getRecentTransactions',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getRecentTransactions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Vyqo06ghhUS1rD0O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PEie8DjhooDxYLLD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/pos/get-product-suggestion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getProductSuggestion',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getProductSuggestion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PEie8DjhooDxYLLD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HKceTRAQJnuIUwCg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/pos/get-featured-products/{location_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getFeaturedProducts',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getFeaturedProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HKceTRAQJnuIUwCg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sDJSc5jWhAYrnHrJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-mapping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@resetMapping',
        'controller' => 'App\\Http\\Controllers\\SellController@resetMapping',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sDJSc5jWhAYrnHrJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.index',
        'uses' => 'App\\Http\\Controllers\\SellPosController@index',
        'controller' => 'App\\Http\\Controllers\\SellPosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.create',
        'uses' => 'App\\Http\\Controllers\\SellPosController@create',
        'controller' => 'App\\Http\\Controllers\\SellPosController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.store',
        'uses' => 'App\\Http\\Controllers\\SellPosController@store',
        'controller' => 'App\\Http\\Controllers\\SellPosController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/{po}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.show',
        'uses' => 'App\\Http\\Controllers\\SellPosController@show',
        'controller' => 'App\\Http\\Controllers\\SellPosController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/{po}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.edit',
        'uses' => 'App\\Http\\Controllers\\SellPosController@edit',
        'controller' => 'App\\Http\\Controllers\\SellPosController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'pos/{po}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.update',
        'uses' => 'App\\Http\\Controllers\\SellPosController@update',
        'controller' => 'App\\Http\\Controllers\\SellPosController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'pos/{po}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'pos.destroy',
        'uses' => 'App\\Http\\Controllers\\SellPosController@destroy',
        'controller' => 'App\\Http\\Controllers\\SellPosController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.index',
        'uses' => 'App\\Http\\Controllers\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.create',
        'uses' => 'App\\Http\\Controllers\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\RoleController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.store',
        'uses' => 'App\\Http\\Controllers\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\RoleController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.show',
        'uses' => 'App\\Http\\Controllers\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\RoleController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.edit',
        'uses' => 'App\\Http\\Controllers\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.update',
        'uses' => 'App\\Http\\Controllers\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\RoleController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'roles.destroy',
        'uses' => 'App\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@index',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.create',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@create',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@store',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@show',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.edit',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@edit',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@update',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\ManageUserController@destroy',
        'controller' => 'App\\Http\\Controllers\\ManageUserController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'group-taxes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.index',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@index',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'group-taxes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.create',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@create',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'group-taxes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.store',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@store',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'group-taxes/{group_tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.show',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@show',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'group-taxes/{group_tax}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.edit',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@edit',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'group-taxes/{group_tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.update',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@update',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group-taxes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'group-taxes/{group_tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'group-taxes.destroy',
        'uses' => 'App\\Http\\Controllers\\GroupTaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\GroupTaxController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H5VApSOY27f5EklE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barcodes/set_default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BarcodeController@setDefault',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@setDefault',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::H5VApSOY27f5EklE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barcodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.index',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@index',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barcodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.create',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@create',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barcodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.store',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@store',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barcodes/{barcode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.show',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@show',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barcodes/{barcode}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.edit',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@edit',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'barcodes/{barcode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.update',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@update',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barcodes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'barcodes/{barcode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'barcodes.destroy',
        'uses' => 'App\\Http\\Controllers\\BarcodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarcodeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ExSZ0BFdmDXlGcfc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-schemes/set_default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@setDefault',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@setDefault',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ExSZ0BFdmDXlGcfc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-schemes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.index',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@index',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-schemes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.create',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@create',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice-schemes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.store',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@store',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-schemes/{invoice_scheme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.show',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@show',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-schemes/{invoice_scheme}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.edit',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@edit',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'invoice-schemes/{invoice_scheme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.update',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@update',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-schemes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'invoice-schemes/{invoice_scheme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-schemes.destroy',
        'uses' => 'App\\Http\\Controllers\\InvoiceSchemeController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvoiceSchemeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1RGcnEuTrXgfB2HL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'labels/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\LabelsController@show',
        'controller' => 'App\\Http\\Controllers\\LabelsController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1RGcnEuTrXgfB2HL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hYrzPAvzsbTglAqp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'labels/add-product-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\LabelsController@addProductRow',
        'controller' => 'App\\Http\\Controllers\\LabelsController@addProductRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hYrzPAvzsbTglAqp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::quF8GlZlNWlsJMfT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'labels/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\LabelsController@preview',
        'controller' => 'App\\Http\\Controllers\\LabelsController@preview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::quF8GlZlNWlsJMfT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a4j4ywdZaBhhbSPW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/gst-purchase-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@gstPurchaseReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@gstPurchaseReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::a4j4ywdZaBhhbSPW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KRwQ56alEsrtRZb5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/gst-sales-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@gstSalesReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@gstSalesReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KRwQ56alEsrtRZb5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SZOsJohXOn3HH32u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/get-stock-by-sell-price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockBySellingPrice',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockBySellingPrice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SZOsJohXOn3HH32u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6EBI2uuuefp1SB62' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/purchase-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@purchaseReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@purchaseReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6EBI2uuuefp1SB62',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wbWI2BIHU4Pop3im' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sale-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@saleReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@saleReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wbWI2BIHU4Pop3im',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::veUoGDLGNCKvAiJN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/service-staff-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getServiceStaffReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getServiceStaffReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::veUoGDLGNCKvAiJN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2O98HFfEJolUjB9A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/service-staff-line-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@serviceStaffLineOrders',
        'controller' => 'App\\Http\\Controllers\\ReportController@serviceStaffLineOrders',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2O98HFfEJolUjB9A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5VntK5ficckHmLLi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/table-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getTableReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getTableReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5VntK5ficckHmLLi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7IXJ3RbD0SFkKItw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getProfitLoss',
        'controller' => 'App\\Http\\Controllers\\ReportController@getProfitLoss',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7IXJ3RbD0SFkKItw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vmdLxUopg83U9WqZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/get-opening-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getOpeningStock',
        'controller' => 'App\\Http\\Controllers\\ReportController@getOpeningStock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vmdLxUopg83U9WqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l9pbKS40kxnluacf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/purchase-sell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getPurchaseSell',
        'controller' => 'App\\Http\\Controllers\\ReportController@getPurchaseSell',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l9pbKS40kxnluacf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b6KTHzQzQVdH1Cu6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/customer-supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getCustomerSuppliers',
        'controller' => 'App\\Http\\Controllers\\ReportController@getCustomerSuppliers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::b6KTHzQzQVdH1Cu6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MEOzeuPt9SWCoBhw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/stock-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MEOzeuPt9SWCoBhw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OqITC19XcJQj1E7s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/stock-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockDetails',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OqITC19XcJQj1E7s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ENvnRYPi9WBSx7GR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/tax-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getTaxReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getTaxReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ENvnRYPi9WBSx7GR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::frWRQTLKxSO4XdTk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/tax-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getTaxDetails',
        'controller' => 'App\\Http\\Controllers\\ReportController@getTaxDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::frWRQTLKxSO4XdTk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UfFaK2SyYJxFmy6y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/trending-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getTrendingProducts',
        'controller' => 'App\\Http\\Controllers\\ReportController@getTrendingProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UfFaK2SyYJxFmy6y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::INQJ3iAMR1NPWkvV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/expense-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getExpenseReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getExpenseReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::INQJ3iAMR1NPWkvV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZS5O6PXzwXWftag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/stock-adjustment-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockAdjustmentReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockAdjustmentReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qZS5O6PXzwXWftag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yVVPHmk8DXKeaz7O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/register-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getRegisterReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getRegisterReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yVVPHmk8DXKeaz7O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p0QbucjSHiP6UCBg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales-representative-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::p0QbucjSHiP6UCBg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CupBokgDUsnbW7On' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales-representative-total-expense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeTotalExpense',
        'controller' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeTotalExpense',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CupBokgDUsnbW7On',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7uQapf6a4zwm97NA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales-representative-total-sell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeTotalSell',
        'controller' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeTotalSell',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7uQapf6a4zwm97NA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cmmsUuIAoI0Jz1JR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales-representative-total-commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeTotalCommission',
        'controller' => 'App\\Http\\Controllers\\ReportController@getSalesRepresentativeTotalCommission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cmmsUuIAoI0Jz1JR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tr0wcTiqrYZYAbe6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/stock-expiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockExpiryReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockExpiryReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Tr0wcTiqrYZYAbe6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xUAlD5UxUTuonrI9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/stock-expiry-edit-modal/{purchase_line_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockExpiryReportEditModal',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockExpiryReportEditModal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xUAlD5UxUTuonrI9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateStockExpiryReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reports/stock-expiry-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@updateStockExpiryReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@updateStockExpiryReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateStockExpiryReport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UXXxS9qmPAm3rb9o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/customer-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getCustomerGroup',
        'controller' => 'App\\Http\\Controllers\\ReportController@getCustomerGroup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UXXxS9qmPAm3rb9o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2DuxR7Atv1wEbHrJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/product-purchase-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getproductPurchaseReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getproductPurchaseReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2DuxR7Atv1wEbHrJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ZJ96kUnKXrR8cQ0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/product-sell-grouped-by',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@productSellReportBy',
        'controller' => 'App\\Http\\Controllers\\ReportController@productSellReportBy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0ZJ96kUnKXrR8cQ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hjA6SfRPL88w0HdE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/product-sell-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getproductSellReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getproductSellReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hjA6SfRPL88w0HdE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::70z17R7bnh2hkQOY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/product-sell-report-with-purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getproductSellReportWithPurchase',
        'controller' => 'App\\Http\\Controllers\\ReportController@getproductSellReportWithPurchase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::70z17R7bnh2hkQOY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SW3MOLiTe8vb1l36' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/product-sell-grouped-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getproductSellGroupedReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getproductSellGroupedReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SW3MOLiTe8vb1l36',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::We23nNQuGbf4iByK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/lot-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getLotReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@getLotReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::We23nNQuGbf4iByK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ofuycvyXyj5r08t7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/purchase-payment-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@purchasePaymentReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@purchasePaymentReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ofuycvyXyj5r08t7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNDreGDmSABE8lT3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sell-payment-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@sellPaymentReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@sellPaymentReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YNDreGDmSABE8lT3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HBhA4MetVcFF5wAY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/product-stock-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@productStockDetails',
        'controller' => 'App\\Http\\Controllers\\ReportController@productStockDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HBhA4MetVcFF5wAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tf0F9Ab5HycQims9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/adjust-product-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@adjustProductStock',
        'controller' => 'App\\Http\\Controllers\\ReportController@adjustProductStock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tf0F9Ab5HycQims9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ka9VDT4MpVpFUtmr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/get-profit/{by?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getProfit',
        'controller' => 'App\\Http\\Controllers\\ReportController@getProfit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ka9VDT4MpVpFUtmr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmBgfbK5JHozgSwN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/items-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@itemsReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@itemsReport',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qmBgfbK5JHozgSwN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5zx3JpwmJBbNMGP2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/get-stock-value',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@getStockValue',
        'controller' => 'App\\Http\\Controllers\\ReportController@getStockValue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5zx3JpwmJBbNMGP2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZHribs86eZBeSmh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business-location/activate-deactivate/{location_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@activateDeactivateLocation',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@activateDeactivateLocation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kZHribs86eZBeSmh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business-location/{location_id}/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\LocationSettingsController@index',
        'as' => 'location.settings',
        'namespace' => NULL,
        'prefix' => '/business-location/{location_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.settings_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business-location/{location_id}/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationSettingsController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\LocationSettingsController@updateSettings',
        'as' => 'location.settings_update',
        'namespace' => NULL,
        'prefix' => '/business-location/{location_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9fO4nxi12gxI6eo0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business-location/check-location-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@checkLocationId',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@checkLocationId',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9fO4nxi12gxI6eo0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.index',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@index',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business-location/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.create',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@create',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.store',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@store',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business-location/{business_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.show',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@show',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business-location/{business_location}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.edit',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@edit',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'business-location/{business_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.update',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@update',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business-location.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'business-location/{business_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'business-location.destroy',
        'uses' => 'App\\Http\\Controllers\\BusinessLocationController@destroy',
        'controller' => 'App\\Http\\Controllers\\BusinessLocationController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-layouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.index',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@index',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-layouts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.create',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@create',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice-layouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.store',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@store',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-layouts/{invoice_layout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.show',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@show',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice-layouts/{invoice_layout}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.edit',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@edit',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'invoice-layouts/{invoice_layout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.update',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@update',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice-layouts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'invoice-layouts/{invoice_layout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'invoice-layouts.destroy',
        'uses' => 'App\\Http\\Controllers\\InvoiceLayoutController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvoiceLayoutController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7JZXUrmVF7mT9pEP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-expense-sub-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@getSubCategories',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@getSubCategories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7JZXUrmVF7mT9pEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense-categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expense-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense-categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense-categories/{expense_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'expense-categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense-categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'expense-categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expense-categories.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/{expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::awSRwiaDBWvUKxS1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/show-child-payments/{payment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@showChildPayments',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@showChildPayments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::awSRwiaDBWvUKxS1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sbmKgPEO6BSeqN1W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/view-payment/{payment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@viewPayment',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@viewPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sbmKgPEO6BSeqN1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FbtQm1HkmApTjS9U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/add_payment/{transaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@addPayment',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@addPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FbtQm1HkmApTjS9U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wr8DvIB8hmbN35vS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/pay-contact-due/{contact_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@getPayContactDue',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@getPayContactDue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wr8DvIB8hmbN35vS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::slrR0Mr8tjWhxQxt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payments/pay-contact-due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@postPayContactDue',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@postPayContactDue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::slrR0Mr8tjWhxQxt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.index',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.create',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@create',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.store',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.show',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@show',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/{payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.edit',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.update',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@update',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'payments.destroy',
        'uses' => 'App\\Http\\Controllers\\TransactionPaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransactionPaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'printers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.index',
        'uses' => 'App\\Http\\Controllers\\PrinterController@index',
        'controller' => 'App\\Http\\Controllers\\PrinterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'printers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.create',
        'uses' => 'App\\Http\\Controllers\\PrinterController@create',
        'controller' => 'App\\Http\\Controllers\\PrinterController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'printers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.store',
        'uses' => 'App\\Http\\Controllers\\PrinterController@store',
        'controller' => 'App\\Http\\Controllers\\PrinterController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'printers/{printer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.show',
        'uses' => 'App\\Http\\Controllers\\PrinterController@show',
        'controller' => 'App\\Http\\Controllers\\PrinterController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'printers/{printer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.edit',
        'uses' => 'App\\Http\\Controllers\\PrinterController@edit',
        'controller' => 'App\\Http\\Controllers\\PrinterController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'printers/{printer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.update',
        'uses' => 'App\\Http\\Controllers\\PrinterController@update',
        'controller' => 'App\\Http\\Controllers\\PrinterController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'printers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'printers/{printer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'printers.destroy',
        'uses' => 'App\\Http\\Controllers\\PrinterController@destroy',
        'controller' => 'App\\Http\\Controllers\\PrinterController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hxL6uSx75YkZktuO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-adjustments/remove-expired-stock/{purchase_line_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@removeExpiredStock',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@removeExpiredStock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hxL6uSx75YkZktuO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K10rX6sXqt23BrsW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-adjustments/get_product_row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@getProductRow',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@getProductRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K10rX6sXqt23BrsW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-adjustments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.index',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@index',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-adjustments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.create',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@create',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-adjustments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.store',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@store',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-adjustments/{stock_adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.show',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@show',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-adjustments/{stock_adjustment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.edit',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@edit',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stock-adjustments/{stock_adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.update',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@update',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-adjustments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stock-adjustments/{stock_adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-adjustments.destroy',
        'uses' => 'App\\Http\\Controllers\\StockAdjustmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\StockAdjustmentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fFd55PrmkptFtkSY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/register-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@getRegisterDetails',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@getRegisterDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fFd55PrmkptFtkSY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dhG3x8xDC2og1Ej8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/close-register/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@getCloseRegister',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@getCloseRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dhG3x8xDC2og1Ej8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Czv2AwaYtPybNuvY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cash-register/close-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@postCloseRegister',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@postCloseRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Czv2AwaYtPybNuvY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.index',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@index',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.create',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@create',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cash-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.store',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@store',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/{cash_register}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.show',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@show',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/{cash_register}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.edit',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@edit',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cash-register/{cash_register}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.update',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@update',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-register.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cash-register/{cash_register}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'cash-register.destroy',
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@destroy',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mV6p68B5M8z44C8J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'import-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportProductsController@index',
        'controller' => 'App\\Http\\Controllers\\ImportProductsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mV6p68B5M8z44C8J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ORCWY3VRI4rAq2U2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import-products/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportProductsController@store',
        'controller' => 'App\\Http\\Controllers\\ImportProductsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ORCWY3VRI4rAq2U2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales-commission-agents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.index',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@index',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales-commission-agents/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.create',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@create',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales-commission-agents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.store',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@store',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales-commission-agents/{sales_commission_agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.show',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@show',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales-commission-agents/{sales_commission_agent}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.edit',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@edit',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sales-commission-agents/{sales_commission_agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.update',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@update',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-commission-agents.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sales-commission-agents/{sales_commission_agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-commission-agents.destroy',
        'uses' => 'App\\Http\\Controllers\\SalesCommissionAgentController@destroy',
        'controller' => 'App\\Http\\Controllers\\SalesCommissionAgentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RqwmrtAILUhN1AiM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-transfers/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StockTransferController@printInvoice',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@printInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RqwmrtAILUhN1AiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gpHPibvZKaKZEr3B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-transfers/update-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StockTransferController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gpHPibvZKaKZEr3B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.index',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@index',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-transfers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.create',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@create',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.store',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@store',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-transfers/{stock_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.show',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@show',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-transfers/{stock_transfer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.edit',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@edit',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stock-transfers/{stock_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.update',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@update',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-transfers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stock-transfers/{stock_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'stock-transfers.destroy',
        'uses' => 'App\\Http\\Controllers\\StockTransferController@destroy',
        'controller' => 'App\\Http\\Controllers\\StockTransferController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kpOpV6J7h28CII0m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'opening-stock/add/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\OpeningStockController@add',
        'controller' => 'App\\Http\\Controllers\\OpeningStockController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kpOpV6J7h28CII0m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::58SM2kriCNXluOq7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'opening-stock/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\OpeningStockController@save',
        'controller' => 'App\\Http\\Controllers\\OpeningStockController@save',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::58SM2kriCNXluOq7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.index',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-group/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.create',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@create',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.store',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@store',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-group/{customer_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.show',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@show',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-group/{customer_group}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.edit',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customer-group/{customer_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.update',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@update',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-group.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer-group/{customer_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'customer-group.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sYu9JCOUtC80wgMT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'import-opening-stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportOpeningStockController@index',
        'controller' => 'App\\Http\\Controllers\\ImportOpeningStockController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sYu9JCOUtC80wgMT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nzOvuhpIar1vqMBb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import-opening-stock/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportOpeningStockController@store',
        'controller' => 'App\\Http\\Controllers\\ImportOpeningStockController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nzOvuhpIar1vqMBb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZjCCfvLWlWNSTMw7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'validate-invoice-to-return/{invoice_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellReturnController@validateInvoiceToReturn',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@validateInvoiceToReturn',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZjCCfvLWlWNSTMw7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.index',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@index',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.create',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@create',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sell-return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.store',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@store',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return/{sell_return}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.show',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@show',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return/{sell_return}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.edit',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sell-return/{sell_return}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.update',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@update',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sell-return/{sell_return}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sell-return.destroy',
        'uses' => 'App\\Http\\Controllers\\SellReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HRiWj97Yo1nDy7j8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return/get-product-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellReturnController@getProductRow',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@getProductRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HRiWj97Yo1nDy7j8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gvQFo5XgvmbX21Ir' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellReturnController@printInvoice',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@printInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gvQFo5XgvmbX21Ir',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Bbphms0f5ellWAx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sell-return/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellReturnController@add',
        'controller' => 'App\\Http\\Controllers\\SellReturnController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0Bbphms0f5ellWAx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hGjSNzWfJmG9nUp1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backup/download/{file_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BackUpController@download',
        'controller' => 'App\\Http\\Controllers\\BackUpController@download',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hGjSNzWfJmG9nUp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ejBPn8kK6kBtQEym' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backup/delete/{file_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BackUpController@delete',
        'controller' => 'App\\Http\\Controllers\\BackUpController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ejBPn8kK6kBtQEym',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backup.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'backup.index',
        'uses' => 'App\\Http\\Controllers\\BackUpController@index',
        'controller' => 'App\\Http\\Controllers\\BackUpController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'backup.create',
        'uses' => 'App\\Http\\Controllers\\BackUpController@create',
        'controller' => 'App\\Http\\Controllers\\BackUpController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backup.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'backup.store',
        'uses' => 'App\\Http\\Controllers\\BackUpController@store',
        'controller' => 'App\\Http\\Controllers\\BackUpController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xJlPya5fB3ahKMgc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'selling-price-group/activate-deactivate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@activateDeactivate',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@activateDeactivate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xJlPya5fB3ahKMgc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5NOhDa0fgBrf9lbz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'export-selling-price-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@export',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@export',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5NOhDa0fgBrf9lbz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4jfJwEuKMfRCMz3q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import-selling-price-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@import',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@import',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4jfJwEuKMfRCMz3q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'selling-price-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.index',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@index',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'selling-price-group/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.create',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@create',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'selling-price-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.store',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@store',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'selling-price-group/{selling_price_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.show',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@show',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'selling-price-group/{selling_price_group}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.edit',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@edit',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'selling-price-group/{selling_price_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.update',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@update',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selling-price-group.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'selling-price-group/{selling_price_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'selling-price-group.destroy',
        'uses' => 'App\\Http\\Controllers\\SellingPriceGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\SellingPriceGroupController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification-templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'notification-templates.index',
        'uses' => 'App\\Http\\Controllers\\NotificationTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\NotificationTemplateController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification-templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notification-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'notification-templates.store',
        'uses' => 'App\\Http\\Controllers\\NotificationTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\NotificationTemplateController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QLy6BYIQM5u4txIu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/get-template/{transaction_id}/{template_for}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@getTemplate',
        'controller' => 'App\\Http\\Controllers\\NotificationController@getTemplate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QLy6BYIQM5u4txIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xwNs77KslCEQvuHQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notification/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@send',
        'controller' => 'App\\Http\\Controllers\\NotificationController@send',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xwNs77KslCEQvuHQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H4MT8H5BCPowuTwD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-return/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@update',
        'controller' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::H4MT8H5BCPowuTwD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FiDVOBPgtSM4nxgE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-return/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FiDVOBPgtSM4nxgE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bkBM4H99phMLliWY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-return/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@save',
        'controller' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@save',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bkBM4H99phMLliWY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uzNJW8yZYWcNcoaG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-return/get_product_row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@getProductRow',
        'controller' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@getProductRow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uzNJW8yZYWcNcoaG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TNtV12p81f3VmzqT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-return/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@create',
        'controller' => 'App\\Http\\Controllers\\CombinedPurchaseReturnController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TNtV12p81f3VmzqT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oiQFFfXMIcnsWksp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-return/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@add',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oiQFFfXMIcnsWksp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-return.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-return.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-return.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-return.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-return/{purchase_return}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-return.show',
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-return.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-return/{purchase_return}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-return.edit',
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-return.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'purchase-return/{purchase_return}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-return.update',
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-return.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'purchase-return/{purchase_return}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-return.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseReturnController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::95KhH0Jn65GRRLBC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount/activate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DiscountController@activate',
        'controller' => 'App\\Http\\Controllers\\DiscountController@activate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::95KhH0Jn65GRRLBC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v4uVtwEOePotR6P8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'discount/mass-deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DiscountController@massDeactivate',
        'controller' => 'App\\Http\\Controllers\\DiscountController@massDeactivate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::v4uVtwEOePotR6P8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.index',
        'uses' => 'App\\Http\\Controllers\\DiscountController@index',
        'controller' => 'App\\Http\\Controllers\\DiscountController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.create',
        'uses' => 'App\\Http\\Controllers\\DiscountController@create',
        'controller' => 'App\\Http\\Controllers\\DiscountController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.store',
        'uses' => 'App\\Http\\Controllers\\DiscountController@store',
        'controller' => 'App\\Http\\Controllers\\DiscountController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.show',
        'uses' => 'App\\Http\\Controllers\\DiscountController@show',
        'controller' => 'App\\Http\\Controllers\\DiscountController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount/{discount}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.edit',
        'uses' => 'App\\Http\\Controllers\\DiscountController@edit',
        'controller' => 'App\\Http\\Controllers\\DiscountController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'discount/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.update',
        'uses' => 'App\\Http\\Controllers\\DiscountController@update',
        'controller' => 'App\\Http\\Controllers\\DiscountController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'discount/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'discount.destroy',
        'uses' => 'App\\Http\\Controllers\\DiscountController@destroy',
        'controller' => 'App\\Http\\Controllers\\DiscountController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.index',
        'uses' => 'App\\Http\\Controllers\\AccountController@index',
        'controller' => 'App\\Http\\Controllers\\AccountController@index',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/account/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.create',
        'uses' => 'App\\Http\\Controllers\\AccountController@create',
        'controller' => 'App\\Http\\Controllers\\AccountController@create',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.store',
        'uses' => 'App\\Http\\Controllers\\AccountController@store',
        'controller' => 'App\\Http\\Controllers\\AccountController@store',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/account/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.show',
        'uses' => 'App\\Http\\Controllers\\AccountController@show',
        'controller' => 'App\\Http\\Controllers\\AccountController@show',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/account/{account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.edit',
        'uses' => 'App\\Http\\Controllers\\AccountController@edit',
        'controller' => 'App\\Http\\Controllers\\AccountController@edit',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'account/account/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.update',
        'uses' => 'App\\Http\\Controllers\\AccountController@update',
        'controller' => 'App\\Http\\Controllers\\AccountController@update',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'account/account/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account.destroy',
        'uses' => 'App\\Http\\Controllers\\AccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\AccountController@destroy',
        'namespace' => NULL,
        'prefix' => 'account/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Eyl6JyX7n7LjyV2W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/fund-transfer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@getFundTransfer',
        'controller' => 'App\\Http\\Controllers\\AccountController@getFundTransfer',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::Eyl6JyX7n7LjyV2W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O5aMznZNsMIh1JNF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/fund-transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@postFundTransfer',
        'controller' => 'App\\Http\\Controllers\\AccountController@postFundTransfer',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::O5aMznZNsMIh1JNF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KXCt8txIW3BAF3kY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@getDeposit',
        'controller' => 'App\\Http\\Controllers\\AccountController@getDeposit',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::KXCt8txIW3BAF3kY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H2UVNrmA1bbBUWhV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@postDeposit',
        'controller' => 'App\\Http\\Controllers\\AccountController@postDeposit',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::H2UVNrmA1bbBUWhV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQp9DkKPT7cqolYf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/close/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@close',
        'controller' => 'App\\Http\\Controllers\\AccountController@close',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::kQp9DkKPT7cqolYf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VRn4JN7N3VSTagPw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/activate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@activate',
        'controller' => 'App\\Http\\Controllers\\AccountController@activate',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::VRn4JN7N3VSTagPw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YwTSowBLUnZ67See' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/delete-account-transaction/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@destroyAccountTransaction',
        'controller' => 'App\\Http\\Controllers\\AccountController@destroyAccountTransaction',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::YwTSowBLUnZ67See',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XKdrGNc6Fethipd6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/edit-account-transaction/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@editAccountTransaction',
        'controller' => 'App\\Http\\Controllers\\AccountController@editAccountTransaction',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::XKdrGNc6Fethipd6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Yoy4kjIHb4tFIpk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/update-account-transaction/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@updateAccountTransaction',
        'controller' => 'App\\Http\\Controllers\\AccountController@updateAccountTransaction',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::9Yoy4kjIHb4tFIpk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HV9gnunUrHzhKhKk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/get-account-balance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@getAccountBalance',
        'controller' => 'App\\Http\\Controllers\\AccountController@getAccountBalance',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::HV9gnunUrHzhKhKk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FC8NeJZfjglDkVVe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/balance-sheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountReportsController@balanceSheet',
        'controller' => 'App\\Http\\Controllers\\AccountReportsController@balanceSheet',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::FC8NeJZfjglDkVVe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8HlDHpLrIHAaVmOw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/trial-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountReportsController@trialBalance',
        'controller' => 'App\\Http\\Controllers\\AccountReportsController@trialBalance',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::8HlDHpLrIHAaVmOw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hss8MTzu7KVkYe5D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/payment-account-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountReportsController@paymentAccountReport',
        'controller' => 'App\\Http\\Controllers\\AccountReportsController@paymentAccountReport',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::Hss8MTzu7KVkYe5D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gVcJLqsB83KT6jC1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/link-account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountReportsController@getLinkAccount',
        'controller' => 'App\\Http\\Controllers\\AccountReportsController@getLinkAccount',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::gVcJLqsB83KT6jC1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yoLCdw3KaJpLLeID' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/link-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountReportsController@postLinkAccount',
        'controller' => 'App\\Http\\Controllers\\AccountReportsController@postLinkAccount',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::yoLCdw3KaJpLLeID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kSadHsjKRAwtPLOA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/cash-flow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@cashFlow',
        'controller' => 'App\\Http\\Controllers\\AccountController@cashFlow',
        'namespace' => NULL,
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::kSadHsjKRAwtPLOA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.index',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@index',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account-types/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.create',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@create',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.store',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@store',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account-types/{account_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.show',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@show',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account-types/{account_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.edit',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'account-types/{account_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.update',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@update',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-types.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'account-types/{account_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'account-types.destroy',
        'uses' => 'App\\Http\\Controllers\\AccountTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\AccountTypeController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.index',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@index',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@index',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/tables/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.create',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@create',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@create',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modules/tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.store',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@store',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@store',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.show',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@show',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@show',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/tables/{table}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.edit',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@edit',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@edit',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'modules/tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.update',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@update',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@update',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'modules/tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'tables.destroy',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\TableController@destroy',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\TableController@destroy',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/modifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.index',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@index',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@index',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/modifiers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.create',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@create',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@create',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modules/modifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.store',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@store',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@store',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/modifiers/{modifier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.show',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@show',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@show',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/modifiers/{modifier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.edit',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@edit',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@edit',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'modules/modifiers/{modifier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.update',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@update',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@update',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifiers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'modules/modifiers/{modifier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'modifiers.destroy',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ModifierSetsController@destroy',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MSOCwQaMCD5y8D4H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/product-modifiers/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@edit',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@edit',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::MSOCwQaMCD5y8D4H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R5LTErw5l9IRJOPJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modules/product-modifiers/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@update',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@update',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::R5LTErw5l9IRJOPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EnuG5WqiyOYrxjMH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/product-modifiers/product-row/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@product_row',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@product_row',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::EnuG5WqiyOYrxjMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f2awHYcpMKhOOk2E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/add-selected-modifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@add_selected_modifiers',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\ProductModifierSetController@add_selected_modifiers',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::f2awHYcpMKhOOk2E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lMFgTkbaYfKH5eJ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/kitchen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@index',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@index',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::lMFgTkbaYfKH5eJ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WrpR3YUkrSx5KynB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/kitchen/mark-as-cooked/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@markAsCooked',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@markAsCooked',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::WrpR3YUkrSx5KynB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZIF3raz1VfENKCWJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modules/refresh-orders-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@refreshOrdersList',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@refreshOrdersList',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::ZIF3raz1VfENKCWJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d4drqgstMIv7ds2F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modules/refresh-line-orders-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@refreshLineOrdersList',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\KitchenController@refreshLineOrdersList',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::d4drqgstMIv7ds2F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uT3gaOO8lDILg7VU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\OrderController@index',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::uT3gaOO8lDILg7VU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVUesojTJpx2m9cR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/orders/mark-as-served/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\OrderController@markAsServed',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\OrderController@markAsServed',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::dVUesojTJpx2m9cR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::opZV9jNt5LLtNBIj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/data/get-pos-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\DataController@getPosDetails',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\DataController@getPosDetails',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::opZV9jNt5LLtNBIj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T1FTIzrCHtPaJyZi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/orders/mark-line-order-as-served/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\OrderController@markLineOrderAsServed',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\OrderController@markLineOrderAsServed',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::T1FTIzrCHtPaJyZi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::83ueQEVZ7afZv9nF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modules/print-line-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\OrderController@printLineOrder',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\OrderController@printLineOrder',
        'namespace' => NULL,
        'prefix' => '/modules',
        'where' => 
        array (
        ),
        'as' => 'generated::83ueQEVZ7afZv9nF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sXffgjds812a3UL9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bookings/get-todays-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@getTodaysBookings',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@getTodaysBookings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sXffgjds812a3UL9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.index',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@index',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bookings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.create',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@create',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.store',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@store',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bookings/{booking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.show',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@show',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bookings/{booking}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.edit',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@edit',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'bookings/{booking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.update',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@update',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'bookings/{booking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'bookings.destroy',
        'uses' => 'App\\Http\\Controllers\\Restaurant\\BookingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Restaurant\\BookingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'types-of-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.index',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@index',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'types-of-service/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.create',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@create',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'types-of-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.store',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@store',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'types-of-service/{types_of_service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.show',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@show',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'types-of-service/{types_of_service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.edit',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'types-of-service/{types_of_service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.update',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@update',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types-of-service.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'types-of-service/{types_of_service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'types-of-service.destroy',
        'uses' => 'App\\Http\\Controllers\\TypesOfServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\TypesOfServiceController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4n71nSUe70XNJy9s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/edit-shipping/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@editShipping',
        'controller' => 'App\\Http\\Controllers\\SellController@editShipping',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4n71nSUe70XNJy9s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::teOeXwJS2lRPIQkJ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'sells/update-shipping/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@updateShipping',
        'controller' => 'App\\Http\\Controllers\\SellController@updateShipping',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::teOeXwJS2lRPIQkJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2rCbVNhU5zCrvnpF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@shipments',
        'controller' => 'App\\Http\\Controllers\\SellController@shipments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2rCbVNhU5zCrvnpF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9wKMWD0Kg79RNPC5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload-module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\ModulesController@uploadModule',
        'controller' => 'App\\Http\\Controllers\\Install\\ModulesController@uploadModule',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9wKMWD0Kg79RNPC5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OH8u2UUjiGM4zzEq' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'manage-modules/destroy/{module_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\ModulesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Install\\ModulesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OH8u2UUjiGM4zzEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manage-modules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manage-modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'manage-modules.index',
        'uses' => 'App\\Http\\Controllers\\Install\\ModulesController@index',
        'controller' => 'App\\Http\\Controllers\\Install\\ModulesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manage-modules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'manage-modules/{manage_module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'manage-modules.update',
        'uses' => 'App\\Http\\Controllers\\Install\\ModulesController@update',
        'controller' => 'App\\Http\\Controllers\\Install\\ModulesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warranties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.index',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@index',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warranties/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.create',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@create',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'warranties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.store',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@store',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warranties/{warranty}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.show',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@show',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warranties/{warranty}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.edit',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@edit',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'warranties/{warranty}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.update',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@update',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranties.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'warranties/{warranty}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'warranties.destroy',
        'uses' => 'App\\Http\\Controllers\\WarrantyController@destroy',
        'controller' => 'App\\Http\\Controllers\\WarrantyController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard-configurator.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard-configurator/{dashboard_configurator}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'dashboard-configurator.edit',
        'uses' => 'App\\Http\\Controllers\\DashboardConfiguratorController@edit',
        'controller' => 'App\\Http\\Controllers\\DashboardConfiguratorController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard-configurator.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard-configurator/{dashboard_configurator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'dashboard-configurator.update',
        'uses' => 'App\\Http\\Controllers\\DashboardConfiguratorController@update',
        'controller' => 'App\\Http\\Controllers\\DashboardConfiguratorController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wfFhwTOzc8OoC8pL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-media/{model_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@viewMedia',
        'controller' => 'App\\Http\\Controllers\\SellController@viewMedia',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wfFhwTOzc8OoC8pL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JuQnxnAYC7f923Xp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-document-note-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@getDocAndNoteIndexPage',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@getDocAndNoteIndexPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JuQnxnAYC7f923Xp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JbeOGbD615asv3Q6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post-document-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@postMedia',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@postMedia',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JbeOGbD615asv3Q6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'note-documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.index',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@index',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'note-documents/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.create',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@create',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'note-documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.store',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@store',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'note-documents/{note_document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.show',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@show',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'note-documents/{note_document}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.edit',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@edit',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'note-documents/{note_document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.update',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@update',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'note-documents.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'note-documents/{note_document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'note-documents.destroy',
        'uses' => 'App\\Http\\Controllers\\DocumentAndNoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\DocumentAndNoteController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-order/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.create',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@create',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-order/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.show',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchase-order/{purchase_order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.edit',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'purchase-order/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.update',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-order.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'purchase-order/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'purchase-order.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UQnWjoIfwFCZMbUL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-purchase-orders/{contact_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@getPurchaseOrders',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@getPurchaseOrders',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UQnWjoIfwFCZMbUL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h174WnU1nKrpeZGH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-purchase-order-lines/{purchase_order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@getPurchaseOrderLines',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@getPurchaseOrderLines',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::h174WnU1nKrpeZGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rBGmPtKhX0UZlBF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-purchase-orders/{id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@getEditPurchaseOrderStatus',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@getEditPurchaseOrderStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4rBGmPtKhX0UZlBF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SL8iKl7CMtIfymLB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-purchase-orders/{id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@postEditPurchaseOrderStatus',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@postEditPurchaseOrderStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SL8iKl7CMtIfymLB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales-order.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'as' => 'sales-order.index',
        'uses' => 'App\\Http\\Controllers\\SalesOrderController@index',
        'controller' => 'App\\Http\\Controllers\\SalesOrderController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mZSsoX307lcPj6JA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-sales-orders/{customer_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesOrderController@getSalesOrders',
        'controller' => 'App\\Http\\Controllers\\SalesOrderController@getSalesOrders',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mZSsoX307lcPj6JA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IgPXzu5jKSXAdjRt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-sales-order-lines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@getSalesOrderLines',
        'controller' => 'App\\Http\\Controllers\\SellPosController@getSalesOrderLines',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IgPXzu5jKSXAdjRt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hv4XJYzp63ZCnswx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-sales-orders/{id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesOrderController@getEditSalesOrderStatus',
        'controller' => 'App\\Http\\Controllers\\SalesOrderController@getEditSalesOrderStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hv4XJYzp63ZCnswx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xez5eUDYcDp3vORv' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-sales-orders/{id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesOrderController@postEditSalesOrderStatus',
        'controller' => 'App\\Http\\Controllers\\SalesOrderController@postEditSalesOrderStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Xez5eUDYcDp3vORv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fo0REpA22QEdyWjp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/activity-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@activityLog',
        'controller' => 'App\\Http\\Controllers\\ReportController@activityLog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Fo0REpA22QEdyWjp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::339ixDsnGxFw7L26' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-location/{latlng}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
          6 => 'AdminSidebarMenu',
          7 => 'CheckUserLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getUserLocation',
        'controller' => 'App\\Http\\Controllers\\HomeController@getUserLocation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::339ixDsnGxFw7L26',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0lLwFHCWJ7hugbRl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'load-more-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@loadMoreNotifications',
        'controller' => 'App\\Http\\Controllers\\HomeController@loadMoreNotifications',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0lLwFHCWJ7hugbRl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1IvkHfLDsbqEJvr2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-total-unread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getTotalUnreadNotifications',
        'controller' => 'App\\Http\\Controllers\\HomeController@getTotalUnreadNotifications',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1IvkHfLDsbqEJvr2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4vpDroYwCnaoxJiH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@printInvoice',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@printInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4vpDroYwCnaoxJiH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nj8CDlBJp9SQmYSy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nj8CDlBJp9SQmYSy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchaseOrder.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download-purchase-order/{id}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@downloadPdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchaseOrder.downloadPdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PNNxb1gEuPQPWSID' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\SellController@show',
        'controller' => 'App\\Http\\Controllers\\SellController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PNNxb1gEuPQPWSID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell.printInvoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/{transaction_id}/print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@printInvoice',
        'controller' => 'App\\Http\\Controllers\\SellPosController@printInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sell.printInvoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download-sells/{transaction_id}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\SellPosController@downloadPdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sell.downloadPdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotation.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download-quotation/{id}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@downloadQuotationPdf',
        'controller' => 'App\\Http\\Controllers\\SellPosController@downloadQuotationPdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotation.downloadPdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'packing.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download-packing-list/{id}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@downloadPackingListPdf',
        'controller' => 'App\\Http\\Controllers\\SellPosController@downloadPackingListPdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'packing.downloadPdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQbza4fHgUbZNOaB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sells/invoice-url/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\SellPosController@showInvoiceUrl',
        'controller' => 'App\\Http\\Controllers\\SellPosController@showInvoiceUrl',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kQbza4fHgUbZNOaB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcWgO5HhYOx0GWYC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'show-notification/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setData',
          2 => 'auth',
          3 => 'SetSessionData',
          4 => 'language',
          5 => 'timezone',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showNotification',
        'controller' => 'App\\Http\\Controllers\\HomeController@showNotification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mcWgO5HhYOx0GWYC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
