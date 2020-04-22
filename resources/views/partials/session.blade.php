@if (session('status'))
    {{-- {{ session('status') }} --}}

    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{ session('status') }}  <a class="alert-link" href="#">Alert Link</a>.
    </div>
        {{-- <div class="toast toast-bootstrap show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="fa fa-newspaper-o"> </i>
                <strong class="mr-auto m-l-sm">Notification</strong>
                <small>2 seconds ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, you can push notifications to your visitors with this toast feature.
            </div>
        </div>
    <script>
         let toast = $('.toast');

setTimeout(function() {
    toast.toast({
        delay: 5000,
        animation: true
    });
    toast.toast('show');

}, 2200);
        alert('hola si sr... listo');
        </script> --}}



         
@endif