<script type="text/javascript">
    var iam_data = @json($iam_data);

    @if ($enabled)
        iom.c(iam_data, {{$method}});
    @endif
</script>
