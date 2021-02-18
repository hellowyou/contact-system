<table class="table">
    <thead>
        <th>NAME</th>
        <th>COMPANY</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th></th>
    </thead>

    <tbody>
        @each('contacts.partials.list-item', $contacts, 'contact', 'contacts.partials.list-empty')
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {!! $contacts->links() !!}
</div>

@push('scripts')
<script>
    (function ($) {
        $(document).ready(function () {
            $('.delete').click(function (e) {
                e.preventDefault();
                var $el = $(e);

                if (confirm('Confirm contact deletion')) {
                    $el.submit()
                }
            })
        });
    })(jQuery);
</script>
@endpush
