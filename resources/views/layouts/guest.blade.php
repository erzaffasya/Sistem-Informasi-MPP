<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    @include('landingpage.partials.head')
</head>

<body>

  <!-- navigation -->
  <header class="navigation bg-tertiary">
    @include('landingpage.partials.navbar')
  </header>
  <!-- /navigation -->
  {{$slot}}

  <footer class="section-sm bg-tertiary">
    @include('landingpage.partials.footer')
  </footer>


  <!-- # JS Plugins -->
  @include('landingpage.partials.scripts')

</body>

</html>