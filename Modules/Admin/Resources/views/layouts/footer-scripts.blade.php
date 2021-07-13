
<script src="{{ config('admin.libraries_path') }}/jquery/dist/jquery.min.js"></script>

<script src="{{ config('admin.libraries_path') }}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ config('admin.libraries_path') }}/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{ config('admin.libraries_path') }}/sparkline/sparkline.js"></script>

<script src="{{ config('admin.scripts_path') }}/waves.js"></script>

<script src="{{ config('admin.scripts_path') }}/sidebarmenu.js"></script>
@if(in_array(Route::current()->getName(), ['admin.pages.main', 'admin.content-groups.main']))
    <script src="{{ config('admin.libraries_path') }}/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{ config('admin.libraries_path') }}/multicheck/jquery.multicheck.js"></script>
    <script src="{{ config('admin.libraries_path') }}/DataTables/datatables.min.js"></script>
    <script>
        $('#zero_config').DataTable();
    </script>
@endif
@if(in_array(Route::current()->getName(),['admin.content-groups.create']))
    <script src="{{ config('admin.libraries_path') }}/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ config('admin.libraries_path') }}/select2/dist/js/select2.min.js"></script>
    <script>
        $(".select2").select2();
    </script>
@endif
<script src="{{ config('admin.scripts_path') }}/custom.js"></script>
