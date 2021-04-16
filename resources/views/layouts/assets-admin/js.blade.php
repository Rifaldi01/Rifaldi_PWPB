<script src="{{URL::to('assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::to('assets/assets/js/loader.js')}}"></script>
    <script src="{{URL::to('assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::to('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::to('assets/assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{URL::to('assets/assets/js/custom.js')}}"></script>

    <script src="{{URL::to('assets/plugins/table/datatable/datatables.js')}}"></script>
    <script>
        $('#zero-config').DataTable({
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });
    </script>

<script>
    $('#ecommerce-product-list').DataTable({
        "lengthMenu": [ 5, 10, 20, 50, 100 ],
        "language": { "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
            "info": "Showing page _PAGE_ of _PAGES_"
        },
        drawCallback: function( settings ) { $('[data-toggle="tooltip"]').tooltip(); }
    });
</script>
