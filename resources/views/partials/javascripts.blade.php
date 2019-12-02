<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('js') }}/bootstrap.min.js"></script>
<script src="{{ url('js') }}/main.js"></script>

<script>
    window._token = '{{ csrf_token() }}';
</script>

@yield('javascript')