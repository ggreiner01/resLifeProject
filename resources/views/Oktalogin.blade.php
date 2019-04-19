<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Latest CDN production Javascript and CSS: 2.14.0 -->
        <script
          src="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.14.0/js/okta-sign-in.min.js"
          type="text/javascript"></script>
        <link
          href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.14.0/css/okta-sign-in.min.css"
          type="text/css"
          rel="stylesheet"/>

        <!-- Theme file: Customize or replace this file if you want to override our default styles -->
        <link
          href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.14.0/css/okta-theme.css"
          type="text/css"
          rel="stylesheet"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #00467F;
                color: #00467F;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
      <div class="container">
        <h1 class="text-center">Login</h1>
        <div id="messageBox" class="jumbotron">
          <!--You are not logged in-->
        </div>
      </div>
      <div id="okta-login-container"></div>
      <script type="text/javascript">
        var oktaSignIn = new OktaSignIn({
          baseUrl: "https://dev-494832.okta.com",
          clientId: "0oabvr7knuGqx01rt356",
          authParams: {
            issuer: "https://dev-494832.okta.com/oauth2/default",
            responseType: ['token', 'id_token'],
            display: 'page'
          }
        });
        if (oktaSignIn.token.hasTokensInUrl()) {
          oktaSignIn.token.parseTokensFromUrl(
            function success(res) {
              // The tokens are returned in the order requested by `responseType` above
              var accessToken = res[0];
              var idToken = res[1]

              // Say hello to the person who just signed in:
              console.log('Hello, ' + idToken.claims.email);

              // Save the tokens for later use, e.g. if the page gets refreshed:
              oktaSignIn.tokenManager.add('accessToken', accessToken);
              oktaSignIn.tokenManager.add('idToken', idToken);

              // Remove the tokens from the window location hash
              window.location.hash='';
              document.getElementById("messageBox").innerHTML = "hello, " + idToken.claims.email + "! You are logged in! :)";
            },
            function error(err) {
              // handle errors as needed
              console.error(err);
            }
          );
        } else {
          oktaSignIn.session.get(function (res) {
            // Session exists, show logged in state.
            if (res.status === 'ACTIVE') {
              console.log('Welcome back, ' + res.login);
              document.getElementById("messageBox").innerHTML = "Hello, " + res.login + "! You are *still* logged in";
              return;
            }
            // No session, show the login form
            oktaSignIn.renderEl(
              { el: '#okta-login-container' },
              function success(res) {
                // Nothing to do in this case, the widget will automatically redirect
                // the user to Okta for authentication, then back to this page if successful
              },
              function error(err) {
                // handle errors as needed
                console.error(err);
              }
            );
          });
        }
      </script>
    </body>
</html>
