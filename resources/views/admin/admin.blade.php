
 
   <head>
    @include('admin.layouts.header')
     @yield('css')
   </head>
   <body >

   @yield('contant')
    {{-- navbar --}}
    @include('admin.layouts.navbar')


     <!-- container-scroller -->
     

    {{-- js_files --}}
   @include('admin.layouts.footer_script')
   </body>
 </html>