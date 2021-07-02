
<script src="{{ config('admin.libraries_path') }}/jquery/dist/jquery.min.js"></script>

<script src="{{ config('admin.libraries_path') }}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ config('admin.libraries_path') }}/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{ config('admin.libraries_path') }}/sparkline/sparkline.js"></script>

<script src="{{ config('admin.scripts_path') }}/waves.js"></script>

<script src="{{ config('admin.scripts_path') }}/sidebarmenu.js"></script>
@if(Route::current()->getName() === 'admin.pages.main')
    <script src="{{ config('admin.libraries_path') }}/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{ config('admin.libraries_path') }}/multicheck/jquery.multicheck.js"></script>
    <script src="{{ config('admin.libraries_path') }}/DataTables/datatables.min.js"></script>
    <script>
        $('#zero_config').DataTable();
    </script>
@endif
<script src="{{ config('admin.scripts_path') }}/custom.js"></script>
