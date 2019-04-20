@extends ('layout')

@section('header')
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
    @endsection
