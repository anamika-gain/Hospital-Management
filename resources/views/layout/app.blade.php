<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>


    <link type="text/css" href="{{asset('/')}}assets/css/themes/default/vendor-fullcalendar.css" rel="stylesheet">
    <link type="text/css" href="{{asset('/')}}assets/css/themes/default/vendor-weathericons.css" rel="stylesheet">
    <link type="text/css" href="{{asset('/')}}assets/css/themes/default/vendor-bootstrap-datepicker.css" rel="stylesheet">
    <!-- Simplebar -->
    <link type="text/css" href="{{asset('/')}}assets/vendor/simplebar.css" rel="stylesheet">
    <!-- App CSS -->
    <link type="text/css" href="{{asset('/')}}assets/css/themes/default/app.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link type="text/css" href="{{asset('/')}}assets/css/themes/default/buttons.dataTable.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet"/>
<style>
  
</style>

    @yield('styles')

</head>

<body>
    <div class="d-flex flex-column position-relative h-100">

    @include('partial.topbar')

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
                <!-- CONTENT BODY -->

             @yield('content')

                    
            </div>
            @include('partial.sidebar')
          
    </div>

    <!-- jQuery -->
    <script src="{{asset('/')}}assets/vendor/jquery.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/popper.js"></script>
    <script src="{{asset('/')}}assets/vendor/bootstrap.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/simplebar.js"></script>
    <script src="{{asset('/')}}assets/vendor/moment.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/dateformat.js"></script>
    <script src="{{asset('/')}}assets/vendor/bootstrap-datepicker.min.js"></script>
    <script>
        window.theme = "default";
    </script>
    <script src="{{asset('/')}}assets/js/color_variables.js"></script>
    <script src="{{asset('/')}}assets/js/app.js"></script>


    <script src="{{asset('/')}}assets/vendor/dom-factory.js"></script>
    <!-- DOM Factory -->
    <script src="{{asset('/')}}assets/vendor/material-design-kit.js"></script>
    <!-- MDK -->
    <script src="{{asset('/')}}assets/vendor/fullcalendar.min.js"></script>
    <script src="{{asset('/')}}assets/js/calendars.js"></script>
    <script src="{{asset('/')}}assets/js/datepicker.js"></script>



    <script>
        (function() {
            'use strict';

            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()

            // Connect button(s) to drawer(s)
            var sidebarToggle = Array.prototype.slice.call(document.querySelectorAll('[data-toggle="sidebar"]'))

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        drawer.mdkDrawer.toggle()
                    }
                })
            })

            //////////////////////////////////////////
            // BREAK OUT OF ENVATO LIVE DEMO IFRAME //
            //////////////////////////////////////////

            window.top.location.hostname !== window.location.hostname && (window.top.location = window.location)

        })();
    </script>


    <script src="{{asset('/')}}assets/vendor/fullcalendar.min.js"></script>
    <script src="{{asset('/')}}assets/js/calendars.js"></script>
   


    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>

    
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages.{{ app()->getLocale() }}
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>


    @yield('scripts')

    

</body>

</html>